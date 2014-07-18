<?php
/*
 * 2014-07-18
 * konkeanweb@gmail.com
 */
namespace prawee\component;

class Controller extends \yii\base\Controller{
    /*
     * solve error
     * Bad Request (#400)
     * Unable to verify your data submission. 
     */
    public $enableCsrfValidation=false;
}
