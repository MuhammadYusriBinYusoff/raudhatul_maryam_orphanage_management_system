<?php

class History extends Controller
{
    public function index()
    {
        $data = $this->model('History_model')->getAllItemHistory();
        $this->view('templates/header');
        $this->view('history/donationHistory',$data);
        $this->view('templates/footer');
    }

    public function viewHistory()
    {
        $data = $this->model('History_model')->getAllItemHistory();
        $this->view('templates/header');
        $this->view('history/donationHistory',$data);
        $this->view('templates/footer');
    }

    public function addHistory()
    {
        if ($this->model('History_model')->createHistory($_POST) > 0) {
            header('Location: ' . BASEURL . '/history');
            exit;
        }
    }

}