<?php
    include_once 'php/process.php';

?>

<!DOCTYPE html>
<html>

<head>
</head>
<body>

<?php
    $sql = "SELECT * FROM User;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['ID'];  
        }

    }

?>

</body>

</html>
