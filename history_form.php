<table class ="table table-striped">
    <thead>
        <tr>
            <th class="text-center" style="font-size:30px; font-family:Verdana; color:blue"><b>Transaction</b></th>
            <th class="text-center" style="font-size:30px; font-family:Verdana; color:red"><b>Date</b></th>
            <th class="text-center" style="font-size:30px; font-family:Verdana; color:orange"><b>Symbol</b></th>
            <th class="text-center" style="font-size:30px; font-family:Verdana; color:blue"><b>Shares</b></th>
            <th class="text-center" style="font-size:30px; font-family:Verdana; color:green"><b>Price</b></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($table as $cell): ?>
            <tr>
                <td><?= $cell["type"] ?></td>
                <td><?= $cell["time"] ?></td>
                <td><?= $cell["symbol"] ?></td>
                <td><?= $cell["shares"] ?></td>
                <td><?= $cell["price"] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
