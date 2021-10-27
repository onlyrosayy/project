<?php

session_start();
session_unset();
sesson_destroy();
header("Location ../index.php")