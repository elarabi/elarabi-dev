<?php 
class ObjectModel {
 private $_data = array();
 public function get($field=null){
	if($filed) {
		return (isset($this->_data[$fields]))?$this->_data[$fields]:null;
	} else {
		return $this->_data;
	}
 }
 public function set($val, $field=null){
     if($filed) {
		$this->_data[$field] = $value;
	} else {
		$this->_data = is_array($val)?$val:array($val);
	}

 }
 public function fechAll(){
     return array($this->_data);
 }
}