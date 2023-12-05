<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
    }

    public function index()
    {
        $this->output->set_header('Cache-Control: max-age=10');

        $data = [
            'title' => titleName('Situs belanja online dimana aja kapan aja dengan mudah'),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('shop/index');
        $this->load->view('layout/bottombar');
        $this->load->view('layout/footer');
    }

    public function getProducts()
    {
        $this->load->view('shop/getProducts');
    }
}
