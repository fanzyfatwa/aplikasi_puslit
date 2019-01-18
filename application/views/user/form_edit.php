                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Ubah Data Pegawai
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('user/update'); ?>
								<input type="hidden" value="<?php echo $record['id_pengguna']?>" name="id">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="namalengkap" value="<?php echo $record['namalengkap']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <input type="text" class="form-control" name="namapengguna" value="<?php echo $record['namapengguna']?>">
                                </div>
								<div class="form-group">
									<label>Jenis Kelamin</label> <br>
										<select name="jeniskelamin" class="form-control" >
											<option value="pria">Pria</option>
											<option value="wanita">Wanita</option>
										</select> 
								</div>
								<div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $record['tanggal_lahir']?>">
                                </div>
								<div class="form-group">
                                    <label>No Handphone</label>
                                    <input type="tel" class="form-control" name="nohp" value="<?php echo $record['nohp']?>">
                                </div>
								<div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $record['alamat']?>">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control"  name="katasandi" >
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control"  name="jabatan" value="<?php echo $record['jabatan']?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Ubah</button> | 
                                <?php echo anchor('user','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form> 
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->