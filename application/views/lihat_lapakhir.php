                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <!--<?php echo anchor('lapakhir/awal','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?> -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Id Peneliti</th>
                                                <th>Nama Peneliti</th>
                                                <th>Fakultas</th>
                                                <th>Jurusan</th>
                                                <th>Log Book</th>
                                                <th>Nomor Kegiatan</th>
												<th>Nama Kegiatan</th>
												<th>Tanggal</th>
												<th>Capaian</th>
												<th>Kendala</th>
                                                <th><i>Link</i></th>
                                                <th>RAB</th>
												<th>Uraian</th>
												<th>Jumlah</th>
												<th>Opsi</th>
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
                                                <td><?php echo $row->namafakultas?></td>
                                                <td><?php echo $row->namajurusan?></td>
                                                <td><?php echo $row->logbook ?></td>
                                                <td><?php echo $row->nomor_keg ?></td>
                                                <td><?php echo $row->nama_keg ?></td>
												<td><?php echo $row->tgl1 ?></td>
												<td><?php echo $row->capaian ?></td>
                                                <td><?php echo $row->kendala ?></td>
                                                <td><?php echo $row->link ?></td>
												<td><?php echo $row->rab ?></td>
												<td><?php echo $row->uraian ?></td>
												<td><?php echo $row->jumlah ?></td>
												<td class="center">
												
                                                <a href="<?php echo base_url().'lapakhir/delete/'. $row->id_lapakhir?>"> 
                                                        <button type="button" name="delete" class="glyphicon glyphicon-remove"></button> </a>

                                                </td>
                                            </tr>
                                        <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<li>	<?php echo anchor('lapakhir/grafik_lapakhir_fak','Grafik Dosen yang Sudah Laporan Akhir per-Fakultas') ?> </li>
							
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->