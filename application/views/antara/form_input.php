                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div> 
                <!-- /. ROW  -->
	
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('peneliti_antara/awal'); ?>
								 
									<input type="hidden" value="<?php echo $record['id_pengajuan']?>" name="id_pengajuan">
                                 
								<div class="form-group">
                                    <label>Nomor Registrasi</label>
                                    <input type="text" class="form-control" name="no_regis" readonly value="<?php echo $record['no_regis']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Dosen</label>
                                    <input type="text" class="form-control"  name="nama_dosen" readonly value="<?php echo $record['nama_dosen']?>">
                                </div>
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" class="form-control" name="nip" readonly value="<?php echo $record['nip']?>">
                                </div>
                                <div class="form-group">
                                    <label>NIDN</label>
                                    <input type="text" class="form-control" name="nidn" readonly value="<?php echo $record['nidn']?>">
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
                                    <label>Laporan Keuangan 60%</label> <br>
										<input type="radio" name="lap_uang60" value="Ada" <?php echo set_radio('lap_uang60','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="lap_uang60" value="Tidak Ada" <?php echo set_radio('lap_uang60','Tidak ada'); ?>/> Tidak Ada
                                </div>
                                <div class="form-group">
                                    <label>Draf Naskah</label> <br>
										<input type="radio" name="naskah" value="Ada" <?php echo set_radio('naskah','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="naskah" value="Tidak Ada" <?php echo set_radio('naskah','Tidak ada'); ?>/> Tidak Ada
                                </div>
								<div class="form-group">
                                    <label>Progres HKI</label> <br>
										<input type="radio" name="hki" value="Sudah Diajukan" <?php echo set_radio('hki','Sudah Diajukan'); ?> /> Sudah Diajukan &emsp;
										<input type="radio" name="hki" value="Belum Diajukan" <?php echo set_radio('hki','Belum Diajukan'); ?>/> Belum Diajukan &emsp;
										<input type="radio" name="hki" value="Sertifikat Sudah Terbit" <?php echo set_radio('hki','Sertifikat Sudah Terbit'); ?> /> Sertifikat Sudah Terbit 
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control" name="catatan">
                                </div>
								<form>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('peneliti_antara','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->