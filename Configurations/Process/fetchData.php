<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
// require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Process/checkRedirect.php';
$admissions = new Admission();
if (isset($_GET)&& !empty($_GET)) {
   if($_GET["Auth"]=="api"){
        $admissionData = $admissions->getAll();
    if (!empty($admissionData)) {
        http_response_code(200);
        echo json_encode(['admissions' => $admissionData, 'status' => true]);
        exit;
    } else {
        echo json_encode(['admissions' => null, 'status' => false]);
        exit;
    }
   }else{
        redirect(SITE_URL, 'flash_warning', 'Unauthorized access!');
   }
}else{
     redirect(SITE_URL, 'flash_warning', 'Unauthorized access!');
}
