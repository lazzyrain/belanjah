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
            'title' => titleName('Main Menu'),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('layout/footer');
    }
}
