    <?php include 'navbar.php'; ?> 
<?php
    $Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
    file_put_contents('UIDContainer.php', $Write);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PCU-RFID</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<style>
        body {
            margin-left: 0px; /* Adjust the margin to accommodate the navbar height */
			margin-right: 0px;
        }
    </style>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<body>
    <h2>THIS IS DASHBOARD</h2>
  
</body>

</html>
