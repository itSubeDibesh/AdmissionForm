<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
$login  = new Login();

if (isset($_POST) && !empty($_POST)) {
    $usr_name = $_POST['Username'];
    $pswdbs = sha1($_POST['Passwd']);
    $users_info = $login->getUserByUserName($usr_name);

    if ($users_info) {
        if ($users_info[0]->Passwd == $pswdbs) {
            $_SESSION['LoginId'] = $users_info[0]->LoginId;
            $_SESSION['Username'] = $users_info[0]->Username;
            $Token = getRandomString(10);
            $_SESSION['Token'] = $Token;
            $data = [];
            if (isset($_POST['remember']) && !empty($_POST['remember'])) {
                setcookie('_ua', $Token, time() + 8640000, '/');
                $data['Token'] = $Token;
            }
            $data['LastIp'] = $_SERVER['REMOTE_ADDR'];
            debug($users_info[0]->LoginId);
            $login->updateUser($data, $users_info[0]->LoginId);
            redirect(PROCESS_URL . '/redirect.php', 'success', "Welcome to Control Pannel!");
        } else {
            redirect(CMS_URL, 'alert_error', 'Incorrect username or password!');
        }
    } else {
        redirect(CMS_URL, 'alert_error', 'User not found.!');
    }
} else {
    redirect(CMS_URL, 'alert_error', 'Unauthorized access!');
}
