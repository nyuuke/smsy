<?php
$cookie_value = "s-info";
setcookie("routing", $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <p>information student</p>
    <script src="../../javascript/student.js?v=<?php echo time(); ?>"></script>
</body>

</html>