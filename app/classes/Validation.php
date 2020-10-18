<?php
namespace app\classes;

Class Validation {
    private $validade = [];

    public function validate($post) {

        foreach($post as  $key => $value){
            $this->validate[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }
        return (object) $this->validate;
    }


}
?>