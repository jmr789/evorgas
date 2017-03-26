<br />
<style type="text/css">
    tr.details {
        font-size: 85%;
    }
</style>
<table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <th class="col-lg-6 col-md-6 col-sm-6 col-xs-8"></th>
            <th class="col-lg-3 col-md-3 col-sm-3 col-xs-2"><?php echo $evCar['name']; ?></th>
            <th class="col-lg-3 col-md-3 col-sm-3 col-xs-2"><?php echo $gasCar['name']; ?></th>
        </tr>
    <thead>
    <tbody>
        <tr class="infos">
            <th>Coût d'acquisition (taxes et rabais gouvernementaux inclus)</th>
            <td><?php echo number_format($evCar['after_rebate_price'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Prix du véhicule (taxes incluses)</th>
            <td><?php echo number_format($evCar['after_tax_price'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Rabais gouvernementaux</th>
            <td><?php echo number_format($evCar['gov_rebate'], 2) . ' $'; ?></td>
            <td>0 $</td>
        </tr>
        <tr class="infos">
            <th>Dépenses annuelles</th>
            <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Changements d'huile</th>
            <td>0 $</td>
            <td>120 $ (3 changements dans l'année)</td>
        </tr>
        <tr class="details" hidden>
            <th>Consommation d'énergie</th>
            <td><?php echo number_format($evCar['twentykkmcost'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['twentykkmcost'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Changements de freins</th>
            <td>80 $ (400$ par 100,000km)</td>
            <td>160 $ (800$ par 100,000km)</td>
        </tr>
        <tr class="details" hidden>
            <th>Autres coûts d'entretien (autres liquides, bougies, système d'échappement, etc)</th>
            <td>100 $</td>
            <td>200 $</td>
        </tr>
        <tr class="infos">
            <th>Coût 1 an (20,000km)</th>
            <td><?php echo number_format($evCar['firstYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['firstYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Coût d'acquisition</th>
            <td><?php echo number_format($evCar['after_rebate_price'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Coûts annuels</th>
            <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
        </tr>
        <tr class="infos">
            <th>Coût 2 ans (40,000km)</th>
            <td><?php echo number_format($evCar['secondYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['secondYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Coûts annuels</th>
            <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
        </tr>
        <tr class="infos">
            <th>Coût 3 ans (60,000km)</th>
            <td><?php echo number_format($evCar['thirdYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['thirdYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Coûts annuels</th>
            <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
        </tr>
        <tr class="infos">
            <th>Coût 4 ans (80,000km)</th>
            <td><?php echo number_format($evCar['fourthYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['fourthYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Coûts annuels</th>
            <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
        </tr>
        <tr class="infos">
            <th>Coût 5 ans (100,000km)</th>
            <td><?php echo number_format($evCar['fifthYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['fifthYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr class="details" hidden>
            <th>Coûts annuels</th>
            <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
        </tr>
    </tbody>
</table>
<button class="btn btn-success" id="expand_btn">Afficher les détails du calcul</button>

<script>
    $(document).ready(function(){
            $('#expand_btn').click(function(){
                $('.details').toggle();
            });
        });
</script>