<?php
$cookie_value = "s-timing";
setcookie("routing", $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../../javascript/fallbacks.js"></script>
</head>

<body>
    <p>timing for student</p>
</body>

</html>