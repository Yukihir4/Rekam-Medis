<script>
    window.onload = function() {
        tampilPoli();
    }
    //Poli Data
    function tampilPoli() {
        $.get('<?php echo base_url('Poli/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-poli').html(data);
            refresh();
        });
    }

    var id_own;
    $(document).on("click", ".konfirmasiHapus-poli", function() {
        id_own = $(this).attr("data-id");
    });

    $(document).on("click", ".hapus-dataPoli", function() {
        var id = id_own;

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Poli/delete'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#konfirmasiHapus').modal('hide');
                tampilPoli();
                $('.msg').html(data);
                effect_msg();
            })
    })

    $(document).on("click", ".update-dataPoli", function() {
        var id = $(this).attr("data-id");

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Poli/update'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#tempat-modal').html(data);
                $('#update-poli').modal('show');
            })
    })

    $('#form-tambah-poli').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Poli/prosesTambah'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilPoli();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-tambah-poli").reset();
                    $('#tambah-poli').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            })

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-poli', function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Poli/prosesUpdate'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilPoli();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-update-poli").reset();
                    $('#update-poli').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            })

        e.preventDefault();
    });

    $('#tambah-poli').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });

    $('#update-poli').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });
</script>