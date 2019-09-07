                   <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <!--<?php echo anchor('progres/upload','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>-->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID Peneliti</th>
                                                <th>Nama Peneliti</th>
                                                <th>Proposal Publikasi</th>
                                                <th>Upload File</th>
												<!-- <th>Opsi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php
                                            if (!empty($record)) {
                                                foreach ($record as $row) {
                                                    ?>
                                            <tr class="gradeU">
                                                <td><?php echo $row->id_peneliti ?></td>
                                                <td><?php echo $row->nama_dosen ?></td>
                                                <td><?php echo $row->pro_pub ?></td>
												<td><?php echo $row->upload_file ?></td>
												<!-- <td class="center">
                                                   
                                                    <a href="<?php echo base_url().'progres/upload/'. $row->id_progres?>">Submit </a>
                                                </td> -->
                                            </tr>
                                        <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<!--
							<?php echo anchor('progres/action','Cetak Excel',array('class'=>'btn btn-success btn-sm')) ?>
							
							
							<li>	<?php echo anchor('progres/grafik_fakultas','Grafik berdasarkan Fakultas') ?> </li>
							<li>	<?php echo anchor('progres/grafik_dokumen','Grafik Kelengkapan Dokumen Laporan progres') ?> </li>
							<li>	<?php echo anchor('progres/grafik_artikel','Grafik Progres Artikel') ?> </li>
							<li>	<?php echo anchor('progres/grafik_hki','Grafik Progres HKI') ?> </li> 
							<li>	<?php echo anchor('#','Grafik-grafik Lainnya') ?> </li>
							-->
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->