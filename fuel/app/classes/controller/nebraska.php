<?php

use Model\Nebraska;

class Controller_Nebraska extends Controller{
    public function action_index()
    {
        $layout = View::forge('nebraska/index');//loads template for page
        return $layout;
    }
}
