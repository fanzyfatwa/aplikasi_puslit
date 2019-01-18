<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporanpdf_pengajuan extends CI_Controller {
    public function __construct()
        {   
            parent::__construct();
            $this->load->library('pdf');
            $this->load->model('model_pengajuan');
        }
    public function cetak()
        {
            $this->load->view('cetakpdf_pengajuan', $data);
        }
    public function cetakpdf()
        {
            $data['pengajuan'] = $this->model_pengajuan->exportpdf();
            $this->load->view('cetakpdf_pengajuan', $data);
    }   
}