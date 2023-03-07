<?php
    include("connection.php");

    #extraction of data from the form in index.php, if statement to ensure that data is only submitted on submit button click
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            header("Location: welcome.php");
        }else{
            echo '<script>
                alert("Invalid username or password.");
                window.location.href = "index.php";
            </script>';
        }
    }
?>