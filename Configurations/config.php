<?php

ob_start();
session_start();

/* Site Url*/
define('SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']); /* http://localhost */
define('SITE_TITLE', 'Kalika Multiple Campus');

/* Backend directory*/
define('CMS_URL', SITE_URL . '/Login');/* Root/cms */

/* Change Database Connections and manage database here */
/* Database Configuration*/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_NAME', 'bebs_admission');


/** Home path */
define('ASSETS_URL', SITE_URL . '/Assets');/* Root/assets */
define('CSS_URL', ASSETS_URL . '/Css');/* Root/assets/css */
define('JS_URL', ASSETS_URL . '/Js');/* Root/assets/js */
define('Vendor_URL', ASSETS_URL . '/Vendors');/* Root/assets/vendors */

/* Configurations */
define('CONFIG_URL', SITE_URL . '/Configurations');/* Root/CONFIGURATION/PROCESS */
define('PROCESS_URL', CONFIG_URL . '/Process');/* Root/CONFIGURATION/PROCESS */
define('STORAGE_URL', CONFIG_URL . '/Storage');/* Root/CONFIGURATION/Storage */

/* Include */
define('INCLUDE', CONFIG_URL . '/Include');/* Root/CONFIGURATION/Include */

/* Error Log*/
define('ERROR_LOG', $_SERVER['DOCUMENT_ROOT'] . '/Error/Error_Log.log');

/* Image Upload Folder and supported extensions*/
define('IMAGE_EXTENSIONS', array('jpg', 'jpeg', 'png', 'bmp', 'svg'));
define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'] . '/Uploads');/* Root/uploads*/
define('UPLOAD_URL', SITE_URL . '/Uploads');/* Root/uploads*/