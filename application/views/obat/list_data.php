<?php
$no = 1;
foreach ($dataObat as $obat) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $obat->id_obat; ?></td>
    <td><?php echo $obat->nama_obat; ?></td>
    <td><?php echo $obat->keterangan_obat; ?></td>
    <td><?php echo rupiah($obat->harga_obat); ?></td>
    <td><?php echo $obat->stok_obat; ?></td>
    <td><?php echo $obat->tanggal_expired; ?></td>
    <td class="text-center" style="min-width:230px;">
      <button class="btn btn-warning btn-sm update-dataObat" data-id="<?php echo $obat->id_obat; ?>"><i class="glyphicon glyphicon-refresh"></i></button>
      <button class="btn btn-danger btn-sm konfirmasiHapus-obat" data-id="<?php echo $obat->id_obat; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
    </td>
  </tr>
<?php
  $no++;
}
?>