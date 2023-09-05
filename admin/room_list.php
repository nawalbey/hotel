<?php include_once "../inc/header.php";
require_once "../model/functions.php";
$listroom = roomList();
?>

<div class="container">

    <table class="table">
        <thead>
            <th>Id Room</th>
            <th>Room number</th>
            <th>Price</th>
            <th>persons</th>
            <th>Category</th>
            <th>Room state</th>
            <th>hotel Id</th>

            </thea>
        <tbody>
            <?php foreach ($listroom as $room) { ?>
                <tr>
                    <td>
                        <?= $room['id_room']; ?>
                    </td>
                    < <td>
                        <?= $room['room_number']; ?>
                        </td>
                        <td>
                            <?= $room['price']; ?>
                        </td>
                        <td>
                            <?= $room['persons']; ?>
                        </td>
                        <td>
                            <?= $room['category']; ?>
                        </td>

                        <td>
                            <?= $room['room_state']; ?>
                        </td>
                        <td>
                            <?= $room['hotel_id']; ?>
                        </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>



<?php include_once "../inc/footer.php"; ?>