<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporanpdf_antara extends CI_Controller {
    public function __construct()
        {   
            parent::__construct();
            $this->load->library('pdf');
            $this->load->model('model_antara');
        }
    public function cetak()
        {
            $this->load->view('cetakpdf_antara', $data);
        }
    public function cetakpdf()
        {
            $data['laporan'] = $this->model_antara->exportpdf();
            $this->load->view('cetakpdf_antara', $data);
    }   
}