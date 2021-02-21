<?php

trait PDOConnector
{
 public function connect()
 {
  echo "PDO Connect method works</br>";
 }
 public function disconnect()
 {
  echo "PDO disconnect method works</br>";
 }
 protected function setParams(array $params)
 {
  echo "PDO setParams method works</br>";
 }
}
