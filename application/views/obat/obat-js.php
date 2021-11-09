<script>
    window.onload = function() {
        tampilObat();
    }
    //Obat Data
    function tampilObat() {
        $.get('<?php echo base_url('Obat/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-obat').html(data);
            refresh();
        });
    }

    var id_own;
    $(document).on("click", ".konfirmasiHapus-obat", function() {
        id_own = $(this).attr("data-id");
    });

    $(document).on("click", ".hapus-dataObat", function() {
        var id = id_own;

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Obat/delete'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#konfirmasiHapus').modal('hide');
                tampilObat();
                $('.msg').html(data);
                effect_msg();
            })
    })

    $(document).on("click", ".update-dataObat", function() {
        var id = $(this).attr("data-id");

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Obat/update'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#tempat-modal').html(data);
                $('#update-obat').modal('show');
            })
    })

    $('#form-tambah-obat').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Obat/prosesTambah'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilObat();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-tambah-obat").reset();
                    $('#tambah-obat').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            })

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-obat', function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Obat/prosesUpdate'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilObat();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-update-obat").reset();
                    $('#update-obat').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            })

        e.preventDefault();
    });

    $('#tambah-obat').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });

    $('#update-obat').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });
</script>