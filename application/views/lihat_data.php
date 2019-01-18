                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <?php echo anchor('user/post','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Lengkap</th>
                                                <th>Nama Pengguna</th>
                                                <th>Jenis Kelamin</th>
												<th>Tanggal Lahir</th>
												<th>No Ponsel</th>
												<th>Alamat</th>
												<th>Kata Sandi</th>
												<th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->namalengkap ?></td>
                                                <td><?php echo $r->namapengguna ?></td>
                                                <td><?php echo $r->jeniskelamin ?></td>
												<td><?php echo $r->tanggal_lahir ?></td>
												<td><?php echo $r->nohp ?></td>
												<td><?php echo $r->alamat ?></td>
												<td><?php echo md5($r->katasandi) ?></td>
												<td><?php echo $r->jabatan ?></td>
                                                <td class="center">
                                                    <?php echo anchor('user/update/'.$r->id_pengguna,'Ubah'); ?> | 
                                                    <?php echo anchor('user/delete/'.$r->id_pengguna,'Hapus'); ?>
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
                <!-- /. ROW  -->