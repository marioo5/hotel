<?php

class PagesController extends Controller{

    public function index() {
        $this->view('index.html', []);
    }


}