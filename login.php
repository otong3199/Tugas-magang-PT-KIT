<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['username'], $_POST['password'])) {
            echo "Login Sukses";
        } else echo "Username atau Password Salah";
    } else echo "Error: Database connection";
} else echo "Semua field harus di isi";
?>
