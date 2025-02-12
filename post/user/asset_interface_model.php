<?php
defined('FROM_POST_HANDLER') || die("Direct file access is not allowed");

$name = sanitizeInput($_POST['name']);
$description = sanitizeInput($_POST['description']);
$type = sanitizeInput($_POST['type']);
$mac = sanitizeInput($_POST['mac']);
$ip = sanitizeInput($_POST['ip']);
if ($_POST['dhcp'] == 1){
    $ip = 'DHCP';
}
$ipv6 = sanitizeInput($_POST['ipv6']);
$network = intval($_POST['network']);
$notes = sanitizeInput($_POST['notes']);
$connected_to = intval($_POST['connected_to']);
