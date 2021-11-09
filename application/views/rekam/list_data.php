<?php
$no = 1;
foreach ($dataRekam as $rekam) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $rekam->id_rm; ?></td>
    <td><?php echo $rekam->tgl_periksa; ?></td>
    <td><?php echo $rekam->nama_pasien; ?></td>
    <td><?php echo $rekam->keluhan; ?></td>
    <td><?php echo $rekam->nama_dokter; ?></td>
    <td><?php echo $rekam->diagnosis; ?></td>
    <td><?php echo $rekam->nama_poli; ?></td>
    <td><?php foreach ($dataObat as $obat) {
          if ($obat->id_rm == $rekam->id_rm) {
            echo $obat->nama_obat . "<br>";
          }
        } ?> </td>
    <td class="text-center" style="min-width:230px;">
      <button class="btn btn-danger btn-sm konfirmasiHapus-rekam" data-id="<?php echo $rekam->id_rm; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
    </td>
  </tr>
<?php
  $no++;
}
?>