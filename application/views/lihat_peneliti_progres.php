                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<?php echo anchor('progres','Data Laporan Progres Penelitian',array('class'=>'btn btn-primary btn-sm')) ?>
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
                                                    <?php echo anchor('progres/upload/'.$r->id_pengajuan,'Submit'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->