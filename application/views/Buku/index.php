<script type="text/javascript">
$(document).ajaxStart(function() {
    $("#ajax-wait").css({
        left: ($(window).width() - 32) / 2 + "px", // 32 = lebar gambar
        top: ($(window).height() - 32) / 2 + "px", // 32 = tinggi gambar
        display: "block"
    })
}).ajaxComplete(function() {
    $("#ajax-wait").fadeOut();
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>/dataBuku/tampilBuku",
        cache: false,
        success: function(data) {
            $("#tampil").html(data);
        }
    });

});

</script>
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?> </h1>
    </div>
</div>
        <div id="tampil">
            <!-- Data tampil disini -->
        </div>
        <div align="center">
            <div id='ajax-wait'>
                <img alt='loading...' src='<?php echo base_url()?>/assets/animasi/Rolling-1s-84px.png' />
            </div>
        </div>  
