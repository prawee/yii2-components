<?php
/*
 * 2014-07-18
 * @auth Prawee Wongsa <konkeanweb@gmail.com>
 */
namespace prawee\components;

class Controller extends \yii\base\Controller{
    /*
     * solve error
     * Bad Request (#400)
     * Unable to verify your data submission. 
     */
    public $enableCsrfValidation=false;
}
