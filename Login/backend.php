<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Process/checkRedirect.php';
$_Title = 'Control Panel || ' . SITE_TITLE;
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
                        <h4 class="d-inline"> New Admission List</h4>
                        <a href="download.php" class="d-inline float-right btn btn-success"><i class="fas fa-download"></i> Download</a>
                    </div>
                </div>
                <div class="card-body">
                    <table  class="table table-bordered nowrap" style="width:100%" id="DiaplyTable">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                 <th>Applied For</th>
                                <th>Image</th>
                                <th>Stream</th>
                                <th>Level</th>
                                <th>Phone</th>
                                <th>Father's Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            foreach ($admissionData as $key => $value) {
                            ?>
                                <tr class="border">
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value->FullName ?></td>
                                     <td><?php echo $value->AppliedFor ?></td>
                                    <td><img src="<?php echo $value->Image == null ? UPLOAD_URL . '/logo.jpg' : $value->Image; ?>" class="img img-thumbnail img-responsive w-50" alt=""></td>
                                    <td><?php echo $value->AppliedFor=="College"?$value->Stream:"" ?></td>
                                    <td><?php echo $value->AppliedFor=="School"? $value->Level:"" ?></td>
                                    <td><?php echo $value->MobileNo ?></td>
                                    <td><?php echo $value->FatherName ?></td>
                                    <td><a href="individualDetail.php?studentID=<?php echo $value->admissionId ?>" class="btn btn-success"><i class="fas fa-eye"></i> View</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Include/footer.php';
?>