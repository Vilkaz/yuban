<?php

/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 11.01.2015
 * Time: 11:15
 */
class Kodas
{

    //region code
    public static function uzkoduok($string)
    {
        echo 'we got ' . $string . ' lets do this !';
        return self::padarykSarasaIsStringo($string);
    }

    /** @par String $string */
    private function padarykSarasaIsStringo($string)
    {
        //$list = array();
        $list = self::utf8_to_unicode($string);
       // print_r($list);
       // echo '<br>dekodiert ergiebt es: ';
      //  print_r(self::unicode_to_entities($list));
        return self::padarikHexaIsUTFo($list);
    }

    private function padarikHexaIsUTFo($Sarasas)
    {
        $hexaSarasas = array();
        $faktor =  sizeof($Sarasas)+pow(sizeof($Sarasas) - 1,3);
      //echo'<br> faktor = '.$faktor;
        foreach ($Sarasas as $kodas) {
          //  echo '<br> is' . $kodas . ' padarom su fktoriu' . dechex($kodas * $faktor);
            $hexaSarasas[] = dechex($kodas * $faktor);
        }
       // print_r($hexaSarasas);
        return self:: hexToBinary($hexaSarasas);
    }

    private function hexToBinary($sarasas)
    {
        $binary = array();
        foreach ($sarasas as $hexas) {
          //  echo '<br> is' . $hexas . ' padarim ' . base_convert($hexas, 16, 2);
            $binary[] = base_convert($hexas, 16, 2);
        }
        echo'das wird gespeichert';
        print_r($binary);
        echo'<br> dekodierung:';
        print_r(self:: binaryToHex($binary));
        return $binary;
    }


    private function codeBinaryToString($binary){
        $startOfLegend=rand(1,9);
        $zero = base_convert(rand(0,15), 10, 16);
        $one = base_convert(rand(0,15), 10, 16);
        while($one==$zero){
            $one = base_convert(rand(0,15), 10, 16);
        }

    }

//endregion endof code


//region decoding
    private function binaryToHex($list)
    {
        $hexas = array();

        foreach ($list as $bin) {
           // echo '<br>is ' . $bin . ' padarom' . base_convert($bin, 2, 16);
            $hexas[] = base_convert($bin, 2, 16);
        }
        $faktor =  (sizeof($list))+ pow((sizeof($list)-1),3);
       // echo'<br> faktorius yra = '.$faktor;
        return self::hexToDecimal($hexas, $faktor);

    }

    private  function hexToDecimal($list, $faktor){
        $decis=array();
        foreach ($list as $hex) {
            $decis[] =(base_convert($hex, 16, 10)/$faktor);
           // echo'<br> is '.$hex.' darom'.  (base_convert($hex, 16, 10)/$faktor);
        }
      //  print_r($decis);

        $kodeword = self::unicode_to_entities($decis);

        echo 'das gesuhte wort ist = '.$kodeword;
        //return$decis;


    }



    //endregion


    public static function codeOneBinaryIntoString($bin)
    {
    }

    private function utf8_to_unicode($str)
    {
        $unicode = array();
        $values = array();
        $lookingFor = 1;
        for ($i = 0; $i < strlen($str); $i++) {
            $thisValue = ord($str[$i]);
            if ($thisValue < 128) $unicode[] = $thisValue;
            else {
                if (count($values) == 0) $lookingFor = ($thisValue < 224) ? 2 : 3;
                $values[] = $thisValue;
                if (count($values) == $lookingFor) {
                    $number = ($lookingFor == 3) ?
                        (($values[0] % 16) * 4096) + (($values[1] % 64) * 64) + ($values[2] % 64) :
                        (($values[0] % 32) * 64) + ($values[1] % 64);
                    $unicode[] = $number;
                    $values = array();
                    $lookingFor = 1;
                }
            }
        }
        return $unicode;
    }

    private static function unicode_to_entities($unicode)
    {

        $entities = '';
        foreach ($unicode as $value) $entities .= '&#' . $value . ';';
        return $entities;

    } // unicode_to_entities


}


