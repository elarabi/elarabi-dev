<?php
class HtmlView {
    public $html = array();
    public function __construct(){
        return  $this;
    }
    public function __toString() {
       return explode('', $this->html);
    }
}