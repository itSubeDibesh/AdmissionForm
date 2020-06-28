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
                        <h4 class="d-inline"><?php echo $admissionData[0]->FullName ?> details</h4>
                        <button value="print" onclick=" printDiv('divToPrint');" class=" d-inline float-right btn btn-success"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>

                <div class=" card-body" id="divToPrint">
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
                                    <h3> BALODAYA</h3>
                                    <p> HIGHER SECONDARY SCHOOL</p>
                                    <div class="bg-dark text-light"> (COLLEGE OF MANAGEMENT)</div>
                                    <p> Balodaya Marga, Birauta, Pokhera-17</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col-12">
                            <div class="row form-group p-2">
                                <div class="col col-md-6 p-2">
                                    <label class=" form-control-label"><strong>Serial Number:</strong></label>
                                </div>
                                <div class="col-12 col-md-6 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->admissionId ?>" disabled class="form-control">
                                </div>
                                <div class="col col-md-6 p-2">
                                    <label class=" form-control-label"><strong>AppliedFor:</strong></label>
                                </div>
                                <div class="col-12 col-md-6 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->AppliedFor ?>" disabled class="form-control">
                                </div>
                                <?php
                                if ($admissionData[0]->AppliedFor == "School") {
                                ?>
                                    <div class="col col-md-6 p-2">
                                        <label class=" form-control-label"><strong>Level:</strong></label>
                                    </div>
                                    <div class="col-12 col-md-6 p-2">
                                        <input type="text" value="<?php echo $admissionData[0]->Level ?>" disabled class="form-control">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row form-group p-2">
                                <div class="col-sm col-md-6 p-2">
                                    <label class=" form-control-label"><strong>Academic Year:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-6 p-2">
                                    <input type="text" value="<?php echo date("Y") ?>" disabled class="form-control">
                                </div>
                                <?php
                                if ($admissionData[0]->AppliedFor != "School") {
                                ?>
                                    <div class="col-sm col-md-6 p-2">
                                        <label class=" form-control-label"><strong>Stream:</strong></label>
                                    </div>
                                    <div class="col-sm-12 col-md-6 p-2">
                                        <input type="text" value="<?php echo $admissionData[0]->Stream  ?>" disabled class="form-control">
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="col-sm-12 col-md-6">
                                </div>
                                <div class="col-sm-12 col-md-6  p-2 text-center">
                                    <img src="<?php echo $admissionData[0]->Image == null ? UPLOAD_URL . '/logo.jpg' :  $admissionData[0]->Image; ?>" class="img img-thumbnail w-50" alt="">
                                    <br /> <strong>Image</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">A. Personal information</h4>
                            <div class="row form-group p-2">
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Full Name:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-9 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->FullName ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Gender:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->Gender ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Nationality:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->Nationality ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Date of birth:</strong></label>
                                </div>
                                <div class="col col-md-3 p-2 display-inline">
                                    (B.S): Year <input type="text" value="<?php echo $admissionData[0]->YearBs ?>" disabled class="form-control">
                                    (A.D): Year<input type="text" value="<?php echo $admissionData[0]->YearAD ?>" disabled class="form-control">
                                </div>
                                <div class="col col-md-3 p-2 display-inline">
                                    (B.S): Month <input type="text" value="<?php echo $admissionData[0]->MonthBs ?>" disabled class="form-control">
                                    (A.D): Month <input type="text" value="<?php echo $admissionData[0]->MonthAD ?>" disabled class="form-control">
                                </div>
                                <div class="col col-md-3 p-2 display-inline">
                                    (B.S): Day <input type="text" value="<?php echo $admissionData[0]->DayBs ?>" disabled class="form-control">
                                    (A.D): Day <input type="text" value="<?php echo $admissionData[0]->DayAD ?>" disabled class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">B. Contact information</h4>
                            <div class="row form-group p-2">
                                <div class="col-sm-12 col-md-4 p-2">
                                    <strong>Zone</strong><input type="text" value="<?php echo $admissionData[0]->Zone ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-4 p-2">
                                    <strong>District</strong><input type="text" value="<?php echo $admissionData[0]->District ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-4 p-2">
                                    <strong>VDC/Municipality</strong><input type="text" value="<?php echo $admissionData[0]->VDC_Municapilaty ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-4 p-2">
                                    <strong>Ward No</strong><input type="text" value="<?php echo $admissionData[0]->WardNo ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-4 p-2">
                                    <strong>Tole</strong><input type="text" value="<?php echo $admissionData[0]->ToleNo ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-4 p-2">
                                    <strong>Telephone</strong><input type="text" value="<?php echo $admissionData[0]->TelephoneNo ?>" disabled class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2">C. Family information</h4>
                            <div class="row form-group p-2">
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Father's Name:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->FatherName ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Nationality:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->FatherNationality ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Occupation/Title:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->FatherOccupation_Title ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Telephone(Off):</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->Telephone_Off ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Telephone(Res):</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-9 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->Telephone_Res ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Mother's Name:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->MotherName ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Nationality:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->MotherNationality ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Occupation/Title:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->MotherOccupation_Title ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Telephone:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->MotherTelephone ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Local Gurdain:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->LocalGurdain ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Relation:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->Relationship ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Address:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-9 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->Address ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Telephone:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->GurdainTelephoneNo ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <label class=" form-control-label"><strong>Mobile No:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-3 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->MobileNo ?>" disabled class="form-control">
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($admissionData[0]->AppliedFor == 'College' || ($admissionData[0]->Level >= 8 && $admissionData[0]->Level <= 10)) {
                        ?>
                            <div class="col-12 border">
                                <h4 class="ml-2 mt-2">D. Academic Details</h4>
                                <div class="row form-group p-2">
                                    <div class="col-sm-12 col-md-6 p-2">
                                        <label class=" form-control-label"><strong>Name of the SLC passed School:</strong></label>
                                    </div>
                                    <div class="col-sm-12 col-md-6 p-2">
                                        <input type="text" value="<?php echo $admissionData[0]->SlcPassedSchool ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-1 p-2">
                                        <label class=" form-control-label"><strong>Year:</strong></label>
                                    </div>
                                    <div class="col-sm-12 col-md-2 p-2">
                                        <input type="text" value="<?php echo $admissionData[0]->PassedOutYear ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-3 p-2">
                                        <label class=" form-control-label"><strong>Address:</strong></label>
                                    </div>
                                    <div class="col-sm-12 col-md-6 p-2">
                                        <input type="text" value="<?php echo $admissionData[0]->SlcPassedSchoolAddress ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-5 p-2">
                                        <label class=" form-control-label"><strong>Optional Subjects in SLC:</strong></label>
                                    </div>
                                    <div class="col-sm-12 col-md-7 p-2">
                                        <input type="text" value="<?php echo $admissionData[0]->OptionalSubjectsInSlc ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-4 p-2">
                                        <strong>1st Optional</strong><input type="text" value="<?php echo $admissionData[0]->FirstOptional ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-4 p-2">
                                        <strong>Mark in SLC</strong><input type="text" value="<?php echo $admissionData[0]->Mark1stOpionalInSlc ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-4 p-2">
                                        <strong>Aggregate</strong><input type="text" value="<?php echo $admissionData[0]->AggregratePercent ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-4 p-2">
                                        <strong>2nd Optional</strong><input type="text" value="<?php echo $admissionData[0]->SecondOptional ?>" disabled class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-4 p-2">
                                        <strong>Mark in SLC</strong><input type="text" value="<?php echo $admissionData[0]->Mark2ndOpionalInSlc ?>" disabled class="form-control">
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2"><?php echo $admissionData[0]->AppliedFor != 'College' || ($admissionData[0]->Level >= 8 && $admissionData[0]->Level <= 10) ? 'D' : 'E' ?>. Extracurricular Activities</h4>
                            <div class="row form-group p-2">
                                <div class="col-sm-12 col-md-12 p-2">
                                    <label class=" form-control-label"><strong>What activities were you involved in the schooling or leadership position did you hold?</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <textarea cols="10" rows="4" disabled class="form-control"><?php echo $admissionData[0]->ECA ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2"><?php echo $admissionData[0]->AppliedFor != 'College' || ($admissionData[0]->Level >= 8 && $admissionData[0]->Level <= 10) ? 'E' : 'F' ?>. Hobby</h4>
                            <div class="row form-group p-2">
                                <div class="col-sm-12 col-md-12">
                                    <textarea cols="10" rows="4" disabled class="form-control"><?php echo $admissionData[0]->Hobby ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2"><?php echo $admissionData[0]->AppliedFor != 'College' || ($admissionData[0]->Level >= 8 && $admissionData[0]->Level <= 10) ? 'F' : 'G' ?>. Awards and Recognition</h4>
                            <div class="row form-group p-2">
                                <div class="col-sm-12 col-md-12 p-2">
                                    <label class=" form-control-label"><strong>Have you been awarded or recognized in any area at your school or any institution?</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <textarea cols="10" rows="4" disabled class="form-control"><?php echo $admissionData[0]->Awards ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border">
                            <h4 class="ml-2 mt-2"><?php echo $admissionData[0]->AppliedFor != 'College' || ($admissionData[0]->Level >= 8 && $admissionData[0]->Level <= 10) ? 'G' : 'H' ?>. Others</h4>
                            <div class="row form-group p-2">
                                <div class="col-sm-12 col-md-10 p-2">
                                    <label class=" form-control-label"><strong>1. Bus stop (if you wish to use school's transportation facility):</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-2 p-2">
                                    <?php
                                    echo $admissionData[0]->Bus == 0 ? 'NO' : 'Yes';
                                    ?>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <label class=" form-control-label"><strong>2. Blood Group:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" value="<?php echo $admissionData[0]->BloodGroup ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-6 p-2">
                                    <label class=" form-control-label"><strong>3. Health Problem (If any):</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-6 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->HealthProblem ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-6 p-2">
                                    <label class=" form-control-label"><strong>4. Emergency Contact No:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-6 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->EmergencyContact ?>" disabled class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-6 p-2">
                                    <label class=" form-control-label"><strong>5. Any unusual habit:</strong></label>
                                </div>
                                <div class="col-sm-12 col-md-6 p-2">
                                    <input type="text" value="<?php echo $admissionData[0]->UnSualHabit ?>" disabled class="form-control">
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