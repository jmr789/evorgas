<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

    <body>

        <?php include 'menu.php'; ?>

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
                <img class="featurette-image img-circle img-responsive pull-right" src="<?php echo base_url(); ?>../assets/images/logoVE_resized.jpg">
                <h2 class="featurette-heading">Combien coûte un véhicule électrique
                    <span class="text-muted">Est-ce avantageux ?</span>
                </h2>
                <p class="lead">L'offre de véhicules électrique s'améliore à chaque année. Toutefois, le coût d'acquisition d'un tel véhicule nous apparaît souvent plus élevé que celui d'un véhicule à essence avec des dimensions semblables. Au Québec, le coût de l'électricité est bas et celui de l'essence est particulièrement élevé. Est-ce vraiment plus cher? Si oui, à quel point et qu'en est-il après 3, 5, 8 ans d'utilisation?</p>
            </div>

            <hr class="featurette-divider">

            <!-- Calculateur -->
            <div class="featurette" id="calculateur">
                <h2 class="featurette-heading">Calculateur
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">
                    Notre calculateur automatique vous permet de comparer les coûts d'acquisition et d'utilisateur entre un véhicule à essence et un véhicule électrique de votre choix. Les prix affichés et utilisés sont ceux applicables au Québec seulement.
                </p>
                <p class="lead">Voici un exemple. Pour faire un autre calcul, <a href="<?php echo base_url(); ?>calculateur">Cliquez ici !</a></p>
                <p id="calcul_response">
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th><?php echo $evCar['name']; ?></th>
                                <th><?php echo $gasCar['name']; ?></th>
                            </tr>
                        <thead>
                        <tbody>
                            <tr>
                                <th>Prix d'acquisition (avant taxes et déductions)</th>
                                <td><?php echo $evCar['base_price'] . ' $'; ?></td>
                                <td><?php echo $gasCar['price'] . ' $'; ?></td>
                            </tr>
                            <tr>
                                <th>Autonomie</th>
                                <td><?php echo $evCar['planned_autonomy'] . ' km'; ?></td>
                                <td><?php echo $gasCar['planned_autonomy'] . ' km'; ?></td>
                            </tr>
                            <tr>
                                <th>Consommation par 100km</th>
                                <td><?php echo $evCar['avg_consumption_rate'] . ' kWh'; ?></td>
                                <td><?php echo $gasCar['avg_consumption_rate'] . ' L'; ?></td>
                            </tr>
                            <tr>
                                <th>Coût d'une recharge complète</th>
                                <td><?php echo $evCar['fill_cost'] . ' $ (à domicile)'; ?></td>
                                <td><?php echo $gasCar['fill_cost'] . ' $ (essence ordinaire)'; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </p>
            </div>

            <hr class="featurette-divider">

            <!-- Footer -->
            <?php include 'footer.php'; ?>

        </div>
        <!-- /.container -->

    </body>

</html>