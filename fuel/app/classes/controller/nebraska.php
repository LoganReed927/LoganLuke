<?php

use Model\Nebraska;

class Controller_Nebraska extends Controller{
    public function action_index()
    {
        $layout = View::forge('nebraska/index');//loads template for page
        $nav = View::forge('nebraska/nav');
        $carosel = View::forge('nebraska/carosel');
        $places = View::forge('nebraska/places');
        $footer = View::forge('nebraska/footer');

        $layout->nav = Response::forge($nav);
        $layout->carosel = Response::forge($carosel);
        $layout->places = Response::forge($places);
        $layout->footer = Response::forge($footer);
        return $layout;
    }
}
