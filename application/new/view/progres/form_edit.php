                <div class="row">
						<div class="col-md-12">
                        
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('progres/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_peneliti']?>" name="id_peneliti">
                                
                                
                                <div class="form-group">
                                    <label>Nama Peneliti</label>
                                    <input type="text" class="form-control"  name="nama_peneliti" value="<?php echo $record['nama_peneliti']?>">
                                </div>
                                <div class="form-group">
                                    <label>Bahan Artikel</label>
                                    <input type="text" class="form-control" name="bahan_artikel" value="<?php echo $record['bahan_artikel']?>">
                                </div>
                                <div class="form-group">
                                    <label>Dummy Book</label>
                                    <input type="text" class="form-control" name="dummy_book" value="<?php echo $record['dummy_book']?>">
                                </div>
                                <div class="form-group">
                                    <label>Proposal Publikasi</label>
                                    <input type="text" class="form-control"  name="pro_pub" value="<?php echo $record['pro_pub']?>">
                                </div>
								<div class="form-group">
									<label>Upload Bukti</label> <br>
										<input type="text" class="form-control"  name="upload_bukti" value="<?php echo $record['upload_bukti']?>"></div>
                               
                               
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Ubah</button> | 
                                <?php echo anchor('progres','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form> 
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->