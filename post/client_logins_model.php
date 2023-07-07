<?php
$client_id = intval($_POST['client_id']);
$name = sanitizeInput($_POST['name']);
$description = sanitizeInput($_POST['description']);
$uri = preg_replace("(^https?://)", "", sanitizeInput($_POST['uri']));
$username = encryptLoginEntry(trim($_POST['username']));
$password = encryptLoginEntry(trim($_POST['password']));
$otp_secret = sanitizeInput($_POST['otp_secret']);
$note = sanitizeInput($_POST['note']);
$important = intval($_POST['important']);
$contact_id = intval($_POST['contact']);
$vendor_id = intval($_POST['vendor']);
$asset_id = intval($_POST['asset']);
$software_id = intval($_POST['software']);