<?php


class Contact extends Route
{

    public function __construct()
    {
        parent::__construct();
        Session::set('active', 'contact');
    }

    public function index()
    {
        $this->view->render('contact/contact');
    }
}