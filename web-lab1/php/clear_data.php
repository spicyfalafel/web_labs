<?php
session_start();

if (isset($_SESSION['history'])) {
    $_SESSION['history'] = array();
}

include "set_data_in_table.php";