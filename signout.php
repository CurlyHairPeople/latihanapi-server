<?php

// menjalankan sessions
session_start();
// (DISI)
 
// fungsi untuk menghapus seluruh session
session_destroy();
// (DISI)
 
// redirect ke halaman index.php (halaman login)
header('Location: login.html');
?>