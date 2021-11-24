<?php
require('../src/config/db_config.php');

$id = $_GET['id'];
$query = "DELETE FROM drakor WHERE id=$id";
$delete = mysqli_query($mysqli, $query);

header("Location:../index_kdrama.php?delete=".$delete);