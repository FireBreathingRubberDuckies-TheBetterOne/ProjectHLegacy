<!-- A termékek felsorolva / katalógus -->>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="termekek";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `termekek2`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
//                
            echo 'results';
            
        }
      } else {
        echo "0 results";
      }
      

    ?>
</body>
</html>