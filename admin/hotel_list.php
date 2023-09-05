<?php
include_once "../inc/header.php";
require_once "../model/functions.php";
?>
<div class="container">

    <table class="table">
        <thead>
            <th> Id hotel</th>
            <th>hotel Name</th>
            <th>location</th>
            <th>Capacity</th>
            </thea>
        <tbody>
            <?php foreach ($listhotel as $hotel) { ?>
                <tr>
                    <td>
                        <?= $hotel['id_hotel']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $hotel['id_hotel']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $hotel['id_hotel']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $hotel['id_hotel']; ?>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<?php include_once "../inc/footer.php"; ?>