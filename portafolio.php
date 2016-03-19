<div class="jumbotron">
        <h2>Welcome <? $name = ["name"] ?> <? $name = ["last_name"] ?></h2>
            <p>This is CS50 Finance</p>
    </div>

<table class ="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Symbol</th>
            <th>Shares</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $position["name"] ?></td>
                <td><?= $position["symbol"] ?></td>
                <td><?= $position["shares"] ?></td>
                <td>$<?= $position["price"] ?></td>
                <td>$<?= $position["total"] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<h3>Your balance is: </h3>
<h4>$<?=$cash?></h4>
