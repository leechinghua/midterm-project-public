<?php

require __DIR__ . "./config/pdo-connect.php";

$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

if (!empty($id)) {
  $sql = "DELETE FROM orders WHERE id = $id";
  $pdo->query($sql);
}

$comeFrom = "orders.php";
if (!empty($_SERVER['HTTP_REFERER'])) {
  $comeFrom = $_SERVER['HTTP_REFERER'];
}

header("Location: " . $comeFrom);