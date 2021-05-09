<?php session_start();

unset($_SESSION['user_id']);
unset($_SESSION['first_name']);
unset($_SESSION['user_type']);
unset($_SESSION['last_name']);
echo "<script>window.location.href = '../index.php?logout=true';</script>";
exit;

?>