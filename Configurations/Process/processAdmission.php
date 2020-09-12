<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
$admission = new Admission;
if (isset($_POST) && !empty($_POST)) {
    // To add acamedic year date
    if ($_POST['Action'] == "Save") {
        // Uploading the dataset to database
        // debug($_POST);
        unset($_POST['Action']);
        $UploadDataset = $admission->addAdmissionForm($_POST);
        if ($UploadDataset) {
            redirect(SITE_URL, 'alert_success', 'Admission form sent successfully!');
        } else {
            redirect(SITE_URL, 'alert_error', 'Problem sending application form pleast try again later!');
        }
    }
}
