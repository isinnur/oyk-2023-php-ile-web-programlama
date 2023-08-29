<?php

$title = 'PHP is awesome!';
//require yoksa hata verir.
require 'index.navbar.php'; //ne kadar yazarasn hepsin, çağırır
require_once 'index.navbar.php'; //sadece ilkini çağırır diğerlerini göz ardı eder. Bir kere çıkması gereken yer. (footer)


include 'index.navbar.php'; //Varsa gösteir yoksa devam eder. (hata verir ama devam eder
//
include_once 'index.navbar.php';