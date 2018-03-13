<?php

include('session.php');
Session::__init();
Session::session_destroy();

header('Location:../admin/admin_login.php');
