                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <?php echo anchor('lapakhir/awal','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID Peneliti</th>
                                                <th>Nama Peneliti</th>
                                                <th>Log Book</th>
                                                <th>Nomor Kegiatan</th>
												<th>Nama Kegiatan</th>
												<th>Tanggal</th>
												<th>Capaian</th>
												<th>Kendala</th>
                                                <th><i>Link</i></th>
                                                <th>RAB</th>
												<th>Tanggal</th>
												<th>Uraian</th>
												<th>Jumlah</th>
												<th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php $no=1; foreach ($record->result() as $r) { ?> 
                                            <tr class="gradeU">
                                                <td><?php echo $r->id_peneliti ?></td>
                                                <td><?php echo $r->nama_peneliti ?></td>
                                                <td><?php echo $r->logbook ?></td>
                                                <td><?php echo $r->nomor_keg ?></td>
                                                <td><?php echo $r->nama_keg ?></td>
												<td><?php echo $r->tgl1 ?></td>
												<td><?php echo $r->capaian ?></td>
                                                <td><?php echo $r->kendala ?></td>
                                                <td><?php echo $r->link ?></td>
												<td><?php echo $r->rab ?></td>
												<td><?php echo $r->tgl2 ?></td>
												<td><?php echo $r->uraian ?></td>
												<td><?php echo $r->jumlah ?></td>
												<td class="center">
                                                    <?php echo anchor('lapakhir/edit/'.$r->id_peneliti,'Ubah'); ?> | 
                                                    <?php echo anchor('lapakhir/delete/'.$r->id_peneliti,'Hapus'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<?php echo anchor('lapakhir/action','Cetak Excel',array('class'=>'btn btn-success btn-sm')) ?>
							<?php echo anchor('Laporanpdf_lapakhir/cetakpdf','Cetak Pdf',array('class'=>'btn btn-danger btn-sm')) ?>
							
							
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