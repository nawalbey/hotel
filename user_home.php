<?php
session_start();
require_once "model/functions.php";
include_once "inc/header.php";
$userBookList = userBookList($_SESSION['id_user']);
$price = 0;
?>


<div class="container">

    <table class="table">
        <thead>
            <th> Id reservation</th>
            <th>start date</th>
            <th>end date</th>
            <th>state</th>
            <th>price</th>
            <th>action</th>
            </thea>
        <tbody>
            <?php foreach ($userBookList as $book) {
                $price += $book['booking_price']; ?>
                <tr>
                    <td>
                        <?php $book['id_booking']; ?>
                    </td>
                    <td>
                        <?= $book['booking_start_date']; ?>
                    </td>
                    <td>
                        <?= $book['booking_end_date']; ?>
                    </td>
                    <td>
                        <?= $book['booking_state']; ?>
                    </td>
                    <td>
                        <?= $book['booking_price']; ?>
                    </td>
                    <td> <a class="btn btn-warning"
                            href="mode/db_booking.php?id_book=<?= $book['id_booking']; ?>">cancel</a></td>
                </tr>

            <?php } ?>
        </tbody>

        <tfoot>
            <tr>
                <td class="bg-pink text-light"colspan="4">total de vos reservation</td>
                <td>
                    <?= $price; ?>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<?php include_once "inc/footer.php"; ?>