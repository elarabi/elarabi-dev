<?php 
class IndexController {
    private $_model;
    private $_view;
    public function __construct() {
        $this->_model = new ObjectModel();
        $this->_view = new HtmlView(); 
    }
 public function Index() {
     $this->_view->searchForm = 'search.php';
     $this->_view->entries =  $this->_model->fetchAll();
     $this->_view->render('index.php');
 }
 public function Edit() {
     $id = isset($_GET['edit'])?intval($_GET['edit']):null;
     $this->_view->entry = $this->_model->find($id);
     $this->_view->entry->id = $id;
     $this->_view->formTitle = 'Edit record ';
     $this->_view->render('form.php'); 
 }
 public function Add() {
     $this->_view->entry = $this->_model;
     $this->_view->entry->id = 13;
     $this->_view->formTitle = 'Create a new record ';
     $this->_view->render('form.php'); 
 }
 public function Search() {
    $this->_view->searchForm = 'search.php';
    if (isset($_POST['submit'])) {
	     $this->_view->entries = $this->_model->fetchAll();
    }
     $this->_view->render('search.php');
 }
 public function About() {
     /*
      * Model-View-Controller
      */
     $this->_view->render('about.php');
 }
 public function render() {
     // Set the appropriate action and Get data from the mode 
     if (isset ($_GET['add'])) {
         $this->Add();
     } elseif (isset($_GET['about'])) {
         $this->About();
     } elseif(isset($_GET['search'])) {
        $this->Search();
     } elseif (isset ($_GET['edit'])) {
         $this->Edit();
     } else  {
         $this->Index();
     }
     //Render the view 
     echo $this->_view;
 }
}