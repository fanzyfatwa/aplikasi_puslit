                <div class="row">
						<div class="col-md-12">
                        
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('lapakhir/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_peneliti']?>" name="id">
                                
                                <div class="form-group">
                                    <label>ID Peneliti</label>
                                    <input type="text" class="form-control" name="id_peneliti" value="<?php echo $record['id_peneliti']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Peneliti</label>
                                    <input type="text" class="form-control"  name="nama_peneliti" value="<?php echo $record['nama_peneliti']?>">
                                </div>
                                <div class="form-group">
                                    <label>Log Book</label>
									<input type="radio" name="logbook" value="Ada" <?php echo set_radio('logbook','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="logbook" value="Tidak Ada" <?php echo set_radio('logbook','Tidak ada'); ?>/> Tidak Ada
                                     
                                     </div>
                                <div class="form-group">
                                    <label>Nomor Kegiatan</label>
                                    <input type="text" class="form-control" name="nomor_keg" value="<?php echo $record['nomor_keg']?>">
                                </div>
								<div class="form-group">
                                    <label>Nama Kegiatan</label>
                                    <input type="text" class="form-control" name="nama_keg" value="<?php echo $record['nama_keg']?>">
                                </div>
                                <div class="form-group">
                                    <label>tanggal</label>
                                    <input type="text" class="form-control"  name="tgl1" value="<?php echo $record['tgl1']?>">
                                </div>
								<div class="form-group">
									<label>Capaian</label> <br>
										<input type="radio" name="logbook" value="Ada" <?php echo set_radio('logbook','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="logbook" value="Tidak Ada" <?php echo set_radio('logbook','Tidak ada'); ?>/> Tidak Ada
								</div>
                                <div class="form-group">
                                    <label>Kendala</label> <br>
                                        <input type="radio" name="kendala" value="Ada" <?php echo set_radio('kendala','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="kendala" value="Tidak Ada" <?php echo set_radio('kendala','Tidak ada'); ?>/> Tidak Ada
                                </div>
                                <div class="form-group">
                                    <label>Link</label> <br>
                                        <input type="radio" name="link" value="Ada" <?php echo set_radio('link','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="link" value="Tidak Ada" <?php echo set_radio('link','Tidak ada'); ?>/> Tidak Ada
                                </div>
								<div class="form-group">
                                    <label>Rancangan Anggaran Biaya</label>
									<input type="radio" name="rab" value="Ada" <?php echo set_radio('rab','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="rab" value="Tidak Ada" <?php echo set_radio('rab','Tidak ada'); ?>/> Tidak Ada
                                       </div>
                                <div class="form-group">
                                    <label>tanggal</label>
                                    <input type="text" class="form-control"  name="tgl2" value="<?php echo $record['tgl2']?>">
                                </div>
                               <div class="form-group">
                                    <label>Uraian</label>
                                    <input type="text" class="form-control"  name="uraian" value="<?php echo $record['uraian']?>">
                                </div>
								<div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" class="form-control"  name="jumlah" value="<?php echo $record['jumlah']?>">
                                </div>
                                
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Ubah</button> | 
                                <?php echo anchor('lapakhir','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form> 
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->