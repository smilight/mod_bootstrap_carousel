<?php
/**
 * @copyright	Copyright (C) 2012 Fabian Manzano. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JLoader::register('ContentHelperRoute', JPATH_SITE.'/components/com_content/helpers/route.php');

$document = JFactory::getDocument();
$modulePath = JURI::base() . 'modules/mod_bootstrap_carousel/';

$jquery = $params->get('jquery');
$bootstrap = $params->get('bootstrap');

$pager = $params->get('pager');

if ($jquery == 'stable') {
    $document->addScript($modulePath . 'js/jquery/jquery-1.11.0.min.js', 'text/javascript', true);
} else if ($jquery == 'last') {
    $document->addScript($modulePath . 'js/jquery/jquery-2.1.0.min.js', 'text/javascript', true);
    $document->addScript($modulePath . 'js/jquery/jquery-migrate-1.2.1.min.js', 'text/javascript', true);
}

if ($bootstrap == 'no') {
    $document->addScript($modulePath . 'js/bootstrap.min.js', 'text/javascript', true);

    $document->addStyleSheet($modulePath . 'css/bootstrap.css');
    $document->addStyleSheet($modulePath . 'css/bootstrap-theme.css');

}

$document->addScriptDeclaration('$(".carousel1").carousel();', 'text/javascript', true);

$imgurl[0] = array(url=> htmlspecialchars($params->get('img1')), desc=>$params->get('descr1'), title=>$params->get('title1'), btn=>$params->get('btn1'),btnl=>$params->get('btn1l') );
$imgurl[1] = array(url=> htmlspecialchars($params->get('img2')), desc=>$params->get('descr2'), title=>$params->get('title2'), btn=>$params->get('btn2'),btnl=>$params->get('btn2l') );
$imgurl[2] = array(url=> htmlspecialchars($params->get('img3')), desc=>$params->get('descr3'), title=>$params->get('title3'), btn=>$params->get('btn3'),btnl=>$params->get('btn3l') );
$imgurl[3] = array(url=> htmlspecialchars($params->get('img4')), desc=>$params->get('descr4'), title=>$params->get('title4'), btn=>$params->get('btn4'),btnl=>$params->get('btn4l') );
$imgurl[4] = array(url=> htmlspecialchars($params->get('img5')), desc=>$params->get('descr5'), title=>$params->get('title5'), btn=>$params->get('btn5'),btnl=>$params->get('btn5l') );
$imgurl[5] = array(url=> htmlspecialchars($params->get('img6')), desc=>$params->get('descr6'), title=>$params->get('title6'), btn=>$params->get('btn6'),btnl=>$params->get('btn6l') );
