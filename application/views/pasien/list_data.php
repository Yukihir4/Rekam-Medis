<?php
$no = 1;
foreach ($dataPasien as $pasien) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $pasien->id_pasien; ?></td>
    <td><?php echo $pasien->nomor_identitas; ?></td>
    <td><?php echo $pasien->nama_pasien; ?></td>
    <td><?php if ($pasien->jenis_kelamin == 'L') {
          echo 'Laki-Laki';
        } else {
          echo 'Perempuan';
        }; ?></td>
    <td><?php echo $pasien->alamat; ?></td>
    <td><?php echo $pasien->no_telp; ?></td>
    <td class="text-center" style="min-width:230px;">
      <button class="btn btn-warning btn-sm update-dataPasien" data-id="<?php echo $pasien->id_pasien; ?>"><i class="glyphicon glyphicon-refresh"></i></button>
      <button class="btn btn-danger btn-sm konfirmasiHapus-pasien" data-id="<?php echo $pasien->id_pasien; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
    </td>
  </tr>
<?php
  $no++;
}
?>