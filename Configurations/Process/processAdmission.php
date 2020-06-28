<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Process/validateAdmission.php';
$admission = new Admission;
if (isset($_POST) && !empty($_POST)) {
    // To add acamedic year date
    if ($_POST['Action'] == "Save") {
        // Sanitizing the input data
        $sanitizedData = [];
        foreach ($_POST as $key => $value) {
            $sanitizedData += [$key => sanitize($value)];
        };
        // Removing action from array
        array_pop($sanitizedData);

        // Validation Fror each element
        $sanitizedData = ValidateAdmission($sanitizedData);

        // Setting and stoaring the uploaded Image
        if (isset($_FILES, $_FILES['Image']['error']) && $_FILES['Image']['error'] == 0) {
            $file_Name = UploadImage($_FILES['Image'], 'Admission', $sanitizedData['FullName']);
            if ($file_Name) {
                $sanitizedData['Image'] = UPLOAD_URL . '/Admission/' . $file_Name;
            }
        }

        // Uploading the dataset to database
        $UploadDataset = $admission->addAdmissionForm($sanitizedData);
        if ($UploadDataset) {
            redirect(SITE_URL, 'alert_success', 'Admission form sent successfully!');
        } else {
            redirect(SITE_URL, 'alert_error', 'Problem sending application form pleast try again later!');
        }
    }
}
