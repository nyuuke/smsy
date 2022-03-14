<?php
include "../utils/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles/sidebar.module.css?v=<?php echo time(); ?>">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
    <div class="nav-bar">
        <h1>EPI SMS</h1>
        <div class="links" id="link-usage">
            <?php
            foreach (array(
                "student" => ["information" => "information", "emploi de temp" => "timing", "note matiere" => "note"],
                "teacher" => ["classes" => "classes", "emploi de temp" => "timing"],
                "Administrator" => ["users" => "manage-users", "Bloquer" => "block"]
            ) as $key => $value) {
                echo "<p>$key</p>";
                echo "<ul>";
                foreach ($value as $element => $el) {
                    echo "<li><a href='./$key/$el.php'>$element</a></li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
        <div class="account">
        </div>
    </div>
    <script src="../javascript/sideBar.js"></script>
</body>

</html>