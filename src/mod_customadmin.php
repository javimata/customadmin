<?php
/**
 * @package Custom Admin Dashboard
 * @author Javi Mata http://www.javimata.com
 * @copyright Copyright (c) 2010 - 2018 Javi Mata
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
defined ('_JEXEC') or die ('restricted aceess');

$mod_name = 'mod_customadmin';
require_once __DIR__ . '/helper.php';
$items = modCustomadmin::getItems($params);

require JModuleHelper::getLayoutPath($mod_name,$params->get('layout','default'));