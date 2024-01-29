<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "test";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `email`, `qty`,`address`,`pincode`,`selected_model`) VALUES (?,?,?,?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["qty"],$_POST["address"],$_POST["pincode"],$_POST["selected_model"],]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// (D) SEND ORDER VIA EMAIL (OPTIONAL)
//if ($result=="") {
//  $to = "admin@site.com"; // CHANGE TO YOUR OWN!
//  $subject = "ORDER RECEIVED";
//  $message = "";
//  foreach ($_POST as $k=>$v) { $message .= "$k - $v\r\n"; }
//  if (!@mail($to, $subject, $message)) { $result = "Error sending mail!"; }
//}
