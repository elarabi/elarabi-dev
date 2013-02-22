<?php 
class ObjectModel {
    // The record data
    private $_data = array();

    // For the testing purpose lets simulate a list of rows for this Model
    private $_rows = array();

    public function __construct() {
        $this->init();
        return $this;
    }
    public function init(){
        $this->_rows = array();
        for ($i=1; $i < 11 ; $i++) {
            $fname = $this->_generateName($i);
            $lname = $this->_generateName($i);
            $row = array(
               // 'id' => $i,
                'fname' => $fname,
                'lname' => $lname,
                'email' => $fname.$lname.'@sample.net',
                'profession' => 'Kind Of Services',
                'location' => 'Calgary, AB CA',
            );
            $this->_rows[$i] = $row;
        }
    }
    public function get($field=null){
        if($field) {
            return (isset($this->_data[$field])?$this->_data[$field]:null);
        } else {
            return $this->_data;
        }
    }
    public function set($val, $field=null){
        if($field) {
            $this->_data[$field] = $value;
        } else {
            $this->_data = is_array($val)?$val:array($val);
        }
    }
    public function find($id){
        if (is_array($this->_rows)) {
            $this->set($this->_rows[$id]);
            return $this;
        }
        return null;
    }
    public function fetchAll(){
        return $this->_rows;
    }
    private function _generateName($i){
        $maxChar = rand(5,8);
        $name = chr(ord('a')+$i);
        do {
            $name .= chr(rand(ord('a'), ord('z')));
        } while (strlen($name) < $maxChar);
        return ucfirst($name);
    }
}