                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div> 
                <!-- /. ROW  -->
	
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('peneliti_lapakhir/awal'); ?>
								
									<input type="hidden" value="<?php echo $record['id_pengajuan']?>" name="id_pengajuan">
								
								<div class="form-group">
                                    <label>Id Peneliti</label>
                                    <input type="text" class="form-control" name="id_peneliti" readonly value="<?php echo $record['id_peneliti']?>">
                                </div>

                                <div class="form-group">
                                    <label>Nama Peneliti</label>
                                    <input type="text" class="form-control"  name="nama_dosen" readonly value="<?php echo $record['nama_dosen']?>">
                                </div>

                                <div class="form-group">
                                    <label>Fakultas</label>
                                    <input type="text" class="form-control"  name="id_fak" readonly value="<?php echo $record['id_fak']?>">
                                </div>

                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" class="form-control"  name="id_jur" readonly value="<?php echo $record['id_jur']?>">
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
										<div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input type="text" class="form-control datepicker"  data-date-format="yyyy-mm-dd" name="tgl1">
										</div>
									<input type="hidden" id="dtp_input2" value=""/>
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
                                    <label>Uraian</label>
                                    <input type="text" class="form-control"  name="uraian">
                                </div>
                                
								<div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" class="form-control"  name="jumlah">
                                </div>
								
								<form>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('peneliti_lapakhir','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->
				