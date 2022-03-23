<?php
session_start();
if (isset($_SESSION['user'])) {
include "header.php";
?>

<div>
    <h1>hola documentos</h1>
</div>

<?php include "footer.php"; ?>




<?php 
} else {
  header("location:../index.php");
}
?>