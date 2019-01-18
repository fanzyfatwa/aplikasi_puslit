                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <!-- <?php echo anchor('antara/awal','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?> -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nomor Registrasi</th>
                                                <th>NIP</th>
                                                <th>NIDN</th>
                                                <th>Nama Dosen</th>
                                                <th>Jurusan / Fakultas</th>
                                                <th>Logbook</th>
												<th>Laporan Keuangan 60%</th>
												<th>Draf Naskah</th>
												<th>Progres Artikel</th>
                                                <th>Progres HKI</th>
                                                <th>Catatan</th>
												<th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php $no=1; foreach ($record->result() as $r) { ?> 
                                            <tr class="gradeU">
                                                <td><?php echo $r->no_regis ?></td>
                                                <td><?php echo $r->nip ?></td>
                                                <td><?php echo $r->nidn ?></td>
                                                <td><?php echo $r->nama_dosen ?></td>
                                                <td><?php echo $r->jurusan ?></td>
                                                <td><?php echo $r->logbook ?></td>
                                                <td><?php echo $r->lap_uang60 ?></td>
												<td><?php echo $r->naskah ?></td>
												<td><?php echo $r->artikel ?></td>
                                                <td><?php echo $r->hki ?></td>
                                                <td><?php echo $r->catatan ?></td>
												<td class="center">
                                                    <?php echo anchor('antara/edit/'.$r->id_antara,'Ubah'); ?> | 
                                                    <?php echo anchor('antara/delete/'.$r->id_antara,'Hapus'); ?>
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