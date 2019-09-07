<?php
	class Lapakhir extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_lapakhir');
		}
		public function index(){
			$data = array(	'title'	=> 'Rekap Data Kelengkapan Laporan Akhir',
						'isi'	=> 'lihat_lapakhir');
			
			$data['record']=  $this->model_lapakhir->tampildata();
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
			$data = array(	'title'	=> 'Tambah Data',
						'isi'	=> 'lapakhir/form_input');
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
            $id_peneliti=  $this->uri->segment(3);
            $data['record']=  $this->model_lapakhir->get_one($id_peneliti)->row_array();
            $this->load->view('layout/wrapper',$data);
        }
    }
    function delete()
    {
        
        $id_lapakhir=  $this->uri->segment(3);
    $hapuslapakhir = $this->model_lapakhir->hapuslapakhir($id_lapakhir);
    if($hapuslapakhir){
      echo "<script>alert('data berhasil dihapus'); </script>";
        redirect('lapakhir','refresh');
    } else{
      echo "<script>alert('data gagal dihapus'); </script>";
    }
    //$id_peneliti=  $this->uri->segment(3);
        //$this->db->where('id_peneliti',$id_peneliti);
        //$this->db->delete('lapakhir');
        //redirect('lapkahir');
    }
	public function cetakexcel(){

        $data = array( 'title' => 'Laporan Akhir',
		'lapakhir' => $this->model_lapakhir->listing());
		$this->load->view('excel_lapakhir',$data);
    }
	
	function action()
 {
  $this->load->model("model_lapakhir");
  $this->load->library("excel");
  $lapakhir = new PHPExcel();

  $lapakhir->setActiveSheetIndex(0);

  $table_columns = array( "Nama Peneliti", "Logbook", "Nomor Kegiatan", "Nama Kegiatan", "Tanggal", "Pencapaian", "Kendala", "Link", "RAB", "Uraian", "Jumlah");

  $column = 0;

  foreach($table_columns as $field)
  {
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $pengajuan_data = $this->model_pengajuan->fetch_data();

  $excel_row = 2;

  foreach($pengajuan_data as $row)
  {
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama_dosen);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nip);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nidn);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->jurusan);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->file_prop);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->file_rab);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->file_turnitin);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->id_litap);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->status_litap);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->akun_sinta);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->akun_hki);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->nidn_br);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->tugas_bel);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->akun_digilib);
   $lapakhir->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->catatan);
   $excel_row++;
  }

  $lapakhir_writer = PHPExcel_IOFactory::createWriter($lapakhir, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="Pengajuan penelitian.xls"');
  $pengajuan_writer->save('php://output');
 }
	
	function grafik_lapakhir_fak()
    {
        $x['data']=$this->model_lapakhir->data_lapakhir_fak();
        $this->load->view('grafik/grafik_lapakhir_fak',$x);
    }
  }
	
	
  ?>