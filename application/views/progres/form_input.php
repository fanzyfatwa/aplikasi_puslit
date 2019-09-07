                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div> 
                <!-- /. ROW  -->
	
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open("progres/upload", array('enctype'=>'multipart/form-data')); ?>
                                 <input type="hidden" value="<?php echo $record['id_pengajuan']?>" name="id_pengajuan"> 
                                <div class="form-group">
                                    <label>ID Peneliti</label>
                                    <td><input type="text" class="form-control" name="id_peneliti"  readonly value="<?php echo $record['id_peneliti']?>"></td>
                                </div>
								<div class="form-group">
                                    <label>Nama Peneliti</label>
                                    <td><input type="text" class="form-control" name="nama_dosen"  readonly value="<?php echo $record['nama_dosen']?>"></td>
									
                                </div>
							
								<div class="form-group">
                                    <label>Proposal Publikasi</label> <br>
										<input type="radio" name="input_deskripsi2" value="draft" <?php echo set_radio('input_deskripsi2','pro_pub','Draft'); ?> /> Draft <br>
										<input type="radio" name="input_deskripsi2" value="submitted" <?php echo set_radio('input_deskripsi2','pro_pub','submitted'); ?>/> Submitted <br>
										<input type="radio" name="input_deskripsi2" value="riview" <?php echo set_radio('input_deskripsi2','pro_pub','riview'); ?> /> Riview <br>
										<input type="radio" name="input_deskripsi2" value="published" <?php echo set_radio('input_deskripsi2','pro_pub','published'); ?> /> Published <br>
										<input type="radio" name="input_deskripsi2" value="accepted" <?php echo set_radio('input_deskripsi2','pro_pub','aceepted'); ?> /> Accepted <br>
										<input type="radio" name="input_deskripsi2" value="rejected" <?php echo set_radio('input_deskripsi2','pro_pub','rejected'); ?> /> Rejected <br>
										<input type="radio" name="input_deskripsi2" value="revised" <?php echo set_radio('input_deskripsi2','pro_pub','revised'); ?> /> Revised 
  								</div>
								<div class="form-group">
                                    <label>Upload Data</label> <br>
  								<div class="form-group">
                                    <td><input type="file" name="input_file"></td>
								</div>
								<div class="alert alert-warning">
								<strong>Catatan<font size=2></strong> File yang di upload berbentuk (Rar/Zip), berisikan data (<i>dummy book</i>,
								bahan artikel, file bukti).</font>
									</div>
                               
								<form>
                                <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
								<a href="<?php echo base_url(); ?>"><input type="button" class="btn btn-danger btn-sm" value="Batal"></a>
								<?php echo form_close(); ?>
                                </form>
								
								
								
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->