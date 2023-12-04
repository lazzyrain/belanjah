<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
    }

    public function index()
    {
        $data = [
            'title' => titleName('Situs belanja online dimana aja kapan aja dengan mudah'),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('layout/footer');
    }
}
