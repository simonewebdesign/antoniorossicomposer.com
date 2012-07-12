<?php

/***** The Custom Boot *****/

$lang = isset($get[0]) ? $get[0] : 'it';

$css.= str_replace(':ph', 'modules/navbar', STYLESHEET);
$css.= str_replace(':ph', 'modules/contact-form', STYLESHEET);