<?php


namespace App\Controllers;


class Router
{

    public function __construct()
    {
        $this->twitterController = new TwitterController();
    }

    public function run()
    {
        $page = 'home';
        $access = filter_input(INPUT_GET, 'page');
    }
}