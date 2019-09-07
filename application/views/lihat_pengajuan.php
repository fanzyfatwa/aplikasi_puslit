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
                            <!-- <?php echo form_open('pengajuan/urut') ?>
                            <select name="pilih">
								<option>-- Tahun --</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
							</select>
							<input type="submit" name="cek" value="CEK">
							<?php echo form_close() ?> -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                            	<th>Tahun</th>
												<th>Nomor Registrasi</th>
												<th>Id Peneliti</th>
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
                                                <th>Tahun</th>
												<th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            <?php
											if (!empty($record)) {
												foreach ($record as $row) {
													?>
													<tr>
													<td><?= $row->tahun?></td>
													<td><?= $row->no_regis?></td>
													<td><?= $row->id_peneliti?></td>
													<td><?= $row->nip?></td>
													<td><?= $row->nidn?></td>
													<td><?= $row->nama_dosen?></td>
													<td><?= $row->namafakultas?></td>
													<td><?= $row->namajurusan?></td>
													<td><?= $row->file_prop?></td>
													<td><?= $row->file_rab?></td>
													<td><?= $row->file_turnitin?></td>
													<td><?= $row->id_litap?></td>
													<td><?= $row->status_litap?></td>
													<td><?= $row->akun_sinta?></td>
													<td><?= $row->akun_hki?></td>
													<td><?= $row->nidn_br?></td>
													<td><?= $row->tugas_bel?></td>
													<td><?= $row->akun_digilib?></td>
													<td><?= $row->catatan?></td>
													<td><?= $row->tahun?></td>
													<td>
													 <a href="<?php echo base_url().'pengajuan/edit/'. $row->id_pengajuan?>"> 
														<button type="button" name="edit" class="glyphicon glyphicon-edit"></button> </a>
													<a href="<?php echo base_url().'pengajuan/delete/'. $row->id_pengajuan?>"> 
														<button type="button" name="delete" class="glyphicon glyphicon-remove"></button> </a>
                                                    <!-- <?php echo anchor('antara/edit/'.$row->id_antara,'Ubah'); ?> | 
                                                    <?php echo anchor('antara/delete/'.$row->id_antara,'Hapus'); ?> -->
                                                </td>
													</tr>
												<?php }
											} ?>
                                                
											
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<?php echo anchor('pengajuan/action','Cetak Excel',array('class'=>'btn btn-success btn-sm')) ?>
							
							
								<li><?php echo anchor('pengajuan/grafik_dosen_fak','Grafik Dosen yang Daftar Proposal per-Fakultas') ?> </li>
								<li><?php echo anchor('pengajuan/grafik_pro_fak','Grafik Jumlah Proposal per-Fakultas') ?> </li>
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->