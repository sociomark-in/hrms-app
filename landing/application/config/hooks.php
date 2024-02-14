<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

$hook['post_controller_constructor'][] = array(
	'class'    => 'BackgroundCheck',
	'filename' => 'BackgroundCheck.php',
	'filepath' => 'hooks',
	'function' => 'check_if_membership_expired_after_controller',
);
