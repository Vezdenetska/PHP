<?php

class PageNotFound extends Controller
{
    public function index()
    {
        $this->view('errors/PageNotFound');
    }
}
