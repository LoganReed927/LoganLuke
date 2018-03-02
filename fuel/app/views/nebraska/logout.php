<?php
session_start();
sessions_unset();
session_destroy();
header('location: login.php');