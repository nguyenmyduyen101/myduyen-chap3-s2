<?php // HEADER 
require_once "templates/header.php";?>
<?php
// YOUR CODE HERE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $province = $_POST['province'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $subject = $_POST['subject'] ?? '';
}
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php if(isset($province)){echo $province;} ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php if(isset($gender)){
                if($gender=='Male'){
                    echo '<img src="images/male.png"alt="">';
                }
                else {
                    echo '<img src="images/female.png"alt="">';

                }
            }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
                <!-- // YOUR CODE HERE [subject] -->
            <?php
                if (isset($subject)){
                    foreach($subject as $item){
                        echo '<button class='.' "btn btn-primary m-2" '. ">$item</button>";
                    }
                }
            ?>
        </div>
    </div>

<?php // FOOTER 
require_once "templates/footer.php"?>