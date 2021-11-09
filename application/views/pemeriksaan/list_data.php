<?php
$no = 1;
foreach ($dataPemeriksaan as $pemeriksaan) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $pemeriksaan->id_pemeriksaan; ?></td>
    <td><?php echo $pemeriksaan->nomor_rm; ?></td>
    <td><?php echo $pemeriksaan->id_dokter; ?></td>
    <td><?php echo $pemeriksaan->nama_dokter; ?></td>
    <td><?php echo $pemeriksaan->nama_pasien; ?></td>
    <td><?php echo $pemeriksaan->id_poli . ' - ' . $pemeriksaan->nama_poli; ?></td>
    <td class="text-center">
      <button class="btn btn-info btn-sm print-dataPemeriksaan" data-id="<?php echo $pemeriksaan->id_pemeriksaan; ?>"><i class="glyphicon glyphicon-print"></i></button>
      <button class="btn btn-info btn-sm detail-dataPemeriksaan" data-id="<?php echo $pemeriksaan->id_pemeriksaan; ?>"><i class="glyphicon glyphicon-info-sign"></i></button>
    </td>
  </tr>
<?php
  $no++;
}
?>