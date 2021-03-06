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
            <h1>Calculateur de coûts (électrique vs essence)</h1>
            <hr class="featurette-divider">

            <form method="POST" action="<?php echo base_url(); ?>calculateur/afficherRésultat">
                <div class="form-group">
                    <label for='select_ev'>Choisir un véhicule électrique</label>
                    <select class="form-control" id='select_ev' name='ev'>
                        <?php foreach ($evCar as $ev) {
                            echo '<option id="ev_' . $ev['id'] . '" value="' . $ev['id'] . '">' . $ev['name'] . '</option>';
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for='select_gas'>Choisir un véhicule à essence</label>
                    <select class="form-control" id='select_gas' name='gas'>
                        <?php foreach ($gasCar as $gas) {
                            echo '<option id="ev_' . $gas['id'] . '" value="' . $gas['id'] . '">' . $gas['name'] . '</option>';
                        } ?>
                    </select>
                </div>
                <input id="form_submit" class="btn btn-primary" type="submit" value="Comparer" />
            </form>
            
            <div id="ajax_container"></div>

            <hr class="featurette-divider">

            <!-- Footer -->
            <?php include 'footer.php'; ?>

        </div>
        <!-- /.container -->

    </body>

</html>
<script>
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
        });
</script>