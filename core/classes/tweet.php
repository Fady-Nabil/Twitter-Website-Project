<?php

/**
 * Created by PhpStorm.
 * User: fady
 * Date: 5/17/2020
 * Time: 10:27 PM
 */
class Tweet extends User
{
    protected  $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
}