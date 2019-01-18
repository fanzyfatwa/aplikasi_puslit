<?php
	class Antara extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_antara');
		}
		public function index(){
			$data = array(	'title'	=> 'Rekap Data Kelengkapan Administrasi Laporan Antara',
						'isi'	=> 'lihat_antara');
			
			$data['record']=  $this->model_antara->tampildata();
			$this->load->view('layout/wrapper',$data);
		}


  function awal()
    {
       if(isset($_POST['submit'])){
            // proses data
            $id_antara  = $this->input->post('id_antara',true);
			$no_regis = $this->input->post('no_regis',true);
            $nama_dosen   =  $this->input->post('nama_dosen',true);
            $nip       =  $this->input->post('nip',true);
            $nidn   =  $this->input->post('nidn',true);
			$fakultas    = $this->input->post('fakultas',true);
            $jurusan    = $this->input->post('jurusan',true);
            $logbook   =  $this->input->post('logbook',true);
			$lap_uang60   =  $this->input->post('lap_uang60',true);
			$naskah   =  $this->input->post('naskah',true);
			$artikel   =  $this->input->post('artikel',true);
            $hki   =  $this->input->post('hki',true);
            $catatan   =  $this->input->post('catatan',true);
            $data       =  array(   'id_antara'=>$id_antara,
                                    'no_regis'=>$no_regis,
									'nama_dosen'=>$nama_dosen,
                                    'nip'=>$nip,
                                    'nidn'=>$nidn,
									'fakultas'=>$fakultas,
                                    'jurusan'=>$jurusan,
									'logbook'=>$logbook,
									'lap_uang60'=>$lap_uang60,
									'naskah'=>$naskah,
                                    'artikel'=>$artikel,
                                    'hki'=>$hki,
                                    'catatan'=>$catatan);
            $this->db->insert('laporan',$data);
            redirect('antara');
        }
        else{
			$data = array(	'title'	=> 'Tambah Data',
						'isi'	=> 'antara/form_input');
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
			$fakultas    = $this->input->post('fakultas',true);
            $jurusan    = $this->input->post('jurusan',true);
            $logbook   =  $this->input->post('logbook',true);
            $lap_uang60   =  $this->input->post('lap_uang60',true);
            $naskah   =  $this->input->post('naskah',true);
            $artikel   =  $this->input->post('artikel',true);
            $hki   =  $this->input->post('hki',true);
            $catatan   =  $this->input->post('catatan',true);
            
                  $data =  array(   'no_regis'=>$no_regis,
                                    'nama_dosen'=>$nama_dosen,
                                    'nip'=>$nip,
                                    'nidn'=>$nidn,
									'fakultas'=>$fakultas,
                                    'jurusan'=>$jurusan,
									'logbook'=>$logbook,
									'lap_uang60'=>$lap_uang60,
									'naskah'=>$naskah,
                                    'artikel'=>$artikel,
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
            $data['record']=  $this->model_antara->get_one($id_antara)->row_array();
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
	public function cetakexcel(){

        $data = array( 'title' => 'Laporan Antara',
		'laporan' => $this->model_antara->listing());
		$this->load->view('excel_antara',$data);
    }
	
	function action()
 {
  $this->load->model("model_antara");
  $this->load->library("excel");
  $laporan = new PHPExcel();

  $laporan->setActiveSheetIndex(0);

  $table_columns = array("Nama Dosen","NIP", "NIDN",  "Fakultas", "Jurusan", "Logbook", "Laporan Keuangan 60%", "Draf Naskah", "Progres Artikel", "Progres HKI", "Catatan");

  $column = 0;

  foreach($table_columns as $field)
  {
   $laporan->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $laporan_data = $this->model_antara->fetch_data();

  $excel_row = 2;

  foreach($laporan_data as $row)
  {
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama_dosen);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nip);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nidn);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->fakultas);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->jurusan);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->logbook);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->lap_uang60);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->naskah);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->artikel);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->hki);
   $laporan->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->catatan);
   $excel_row++;
  }

  $laporan_writer = PHPExcel_IOFactory::createWriter($laporan, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="Laporan Antara.xls"');
  $laporan_writer->save('php://output');
 }

 public function grafik()
    {
        $data['laporan'] = $this->model_antara->grafik();
        $this->load->view('grafik_antara', $data);
    }

	public function grafik_fakultas()
    {
        $data['laporan'] = $this->model_antara->grafik();
        $this->load->view('grafik/grafik_antara_fakultas', $data);
    }
	public function grafik_dokumen()
    {
        $data['laporan'] = $this->model_antara->grafik();
        $this->load->view('grafik/grafik_antara_dokumen', $data);
    }
	public function grafik_artikel()
    {
        $data['laporan'] = $this->model_antara->grafik();
        $this->load->view('grafik/grafik_antara_p-artikel', $data);
    }
	public function grafik_hki()
    {
        $data['laporan'] = $this->model_antara->grafik();
        $this->load->view('grafik/grafik_antara_p-hki', $data);
    }
	}
	
  ?>