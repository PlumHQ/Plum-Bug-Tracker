<?php

$g_webmaster_email          = "kartik.b@plumhq.com";
$g_from_email          =  "bugtracker@plumhq.com";
$g_return_path_email          = "kartik.b@plumhq.com";
$g_path="https://bugtracker.plumhq.com/";

$g_reauthentication_expiry = 60 * 60;

$g_custom_headers = array( 'Content-Security-Policy:' );
$g_bug_report_page_fields = array('category_id','view_state','reproducibility','summary','description','additional_info',
'attachments','due_date');

$g_phpMailer_method = PHPMAILER_METHOD_SMTP;
$g_smtp_port= 587;
$g_smtp_host = "smtp.postmarkapp.com";
$g_smtp_username = "serverapikey";
$g_smtp_password = "serverapikey";
$g_window_title = "PlumHQ Bug Tracker";
