<script>
    window.onload = function() {
        tampilRekam();
    }
    //Rekam Data
    function tampilRekam() {
        $.get('<?php echo base_url('Rekam/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-rekam').html(data);
            refresh();
        });
    }

    var id_own;
    $(document).on("click", ".konfirmasiHapus-rekam", function() {
        id_own = $(this).attr("data-id");
    });

    $(document).on("click", ".hapus-dataRekam", function() {
        var id = id_own;

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('Rekam/delete'); ?>",
                data: "id=" + id
            })
            .done(function(data) {
                $('#konfirmasiHapus').modal('hide');
                tampilRekam();
                $('.msg').html(data);
                effect_msg();
            })
    })

    $('#form-tambah-rekam').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
                method: 'POST',
                url: '<?php echo base_url('Rekam/prosesTambah'); ?>',
                data: data
            })
            .done(function(data) {
                var out = jQuery.parseJSON(data);

                tampilRekam();
                if (out.status == 'form') {
                    $('.form-msg').html(out.msg);
                    effect_msg_form();
                } else {
                    document.getElementById("form-tambah-rekam").reset();
                    $('#tambah-rekam').modal('hide');
                    $('.msg').html(out.msg);
                    effect_msg();
                }
            })

        e.preventDefault();
    });

    $('#tambah-rekam').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    });
</script>