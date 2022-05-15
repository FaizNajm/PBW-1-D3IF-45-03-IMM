<?php
$sql = "SELECT * FROM Orders LIMIT 30";

//range record 16 - 25
$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";
//or
$sql = "SELECT * FROM Orders LIMIT 15, 10";