<?php

trait SQLCrud
{
 public function create(SQLQuery $query)
 {
  echo "crete method works</br>";
 }
 public function update(SQLQuery $query)
 {
  echo "update method works</br>";
 }
 public function delete(SQLQuery $query)
 {
  echo "delete method works</br>";
 }
 public function get(SQLQuery $query)
 {
  echo "get method works</br>";
 }
 public function first(SQLQuery $query)
 {
  echo "first method works</br>";
 }
}
