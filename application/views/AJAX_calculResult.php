<br />
<table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <th class="col-lg-6 col-md-6 col-sm-6 col-xs-8"></th>
            <th class="col-lg-3 col-md-3 col-sm-3 col-xs-2"><?php echo $evCar['name']; ?></th>
            <th class="col-lg-3 col-md-3 col-sm-3 col-xs-2"><?php echo $gasCar['name']; ?></th>
        </tr>
    <thead>
    <tbody>
        <tr>
            <th>Coût d'acquisition (taxes et rabais gouvernementaux inclus)</th>
            <td><?php echo number_format($evCar['after_rebate_price'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['after_tax_price'], 2) . ' $'; ?></td>
        </tr>
        <tr>
            <th>Dépenses annuelles</th>
            <td><?php echo number_format($evCar['totalYearExpenses'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['totalYearExpenses'], 2) . ' $'; ?></td>
        </tr>
        <tr>
            <th>Coût 1 an (20,000km)</th>
            <td><?php echo number_format($evCar['firstYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['firstYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr>
            <th>Coût 2 ans (40,000km)</th>
            <td><?php echo number_format($evCar['secondYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['secondYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr>
            <th>Coût 3 ans (60,000km)</th>
            <td><?php echo number_format($evCar['thirdYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['thirdYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr>
            <th>Coût 4 ans (80,000km)</th>
            <td><?php echo number_format($evCar['fourthYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['fourthYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <tr>
            <th>Coût 5 ans (100,000km)</th>
            <td><?php echo number_format($evCar['fifthYearCosts'], 2) . ' $'; ?></td>
            <td><?php echo number_format($gasCar['fifthYearCosts'], 2) . ' $'; ?></td>
        </tr>
        <!--<tr>
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
        </tr>-->
        <!--<tr>
            <th>Consommation par 100 km</th>
            <td><?php echo $evCar['avg_consumption_rate'] . ' kWh'; ?></td>
            <td><?php echo $gasCar['avg_consumption_rate'] . ' L'; ?></td>
        </tr>
        <tr>
            <th>Coût pour parcourir 100 km</th>
            <td title="Basé sur un coût de <?php echo $electricity_cost;?> $ par kWh"><?php echo number_format($evCar['onehundredkmcost'], 2) . ' $'; ?></td>
            <td title="Basé sur un coût de <?php echo $gas_cost;?> $ par litre d'essence ordinaire"><?php echo number_format($gasCar['onehundredkmcost'], 2) . ' $'; ?></td>
        </tr>
        <tr>
            <th>Coût d'une recharge complète</th>
            <td title="Basé sur un coût de <?php echo $electricity_cost;?> $ par kWh"><?php echo number_format($evCar['fill_cost'], 2) . ' $ (à domicile)'; ?></td>
            <td title="Basé sur un coût de <?php echo $gas_cost;?> $ par litre d'essence ordinaire"><?php echo number_format($gasCar['fill_cost'], 2) . ' $ (essence ordinaire)'; ?></td>
        </tr>
        <tr>
            <th>Coût pour parcourir 20 000 km</th>
            <td title="Basé sur un coût de <?php echo $electricity_cost;?> $ par kWh"><?php echo number_format($evCar['twentykkmcost'], 2) . ' $'; ?></td>
            <td title="Basé sur un coût de <?php echo $gas_cost;?> $ par litre d'essence ordinaire"><?php echo number_format($gasCar['twentykkmcost'], 2) . ' $'; ?></td>
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
        </tr>-->
    </tbody>
</table>
<button class="btn btn-success" id="expand_btn">Afficher les détails du calcul</button>