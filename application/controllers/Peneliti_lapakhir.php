<?php
	class Peneliti_lapakhir extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_peneliti_lapakhir');
		}
		public function index(){
			$data = array(	'title'	=> 'Daftar Peneliti untuk Laporan Akhir',
						'isi'	=> 'lihat_peneliti_lapakhir');
			
			$data['record']=  $this->model_peneliti_lapakhir->tampildata();
			$this->load->view('layout/wrapper',$data);
		}


  function awal()
    {
       if(isset($_POST['submit'])){
            // proses data
            $id_lapakhir = $this->input->post('id_lapakhir',true);
            $id_peneliti  = $this->input->post('id_peneliti',true);
            $nama_dosen   =  $this->input->post('nama_dosen',true);
            $id_fak    = $this->input->post('id_fak',true);
            $id_jur  = $this->input->post('id_jur',true);
            $logbook   =  $this->input->post('logbook',true);
            $nomor_keg   =  $this->input->post('nomor_keg',true);
            $nama_keg   =  $this->input->post('nama_keg',true);
            $tgl1   =  $this->input->post('tgl1',true);
            $capaian   =  $this->input->post('capaian',true);
            $kendala   =  $this->input->post('kendala',true);
            $link   =  $this->input->post('link',true);
            $rab   =  $this->input->post('rab',true);
            $uraian   =  $this->input->post('uraian',true);
            $jumlah   =  $this->input->post('jumlah',true);
            $data       =  array(   'id_lapakhir'=>$id_lapakhir,
                                    'id_peneliti'=>$id_peneliti,
                                    'nama_dosen'=>$nama_dosen,
                                    'id_fak'=>$id_fak,
                                    'id_jur'=>$id_jur,
                                    'logbook'=>$logbook,
                                    'nomor_keg'=>$nomor_keg,
                                    'nama_keg'=>$nama_keg,
                                    'tgl1'=>$tgl1,
                                    'capaian'=>$capaian,
                                    'kendala'=>$kendala,
                                    'link'=>$link,
                                    'rab'=>$rab,
                                    'uraian'=>$uraian,
                                    'jumlah'=>$jumlah);
            $this->db->insert('lapakhir',$data);
            redirect('lapakhir');
        }
        else{
            $data = array(  'title' => 'Tambah Data',
                        'isi'   => 'lapakhir/form_input');
            $id_pengajuan=  $this->uri->segment(3);
            $data['record']=  $this->model_peneliti_lapakhir->get_one($id_pengajuan)->row_array();
            $this->load->view('layout/wrapper',$data);
        } 
    }
 function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id_lapakhir = $this->input->post('id_lapakhir',true);
			$id_peneliti  = $this->input->post('id_peneliti',true);
            $nama_dosen   =  $this->input->post('nama_dosen',true);
			$logbook   =  $this->input->post('logbook',true);
            $nomor_keg   =  $this->input->post('nomor_keg',true);
			$nama_keg   =  $this->input->post('nama_keg',true);
			$tgl1   =  $this->input->post('tgl1',true);
			$capaian   =  $this->input->post('capaian',true);
            $kendala   =  $this->input->post('kendala',true);
            $link   =  $this->input->post('link',true);
            $rab   =  $this->input->post('rab',true);
            $uraian   =  $this->input->post('uraian',true);
            $jumlah   =  $this->input->post('jumlah',true);
           
                  $data =  array(   'id_peneliti'=>$id_peneliti,
                                    'nama_dosen'=>$nama_dosen,
									'logbook'=>$logbook,
									'nomor_keg'=>$nomor_keg,
									'nama_keg'=>$nama_keg,
                                    'tgl1'=>$tgl1,
									'capaian'=>$capaian,
                                    'kendala'=>$kendala,
                                    'link'=>$link,
                                    'rab'=>$rab,
                                    'uraian'=>$uraian,
                                    'jumlah'=>$jumlah);
             $this->db->where('id_peneliti',$id_peneliti);
             $this->db->update('lapakhir',$data);
             redirect('lapakhir');
        }
        else{
        	$data = array(	'title'	=> 'Ubah Data',
						'isi'	=> 'lapakhir/form_edit');
            $id_antara=  $this->uri->segment(3);
            $data['record']=  $this->model_peneliti->get_one($id_peneliti)->row_array();
            $this->load->view('layout/wrapper',$data);
        }
    }
    function delete()
    {
        $id_antara=  $this->uri->segment(3);
        $this->db->where('id_lapakhir',$id_antara);
        $this->db->delete('lapakhir');
        redirect('lapakhir');
    }
	}
	
  ?>