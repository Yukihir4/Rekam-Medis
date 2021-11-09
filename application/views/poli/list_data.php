<?php
  $no = 1;
  foreach ($dataPoli as $poli) {
    ?>
    <tr>
    <td><?php echo $no; ?></td>
      <td><?php echo $poli->id_poli; ?></td>
      <td><?php echo $poli->nama_poli; ?></td>
      <td><?php echo $poli->gedung; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning btn-sm update-dataPoli" data-id="<?php echo $poli->id_poli; ?>"><i class="glyphicon glyphicon-refresh"></i></button>
        <button class="btn btn-danger btn-sm konfirmasiHapus-poli" data-id="<?php echo $poli->id_poli; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>