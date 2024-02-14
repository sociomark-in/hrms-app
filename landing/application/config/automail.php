<?php

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp-relay.brevo.com';
$config['smtp_user'] = 'nh.socialconnect@newhorizonsms.org';
$config['smtp_pass'] = 'K8Xb5mycG7LQ4jR0';
$config['mailtype'] = 'html';
$config['smtp_crypto'] = 'tls';
$config['smtp_port'] = 587;
$config['charset'] = 'iso-8859-1';

$this->email->initialize($config);
$this->email->set_newline("\r\n");
