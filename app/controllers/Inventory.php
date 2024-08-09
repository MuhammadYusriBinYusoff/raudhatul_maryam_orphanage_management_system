<?php

class Inventory extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('inventory/addItemInventory');
        $this->view('templates/footer');
    }

    public function addInventory()
    {
        if ($this->model('Storage_model')->createInventory($_POST)) {
            header('Location: ' . BASEURL . '/inventory');
            exit;
        }
    }

    public function editInventoryPage()
    {
        $data = $this->model('Storage_model')->getAllInventory();
        $this->view('templates/header');
        $this->view('inventory/editInventory', $data);
        $this->view('templates/footer');
    }

    public function deleteInventory($id)
    {
        if ($this->model('Storage_model')->deleteInventory($id)) {
            header('Location: ' . BASEURL . '/inventory/editInventoryPage');
            exit;
        }
    }

    public function updateInventory()
    {
        if ($this->model('Storage_model')->updateInventory($_POST)) {
            header('Location: ' . BASEURL . '/inventory/editInventoryPage');
            exit;
        }
    }

}
