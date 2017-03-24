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
            <div class="col-lg-12">
                <div class="col-md-6">
                    <div class=""> 
                        <form role="form" method="POST" action="<?php echo base_url(); ?>contact/nousContacter">
                            <br style="clear:both">
                            <h3 style="margin-bottom: 25px; text-align: center;">Nous contacter</h3>
                            <div class="well well-sm">Merci de nous transmettre vos commentaires et suggestions.</div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Courriel" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="mobile" name="phone" placeholder="Téléphone" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required>
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                <span class="help-block"><p id="characterLeft" class="help-block ">Vous avez atteint la limite</p></span>                    
                            </div>
                            
                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Envoyer</button>
                        </form>
                        <hr class="featurette-divider">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=""> 
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Notre mission</h3>
                        <p>Chez electriquevsessence.quebec, nous sommes intéressés par les véhicules électriques et nous croyons qu'il s'agit de là où notre société se dirige présentement. Dans quelques décennies, nous croyons et espérons que la majorité des véhicules sur la route seront électriques.</p>
                        <p>Toutefois, l'offre de véhicules électriques est encore faible et un achat d'une telle importance dans un budget personnel ne peut que reposer sur un idéal et une vision avant-gardiste.</p>
                        <p>C'est pour cette raison que nous avons créé ce site web dont l'objectif est de faciliter la comparaison entre l'achat d'un véhicule à essence et celui d'un véhicule électrique. Nous voulons ainsi simplifier la prise de décision chez l'acheter et lui rendant l'information accessible.</p>
                        <hr class="featurette-divider">
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include 'footer.php'; ?>

        </div>
        <!-- /.container -->

    </body>

</html>

<script>
    $(document).ready(function(){ 
    $('#characterLeft').text('140 caractères restants');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('Vous avez atteint le maximum');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' caractères restants');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
</script>