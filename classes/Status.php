<?php
namespace classes;
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:09
 */

class Status {
    public static function ok($type, $msg){
            return ['type'=>$type,'status'=>'ok', 'msg'=>$msg];
        }

    public static function exception($type, $msg){
        return ['type'=>$type,'status'=>'exception', 'msg'=>$msg];
    }
} 