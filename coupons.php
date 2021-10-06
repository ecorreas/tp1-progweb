<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

    </div>

    <div>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Data Validadae</th>
            </tr>
            <?php
            require "./controller/couponsController.php";
            $coupons =  getCouponsController();
            while($row = mysqli_fetch_array($coupons)){
                echo('<tr>' .
                '<td>' . $row['code'] . '</td>' .
                '<td>' . $row['expire_date'] . '</td>');
            }
            ?>
        </table> 
    </div>
</body>
</html>