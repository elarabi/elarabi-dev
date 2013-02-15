<?php 
class IndexController {
    private $_model;
    private $_view;
    public function __construct(){
        $this->_model = new ObjectModel();
        $this->_view = new stdClass();
    }
 public function Index(){
     $this->_view->searchForm = 'search.php';
     $this->_view->entries =  $this->_model->fetchAll();
     return $this->_view;
 }
 public function Edit(){
    $id = isset($_GET['id'])?intval($_GET['id']):null;
     $this->_view->form = 'object.php';
     return $this->_view; 
 }
 public function Search(){
    $this->_view->searchForm = 'search.php';
    if (isset($_POST['submit'])) {
	     $this->_view->entries = $this->_model->fetchAll();
    }
    return $this->_view;
 }
 public function render(){
     include '../Views/template.php'; 
 }
}