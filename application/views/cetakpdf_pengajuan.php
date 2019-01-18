<?php
            $pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-3', false);
            $pdf->SetTitle('Daftar Pengajuan Penelitian');
            $pdf->SetHeaderMargin(10);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage('L', 'A4');;
            $i=0;
				$pdf->SetFont('times', 12,9);
            $html='<h3>Daftar Pengajuan Penelitian</h3>
				
                    <table cellspacing="1" bgcolor="#666666" cellpadding="0">
                        <tr bgcolor="#ffffff">
                            <th width="3%" align="center"><b>No</b></th>
							<th width="10%" align="center"><b>NIP</b></th>
                            <th width="10%" align="center"><b>NIDN</b></th>
                            <th width="9%" align="center"><b>Nama dosen</b></th>
							<th width="6%" align="center"><b>Jurusan</b></th>
							<th width="5%" align="center"><b>File Proposal</b></th>
							<th width="4%" align="center"><b>File RAB</b></th>
							<th width="5%" align="center"><b>File Turnitin</b></th>
							<th width="6%" align="center"><b>Id Litapdimas</b></th>
							<th width="7%" align="center"><b>Status Litapdimas</b></th>
							<th width="7%" align="center"><b>Akun Sinta</b></th>
							<th width="7%" align="center"><b>NIDN Bermasalah</b></th>
							<th width="6%" align="center"><b>Tugas Belajar</b></th>
							<th width="6%" align="center"><b>Akun Digilib</b></th>
							<th width="11%" align="center"><b>Catatan</b></th>
                            
                        </tr>';
            foreach ($pengajuan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
							<td align="center">'.$row['nip'].'</td>
                            <td align="center">'.$row['nidn'].'</td>
                            <td align="center">'.$row['nama_dosen'].'</td>
							<td align="center">'.$row['jurusan'].'</td>
							<td align="center">'.$row['file_prop'].'</td>
							<td align="center">'.$row['file_rab'].'</td>
							<td align="center">'.$row['file_turnitin'].'</td>
							<td align="center">'.$row['id_litap'].'</td>
							<td align="center">'.$row['status_litap'].'</td>
							<td align="center">'.$row['akun_sinta'].'</td>
							<td align="center">'.$row['nidn_br'].'</td>
							<td align="center">'.$row['tugas_bel'].'</td>
							<td align="center">'.$row['akun_digilib'].'</td>
							<td align="center">'.$row['catatan'].'</td>
                            
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('cetak.pdf');
?>