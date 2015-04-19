<?php
namespace classes;
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:09
 */

class Status {

    public static function ok($msg){
            return ['status'=>'ok', 'msg'=>$msg];
        }

    public static function exception($msg){
        return ['status'=>'exception', 'msg'=>$msg];
    }
} 