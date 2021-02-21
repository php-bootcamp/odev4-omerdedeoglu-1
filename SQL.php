<?php

abstract class SQL
{
 public $connectionStatus = false;

 public abstract function create(SQLQuery $query);
 public abstract function update(SQLQuery $query);
 public abstract function delete(SQLQuery $query);

 public function setParamas(array $params)
 {
  echo "setParam Function works</br>";
 }

 public function isConnected()
 {
  echo "isConnected method works</br>";
 }
}
