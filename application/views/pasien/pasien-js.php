<script>
    window.onload = function() {
        tampilPasien();
    }
    //Pasien Data
    function tampilPasien() {
        $.get('<?php echo base_url('Pasien/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-pasien').html(data);
            refresh();
        });
    }

    var id_own;
    $(document).on("click", ".konfirmasiHapus-pasien", function() {
        id_own = $(this).attr("data-id");
    });

    $(document).on("click", ".hapus-dataPasien", function() {
        var id = id_own;

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Pasien/delete'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#konfirmasiHapus').modal('hide');
                tampilPasien();
                $('.msg').html(data);
                effect_msg();
            })
    })

    $(document).on("click", ".update-dataPasien", function() {
        var id = $(this).attr("data-id");

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Pasien/update'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#tempat-modal').html(data);
                $('#update-pasien').modal('show');
            })
    })

    $('#form-tambah-pasien').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Pasien/prosesTambah'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilPasien();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-tambah-pasien").reset();
                    $('#tambah-pasien').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            })

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-pasien', function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Pasien/prosesUpdate'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilPasien();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-update-pasien").reset();
                    $('#update-pasien').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            })

        e.preventDefault();
    });

    $('#tambah-pasien').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });

    $('#update-pasien').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });
</script>