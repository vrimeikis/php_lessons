<?php

setcookie('logged_in', false, time() - 1);
header('Location: http://phppamokos.test/9_lesson/login.php');
