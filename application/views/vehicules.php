<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

    <body>

        <?php include 'menu.php'; ?>

        <!-- Page Content -->
        <div class="container">
            <h1>L'offre de véhicules électriques au Québec</h1>
            <hr class="featurette-divider">

            
            
            <!--<div id="ajax_container"></div>-->

            <hr class="featurette-divider">

            <!-- Footer -->
            <?php include 'footer.php'; ?>

        </div>
        <!-- /.container -->

    </body>

</html>
<script>/*
    $(document).ready(function(){
        $('#form_submit').click(function(e){
            var ev = $('#select_ev').val()
            var gas = $('#select_gas').val()
            e.preventDefault();
            $.ajax({
                url: "calculateur/loadAjaxResults",
                method: "POST",
                data: {ev: ev, gas: gas},
                success: function(response){
                    $("#ajax_container").html(response);
                    }
                });
            });
        });*/
</script>