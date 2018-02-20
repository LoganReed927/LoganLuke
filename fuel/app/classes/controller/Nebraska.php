<?php

use Model\Demo;

class Controller_Nebraska extends Controller{
    public function action_index()
    {
        $layout = View::forge('Nebraska/index');//loads template for page
        return $layout;
    }
}
