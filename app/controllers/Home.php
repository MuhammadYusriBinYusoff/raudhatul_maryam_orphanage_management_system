<?php

class Home extends Controller{
    public function index()
    {
        $data['name'] = 'yusri';
        $this->view('templates/header');
       $this->view('home/index', $data);
       $this->view('templates/footer');
    }

    public function about()
    {
        $this->view('templates/header');
       $this->view('home/about');
       $this->view('templates/footer');
    }

    public function team()
    {
        $this->view('templates/header');
       $this->view('home/team');
       $this->view('templates/footer');
    }

    public function gallery()
    {
        $this->view('templates/header');
       $this->view('home/gallery');
       $this->view('templates/footer');
    }

    public function contact()
    {
        $this->view('templates/header');
       $this->view('home/contact');
       $this->view('templates/footer');
    }

}
?>