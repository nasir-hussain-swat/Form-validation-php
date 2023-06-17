<html>

<body>
    <h1>Welcome to PHP</h1>
    <form method="POST" action="">

    Name: <input type="password" name="fname">
  <input type="submit">
</form>
    
 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }   }
?>


</body>

</html>