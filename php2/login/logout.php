<?php

include "../connect/session.php";

// unset($_SESSION['memberID']);
// unset($_SESSION['youEmail']);
// unset($_SESSION['youNickName']);
// unset($_SESSION['youBirth']);
// unset($_SESSION['youPhone']);
// unset($_SESSION['youGender']);
// unset($_SESSION['youIntro']);

session_unset();
?>

<script>
    location.href="../pages/main.php";
</script>
