                <div class="row">
						<div class="col-md-12">
                        
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('pengajuan/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_pengajuan']?>" name="id_pengajuan">
                                <div class="form-group">
                                    <label>Nomor Registrasi</label>
                                    <input type="text" class="form-control"  name="no_regis" value="<?php echo $record['no_regis']?>">
                                </div>
								<div class="form-group">
                                    <label>Nama Dosen</label>
                                    <input type="text" class="form-control"  name="nama_dosen" value="<?php echo $record['nama_dosen']?>">
                                </div>
                               <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" class="form-control" name="nip" value="<?php echo $record['nip']?>">
                                </div>
                                <div class="form-group">
                                    <label>NIDN</label>
                                    <input type="text" class="form-control" name="nidn" value="<?php echo $record['nidn']?>">
                                </div>
                                <div class="form-group">
                                    <label>Jurusan / Fakultas</label>
                                    <input type="text" class="form-control"  name="jurusan" value="<?php echo $record['jurusan']?>">
                                </div>
								<div class="form-group">
									<label>File Proposal</label> <br>
										<input type="radio" name="file_prop" value="Ada" <?php echo set_radio('file_prop','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="file_prop" value="Tidak Ada" <?php echo set_radio('file_prop','Tidak ada'); ?>/> Tidak Ada
								</div>
                                 <div class="form-group">
                                    <label>File RAB</label> <br>
                                        <input type="radio" name="file_rab" value="Ada" <?php echo set_radio('file_rab','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="file_rab" value="Tidak Ada" <?php echo set_radio('file_rab','Tidak ada'); ?>/> Tidak Ada 
                                 
                                </div>
                                <div class="form-group">
                                    <label>File Turnitin</label> <br>
                                        <input type="radio" name="file_turnitin" value="Ada" <?php echo set_radio('file_turnitin','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="file_turnitin" value="Tidak Ada" <?php echo set_radio('file_turnitin','Tidak ada'); ?>/> Tidak Ada
                                
                                </div>
                                <div class="form-group">
                                    <label>ID Litapdimas</label> <br>
                                        <input type="radio" name="id_litap" value="Ada" <?php echo set_radio('id_litap','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="id_litap" value="Tidak Ada" <?php echo set_radio('id_litap','Tidak ada'); ?>/> Tidak Ada
                                
                                </div>
                           
                                 <div class="form-group">
                                    <label>Status Litapdimas</label> <br>
                                        <input type="radio" name="status_litap" value="Peneliti" <?php echo set_radio('status_litap','Peneliti'); ?> /> Peneliti &emsp;
										<input type="radio" name="status_litap" value="Administrator" <?php echo set_radio('status_litap','Administrator'); ?>/> Administrator &emsp;
										<input type="radio" name="status_litap" value="Reviewer" <?php echo set_radio('status_litap','Reviewer'); ?> /> Reviewer
                                
                                </div>
                           
                                   <div class="form-group">
                                    <label>Akun Sinta</label> <br>
                                        <input type="radio" name="akun_sinta" value="Terverifikasi" <?php echo set_radio('status_litap','Terverifikasi'); ?> /> Terverifikasi &emsp;
										<input type="radio" name="akun_sinta" value="Belum Terverifikasi" <?php echo set_radio('status_litap','Belum Terverifikasi'); ?>/> Belum Terverifikasi
                                        
                                </div>
                                  <div class="form-group">
                                    <label>Akun HKI Personal</label> <br>
                                        <input type="radio" name="akun_hki" value="Ada" <?php echo set_radio('akun_hki','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="akun_hki" value="Tidak Ada" <?php echo set_radio('akun_hki','Tidak ada'); ?>/> Tidak Ada
                                
                                </div>
                                  <div class="form-group">
                                    <label>Status NIDN</label> <br>
                                        <input type="radio" name="nidn_br" value="Terverifikasi" <?php echo set_radio('nidn_br','Terverifikasi'); ?> /> Terverifikasi &emsp;
										<input type="radio" name="nidn_br" value="Belum Terverifikasi" <?php echo set_radio('nidn_br','Belum Terverifikasi'); ?>/> Belum Terverifikasi
                                
                                </div>
                                <div class="form-group">
                                    <label>Tugas Belajar</label> <br>
                                        <input type="radio" name="tugas_bel" value="Iya" <?php echo set_radio('tugas_bel','Iya'); ?> /> Iya &emsp;
										<input type="radio" name="tugas_bel" value="Tidak" <?php echo set_radio('tugas_bel','Tidak'); ?>/> Tidak 
                                
                                </div>
                                  <div class="form-group">
                                    <label>Akun Digilib</label> <br>
                                        <input type="radio" name="akun_digilib" value="Ada" <?php echo set_radio('akun_digilib','Ada'); ?> /> Ada &emsp;
										<input type="radio" name="akun_digilib" value="Tidak Ada" <?php echo set_radio('akun_digilib','Tidak ada'); ?>/> Tidak Ada 
                                
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control"  name="catatan" value="<?php echo $record['catatan']?>">
                                </div>
                              
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Ubah</button> | 
                                <?php echo anchor('pengajuan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form> 
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->