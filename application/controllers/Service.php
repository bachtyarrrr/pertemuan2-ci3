<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('includes/header');
        $this->load->view('service/index');
        $this->load->view('includes/footer');
    }

    public function notFound()
    {
        echo "Halaman Tidak Ditemukan";
    }
}