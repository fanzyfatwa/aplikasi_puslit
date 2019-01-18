                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('user/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="namalengkap">
                                </div>
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <input type="text" class="form-control" name="namapengguna">
                                </div>
								<div class="form-group">
									<label>Jenis Kelamin</label> <br>
										<select name="jeniskelamin" class="form-control">
											<option value="pria">Pria</option>
											<option value="wanita">Wanita</option>
										</select> 
								</div>
								<div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
								<div class="form-group">
                                    <label>No Handphone</label>
                                    <input type="tel" class="form-control" name="nohp" placeholder="(08xx)-xxxxxxxx"/>
                                </div>
								<div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control"  name="katasandi">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control"  name="jabatan">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('user','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->