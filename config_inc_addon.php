<?php

$g_webmaster_email          = "kartik.b@plumhq.com";
$g_from_email          =  "bugtracker@plumhq.com";
$g_return_path_email          = "kartik.b@plumhq.com";
$g_path="https://bugtracker.plumhq.com/";
$g_reauthentication_expiry = 60 * 60;

$g_custom_headers = array( 'Content-Security-Policy:' );

$g_phpMailer_method = PHPMAILER_METHOD_SMTP;
$g_smtp_port= 587;
$g_smtp_host = "smtp.postmarkapp.com";
$g_smtp_username = "10ddb2c8-545a-4f69-b44b-f4680248b061";
$g_smtp_password = "10ddb2c8-545a-4f69-b44b-f4680248b061";
$g_window_title = "PlumHQ Bug Tracker";
$g_limit_email_domains=array("plumhq.com");
$g_bug_report_page_fields = array(
    'resolution',
    'date_submitted',
    'last_updated',
    'version',
    'fixed_in_version',
    'target_version',
    'summary',
    'due_date',
    'description',
    'additional_information',
    'attachment_count',
    'bugnotes_count',
    'edit',
    'notes',
    'overdue',
    'attachments'
);
$g_allow_no_category = ON;

