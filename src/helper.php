<?php
/**
 * Helper class for custom admin! module
 * 
 * @subpackage Modules
 * @link http://www.javimata.com
 * @license  GNU/GPL, see LICENSE.php
 * 
 */
class modCustomadmin
{

    public static function getItems( &$params )
    {

        $icons = $params->get("icons");

        return $icons;

    }

}