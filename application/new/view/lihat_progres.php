                   <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <?php echo anchor('progres/upload','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID Penelitian</th>
                                                <th>Nama Peneliti</th>
                                                <th>Bahan Artikel</th>
                                                <th>Dummy Book</th>
                                                <th>Proposal Publikasi</th>
                                                <th>Upload Bukti</th>
												<th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php $no=1; foreach ($record->result() as $r) { ?> 
                                            <tr class="gradeU">
                                                <td><?php echo $r->id_peneliti ?></td>
                                                <td><?php echo $r->nama_peneliti ?></td>
                                                <td><?php echo $r->bahan_artikel ?></td>
                                                <td><?php echo $r->dummy_book ?></td>
                                                <td><?php echo $r->pro_pub ?></td>
												<td><?php echo $r->upload_bukti ?></td>
												<td class="center">
                                                    <?php echo anchor('progres/edit/'.$r->id_peneliti,'Ubah'); ?> | 
                                                    <?php echo anchor('progres/delete/'.$r->id_peneliti,'Hapus'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<?php echo anchor('progres/action','Cetak Excel',array('class'=>'btn btn-success btn-sm')) ?>
							<?php echo anchor('Laporanpdf_progres/cetakpdf','Cetak Pdf',array('class'=>'btn btn-danger btn-sm')) ?>
							
							
							<li>	<?php echo anchor('progres/grafik_fakultas','Grafik berdasarkan Fakultas') ?> </li>
							<li>	<?php echo anchor('progres/grafik_dokumen','Grafik Kelengkapan Dokumen Laporan progres') ?> </li>
							<li>	<?php echo anchor('progres/grafik_artikel','Grafik Progres Artikel') ?> </li>
							<li>	<?php echo anchor('progres/grafik_hki','Grafik Progres HKI') ?> </li> 
							<li>	<?php echo anchor('#','Grafik-grafik Lainnya') ?> </li>
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->