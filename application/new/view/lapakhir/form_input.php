                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div> 
                <!-- /. ROW  -->
	
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('lapakhir/awal'); ?>
								<div class="form-group">
                                    <label>ID Peneliti</label>
                                    <input type="text" class="form-control" name="id_peneliti">
                                </div>
                                <div class="form-group">
                                    <label>Nama Peneliti</label>
                                    <input type="text" class="form-control"  name="nama_peneliti">
                                </div>
                               
								<div class="form-group">
                                    <label>Logbook</label> <br>
										<input type="radio" name="logbook" value="Ada" <?php echo set_radio('logbook','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="logbook" value="Tidak Ada" <?php echo set_radio('logbook','Tidak ada'); ?>/> Tidak Ada
                                     </div>
							
                               <div class="form-group">
                                    <label>Nomor Kegiatan</label>
                                    <input type="text" class="form-control"  name="nomor_keg">
                                </div>
								<div class="form-group">
                                    <label>Nama Kegiatan</label>
                                    <input type="text" class="form-control"  name="nama_keg">
                                </div>
								<div class="form-group">
                                    <label>Tanggal Kegiatan</label>
                                    <input type="text" class="form-control"  name="tgl1">
                                </div>
								<div class="form-group">
                                    <label>Capaian</label>
                                    <input type="text" class="form-control"  name="capaian">
                                </div>
								<div class="form-group">
                                    <label>Kendala</label>
                                    <input type="text" class="form-control"  name="kendala">
                                </div>
								<div class="form-group">
                                    <label>Link Kegiatan</label>
                                    <input type="text" class="form-control"  name="link">
                                </div>
								<div class="form-group">
                                    <label>Rancangan Anggaran Biaya</label> <br>
										<input type="radio" name="rab" value="Ada" <?php echo set_radio('rab','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="rab" value="Tidak Ada" <?php echo set_radio('rab','Tidak ada'); ?>/> Tidak Ada
                                     </div>
								 <div class="form-group">
                                    <label>Tanggal Kegiatan</label>
                                    <input type="text" class="form-control"  name="tgl2">
                                </div>
                               <div class="form-group">
                                    <label>Uraian</label>
                                    <input type="text" class="form-control"  name="uraian">
                                </div>
								<div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" class="form-control"  name="jumlah">
                                </div>
								
								<form>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('lapakhir','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->