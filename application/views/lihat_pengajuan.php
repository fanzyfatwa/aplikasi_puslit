                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <?php echo anchor('pengajuan/awal','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
												<th>Nomor Registrasi</th>
                                                <th>NIP</th>
                                                <th>NIDN</th>
                                                <th>Nama Dosen</th>
												<th>Fakultas </th>
												<th>Jurusan </th>
                                                <th>File Proposal</th>
												<th>File RAB</th>
												<th>File Turtinin</th>
												<th>Id Litapdimas</th>
												<th>Status Litapdamas</th>
                                                <th>Akun Sinta</th>
                                                <th>Akun HKI</th>
                                                <th>Status NIDN</th>
                                                <th>Tugas Belajar</th>
                                                <th>Akun Digilib</th>
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
												<td><?php echo $r->id_fak ?></td>
												<td><?php echo $r->id_jur ?></td>
                                                <td><?php echo $r->file_prop ?></td>
                                                <td><?php echo $r->file_rab ?></td>
												<td><?php echo $r->file_turnitin ?></td>
												<td><?php echo $r->id_litap ?></td>
                                                <td><?php echo $r->status_litap ?></td>
                                                <td><?php echo $r->akun_sinta ?></td>
                                                <td><?php echo $r->akun_hki ?></td>
                                                <td><?php echo $r->nidn_br ?></td>
                                                <td><?php echo $r->tugas_bel ?></td>
                                                <td><?php echo $r->akun_digilib ?></td>
                                                 <td><?php echo $r->catatan ?></td>
												<td class="center">
                                                    <?php echo anchor('pengajuan/edit/'.$r->id_pengajuan,'Ubah'); ?> | 
                                                    <?php echo anchor('pengajuan/delete/'.$r->id_pengajuan,'Hapus'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<?php echo anchor('pengajuan/action','Cetak Excel',array('class'=>'btn btn-success btn-sm')) ?>
							<?php echo anchor('Laporanpdf_pengajuan/cetakpdf','Cetak Pdf',array('class'=>'btn btn-danger btn-sm')) ?>
							
								<li><?php echo anchor('pengajuan/grafik_fakultas','Grafik berdasarkan Fakultas') ?> </li>
								<li><?php echo anchor('pengajuan/grafik_dokumen','Grafik Kelengkapan Dokumen Pengajuan Penelitian') ?> </li>
								<li><?php echo anchor('pengajuan/grafik_asinta','Grafik Akun SINTA') ?> </li>
								<li><?php echo anchor('pengajuan/grafik_alitap','Grafik Akun Litapdimas') ?> </li>
								<li><?php echo anchor('#','Grafik-grafik Lainnya') ?> </li>
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->