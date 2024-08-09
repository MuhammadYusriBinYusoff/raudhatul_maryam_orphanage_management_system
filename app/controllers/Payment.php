<?php

class Payment extends Controller
{
    public function index()
    {
        $this->view('payment/payment');
    }

    public function checkout()
    {
        $this->view('payment/checkout', $_POST);
    }

    public function successPayment()
    {
        $this->view('payment/success', $_POST);
    }

}