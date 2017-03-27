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
                    <h2>Est-ce avantageux ?</h2>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container">

            <hr class="featurette-divider">

            <!-- First Featurette -->
            <div class="featurette" id="about">
                <figure class="pull-right">
                    <img alt="http://www.vehiculeselectriques.gouv.qc.ca/" height="400" width="400" class="featurette-image img-circle img-responsive pull-right" src="<?php echo base_url(); ?>../assets/images/logoVE_resized.jpg">
                </figure>
                <h2 class="featurette-heading">Combien coûte un véhicule électrique
                </h2>
                <p class="lead">L'offre de véhicules électrique s'améliore à chaque année. Toutefois, le coût d'acquisition d'un tel véhicule nous apparaît souvent plus élevé que celui d'un véhicule à essence avec des dimensions semblables. Au Québec, le coût de l'électricité est bas et celui de l'essence est particulièrement élevé. Est-ce vraiment plus cher? Si oui, à quel point et qu'en est-il après 1, 3, 5 ans d'utilisation?</p>
            </div>

            <hr class="featurette-divider">

            <!-- Second Featurette - Véhicules -->
            <div class="featurette" id="services">
                <figure class="pull-left">
                    <img alt="http://www.bmw.fr/fr/new-vehicles/bmw-i/i3/2016/apercu.html" height="500" width="500" class="featurette-image img-circle img-responsive pull-left" src="<?php echo base_url(); ?>../assets/images/i3.jpg">
                    <figcaption>
                        <span title="http://www.bmw.fr/fr/new-vehicles/bmw-i/i3/2016/apercu.html">BMW i3</span>
                    </figcaption>
                </figure>
                <h2 class="featurette-heading">Véhicules Électriques
                    <span class="text-muted">de moins en moins chers</span>
                </h2>
                <p class="lead">Au cours des dernières années, les seuls véhicules électriques abordables ne dépassaient guère les 100 kilomètres d'autonomie. Heureusement, en 2017 le tout devrait changer. L'arrivée de nouveaux modèles sous les 40 000 $ (après les incitatifs gouvernementaux) comportant des piles permettant plus de 250 kilomètres avec une charge change la donne. <br /><a href="<?php echo base_url(); ?>vehicules">Cliquez ici !</a> pour l'offre complète.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Third Featurette - Calculateur -->
            <div class="featurette" id="calculateur">
                <h2 class="featurette-heading">Calculateur
                </h2>
                <p class="lead">
                    Notre calculateur automatique vous permet de comparer les coûts d'acquisition et d'utilisateur entre un véhicule à essence et un véhicule électrique de votre choix. Les prix affichés et utilisés sont ceux applicables au Québec seulement.
                </p>
                <p class="lead">Voici un exemple. Pour faire un autre calcul, <a href="<?php echo base_url(); ?>calculateur">Cliquez ici !</a></p>
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th><?php echo $evCar['name']; ?></th>
                                <th><?php echo $gasCar['name']; ?></th>
                            </tr>
                        <thead>
                        <tbody>
                            <tr class="infos">
                                <th>Coût d'acquisition (taxes et rabais gouvernementaux inclus)</th>
                                <td><?php echo number_format($evCar['after_rebate_price'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
                            </tr>
                            <tr class="infos">
                                <th>Dépenses annuelles</th>
                                <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
                            </tr>
                            <tr class="infos">
                                <th>Coût 1 an (20,000km)</th>
                                <td><?php echo number_format($evCar['firstYearCosts'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['firstYearCosts'], 2) . ' $'; ?></td>
                            </tr>
                            <tr class="infos">
                                <th>Coût 2 ans (40,000km)</th>
                                <td><?php echo number_format($evCar['secondYearCosts'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['secondYearCosts'], 2) . ' $'; ?></td>
                            </tr>
                            <tr class="infos">
                                <th>Coût 3 ans (60,000km)</th>
                                <td><?php echo number_format($evCar['thirdYearCosts'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['thirdYearCosts'], 2) . ' $'; ?></td>
                            </tr>
                            <tr class="infos">
                                <th>Coût 4 ans (80,000km)</th>
                                <td><?php echo number_format($evCar['fourthYearCosts'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['fourthYearCosts'], 2) . ' $'; ?></td>
                            </tr>
                            <tr class="infos">
                                <th>Coût 5 ans (100,000km)</th>
                                <td><?php echo number_format($evCar['fifthYearCosts'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['fifthYearCosts'], 2) . ' $'; ?></td>
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