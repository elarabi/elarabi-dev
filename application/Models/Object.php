<?php 
class ObjectModel {
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
                'fname' => $fname,
                'lnam' => $lname,
                'email' => $fname.$lname.'@sample.net',
                'profession' => 'Kind Of Services',
                'location' => 'Calgary, AB CA',
            );
            $this->_rows[$i] = $row;
        }
    }
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
    public function find($id){
        if (array_key($this->_rows)) {
            $this->set($this->_rows[$i]);
            return $this;
        }
        return null;
    }
    public function fechAll(){
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