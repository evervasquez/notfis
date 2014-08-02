<?php
/**
 * Created by PhpStorm.
 * User: ever
 * Date: 20/06/14
 * Time: 12:33 PM
 */

Validator::extend('alpha_spaces', function($attribute, $value, $parameters)
{
    return preg_match('/^([-a-z0-9_-ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöùúûüýøþÿÐdŒ-\.\,\s])+$/i', $value);

});