<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Process/checkRedirect.php';

$login = new Login();

$info = $login->getUserByLoginID($_SESSION['LoginId']);
if (isset($_SESSION, $_SESSION['LoginId']) && !empty($_SESSION['LoginId'])) {
    if ($info[0]->LoginId != "") {
        redirect(CMS_URL . '/backend.php', 'flash_success', 'Welcome to Controll Panel!');
    } else {
        redirect(CMS_URL . '/', 'flash_error', 'You are not authorized to access this page.');
    }
} else {
    redirect(CMS_URL . '/', 'flash_error', 'You are not allowed to access this page.');
}
