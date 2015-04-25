<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 11:56
 */

if (!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['lang'])){
    $_SESSION['lang']='ger';
}