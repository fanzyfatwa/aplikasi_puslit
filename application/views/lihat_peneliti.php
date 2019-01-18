                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<?php echo anchor('antara','Data Laporan Antara',array('class'=>'btn btn-primary btn-sm')) ?>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
												<th>No.</th>
                                                <th>Nomor Registrasi</th>
                                                <th>NIP</th>
                                                <th>NIDN</th>
                                                <th>Nama Dosen</th>
												<th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php $no=1; foreach ($record->result() as $r) { ?> 
                                            <tr class="gradeU">
												<td><?php echo $no?></td>
                                                <td><?php echo $r->no_regis ?></td>
                                                <td><?php echo $r->nip ?></td>
                                                <td><?php echo $r->nidn ?></td>
                                                <td><?php echo $r->nama_dosen ?></td>
												<td class="center">
                                                    <?php echo anchor('peneliti/awal/'.$r->id_pengajuan,'Submit'); ?>
                                                    <!-- <?php echo anchor('antara/delete/'.$r->id_antara,'Hapus'); ?> -->
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<?php echo anchor('antara/action','Cetak Excel',array('class'=>'btn btn-success btn-sm')) ?>
							<?php echo anchor('Laporanpdf_antara/cetakpdf','Cetak Pdf',array('class'=>'btn btn-danger btn-sm')) ?>
							
							
							<li>	<?php echo anchor('antara/grafik_fakultas','Grafik berdasarkan Fakultas') ?> </li>
							<li>	<?php echo anchor('antara/grafik_dokumen','Grafik Kelengkapan Dokumen Laporan Antara') ?> </li>
							<li>	<?php echo anchor('antara/grafik_artikel','Grafik Progres Artikel') ?> </li>
							<li>	<?php echo anchor('antara/grafik_hki','Grafik Progres HKI') ?> </li> 
							<li>	<?php echo anchor('#','Grafik-grafik Lainnya') ?> </li>
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->