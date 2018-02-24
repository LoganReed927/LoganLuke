<?php

use Model\Nebraska;

class Controller_Nebraska extends Controller
{
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

    public function get_login($id = null)
    {
        $layout = View::forge('nebraska/login');
        $nav = View::forge('nebraska/nav');
        $footer = View::forge('nebraska/footer');
        $nebraska = new Nebraska($id);
        $layout->set_safe('nebraska', $nebraska);
        $layout->nav = Response::forge($nav);
        $layout->footer = Response::forge($footer);
        return $layout;
    }

    public function post_login($id = null)
    {
        $nebraska = new Nebraska($id);
        $nebraska->id = $_POST['id'];
        $nebraska->name = $_POST['name'];
        $nebraska->save();
        Response::redirect('index.php/nebraska');
    }
}

