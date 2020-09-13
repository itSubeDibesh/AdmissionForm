<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Process/checkRedirect.php';
$_Title = 'Control Panel || ' . SITE_TITLE;
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/header.php';
$admissions = new Admission();
$admissionData;
// $d = file_get_contents($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/Configurations/Process/fetchMonster.php');
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/navbar.php';
if (isset($_GET, $_GET['studentID']) && !empty($_GET['studentID'])) {
    $admissionData = $admissions->getAdmissionByID((int) $_GET['studentID']);
    if ($admissionData == null) {
        redirect(CMS_URL, 'alert_error', 'Student details not found!');
    }
} else {
    redirect(CMS_URL, 'alert_warning', 'Unauthorized access!');
}
?>

<div class="conatainer mt-4 bg-dark">
    <div class="container">
        <div class="container-fluid">
            <?php
            alert();
            flash();
            ?>
            <div class="card">
                <div class="card-header text-center">
                    <div class="card-title display-inline">
                        <h4 class="d-inline"><?php echo @$admissionData[0]->FullNameEnglish ?> details</h4>
                        <button value="print" onclick=" printDiv('divToPrint');" class=" d-inline float-right btn btn-success"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>
                <div class="m-4 card-body" id="divToPrint">
                    <div class=" row border">
                        <div class="col-12 ">
                            <div class="row form-group p-2">
                                <div class="col-12 col-md-4 d-none d-sm-none d-md-block p-2">
                                    <img src="<?php echo  UPLOAD_URL . '/logo.jpg' ?>" class="img img-thumbnail w-50" alt="">
                                </div>
                                <div class="col-sm-12 col-md-4 d-sm-block d-md-none p-2 text-center">
                                    <img src="<?php echo  UPLOAD_URL . '/logo.jpg' ?>" class="img img-thumbnail w-50" alt="">
                                </div>
                                <div class="col-12 col-md-8 p-2 text-center">
                                    <h3> Kalika Multiple Campus</h3>
                                    <p> Kajipokhari, Pokhara-14, Nepal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-2 text-center ">
                            <h4>Online Regestration</h4>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col-sm-12 col-md-12 m-2">
                            <div class="row form-group">
                                <div class="col-sm-12 col-md-12 p-2">
                                    <label class="form-control-label"><strong>1. पुरा नाम (देवनागरीमा) *</strong></label>
                                    <input type="text" name="FullNameDevnagari" id="FullNameDevnagari" value="<?php echo @$admissionData[0]->FullNameDevnagari ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-12 p-2">
                                    <label class="form-control-label"><strong>2. Full Name (IN BLOCK LETTERS) *</strong></label>
                                    <input type="text" name="FullNameEnglish" id="FullNameEnglish" value="<?php echo @$admissionData[0]->FullNameEnglish ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-12 p-2">
                                    <label class="form-control-label"><strong>3. Date of Birth *</strong></label>
                                    <input type="date" name="Dob" id="Dob" value="<?php echo @$admissionData[0]->Dob ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-12 p-2">
                                    <label class="form-control-label"><strong>4. Gender *</strong></label>
                                    <input type="text" name="Gender" id="Gender" value="<?php echo @$admissionData[0]->Gender ?>" disabled class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">5. Address</h4>
                            <hr>
                            <h5 class="ml-2 mt-1">Permanent Address</h5>
                            <hr>
                            <div class="row form-group ml-3">
                                <div class="col-sm-12 col-md-12 p-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>1. Province </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="PermanentProvince" id="PermanentProvince" value="<?php echo @$admissionData[0]->PermanentProvince ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>2. District </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="PermanentDistrict" id="PermanentDistrict" value="<?php echo @$admissionData[0]->PermanentDistrict ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>3. Municipality </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="PermanentMunicipality" id="PermanentMunicipality" value="<?php echo @$admissionData[0]->PermanentMunicipality ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>4. Ward No. </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="PermanentWardNo" id="PermanentWardNo" value="<?php echo @$admissionData[0]->PermanentWardNo ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <hr>
                            <h5 class="ml-2 mt-1">Temporary Address</h5>
                            <hr>
                            <div class="row form-group ml-3">
                                <div class="col-sm-12 col-md-12 p-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>1. Province </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="TemporaryProvince" id="TemporaryProvince" value="<?php echo @$admissionData[0]->TemporaryProvince ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>2. District </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="TemporaryDistrict" id="TemporaryDistrict" value="<?php echo @$admissionData[0]->TemporaryDistrict ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>3. Municipality </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="TemporaryMunicipality" id="TemporaryMunicipality" value="<?php echo @$admissionData[0]->TemporaryMunicipality ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-3">
                                            <label class=" form-control-label"><strong>4. Ward No. </strong></label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="TemporaryWardNo" id="TemporaryWardNo" value="<?php echo @$admissionData[0]->TemporaryWardNo ?>" disabled class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">6. Parents</h4>
                            <hr>
                            <div class="col-sm-12 col-md-12 p-2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>1. Father's Name </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="FathersName" id="FathersName" value="<?php echo @$admissionData[0]->FathersName ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>2. Occupation </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="FatherOccupation" id="FatherOccupation" value="<?php echo @$admissionData[0]->FatherOccupation ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>3. Phone Number </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="tel" name="FatherPhoneNumber" id="FatherPhoneNumber" value="<?php echo @$admissionData[0]->FatherPhoneNumber ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>4. Mother's Name </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="MothersName" id="MothersName" value="<?php echo @$admissionData[0]->MothersName ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>5. Occupation </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="MotherOccupation" id="MotherOccupation" value="<?php echo @$admissionData[0]->MotherOccupation ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>6. Phone Number </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="tel" name="MotherPhoneNumber" id="MotherPhoneNumber" value="<?php echo @$admissionData[0]->MotherPhoneNumber ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>7. Guardian's Name </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="GuardianName" id="GuardianName" value="<?php echo @$admissionData[0]->GuardianName ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>8. Occupation </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="GuardianOccupation" id="GuardianOccupation" value="<?php echo @$admissionData[0]->GuardianOccupation ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>9. Phone Number </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="tel" name="GuardianPhoneNumber" id="GuardianPhoneNumber" value="<?php echo @$admissionData[0]->GuardianPhoneNumber ?>" disabled class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">7. S.L.C./S.E.E.</h4>
                            <hr>
                            <div class="col-sm-12 col-md-12 p-2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>1. School's Name * </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="SchoolsName" id="SchoolsName" value="<?php echo @$admissionData[0]->SchoolsName ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>2. Address *</strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="SchoolAddress" id="SchoolAddress" value="<?php echo @$admissionData[0]->SchoolAddress ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>3. Percentage/GPA *</strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="tel" name="PercentageGPA" id="PercentageGPA" value="<?php echo @$admissionData[0]->PercentageGPA ?>" disabled="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>4. Passed Year *</strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="date" name="PassedYear" id="PassedYear" value="<?php echo @$admissionData[0]->PassedYear ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>5. Symbol No. * </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="SymbolNo" id="SymbolNo" value="<?php echo @$admissionData[0]->SymbolNo ?>" disabled class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">8. Optional Subjects Offered For Class 11/12 (ANY ONE)</h4>
                            <div class="col-sm-12 col-md-12 p-2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>1. Science </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="Science" id="Science" value="<?php echo @$admissionData[0]->Science ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>2. Management </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="Management" id="Management" value="<?php echo @$admissionData[0]->Management ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>3. Humanities</strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="Humanities" id="Humanities" value="<?php echo @$admissionData[0]->Humanities ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label class=" form-control-label"><strong>4. Education</strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="Education" id="Education" value="<?php echo @$admissionData[0]->Education ?>" disabled class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">9. For disables only</h4>
                            <div class="row ml-3 p-2">
                                <div class="col-sm-12 col-md-12 p-2">
                                    <label class="form-control-label"><strong>1. Kind of disability</strong></label>
                                    <input type="text" name="disability" id="disability" value="<?php echo @$admissionData[0]->disability ?>" disabled class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/footer.php';
?>