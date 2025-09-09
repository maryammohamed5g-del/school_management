<?php
session_start();
// الغاء وحذف اي سيشن موجود في الموقع
session_unset();
session_destroy();

header('location:\school_mangment\home.php'); // كده انا رجعت لصفحة login and pade home
exit();