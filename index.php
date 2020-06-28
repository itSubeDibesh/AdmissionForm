<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
$_Title = 'Application for admission || ' . SITE_TITLE;
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/header.php';
?>

<body class="bg-dark">
  <div class="conatainer mt-4 bg-dark">
    <div class="container">
      <div class="container-fluid">
        <?php
        alert();
        flash();
        ?>
        <div class="card">
          <form action="<?php echo (PROCESS_URL . '/processAdmission.php') ?>" method="post" enctype="multipart/form-data">
            <div class="card-header text-center">
              <div class="card-title display-inline">
                <h4 class="d-inline">Application For Admission</h4>
              </div>
            </div>
            <div class="card-body">
              <div class="row border">
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
                      <div class="bg-dark text-light"> (COLLEGE OF MANAGEMENT AND SCIENCE)</div>
                      <p> Balodaya Marga, Birauta, Pokhera-17</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border">
                <div class="col-sm-12 col-md-6">
                  <div class="row form-group p-2">
                    <div class="col col-md-6  p-2">
                      <label class=" form-control-label"><strong>Applied For:</strong></label>
                    </div>
                    <div class="col-12 col-md-6  p-2">
                      <select name="AppliedFor" id="AppliedFor" class="form-control">
                        <option default disabled selected>Application For</option>
                        <option value="School">School</option>
                        <option value="College">College</option>
                      </select>
                    </div>
                    <div class="col col-md-6 p-2 levelDiv">
                      <label class=" form-control-label"><strong>Level:</strong></label>
                    </div>
                    <div class="col-12 col-md-6 p-2 levelDiv">
                      <select name="Level" id="Level" class="form-control">
                        <option default disabled selected>Select Level</option>
                        <option value="Nursery">Nursery </option>
                        <option value="L.K.G">L.K.G</option>
                        <option value="U.K.G">U.K.G</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                      <label class=" form-control-label"><strong> Image:</strong></label>
                    </div>
                    <div class="col-12 col-md-6 p-2" class="form-control">
                      <input type="file" name="Image" id="Image" accept="image/*">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="row form-group p-2">
                    <div class="col col-md-6 p-2">
                      <label class=" form-control-label"><strong>Academic Year:</strong></label>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                      <input type="text" value="<?php echo date("Y") ?>" disabled class="form-control">
                    </div>
                    <div class="col col-md-6 p-2 streamDiv" style="display:none">
                      <label class=" form-control-label"><strong>Stream:</strong></label>
                    </div>
                    <div class="col-12 col-md-6 p-2 streamDiv" style="display:none">
                      <select name="Stream" id="Stream" class="form-control">
                        <option default disabled>Select Stream</option>
                        <option value="Science">Science</option>
                        <option value="Management">Management</option>
                      </select>
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
                      <input type="text" name="FullName" id="FullName" maxlength="100" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Gender:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <select name="Gender" id="Gender" class="form-control">
                        <option default disabled>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Nationality:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="Nationality" id="Nationality" maxlength="50" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Date of birth:</strong></label>
                    </div>
                    <div class="col col-md-3 p-2 display-inline">
                      (B.S): Year <input type="number" name="YearBs" id="YearBs" maxlength="4" required class="form-control">
                      (A.D): Year<input type="number" name="YearAD" id="YearAD" maxlength="4" required class="form-control">
                    </div>
                    <div class="col col-md-3 p-2 display-inline">
                      (B.S): Month <input type="number" name="MonthBs" id="MonthBs" maxlength="2" required class="form-control">
                      (A.D): Month <input type="number" name="MonthAD" id="MonthAD" maxlength="2" required class="form-control">
                    </div>
                    <div class="col col-md-3 p-2 display-inline">
                      (B.S): Day <input type="number" name="DayBs" id="DayBs" maxlength="2" required class="form-control">
                      (A.D): Day <input type="number" name="DayAD" id="DayAD" maxlength="2" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-12 border">
                  <h4 class="ml-2 mt-2">B. Contact information</h4>
                  <div class="row form-group p-2">
                    <div class="col-sm-12 col-md-4 p-2">
                      <strong>Zone</strong><input type="text" name="Zone" id="Zone" maxlength="50" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-4 p-2">
                      <strong>District</strong><input type="text" name="District" id="District" maxlength="50" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-4 p-2">
                      <strong>VDC/Municipality</strong><input type="text" name="VDC_Municapilaty" required id="VDC_Municapilaty" maxlength="100" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-4 p-2">
                      <strong>Ward No</strong><input type="number" name="WardNo" id="WardNo" maxlength="2" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-4 p-2">
                      <strong>Tole</strong><input type="number" name="ToleNo" id="ToleNo" maxlength="2" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-4 p-2">
                      <strong>Telephone</strong><input type="tel" name="TelephoneNo" id="TelephoneNo" maxlength="20" required class="form-control">
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
                      <input type="text" name="FatherName" id="FatherName" maxlength="100" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Nationality:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="FatherNationality" id="FatherNationality" maxlength="50" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Occupation/Title:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="FatherOccupation_Title" id="FatherOccupation_Title" maxlength="50" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Telephone(Off):</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="tel" name="Telephone_Off" id="Telephone_Off" maxlength="20" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Telephone(Res):</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-9 p-2">
                      <input type="tel" name="Telephone_Res" id="Telephone_Res" maxlength="20" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Mother's Name:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="MotherName" id="MotherName" maxlength="100" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Nationality:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="MotherNationality" id="MotherNationality" maxlength="50" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Occupation/Title:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="MotherOccupation_Title" id="MotherOccupation_Title" required maxlength="50" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Telephone:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="tel" name="MotherTelephone" id="MotherTelephone" maxlength="20" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Local Guardian:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="LocalGurdain" id="LocalGurdain" maxlength="100" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Relation:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="text" name="Relationship" id="Relationship" maxlength="100" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Address:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-9 p-2">
                      <input type="text" name="Address" id="Address" maxlength="100" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Telephone:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="tel" name="GurdainTelephoneNo" id="GurdainTelephoneNo" maxlength="20" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Mobile No:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <input type="tel" name="MobileNo" id="MobileNo" maxlength="20" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-12 border" id="divD" style="display: none">
                  <h4 class="ml-2 mt-2">D. Academic Details</h4>
                  <div class="row form-group p-2">
                    <div class="col-12 col-md-5 p-2">
                      <label class=" form-control-label"><strong>Name of the SLC passed School:</strong></label>
                    </div>
                    <div class="col-12 col-md-7 p-2">
                      <input type="text" name="SlcPassedSchool" id="SlcPassedSchool" maxlength="100" class="form-control">
                    </div>
                    <div class="col-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Year:</strong></label>
                    </div>
                    <div class="col-12 col-md-3 p-2">
                      <input type="numbers" name="PassedOutYear" id="PassedOutYear" maxlength="4" class="form-control">
                    </div>
                    <div class="col-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>Address:</strong></label>
                    </div>
                    <div class="col-12 col-md-3 p-2">
                      <input type="text" name="SlcPassedSchoolAddress" id="SlcPassedSchoolAddress" maxlength="100" class="form-control">
                    </div>
                    <div class="col-12 col-md-4 p-2">
                      <label class=" form-control-label"><strong>Optional Subjects in SLC:</strong></label>
                    </div>
                    <div class="col-12 col-md-8 p-2">
                      <input type="text" name="OptionalSubjectsInSlc" id="OptionalSubjectsInSlc" maxlength="50" class="form-control">
                    </div>
                    <div class="col-12 col-md-4 p-2">
                      <strong>1st Optional</strong><input type="text" name="FirstOptional" id="FirstOptional" maxlength="3" class="form-control">
                    </div>
                    <div class="col-12 col-md-4 p-2">
                      <strong>Mark in SLC</strong><input type="number" name="Mark1stOpionalInSlc" id="Mark1stOpionalInSlc" maxlength="50" class="form-control">
                    </div>
                    <div class="col-12 col-md-4 p-2">
                      <strong>Aggregate</strong><input type="number" name="AggregratePercent" id="AggregratePercent" maxlength="3" class="form-control">
                    </div>
                    <div class="col-12 col-md-4 p-2">
                      <strong>2nd Optional</strong><input type="text" name="SecondOptional" id="SecondOptional" maxlength="50" class="form-control">
                    </div>
                    <div class="col-12 col-md-4 p-2">
                      <strong>Mark in SLC</strong><input type="number" name="Mark2ndOpionalInSlc" id="Mark2ndOpionalInSlc" maxlength="3" class="form-control">
                    </div>
                  </div>
                </div>
                <?php

                ?>
                <div class="col-12 border">
                  <h4 class="ml-2 mt-2"><span id="ChangingE">D</span>. Extracurricular Activities</h4>
                  <div class="row form-group p-2">
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class=" form-control-label"><strong>What activities were you involved in the schooling or leadership position did you hold?</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-12 p-2">
                      <textarea cols="10" rows="4" name="ECA" id="ECA" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-12 border">
                  <h4 class="ml-2 mt-2"><span id="ChangingF">E</span>. Hobby</h4>
                  <div class="row form-group p-2">
                    <div class="col-sm-12 col-md-12 p-2">
                      <textarea cols="10" rows="4" type="text" name="Hobby" id="Hobby" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-12 border">
                  <h4 class="ml-2 mt-2"><span id="ChangingG">F</span>. Awards and Recognition</h4>
                  <div class="row form-group p-2">
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class=" form-control-label"><strong>Have you been awarded or recognized in any area at your school or any institution?</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-12">
                      <textarea cols="10" rows="4" name="Awards" id="Awards" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-12 border">
                  <h4 class="ml-2 mt-2"><span id="ChangingH">G</span>. Others</h4>
                  <div class="row form-group p-2">
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class=" form-control-label"><strong>1. Bus stop (if you wish to use school's transportation facility):</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-12 pl-3 pr-3 pt-1 pb-3">
                      <select name="Bus" id="Bus" class="form-control">
                        <Option disabled selected>Select Buss facility</Option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    <div class="col-sm-12 col-md-3 p-2">
                      <label class=" form-control-label"><strong>2. Blood Group:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-9 p-2">
                      <select name="BloodGroup" id="BloodGroup" class="form-control">
                        <Option disabled selected>Select Blood Group</Option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                      </select>
                    </div>
                    <div class="col-sm-12 col-md-6 p-2">
                      <label class=" form-control-label"><strong>3. Health Problem (If any):</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-6 p-2">
                      <input type="text" name="HealthProblem" id="HealthProblem" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-6 p-2">
                      <label class=" form-control-label"><strong>4. Emergency Contact No:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-6 p-2">
                      <input type="text" name="EmergencyContact" id="EmergencyContact" maxlength="20" class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-6 p-2">
                      <label class=" form-control-label"><strong>5. Any unusual habit:</strong></label>
                    </div>
                    <div class="col-sm-12 col-md-6 p-2">
                      <input type="text" name="UnSualHabit" id="UnSualHabit" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" name="Action" value="Save" class=" btn btn-success">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/footer.php';
  ?>