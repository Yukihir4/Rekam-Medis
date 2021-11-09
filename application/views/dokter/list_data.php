<?php
  $no = 1;
  foreach ($dataDokter as $dokter) {
    ?>
    <tr>
    <td><?php echo $no; ?></td>
      <td><?php echo $dokter->id_dokter; ?></td>
      <td><?php echo $dokter->nama_dokter; ?></td>
      <td><?php echo $dokter->spesialis; ?></td>
      <td><?php echo $dokter->alamat; ?></td>
      <td><?php echo $dokter->no_telp; ?></td>
      <td class="text-center">
        <button class="btn btn-warning btn-sm update-dataDokter" data-id="<?php echo $dokter->id_dokter; ?>"><i class="glyphicon glyphicon-refresh"></i></button>
        <button class="btn btn-danger btn-sm konfirmasiHapus-dokter" data-id="<?php echo $dokter->id_dokter; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>