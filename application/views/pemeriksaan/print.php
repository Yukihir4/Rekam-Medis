<html lang="en">

<head>
    <title>Print</title>
    <style>
        table {
            width: 100%;
        }

        td.border {
            border: 1px solid black;
        }

        td.padding {
            padding: 5px 3px 5px 3px;
        }

        body {
            font-size: 9.5pt;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            display: flex;
            justify-content: center;
        }

        td.border-left {
            border-left: 1px solid black;
            padding-left: 5px;
        }

        td.border-right {
            border-right: 1px solid black;
            padding-right: 5px;
        }

        td.border-top {
            border-top: 1px solid black;
            padding-top: 5px;
        }

        td.border-bottom {
            border-bottom: 1px solid black;
            padding-bottom: 5px;
        }

        td.padding-top {
            padding-top: 5px;
        }

        td.padding-bottom {
            padding-bottom: 5px;
        }

        td.padding-right {
            padding-right: 5px;
        }

        td.padding-left {
            padding-left: 5px;
        }

        td.border-bottom-no-padding {
            border-bottom: 1px solid black;
        }

        /* td {
                border: 1px solid black;
            }
            */
        table {
            border-collapse: collapse;
        }

        .text-align-right {
            text-align: right;
        }

        .text-align-center {
            text-align: center;
        }

        .text-valign-top {
            vertical-align: text-top;
        }

        div.page_break {
            page-break-after: always;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $x = 0;
    foreach ($dataPemeriksaan as $pemeriksaan) : ?>
        <table>
            <tr>
                <td style="width: 55%"></td>
                <td style="width: 45%; padding-right:8%" class="border-top border-bottom border-right border-left">
                    Id Pemeriksaan : <span id="id-pemeriksaan"><?= $pemeriksaan->id_pemeriksaan; ?></span> <br><br>
                    <span id="nomor_rm"><?= strtoupper($pemeriksaan->nomor_rm); ?></span><br>
                    <span id="tanggal_pemeriksaan"><?= strtoupper($pemeriksaan->tanggal_pemeriksaan); ?></span><br>
                    <!-- <span id="city"><b>D / C Note Date</b></span> -->
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>

        <table id="table">
            <thead>
                <tr>
                    <th>ID Pasien</th>
                    <th>Nama Pasien</th>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>ID Poli</th>
                    <th>Nama Poli</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $pemeriksaan->id_pasien ?></td>
                    <td><?= $pemeriksaan->nama_pasien ?></td>
                    <td><?= $pemeriksaan->id_dokter ?></td>
                    <td><?= $pemeriksaan->nama_dokter ?></td>
                    <td><?= $pemeriksaan->id_poli ?></td>
                    <td><?= $pemeriksaan->nama_poli ?></td>
                </tr>
            </tbody>
        </table>


        <br>
        <br>
        <br>
        <p style="font-size: 13pt; text-align: center;"><strong>Detail Pemeriksaan</strong></p>
        <br>
        <br>
        <br>

        <table>
            <tr>
                <td style="width: 25%"><strong>Pemeriksaan Anamnesis</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="anamnesis"><?= $pemeriksaan->anamnesis; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>

            <tr>
                <td style="width: 25%"><strong>Pemeriksaan Fisik</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="fisik"><?= $pemeriksaan->pemeriksaan_fisik; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>

            <tr>
                <td style="width: 25%"><strong>Hasil Penunjang Pemeriksaan</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="hasil_penunjang"><?= $pemeriksaan->hasil_penunjang; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>

            <tr>
                <td style="width: 25%"><strong>Tensi Darah Pasien</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="tensi_darah"><?= $pemeriksaan->tensi_darah; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>

            <tr>
                <td style="width: 25%"><strong>Diagnosa Dokter</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="diagnosis"><?= $pemeriksaan->diagnosis; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>

            <tr>
                <td style="width: 25%"><strong>Tindakan Kepada Pasien</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="tindakan"><?= $pemeriksaan->tindakan; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>

            <tr>
                <td style="width: 25%"><strong>Saran Kepada Pasien</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="saran"><?= $pemeriksaan->saran; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>

            <tr>
                <td style="width: 25%"><strong>Resep Obat Pasien</strong></td>
                <td style="width: 5%">:</td>
                <td style="width: 70%">
                    <table>
                        <tr>
                            <td style="width: 100%" class="text-align-left padding-right"><span class="resep"><?= $pemeriksaan->resep; ?></span></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <br>
            <br>
        </table>



        <?php $x++;

        if ($x < count($dataPemeriksaan)) {
            echo '<div class="page_break"></div>';
        } ?>

    <?php endforeach; ?>
</body>

</html>