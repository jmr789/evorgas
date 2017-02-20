<br />
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
            <th>Consommation par 100 km</th>
            <td><?php echo $evCar['avg_consumption_rate'] . ' kWh'; ?></td>
            <td><?php echo $gasCar['avg_consumption_rate'] . ' L'; ?></td>
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