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
                <img class="featurette-image img-circle img-responsive pull-right" src="<?php echo base_url(); ?>../assets/images/logoVE_resized.jpg">
                <h2 class="featurette-heading">Combien coûte un véhicule électrique
                    <!--<span class="text-muted">Est-ce avantageux ?</span>-->
                </h2>
                <p class="lead">L'offre de véhicules électrique s'améliore à chaque année. Toutefois, le coût d'acquisition d'un tel véhicule nous apparaît souvent plus élevé que celui d'un véhicule à essence avec des dimensions semblables. Au Québec, le coût de l'électricité est bas et celui de l'essence est particulièrement élevé. Est-ce vraiment plus cher? Si oui, à quel point et qu'en est-il après 1, 3, 5 ans d'utilisation?</p>
            </div>

            <hr class="featurette-divider">

            <!-- Second Featurette - Calculateur -->
            <div class="featurette" id="calculateur">
                <h2 class="featurette-heading">Calculateur
                    <!--<span class="text-muted"></span>-->
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
                            <tr>
                                <th>Prix d'acquisition (taxes incluses)</th>
                                <td><?php echo number_format($evCar['after_tax_price'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
                            </tr>
                            <tr>
                                <th>Crédit d'impôt gouvernemental</th>
                                <td><?php echo number_format($evCar['gov_rebate'], 2) . ' $'; ?></td>
                                <td>0 $</td>
                            </tr>
                            <tr>
                                <th>Prix après crédit d'impôt</th>
                                <td><?php echo number_format($evCar['after_rebate_price'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
                            </tr>
                            <tr>
                                <th>Autonomie</th>
                                <td><?php echo $evCar['planned_autonomy'] . ' km'; ?></td>
                                <td><?php echo $gasCar['planned_autonomy'] . ' km'; ?></td>
                            </tr>
                            <tr>
                                <th>Coût pour parcourir 100 km</th>
                                <td><?php echo number_format($evCar['onehundredkmcost'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['onehundredkmcost'], 2) . ' $'; ?></td>
                            </tr>
                            <tr>
                                <th>Coût d'une recharge complète</th>
                                <td><?php echo number_format($evCar['fill_cost'], 2) . ' $ (à domicile)'; ?></td>
                                <td><?php echo number_format($gasCar['fill_cost'], 2) . ' $ (essence ordinaire)'; ?></td>
                            </tr>
                            <tr>
                                <th>Coût pour parcourir 20 000 km</th>
                                <td><?php echo number_format($evCar['twentykkmcost'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['twentykkmcost'], 2) . ' $'; ?></td>
                            </tr>
                            <tr>
                                <th>Économies annuelles dues au prix de l'énergie (20 000 km)</th>
                                <td><?php echo number_format($evCar['twentykkmeconomy'], 2) . ' $'; ?></td>
                                <td>0 $</td>
                            </tr>
                            <tr>
                                <th title="Excluant les coûts reliés à l'entretien">Coût après 1 an (20 000 km par an)</th>
                                <td><?php echo number_format($evCar['after1yearcost'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
                            </tr>
                            <tr>
                                <th title="Excluant les coûts reliés à l'entretien">Coût après 3 ans (20 000 km par an)</th>
                                <td><?php echo number_format($evCar['after3yearscost'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
                            </tr>
                            <tr>
                                <th title="Excluant les coûts reliés à l'entretien">Coût après 5 ans (20 000 km par an)</th>
                                <td><?php echo number_format($evCar['after5yearscost'], 2) . ' $'; ?></td>
                                <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
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