<?php
	class Peneliti_antara extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_peneliti_antara');
		}
		public function index(){
			$data = array(	'title'	=> 'Daftar Peneliti untuk Laporan Antara',
						'isi'	=> 'lihat_peneliti_antara');
			
			$data['record']=  $this->model_peneliti_antara->tampildata();
			$this->load->view('layout/wrapper',$data);
		}


  function awal()
    {
       if(isset($_POST['submit'])){
            // proses data
            $id_antara  = $this->input->post('id_antara',true);
			$id_pengajuan  = $this->input->post('id_pengajuan',true);
			$no_regis = $this->input->post('no_regis',true);
            $nama_dosen   =  $this->input->post('nama_dosen',true);
            $nip       =  $this->input->post('nip',true);
            $nidn   =  $this->input->post('nidn',true);
            $id_fak    = $this->input->post('id_fak',true);
			$id_jur    = $this->input->post('id_jur',true);
            $logbook   =  $this->input->post('logbook',true);
			$lap_uang60   =  $this->input->post('lap_uang60',true);
			$naskah   =  $this->input->post('naskah',true);
            $hki   =  $this->input->post('hki',true);
            $catatan   =  $this->input->post('catatan',true);
            $data       =  array(	'id_antara'=>$id_antara,
									'id_pengajuan'=>$id_pengajuan,
                                    'no_regis'=>$no_regis,
									'nama_dosen'=>$nama_dosen,
                                    'nip'=>$nip,
                                    'nidn'=>$nidn,
                                    'id_fak'=>$id_fak,
									'id_jur'=>$id_jur,
									'logbook'=>$logbook,
									'lap_uang60'=>$lap_uang60,
									'naskah'=>$naskah,
                                    'hki'=>$hki,
                                    'catatan'=>$catatan);
            $this->db->insert('laporan',$data);
            redirect('antara');
        }
        else{
			$data = array(	'title'	=> 'Tambah Data',
						'isi'	=> 'antara/form_input');
			$id_pengajuan=  $this->uri->segment(3);
            $data['record']=  $this->model_peneliti_antara->get_one($id_pengajuan)->row_array();
            $this->load->view('layout/wrapper',$data);
		} 
    }
 function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id_antara  = $this->input->post('id_antara',true);
            $no_regis = $this->input->post('no_regis',true);
            $nama_dosen   =  $this->input->post('nama_dosen',true);
            $nip       =  $this->input->post('nip',true);
            $nidn   =  $this->input->post('nidn',true);
            $logbook   =  $this->input->post('logbook',true);
            $lap_uang60   =  $this->input->post('lap_uang60',true);
            $naskah   =  $this->input->post('naskah',true);
            $hki   =  $this->input->post('hki',true);
            $catatan   =  $this->input->post('catatan',true);
            
                  $data =  array(   'no_regis'=>$no_regis,
                                    'nama_dosen'=>$nama_dosen,
                                    'nip'=>$nip,
                                    'nidn'=>$nidn,
									'logbook'=>$logbook,
									'lap_uang60'=>$lap_uang60,
									'naskah'=>$naskah,
                                    'hki'=>$hki,
                                    'catatan'=>$catatan);
            
             $this->db->where('id_antara',$id_antara);
             $this->db->update('laporan',$data);
             redirect('antara');
        }
        else{
        	$data = array(	'title'	=> 'Ubah Data',
						'isi'	=> 'antara/form_edit');
            $id_antara=  $this->uri->segment(3);
            $data['record']=  $this->model_peneliti->get_one($id_peneliti)->row_array();
            $this->load->view('layout/wrapper',$data);
        }
    }
    function delete()
    {
        $id_antara=  $this->uri->segment(3);
        $this->db->where('id_antara',$id_antara);
        $this->db->delete('laporan');
        redirect('antara');
    }
	}
	
  ?>