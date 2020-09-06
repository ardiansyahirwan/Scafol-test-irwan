<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

   public function index()
   {
      $data['judul'] = 'Landing Page Scafol Irwan';
      $this->load->view('templates/header', $data);
      $this->load->view('list');
      $this->load->view('modals-item');
      $this->load->view('modals-add');
      $this->load->view('templates/footer');
   }
}
