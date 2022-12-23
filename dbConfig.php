<?php
// どこに誰が接続するか
$dbName = 'mysql:host=localhost;dbname=imagePosting;charset=utf8';
$userName = 'root';

// エラーが出たらcatch
try {
  $db = new PDO($dbName, $userName);
} catch (\Throwable $th) {
  exit();
}
?>