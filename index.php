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
          <form action="<?php echo (PROCESS_URL . '/processAdmission.php') ?>" method="post">
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
                <div class="col-sm-12 col-md-12">
                  <div class="row form-group">
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class="form-control-label"><strong>1. पुरा नाम (देवनागरीमा) *</strong></label>
                      <input type="text" name="FullNameDevnagari" id="FullNameDevnagari" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class="form-control-label"><strong>2. Full Name (IN BLOCK LETTERS) *</strong></label>
                      <input type="text" name="FullNameEnglish" id="FullNameEnglish" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class="form-control-label"><strong>3. Date of Birth *</strong></label>
                      <input type="date" name="Dob" id="Dob" required class="form-control">
                    </div>
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class="form-control-label"><strong>4. Gender *</strong></label>
                      <select name="Gender" id="Gender" required class="form-control">
                        <option selected disabled>--------------</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
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
                          <input type="text" name="PermanentProvince" id="PermanentProvince" class="form-control">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-sm-3">
                          <label class=" form-control-label"><strong>2. District </strong></label>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" name="PermanentDistrict" id="PermanentDistrict" class="form-control">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-sm-3">
                          <label class=" form-control-label"><strong>3. Municipality </strong></label>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" name="PermanentMunicipality" id="PermanentMunicipality" class="form-control">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-sm-3">
                          <label class=" form-control-label"><strong>4. Ward No. </strong></label>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" name="PermanentWardNo" id="PermanentWardNo" class="form-control">
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
                          <input type="text" name="TemporaryProvince" id="TemporaryProvince" class="form-control">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-sm-3">
                          <label class=" form-control-label"><strong>2. District </strong></label>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" name="TemporaryDistrict" id="TemporaryDistrict" class="form-control">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-sm-3">
                          <label class=" form-control-label"><strong>3. Municipality </strong></label>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" name="TemporaryMunicipality" id="TemporaryMunicipality" class="form-control">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-sm-3">
                          <label class=" form-control-label"><strong>4. Ward No. </strong></label>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" name="TemporaryWardNo" id="TemporaryWardNo" class="form-control">
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
                        <input type="text" name="FathersName" id="FathersName" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>2. Occupation </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="FatherOccupation" id="FatherOccupation" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>3. Phone Number </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="tel" name="FatherPhoneNumber" id="FatherPhoneNumber" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>4. Mother's Name </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="MothersName" id="MothersName" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>5. Occupation </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="MotherOccupation" id="MotherOccupation" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>6. Phone Number </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="tel" name="MotherPhoneNumber" id="MotherPhoneNumber" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>7. Guardian's Name </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="GuardianName" id="GuardianName" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>8. Occupation </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="GuardianOccupation" id="GuardianOccupation" class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>9. Phone Number </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="tel" name="GuardianPhoneNumber" id="GuardianPhoneNumber" class="form-control">
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
                        <input type="text" name="SchoolsName" id="SchoolsName" required class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>2. Address *</strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="SchoolAddress" id="SchoolAddress" required class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>3. Percentage/GPA *</strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="tel" name="PercentageGPA" id="PercentageGPA" required class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>4. Passed Year *</strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="date" name="PassedYear" id="PassedYear" required class="form-control">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>5. Symbol No. * </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="SymbolNo" id="SymbolNo" required class="form-control">
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
                        <select name="Science" id="Science" class="form-control">
                          <Option selected disabled>---------------------</Option>
                          <option value="Biology">Biology</option>
                          <option value="Mathematics">Mathematics</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>2. Management </strong></label>
                      </div>
                      <div class="col-sm-8">
                        <select name="Management" id="Management" class="form-control">
                          <Option selected disabled>---------------------</Option>
                          <option value="Economics">Economics</option>
                          <option value="Marketing">Marketing</option>
                          <option value="BusinessMathematics">Business Mathematics</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>3. Humanities</strong></label>
                      </div>
                      <div class="col-sm-8">
                        <select name="Humanities" id="Humanities" class="form-control">
                          <Option selected disabled>---------------------</Option>
                          <option value="English">English</option>
                          <option value="Nepali">Nepali</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-4">
                        <label class=" form-control-label"><strong>4. Education</strong></label>
                      </div>
                      <div class="col-sm-8">
                        <select name="Education" id="Education" class="form-control">
                          <Option selected disabled>---------------------</Option>
                          <option value="English">English</option>
                          <option value="Nepali">Nepali</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 border">
                  <h4 class="ml-2 mt-2">9. For disables only</h4>
                  <div class="row ml-3 p-2">
                    <div class="col-sm-12 col-md-12 p-2">
                      <label class="form-control-label"><strong>1. Kind of disability</strong></label>
                      <input type="text" name="disability" id="disability" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <p>By submitting this form you are confirming that the information you filled in this form is accurate and true.</p>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" name="Action" value="Save" class=" btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/footer.php';
  ?>