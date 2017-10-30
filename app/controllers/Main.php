<?php
namespace App\Controllers;

use Framework\Response;

/**
* 
*/
class Main
{
    public function index()
    {
        echo 'En el index';
    }

    public function smarty()
    {
        Response::render('welcom.tpl');
    }
}