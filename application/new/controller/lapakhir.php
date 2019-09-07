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
            $id_peneliti  = $this->input->post('id_peneliti',true);
            $nama_peneliti   =  $this->input->post('nama_peneliti',true);
			$logbook   =  $this->input->post('logbook',true);
            $nomor_keg   =  $this->input->post('nomor_keg',true);
			$nama_keg   =  $this->input->post('nama_keg',true);
			$tgl1   =  $this->input->post('tgl1',true);
			$capaian   =  $this->input->post('capaian',true);
            $kendala   =  $this->input->post('kendala',true);
            $link   =  $this->input->post('link',true);
            $rab   =  $this->input->post('rab',true);
            $tgl2   =  $this->input->post('tgl2',true);
            $uraian   =  $this->input->post('uraian',true);
            $jumlah   =  $this->input->post('jumlah',true);
            $data       =  array(   'id_peneliti'=>$id_peneliti,
                                    'nama_peneliti'=>$nama_peneliti,
									'logbook'=>$logbook,
									'nomor_keg'=>$nomor_keg,
									'nama_keg'=>$nama_keg,
                                    'tgl1'=>$tgl1,
									'capaian'=>$capaian,
                                    'kendala'=>$kendala,
                                    'link'=>$link,
                                    'rab'=>$rab,
                                    'tgl2'=>$tgl2,
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
           $id_peneliti  = $this->input->post('id_peneliti',true);
            $nama_peneliti   =  $this->input->post('nama_peneliti',true);
			$logbook   =  $this->input->post('logbook',true);
            $nomor_keg   =  $this->input->post('nomor_keg',true);
			$nama_keg   =  $this->input->post('nama_keg',true);
			$tgl1   =  $this->input->post('tgl1',true);
			$capaian   =  $this->input->post('capaian',true);
            $kendala   =  $this->input->post('kendala',true);
            $link   =  $this->input->post('link',true);
            $rab   =  $this->input->post('rab',true);
            $tgl2   =  $this->input->post('tgl2',true);
            $uraian   =  $this->input->post('uraian',true);
            $jumlah   =  $this->input->post('jumlah',true);
           
                  $data =  array(   'id_peneliti'=>$id_peneliti,
                                    'nama_peneliti'=>$nama_peneliti,
									'logbook'=>$logbook,
									'nomor_keg'=>$nomor_keg,
									'nama_keg'=>$nama_keg,
                                    'tgl1'=>$tgl1,
									'capaian'=>$capaian,
                                    'kendala'=>$kendala,
                                    'link'=>$link,
                                    'rab'=>$rab,
                                    'tgl2'=>$tgl2,
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
        $id_peneliti=  $this->uri->segment(3);
        $this->db->where('id_peneliti',$id_peneliti);
        $this->db->delete('lapakhir');
        redirect('lapkahir');
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
  $pengajuan = new PHPExcel();

  $pengajuan->setActiveSheetIndex(0);

  $table_columns = array( "Nama Dosen", "NIP", "NIDN", "Jurusan / Fakultas", "File Proposal", "File RAB", "File Turnitin", "ID Litapdimas", "Status Litapdimas", "Akun Sinta", "Akun HKI Personal", "NIDN Bermasalah", "Tugas Belajar", "Akun Digilib", "Catatan");

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
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nip);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nidn);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->jurusan);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->file_prop);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->file_rab);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->file_turnitin);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->id_litap);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->status_litap);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->akun_sinta);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->akun_hki);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->nidn_br);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->tugas_bel);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->akun_digilib);
   $pengajuan->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->catatan);
   $excel_row++;
  }

  $pengajuan_writer = PHPExcel_IOFactory::createWriter($pengajuan, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="pengajuan penelitian.xls"');
  $pengajuan_writer->save('php://output');
 }
	
	public function grafik()
    {
        $data['pengajuan'] = $this->model_pengajuan->grafik();
        $this->load->view('grafik/grafik_pengajuan', $data);
    }
	public function grafik_fakultas()
    {
        $data['pengajuan'] = $this->model_pengajuan->grafik();
        $this->load->view('grafik/grafik_pengajuan_fakultas', $data);
    }
	public function grafik_dokumen()
    {
        $data['pengajuan'] = $this->model_pengajuan->grafik();
        $this->load->view('grafik/grafik_pengajuan_dokumen', $data);
    }
	public function grafik_alitap()
    {
        $data['pengajuan'] = $this->model_pengajuan->grafik();
        $this->load->view('grafik/grafik_pengajuan_a-litap', $data);
    }
	public function grafik_asinta()
    {
        $data['pengajuan'] = $this->model_pengajuan->grafik();
        $this->load->view('grafik/grafik_pengajuan_a-sinta', $data);
    }
	}
	
  ?>