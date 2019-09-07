<?php
	class Pengajuan extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_pengajuan');
		}
		public function index(){
			$data = array(	'title'	=> 'Rekap Data Kelengkapan Administrasi Pengajuan Penelitian',
						'isi'	=> 'lihat_pengajuan');
			
			$data['record']=  $this->model_pengajuan->tampildata();
			
			$this->load->view('layout/wrapper',$data);

		}
		
	
  function awal()
    {
			
       if(isset($_POST['submit'])){
            // proses data
            $id_pengajuan  = $this->input->post('id_pengajuan',true);
			$id_peneliti  = $this->input->post('id_peneliti',true);
    $tahun  = $this->input->post('tahun',true);
			$no_regis  = $this->input->post('no_regis',true);
            $nip       =  $this->input->post('nip',true);
            $nidn   =  $this->input->post('nidn',true);
            $nama_dosen   =  $this->input->post('nama_dosen',true);
			$id_fak    = $this->input->post('id_fak',true);
			$id_jur  =  $this->input->post('id_jur',true);
            $file_prop   =  $this->input->post('file_prop',true);
			$file_rab   =  $this->input->post('file_rab',true);
			$file_turnitin   =  $this->input->post('file_turnitin',true);
			$id_litap   =  $this->input->post('id_litap',true);
            $status_litap   =  $this->input->post('status_litap',true);
            $akun_sinta   =  $this->input->post('akun_sinta',true);
            $akun_hki   =  $this->input->post('akun_hki',true);
            $nidn_br   =  $this->input->post('nidn_br',true);
            $tugas_bel   =  $this->input->post('tugas_bel',true);
            $akun_digilib   =  $this->input->post('akun_digilib',true);
            $catatan   =  $this->input->post('catatan',true);
            $data       =  array(   'id_pengajuan'=>$id_pengajuan,
									'id_peneliti'=>$id_peneliti,
        'tahun'=>$tahun,
									'no_regis'=>$no_regis,
									'nip'=>$nip,
                                    'nidn'=>$nidn,
                                    'nama_dosen'=>$nama_dosen,
									'id_fak'=>$id_fak,
									'id_jur'=>$id_jur,
									'file_prop'=>$file_prop,
									'file_rab'=>$file_rab,
                                    'file_turnitin'=>$file_turnitin,
									'id_litap'=>$id_litap,
                                    'status_litap'=>$status_litap,
                                    'akun_sinta'=>$akun_sinta,
                                    'akun_hki'=>$akun_hki,
                                    'nidn_br'=>$nidn_br,
                                    'tugas_bel'=>$tugas_bel,
                                    'akun_digilib'=>$akun_digilib,
                                    'catatan'=>$catatan);
            $this->db->insert('pengajuan',$data);
            redirect('pengajuan');
        }
        else{
			
			$data = array(	'title'	=> 'Tambah Data',
							'fakultas' => $this->model_pengajuan->getDataFakultas(),
							'fak' => 'fakultas',
							'isi'	=> 'pengajuan/form_input');
						$this->load->view('layout/wrapper',$data);
		} 
    }
 function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id_pengajuan  = $this->input->post('id_pengajuan',true);
			$id_peneliti  = $this->input->post('id_peneliti',true);
    $tahun  = $this->input->post('tahun',true);
			$no_regis  = $this->input->post('no_regis',true);
            $nip       =  $this->input->post('nip',true);
            $nidn   =  $this->input->post('nidn',true);
            $nama_dosen   =  $this->input->post('nama_dosen',true);
			$id_fak    = $this->input->post('id_fak',true);
			$id_jur   =  $this->input->post('id_jur',true);
            $file_prop   =  $this->input->post('file_prop',true);
            $file_rab   =  $this->input->post('file_rab',true);
            $file_turnitin   =  $this->input->post('file_turnitin',true);
            $id_litap   =  $this->input->post('id_litap',true);
            $status_litap   =  $this->input->post('status_litap',true);
            $akun_sinta   =  $this->input->post('akun_sinta',true);
            $akun_hki   =  $this->input->post('akun_hki',true);
            $nidn_br   =  $this->input->post('nidn_br',true);
            $tugas_bel   =  $this->input->post('tugas_bel',true);
            $akun_digilib   =  $this->input->post('akun_digilib',true);
            $catatan   =  $this->input->post('catatan',true);
           
                  $data =  array(   'id_peneliti'=>$id_peneliti,
									'no_regis'=>$no_regis,
                'tahun'=>$tahun,
									'nip'=>$nip,
                                    'nidn'=>$nidn,
                                    'nama_dosen'=>$nama_dosen,
									'id_fak'=>$id_fak,
									'id_jur'=>$id_jur,
                                    'file_prop'=>$file_prop,
                                    'file_rab'=>$file_rab,
                                    'file_turnitin'=>$file_turnitin,
                                    'id_litap'=>$id_litap,
                                    'status_litap'=>$status_litap,
                                    'akun_sinta'=>$akun_sinta,
                                    'akun_hki'=>$akun_hki,
                                    'nidn_br'=>$nidn_br,
                                    'tugas_bel'=>$tugas_bel,
                                    'akun_digilib'=>$akun_digilib,
                                    'catatan'=>$catatan);
             $this->db->where('id_pengajuan',$id_pengajuan);
             $this->db->update('pengajuan',$data);
             redirect('pengajuan');
        }
        else{
        	$data = array(	'title' => 'Tambah Data',
              'fakultas' => $this->model_pengajuan->getDataFakultas(),
              'fak' => 'fakultas',
              'isi' => 'pengajuan/form_edit');
            $id_pengajuan=  $this->uri->segment(3);
            $data['record']=  $this->model_pengajuan->get_one($id_pengajuan)->row_array();
            $this->load->view('layout/wrapper',$data);
        }
    }
    function delete()
    {
        $id_pengajuan=  $this->uri->segment(3);
		$hapuspengajuan = $this->model_pengajuan->hapuspengajuan($id_pengajuan);
		if($hapuspengajuan){
			echo "<script>alert('data berhasil dihapus'); </script>";
				redirect('pengajuan','refresh');
		} else{
			echo "<script>alert('data gagal dihapus'); </script>";
		}
		/*$this->db->where('id_pengajuan',$id_pengajuan);
        $this->db->delete('pengajuan');
        redirect('pengajuan');*/
    }
	function cetakexcel(){
        $data = array( 'title' => 'Laporan Pengajuan Penelitian',
		'pengajuan' => $this->model_pengajuan->listing());
		$this->load->view('excel_pengajuan',$data);
    }
	
	function action()
 {
  $this->load->model("model_pengajuan");
  $this->load->library("excel");
  $pengajuan = new PHPExcel();

  $pengajuan->setActiveSheetIndex(0);

  $table_columns = array( "Nama Dosen", "ID Peneliti", "NIP", "NIDN", "Fakultas", "Jurusan","File Proposal", "File RAB", "File Turnitin", "ID Litapdimas", "Status Litapdimas", "Akun Sinta", "Akun HKI Personal", "NIDN Bermasalah", "Tugas Belajar", "Akun Digilib", "Catatan");

  $column = 0;

  foreach($table_columns as $field)
  {
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $pengajuan_data = $this->model_pengajuan->fetch_data();

  $excel_row = 2;

  foreach($pengajuan_data as $row)
  {
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama_dosen);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->id_peneliti);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nip);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->nidn);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->namafakultas);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->namajurusan);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->file_prop);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->file_rab);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->file_turnitin);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->id_litap);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->status_litap);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->akun_sinta);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->akun_hki);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->nidn_br);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->tugas_bel);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->akun_digilib);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->catatan);
   $excel_row++;
  }

  $pengajuan_writer = PHPExcel_IOFactory::createWriter($pengajuan, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="pengajuan penelitian.xls"');
  $pengajuan_writer->save('php://output');
 }
	
	function grafik_dosen_fak()
    {
        $x['data']=$this->model_pengajuan->data_dosen_fak();
        $this->load->view('grafik/grafik_dosen_fak',$x);
    }

  function grafik_pro_fak()
    {
        $x['data']=$this->model_pengajuan->data_pro_fak();
        $this->load->view('grafik/grafik_pro_fak',$x);
    }
	
	
	function get_jurusan(){
		$this->load->model('model_pengajuan');
		$id_fak = $this->input->post('id_fak');
		$dataJurusan = $this->model_pengajuan->getDataJurusan($id_fak);
		echo '<select name="id_jur" id="id_jur" class="form-control">';
		foreach($dataJurusan as $a){
			echo '<option value="'.$a->id_jur.'">'.$a->namajurusan.'</option>';	
		}
		echo '</select>';
	}

  // function urut(){
  //     $input = $this->input->post('pilih');
 
 
  //     if(isset($_POST['cek']) == 2016 && $input == 2016){
  //       $data['tampil'] = $this->model_pengajuan->get2016();
  //     } 
  //     elseif (isset($_POST['cek']) == 2017 && $input == 2017) {
  //       $data['tampil'] = $this->model_pengajuan->get2017();
  //     } 
  //     elseif (isset($_POST['cek']) == 2018 && $input == 2018) {
  //       $data['tampil'] = $this->model_pengajuan->get2018();
  //     } 
  //     elseif (isset($_POST['cek']) == 2019 && $input == 2019) {
  //       $data['tampil'] = $this->model_pengajuan->get2019();
  //     }
  //     $data = array(  'title' => 'Rekap Data Kelengkapan Administrasi Pengajuan Penelitian',
  //           'isi' => 'lihat_pengajuan');
  //     $this->load->view('layout/wrapper',$data);
  //     //$this->load->view('lihat_pengajuan',$data);
  // }
	}
  ?>