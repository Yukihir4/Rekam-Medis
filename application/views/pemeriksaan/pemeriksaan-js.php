<script>
    window.onload = function() {
        tampilPemeriksaan();
    }
    //Pemeriksaan Data
    function tampilPemeriksaan() {
        $.get('<?php echo base_url('Pemeriksaan/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-pemeriksaan').html(data);
            refresh();
        });
    }

    var id_cus;
    $(document).on("click", ".konfirmasiHapus-pemeriksaan", function() {
        id_cus = $(this).attr("data-id");
    });

    $(document).on("click", ".hapus-dataPemeriksaan", function() {
        var id = id_cus;

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Pemeriksaan/delete'); ?>",
                data: "idDok=" + id
            })
            .done(function(data) {
                $('#konfirmasiHapus').modal('hide');
                tampilPemeriksaan();
                $('.msg').html(data);
                effect_msg();
            });
    });

    $(document).on("click", ".print-dataPemeriksaan", function() {
        var id = $(this).attr("data-id");
        var go_to_url = '<?php echo base_url('Pemeriksaan/print/'); ?>' + id;
        window.open(go_to_url, '_blank');
    });

    $('#form-tambah-pemeriksaan').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Pemeriksaan/prosesTambah'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilPemeriksaan();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-tambah-pemeriksaan").reset();
                    $('#tambah-pemeriksaan').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            });

        e.preventDefault();
    });

    $(document).on("click", ".detail-dataPemeriksaan", function() {
        var id = $(this).attr("data-id");

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Pemeriksaan/detail'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#tempat-modal').html(data);
                $('#tabel-detail').dataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#detail-pemeriksaan').modal('show');
            })
    });

    $('#tambah-pemeriksaan').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });
</script>