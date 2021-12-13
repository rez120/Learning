<?php 


class Validator{
    protected $val;
    public function __construct($val){
        $this->val = $val;
    }

    public function validate(){
        return trim(htmlspecialchars($this->val));
    }
}