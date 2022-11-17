<?php require('config.php');
$sname= "localhost";
$unmae= "uzumaki@gmail.com";
$password = "naruto";
$db_name = "contact";
if (!$conn) {
    echo "Connection failed!";
}
?>
<?php 

session_start(); 

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: auth.php");

        exit();

    }else if(empty($pass)){

        header("Location: auth.php");

        exit();

    }else{
        $sql = "SELECT * FROM `admin` WHERE email='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);
        
        $link =  mysqli_connect("localhost", "root", "" , "contact");
        $sqlX = "SELECT * FROM `user`";
        $results = mysqli_query($link, $sqlX);
        $rowX = mysqli_fetch_assoc($results);



        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];


                header("refresh:2 url=logoutBtn.php");

                exit();

            }else{

                header("Location: auth.php");

                exit();

            }

        }else{

            header("Location: auth.php");

            exit();

        }

    }

}else{

    header("Location: db.php");

    exit();

}
?>