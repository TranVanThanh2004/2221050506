<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quốc gia</h1>
    <table border="1">
        <tr>
            
            <th>Quốc Gia</th>
        </tr>
        <?php
            include("connect.php");
            $sql = "
                    SELECT p.*, qg.ten_quoc_gia
                    FROM phim p
                    JOIN quoc_gia qg ON p.quoc_gia_id = qg.id
                ";

            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <
            <td><?php echo $row["ten_quoc_gia"]?></td>
           
        </tr>
        <?php }?>
    </table>
</body>
</html>