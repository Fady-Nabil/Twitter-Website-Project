<?php

/**
 * Created by PhpStorm.
 * User: fady
 * Date: 5/17/2020
 * Time: 10:26 PM
 */
class Follow extends User
{
    protected  $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
}