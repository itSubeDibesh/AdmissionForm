<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Process/checkRedirect.php';
$_Title = 'Download || ' . SITE_TITLE;
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/header.php';
$admissions = new Admission();
$admissionData = $admissions->getAll();
// $d = file_get_contents($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/Configurations/Process/fetchMonster.php');
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/navbar.php';
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
                        <h4 class="d-inline"> Download Admission List</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table border" id="DiaplyTable">
                        <thead class="table-dark">
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($admissionData as $key => $value) {
                            ?>
                                <tr class="border">
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value->FullNameEnglish ?></td>
                                    <td><?php echo $value->Dob ?></td>
                                    <td><?php echo $value->Gender ?></td>
                                    <td><?php echo $value->FathersName ?></td>
                                    <td><?php echo $value->MothersName ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/Configurations/Process/fetch.php' ?>" class="btn btn-success"><i class="fas fa-file-excel"></i> Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/footer.php';
?>