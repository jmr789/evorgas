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
                <div class="col-md-5">
                    <div class=""> 
                        <form role="form" method="POST" action="<?php echo base_url(); ?>contact/nousContacter">
                            <br style="clear:both">
                            <h3 style="margin-bottom: 25px; text-align: center;">Nous contacter</h3>
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