<?php
	class User extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_user');
		}
		public function index(){
			$data = array(	'title'	=> 'Kelola Data Pegawai',
						'isi'	=> 'lihat_data');
			$data['record']=  $this->model_user->tampildata();
			$this->load->view('layout/wrapper',$data);
		}
  function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $namalengkap       =  $this->input->post('namalengkap',true);
            $namapengguna   =  $this->input->post('namapengguna',true);
			$jeniskelamin       =  $this->input->post('jeniskelamin',true);
			$tanggal_lahir       =  $this->input->post('tanggal_lahir',true);
			$nohp       =  $this->input->post('nohp',true);
            $alamat       =  $this->input->post('alamat',true);
			$katasandi   =  $this->input->post('katasandi',true);
            $jabatan       =  $this->input->post('jabatan',true);
			$data       =  array(   'namalengkap'=>$namalengkap,
                                    'namapengguna'=>$namapengguna,
									'jeniskelamin'=>$jeniskelamin,
									'tanggal_lahir'=>$tanggal_lahir,
									'nohp'=>$nohp,
									'alamat'=>$alamat,
                                    'katasandi'=>$katasandi,
									'jabatan'=>$jabatan);
            $this->db->insert('user',$data);
            redirect('user');
        }
        else{
           $data = array(	'title'	=> 'Tambah Data',
						'isi'	=> 'user/form_input');
            $this->load->view('layout/wrapper',$data);
        }
    }
function update()
    {
        if(isset($_POST['submit'])){
            // proses kategori
           
			$id         =  $this->input->post('id',true);
            $namalengkap       =  $this->input->post('namalengkap',true);
            $namapengguna   =  $this->input->post('namapengguna',true);
			$jeniskelamin       =  $this->input->post('jeniskelamin',true);
			$tanggal_lahir       =  $this->input->post('tanggal_lahir',true);
			$nohp       =  $this->input->post('nohp',true);
            $alamat       =  $this->input->post('alamat',true);
			$katasandi   =  $this->input->post('katasandi',true);
            $jabatan       =  $this->input->post('jabatan',true);
            if(empty($katasandi)){
                 $data  =  array(   'namalengkap'=>$namalengkap,
                                    'namapengguna'=>$namapengguna,
									'jeniskelamin'=>$jeniskelamin,
									'tanggal_lahir'=>$tanggal_lahir,
									'nohp'=>$nohp,
									'alamat'=>$alamat,
									'jabatan'=>$jabatan);
            }
            else{
                  $data =  array(   'namalengkap'=>$namalengkap,
                                    'namapengguna'=>$namapengguna,
									'jeniskelamin'=>$jeniskelamin,
									'tanggal_lahir'=>$tanggal_lahir,
									'nohp'=>$nohp,
									'alamat'=>$alamat,
                                    'katasandi'=>$katasandi,
									'jabatan'=>$jabatan);
            }
             $this->db->where('id_pengguna',$id);
             $this->db->update('user',$data);
             redirect('user');
        }
        else{
        	$data = array(	'title'	=> 'Form Edit',
						'isi'	=> 'user/form_edit');
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_user->get_one($id)->row_array();
            //$this->load->view('operator/form_edit',$data);
            $this->load->view('layout/wrapper',$data);
        }
    }
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_pengguna',$id);
        $this->db->delete('user');
        redirect('user');
    }
	}
	
  ?>