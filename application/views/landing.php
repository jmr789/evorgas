<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Électrique vs Essence</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#calculateur">Calculateur</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Full Width Image Header -->
        <header class="header-image">
            <div class="headline">
                <div class="container">
                    <h1>Acheter électrique</h1>
                    <h2>Est-ce vraiment avantageux ?</h2>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container">

            <hr class="featurette-divider">

            <!-- First Featurette -->
            <div class="featurette" id="about">
                <img class="featurette-image img-circle img-responsive pull-right" src="assets/images/logoVE_resized.jpg">
                <h2 class="featurette-heading">Combien coûte un véhicule électrique
                    <span class="text-muted">Est-ce avantageux ?</span>
                </h2>
                <p class="lead">L'offre de véhicules électrique s'améliore à chaque année. Toutefois, le coût d'acquisition d'un tel véhicule nous apparaît souvent plus élevé que celui d'un véhicule à essence avec des dimensions semblables. Au Québec, le coût de l'électricité est bas et celui de l'essence est particulièrement élevé. Est-ce vraiment plus cher? Si oui, à quel point et qu'en est-il après 3, 5, 8 ans d'utilisation?</p>
            </div>

            <hr class="featurette-divider">

            <!-- Calculateur -->
            <div class="featurette" id="services">
                <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500">
                <h2 class="featurette-heading">The Second Heading
                    <span class="text-muted">Is Pretty Cool Too.</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Footer -->
            <?php include 'footer.php'; ?>

        </div>
        <!-- /.container -->

    </body>

</html>