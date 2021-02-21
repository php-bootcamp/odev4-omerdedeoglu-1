<?php

class SQLQuery implements IQuery
{
 private $table;
 private $bindings;
 private $offset;
 private $limit;
 private $wheres;
 private $action;

 public function setTable(string $table)
 {
  echo "setTable method works</br>";
  return $this;
 }
 public function addBinding(string $key, string $value)
 {
  echo "addBinding method works</br>";
  return $this;
 }
 public function removeBinding(string $key)
 {
  echo "removeBinding method works</br>";
  return $this;
 }
 public function setPaginate(int $limit, int $offset)
 {
  echo "setPaginate method works</br>";
  return $this;
 }
 public function addWhere(string $column, string $operator, string $value)
 {
  echo "addWhere method works</br>";
  return $this;
 }
 public function update()
 {
  echo "update method works</br>";
  return $this;
 }
 public function delete()
 {
  echo "delete method works</br>";
  return $this;
 }
 public function select()
 {
  echo "select method works</br>";
  return $this;
 }
 public function compile()
 {
  echo "compile method works</br>";
 }
}
