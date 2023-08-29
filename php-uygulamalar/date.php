<?php
 //date_default_timezone_set('Europe/Istanbul');
// echo date("d.m.Y H:i:s");


$IslemZamani = date("Y-m-d",
strtotime('last day of february 2023')
);

echo $IslemZamani;