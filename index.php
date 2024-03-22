<?php
try {
    $pdo = new PDO("sqlite:db/dua_main.sqlite");    
    $get_dua = "SELECT * FROM dua ORDER BY id ASC";
    $run_dua = $pdo->query($get_dua);
    

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        while ($row_dua = $run_dua->fetch(PDO::FETCH_ASSOC)) {
            $id = $row_dua['id'];
            $cat_id = $row_dua['cat_id'];
            $subcat_id = $row_dua['subcat_id'];
            $dua_id = $row_dua['dua_id'];
            $dua_name_bn = $row_dua['dua_name_bn'];

            echo "id no: $id<br>";

    
        }
    
    ?>
</body>
</html>
