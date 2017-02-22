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
            <h1 class="page-header col-lg-12">Les véhicules électriques<small> présentement offerts au Québec</small></h1>

            <div>
                <div class="well well-sm col-lg-12">Cette section est incomplète. Afin de suggérer l'ajout de véhicule à la section, veuillez utiliser la section 'Contact'.</div>
            </div>

            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="#">Chevrolet Bolt</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="#">Nissan Leaf</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="#">Kia Soul EV</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="#">Mitsubishi i-MiEV</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="#">Ford Focus Electrique</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="#">Tesla Model S</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>

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