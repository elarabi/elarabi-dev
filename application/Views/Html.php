<?php
class HtmlView {
    public $html = array();
    public $flushMessages = array();
    /**
     *  Default Constructor ....
     */
    public function __construct(){
        //return  $this;
    }
    /**
     * Provide the class the default output metod 
     */
    public function __toString() {
       $this->htmlBody = implode('', $this->html);
       $this->flushMessage = implode('', $this->flushMessages);
       include APPLICATION_ROOT_PATH.'Views/'.'layout.php';
    }
    public function render($scriptname='index.php'){
        ob_start();
        include_once APPLICATION_ROOT_PATH.'Views/'.$scriptname;
        $alertMessage = ob_get_contents();
        ob_end_clean();
        $this->flushMessages[] = $alertMessage; 
    }
}