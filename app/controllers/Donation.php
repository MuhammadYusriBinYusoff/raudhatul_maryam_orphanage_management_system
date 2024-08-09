<?php

class Donation extends Controller
{
    public function index()
    {
        $data = $this->model('Item_model')->getAllItem();
        $this->view('templates/header');
        $this->view('donation/viewDonation', $data);
        $this->view('templates/footer');
    }

    public function requestDonation()
    {
        $this->view('templates/header');
        $this->view('donation/requestDonation');
        $this->view('templates/footer');
    }

    public function addRequest()
    {
        if ($this->model('Item_model')->createItem($_POST) > 0) {
            header('Location: ' . BASEURL . '/donation');
            exit;
        }
    }

    public function manageDonation()
    {
        $data = $this->model('Item_model')->getAllItem();
        $this->view('templates/header');
        $this->view('donation/manageDonation',$data);
        $this->view('templates/footer');
    }

    public function deleteDonation()
    {
        $this->view('templates/header');
        $this->view('donation/deleteDonation');
        $this->view('templates/footer');
    }

    public function deleteRequest($id)
    {
        $data = $this->model('Item_model')->getItemById($id);
        if ($this->model('Item_model')->deleteItem($id)) {
            if ($this->model('History_model')->createHistory($data)) {
                //$this->model('History_model')->resetAutoIncrement();
                header('Location: ' . BASEURL . '/donation/deleteDonation');
            exit;
            // echo("ssss");
            // echo $data['itemName'];
            // exit;
            }
        }
    }

    public function searchRequest($id)
    {
        $data = $this->model('Item_model')->getItemById($id);
        $this->view('templates/header');
        $this->view('donation/updateDonation',$data);
        $this->view('templates/footer');
    }

    public function updateRequest()
    {
        if ($this->model('Item_model')->updateItem($_POST) > 0) {
            header('Location: ' . BASEURL . '/donation');
            exit;
        }
    }

}