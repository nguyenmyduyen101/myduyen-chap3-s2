<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
$subject = isset($_POST['subject']) ? $_POST['subject'] : [];
?>
    <div class="card">

        <div class="card-body">
            <?php
               
               

                foreach ($subject as $item) {
                    $randomColorIndex = array_rand($colors); // Lấy một chỉ mục ngẫu nhiên từ mảng $colors
                    $randomColor = $colors[$randomColorIndex]; // Lấy màu sắc ngẫu nhiên từ mảng $colors
                    echo "<button class='btn btn-$randomColor' style='margin-right: 4px;'>$item</button>";
                }

                
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>