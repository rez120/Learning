<?php



class Validator{
    public static function validate( $val){

        return htmlspecialchars(trim($val));
        
    }
}