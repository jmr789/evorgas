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
            <h1 class="page-header col-lg-12">Véhicules électriques<small> présentement offerts au Québec</small></h1>

            <div>
                <div class="well well-sm col-lg-12">Cette section peut être incomplète. Afin de suggérer l'ajout de véhicule à la section, veuillez utiliser la section 'Contact'.</div>
            </div>

            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <!--<img class="img-responsive" src="http://placehold.it/700x400" alt="">-->
                        <img class="img-responsive" height="400" width="700" src="<?php echo base_url(); ?>../assets/images/vehicules/BOLT2017.jpg">
                    </a>
                    <h3>
                        <h2>Chevrolet Bolt</h2>
                    </h3>
                    <p>
                        <ul>
                            <li>42 895 $ (PDSF)</li>
                            <li>383km d'autonomie</li>
                            <li>Pleine charge en 9.5 heures (240V)</li>
                            <li>0-100 km/h en 7.0s</li>
                        </ul>
                    </p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" height="400" width="700" src="<?php echo base_url(); ?>../assets/images/vehicules/LEAF2017.jpg">
                    </a>
                    <h3>
                        <h2>Nissan Leaf (S)</h2>
                    </h3>
                    <p>
                        <ul>
                            <li>33 998 $ (PDSF)</li>
                            <li>172km d'autonomie</li>
                            <li>Pleine charge en 4 heures (240V)</li>
                            <li>0-100 km/h en 11.3s</li>
                        </ul>
                    </p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" height="400" width="700" src="<?php echo base_url(); ?>../assets/images/vehicules/SOULEV2017.jpg">
                    </a>
                    <h3>
                        <h2>Kia Soul EV</h2>
                    </h3>
                    <p>
                        <ul>
                            <li>37 250 $ (PDSF)</li>
                            <li>150km d'autonomie</li>
                            <li>Pleine charge en 5 heures (240V)</li>
                            <li>0-100 km/h en 10.6s</li>
                        </ul>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" height="400" width="700" src="<?php echo base_url(); ?>../assets/images/vehicules/IMIEV2017.jpg">
                    </a>
                    <h3>
                        <h2>Mitsubishi i-MiEV (ES)</h2>
                    </h3>
                    <p>
                        <ul>
                            <li>29 817 $ (PDSF)</li>
                            <li>96km d'autonomie</li>
                            <li>Pleine charge en 7 heures (240V)</li>
                            <li>0-100 km/h en 15.2s</li>
                        </ul>
                    </p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" height="400" width="700" src="<?php echo base_url(); ?>../assets/images/vehicules/FOCUSEV2017.jpg">
                    </a>
                    <h3>
                        <h2>Ford Focus Electrique</h2>
                    </h3>
                    <p>
                        <ul>
                            <li>33 248 $ (PDSF)</li>
                            <li>122km d'autonomie</li>
                            <li>Pleine charge en 3.6 heures (240V)</li>
                            <li>0-100 km/h en 10.5s</li>
                        </ul>
                    </p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" height="400" width="700" src="<?php echo base_url(); ?>../assets/images/vehicules/MODELS2017.jpg">
                    </a>
                    <h3>
                        <h2>Tesla Model S (60)</h2>
                    </h3>
                    <p>
                        <ul>
                            <li>98 500 $</li>
                            <li>338km d'autonomie</li>
                            <li>Pleine charge en 6.8 heures (240V)</li>
                            <li>0-100 km/h en 5.8s</li>
                        </ul>
                    </p>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-12">
                    <h3>Affichés bientôt</h3>
                    <ul>
                        <li>BMW i3</li>
                        <li>Tesla Model X</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Véhicules bientôts disponibles</h3>
                    <ul>
                        <li>Tesla Model 3</li>
                        <li>Volkswagen e-Golf</li>
                        <li>Hyundai Ioniq</li>
                        <li>Faraday Future FF91</li>
                        <li>Nissan IDS</li>
                        <li>Audi Q6 e-tron</li>
                        <li>Audi A9 e-tron</li>
                        <li>Porshe Mission E</li>
                        <li>Jaguar I-Pace</li>
                        <li>Mercedes-Benz EQ</li>
                        <li>Tesla Model Y</li>
                        <li>Aston Martin RapidE</li>
                    </ul>
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