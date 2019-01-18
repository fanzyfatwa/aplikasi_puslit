<?php
             $pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-6', false);
            $pdf->SetTitle('Daftar Pengajuan Penelitian');
            $pdf->SetHeaderMargin(20);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage('L', 'A4');;
            $i=0;
				$pdf->SetFont('times', 6 );
            $html='<h3>Daftar Laporan Antara</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="0">
                        <tr bgcolor="#ffffff">
                            <th width="2%" align="center">No</th>
							<th width="10%" align="center">ID Penelitian</th>
							<th width="10%" align="center">Nama dosen</th>
							<th width="10%" align="center">NIP</th>
                            <th width="10%" align="center">NIDN</th>
                            <th width="15%" align="center">Jurusan</th>
							<th width="15%" align="center">Logbook</th>
							<th width="15%" align="center">Laporan Keuangan 60%</th>
                            <th width="15%" align="center">Draf Naskah</th>
                            <th width="15%" align="center">Progres Artikel</th>
                            <th width="15%" align="center">Progres HKI</th>
							<th width="15%" align="center">Catatan</th>
                        </tr>';
            foreach ($laporan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
							<td align="center">'.$row['id_penelitian'].'</td>
							<td align="center">'.$row['nama_dosen'].'</td>
                            <td align="center">'.$row['nip'].'</td>
							<td align="center">'.$row['nidn'].'</td>
                            <td align="center">'.$row['jurusan'].'</td>
							<td align="center">'.$row['logbook'].'</td>
                            <td align="center">'.$row['lap_uang60'].'</td>
							<td align="center">'.$row['naskah'].'</td>
                            <td align="center">'.$row['artikel'].'</td>
							<td align="center">'.$row['hki'].'</td>
                            <td align="center">'.$row['catatan'].'</td>
                            
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('laporan_antara.pdf', 'I');
?>