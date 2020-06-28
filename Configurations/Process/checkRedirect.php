<?php
$login = new Login();
if (!isset($_SESSION, $_SESSION['Token']) || empty($_SESSION) || empty($_SESSION['Token'])) {
    if (isset($_COOKIE, $_COOKIE['_ua']) && !empty($_COOKIE['_ua'])) {
        $Token  = $_COOKIE['_ua'];
        $user_info = $login->getUserByToken($Token);
        if (!$user_info) {
            setcookie('_ua', '', time() - 60, '/');
            redirect(CMS_URL, 'flash_error', 'You are not allowed to access this page please login first!');
            redirect(CMS_URL . '/', 'flash_error', 'Please login first');
        }
        $_SESSION['LoginId'] = $user_info[0]->LoginId;
        $_SESSION['Username'] = $user_info[0]->Username;
        $Token = getRandomString(100);
        $_SESSION['Token'] = $Token;
        setcookie('_ua', $Token, time() + 8640000, '/');
        $data['LastIp'] = $_SERVER['REMOTE_ADDR'];
        $data['Token'] = $Token;
        $login->updateUser($data, $user_info[0]->LoginId);
    } else {
        redirect(CMS_URL, 'flash_error', 'You are not allowed to access this page please login first!');
    }
}
