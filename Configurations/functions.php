<?php

function debug($data, $is_exit = false)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if ($is_exit) {
        exit;
    }
}

function redirect($path, $session_key = null, $session_msg = null)
{
    if ($session_key != null) {
        setFlash($session_key, $session_msg);
    }
    header('location: ' . $path);
    exit;
}

function setFlash($key, $message)
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION[$key] = $message;
}

function flash()
{
    if (isset($_SESSION['flash_success']) && !empty($_SESSION['flash_success'])) {
        echo "<p class='alert flash alert-success text-center'><i class='fas fa-bullhorn'></i> <b>Success :</b>  " . $_SESSION['flash_success'] . "</p>";
        unset($_SESSION['flash_success']);
    }

    if (isset($_SESSION['flash_error']) && !empty($_SESSION['flash_error'])) {
        echo "<p class='alert flash alert-danger text-center'><i class='fas fa-bullhorn'></i> <b>Error :</b>  " . $_SESSION['flash_error'] . "</p>";
        unset($_SESSION['flash_error']);
    }

    if (isset($_SESSION['flash_warning']) && !empty($_SESSION['flash_warning'])) {
        echo "<p class='alert flash alert-warning text-center'><i class='fas fa-bullhorn'></i> <b?Warning :</b>  " . $_SESSION['flash_warning'] . "</p>";
        unset($_SESSION['flash_warning']);
    }
}

function setAlert($key, $message)
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION[$key] = $message;
}

function alert()
{
    if (isset($_SESSION['alert_success']) && !empty($_SESSION['alert_success'])) {
        echo "<div class='alert alert-success alert-dismissible fade show text-center' role='alert'><i class='fas fa-bullhorn'></i> <b>Success :</b>  " . $_SESSION['alert_success'] . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span> </button></div>";
        unset($_SESSION['alert_success']);
    }

    if (isset($_SESSION['alert_error']) && !empty($_SESSION['alert_error'])) {
        echo "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'><i class='fas fa-bullhorn'></i> <b>Error :</b>  " . $_SESSION['alert_error'] . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span> </button></div>";
        unset($_SESSION['alert_error']);
    }

    if (isset($_SESSION['alert_warning']) && !empty($_SESSION['alert_warning'])) {
        echo "<div class='alert alert-warning alert-dismissible fade show text-center' role='alert'><i class='fas fa-bullhorn'></i> <b>Warning :</b>  " . $_SESSION['alert_warning'] . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span> </button></div>";
        unset($_SESSION['alert_warning']);
    }
}

function getRandomString($len = 100)
{
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $str_leng = strlen($chars);
    $random = '';

    for ($i = 0; $i < $len; $i++) {
        $posn = rand(0, $str_leng - 1);
        $random .= $chars[$posn];
    }
    return $random;
}

function sanitize($str)
{
    $str = trim($str);
    $str = strip_tags($str);
    $str = rtrim($str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    return $str;
}

function UploadImage($file, $dir, $userName)
{
    if ($file['error'] == 0) {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        if (in_array($ext, IMAGE_EXTENSIONS)) {
            if ($file['size'] <= 5242880) {
                $path = UPLOAD_DIR . '/' . $dir;

                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }
                $file_name = ucfirst($dir) . "-" . ucfirst($userName) . "-" . date('Ymdhis') . rand(0, 999) . "." . $ext;
                $succss = move_uploaded_file($file['tmp_name'], $path . '/' . $file_name);
                if ($succss) {
                    return $file_name;
                } else {
                    return false;
                }
            } else {
                return null;
            }
        } else {
            return null;
        }
    } else {
        return null;
    }
}

function getYoutubeIdFromUrl($url)
{
    // preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $match);
    preg_match("#([\/|\?|&]vi?[\/|=]|youtu\.be\/|embed\/)([a-zA-Z0-9_-]+)#", $url, $matches);
    return $matches[2];
}


function getCurrentUrl()
{
    return SITE_URL . $_SERVER['REQUEST_URI'];
}

function getPagename()
{
    return pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
}
