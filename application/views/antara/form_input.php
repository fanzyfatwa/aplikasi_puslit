                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div> 
                <!-- /. ROW  -->
	
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('peneliti/awal'); ?>
								<div class="form-group">
                                    <!-- id pengajuan -->
                                    <input type="hidden" class="form-control" name="id_pengajuan" readonly value="<?php echo $record['id_pengajuan']?>">
                                </div>
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
                                    <label>Jurusan / Fakultas</label>
                                    <input type="text" class="form-control" name="jurusan">
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
                                    <label>Progres Artikel</label> <br>
										<input type="radio" name="artikel" value="Submitted" <?php echo set_radio('artikel','Submitted'); ?> /> Submitted &emsp;
										<input type="radio" name="artikel" value="Draft" <?php echo set_radio('artikel','Draft'); ?>/> Draft &emsp;
										<input type="radio" name="artikel" value="Reviewed" <?php echo set_radio('artikel','Reviewed'); ?> /> Reviewed &emsp;
										<input type="radio" name="artikel" value="Published" <?php echo set_radio('artikel','Published'); ?>/> Published &emsp;
										<input type="radio" name="artikel" value="Accepted" <?php echo set_radio('artikel','Accepted'); ?> /> Accepted &emsp;
										<input type="radio" name="artikel" value="Rejected" <?php echo set_radio('artikel','Rejected'); ?>/> Rejected &emsp;
										<input type="radio" name="artikel" value="Revised" <?php echo set_radio('artikel','Revised'); ?> /> Revised
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
                                <?php echo anchor('antara','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->