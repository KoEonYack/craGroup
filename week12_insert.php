<?php
    require('db_connect.php');

    $nickname = $_POST['nickname'];
    $message = $_POST['message'];

    $sql = "INSERT INTO board_list (name, message) VALUES({$nickname},{$message});";
    mysqli_query($conn,$sql);

?>

<script>
   history.back();
</script>
