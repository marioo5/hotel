<?php

class PagesController extends Controller{

    public function index() {
        $this->view('index.html', []);
    }

    public function bodas() {
        $this->view('bodas.html', []);
    }

    public function contact() {
        $this->view('contact.html', []);
    }

    public function restaurant() {
        $this->view('restaurant.html', []);
    }

    public function rooms() {
        $this->view('rooms.html', []);
    }

    public function rooms_single() {
        $this->view('rooms-single.html', []);
    }


}