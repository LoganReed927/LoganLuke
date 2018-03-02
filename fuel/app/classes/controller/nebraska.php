<?php

use Model\Nebraska;

class Controller_Nebraska extends Controller
{
    public function action_index()
    {
        $session = Session::instance();
        $username = $session->get('username');
        $layout = View::forge('nebraska/index');//loads template for page
        $layout->set_safe('username',$username);
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
    public function action_carhenge(){
        $session = Session::instance();
        $username = $session->get('username');
        $layout = View::forge('nebraska/carhenge');
        $layout->set_safe('username',$username);
        $nav = View::forge('nebraska/nav');
        $footer = View::forge('nebraska/footer');

        $layout->nav = Response::forge($nav);
        $layout->footer = Response::forge($footer);
        return $layout;
    }
    public function action_zooAqua(){
        $layout = View::forge('nebraska/zooAqua');
        $nav = View::forge('nebraska/nav');
        $footer = View::forge('nebraska/footer');

        $layout->nav = Response::forge($nav);
        $layout->footer = Response::forge($footer);
        return $layout;
    }
    public function action_chimney(){
        $layout = View::forge('nebraska/chimney');
        $nav = View::forge('nebraska/nav');
        $footer = View::forge('nebraska/footer');

        $layout->nav = Response::forge($nav);
        $layout->footer = Response::forge($footer);
        return $layout;
    }
    public function action_login(){
        $layout = View::forge('nebraska/login');
        $nav = View::forge('nebraska/nav');
        $loginForm = View::forge('nebraska/loginForm');
        $footer = View::forge('nebraska/footer');

        $layout->nav = Response::forge($nav);
        $layout->loginForm = Response::forge($loginForm);
        $layout->footer = Response::forge($footer);

        return $layout;
    }
    public function action_check(){

        $username = Input::post('username');
        $password = Input::post('password');
        if(($username === 'ct310' && md5($password) === '48f2f942692b08ec9de1ef9ada5230a3') ||
            ($username === 'Luke' && md5($password) === 'C9FC92FA9C0E7ECD192F8B84B826D422')) {
            Session::create();
            Session::set('username', $username);
            Session::set('userid', 12345);
            $status = 'success';
            $content = View::forge('nebraska/success');
            $content -> set_safe('status',$status);
            return $content;
        } else {
            $content = View::forge('nebraska/login');
            $content->set_safe('status','error');
            return $content;
        }
    }
}




























