<?php
//TASK ID
$mysql_task_id = "SELECT id FROM tasks ORDER BY id DESC LIMIT 1";
$mysql_task_id_results = $conn->query($mysql_task_id);

//TASK STATUS
$mysql_taskstatus = "SELECT * FROM task_status";
$mysql_taskstatus_results = $conn->query($mysql_taskstatus);

//TASK TYPES
$mysql_task_types = "SELECT * FROM task_types";
$mysql_task_types_results = $conn->query($mysql_task_types);

//TECHNICIANS
$mysql_technicians = "SELECT id, name, lastname FROM technicians";
$mysql_technicians_results = $conn->query($mysql_technicians);

//CHARGES
$mysql_charges = "SELECT * FROM task_charges";
$mysql_charges_results = $conn->query($mysql_charges);

//CURRENCIES
$mysql_currency = "SELECT * FROM task_currency";
$mysql_currency_results = $conn->query($mysql_currency);

//CURRENCIES
$mysql_currency1 = "SELECT * FROM task_currency";
$mysql_currency1_results = $conn->query($mysql_currency1);

//ZONES
$mysql_zones = "SELECT * FROM zones";
$mysql_zones_results = $conn->query($mysql_zones);

//CHANNELS
$mysql_channels = "SELECT * FROM channels";
$mysql_channels_results = $conn->query($mysql_channels);
?>