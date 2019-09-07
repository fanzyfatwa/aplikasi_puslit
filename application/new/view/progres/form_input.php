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
                                <div class="form-group">
                                    <label>Nama Peneliti</label>
                                    <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></td>
                                </div>
                               
								<div class="form-group">
                                    <label>Bahan Artikel</label> <br>
  								   <div class="form-group">
                                 <td><input type="file" name="input_gambar"></td>
                                </div>
								<div class="form-group">
                                    <label>Dummy Book</label> <br>
  								   <div class="form-group">
                                   <td><input type="file" name="input_gambar2"></td>
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
                                    <label>Upload Bukti</label> <br>
  								<div class="form-group">
                                    <td><input type="file" name="input_gambar3"></td>
								</div>
                               
								<form>
                                <input type="submit" name="submit" value="Simpan">
								<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
								<?php echo form_close(); ?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->