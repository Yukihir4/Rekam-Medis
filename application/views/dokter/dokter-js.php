<script>
    window.onload = function() {
        tampilDokter();
    }
    //Dokter Data
    function tampilDokter() {
        $.get('<?php echo base_url('Dokter/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-dokter').html(data);
            refresh();
        });
    }

    var id_cus;
    $(document).on("click", ".konfirmasiHapus-dokter", function() {
        id_cus = $(this).attr("data-id");
    });

    $(document).on("click", ".hapus-dataDokter", function() {
        var id = id_cus;

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Dokter/delete'); ?>",
                data: "idDok=" + id
            })
            .done(function(data) {
                $('#konfirmasiHapus').modal('hide');
                tampilDokter();
                $('.msg').html(data);
                effect_msg();
            });
    });

    $(document).on("click", ".update-dataDokter", function() {
        var id = $(this).attr("data-id");

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Dokter/update'); ?>",
                data: "idDok=" + id
            })
            .done(function(data) {
                $('#tempat-modal').html(data);
                $('#update-dokter').modal('show');
            });
    });

    $('#form-tambah-dokter').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Dokter/prosesTambah'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilDokter();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-tambah-dokter").reset();
                    $('#tambah-dokter').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            });

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-dokter', function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Dokter/prosesUpdate'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilDokter();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-update-dokter").reset();
                    $('#update-dokter').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            });

        e.preventDefault();
    });

    $('#tambah-dokter').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });

    $('#update-dokter').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });
</script>