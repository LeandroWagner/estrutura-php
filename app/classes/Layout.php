<?php

namespace app\classes;

CLass Layout {

    private $view;

    public function add($view) {

        $this->view = $view;

    }

    public function load() {
        return "../app/views/{$this->view}.php";

    }

    public function master($master) {
        return "../app/views/{$master}.php";

    }



}



?>