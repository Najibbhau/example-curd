<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mycurd";

//Create connection with database
$connection = new mysqli($servername, $username, $password, $database);




$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";




if ( $_SERVER['REQUEST_METHOD'] == 'GET') {

    // GET method: Show the data of the client

    if ( !isset($_GET["id"])) {
        header( "location: ./curdapplication/home.php");
        exit;
    }

    $id = $_GET["id"];

    //read the data for selected student from the database
    $sql = "SELECT * FROM `curddata` WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: ./curdapplication/home.php");
        exit;
    }

    $id = $row["ID"];
    $name = $row["Name"];
    $email =$row["Email"];
    $phone =$row["Phone"];
    $address =$row["Address"];
}
else {
    // Post method: Updte the data of the client

    $id = $row["ID"];
    $name = $row["Name"];
    $email =$row["Email"];
    $phone =$row["Phone"];
    $address =$row["Address"];

    do {
        if ( empty($id) || empty($name) || empty($email) || empty($phone) || empty($address) ) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE `curddata` SET `ID`='$id',`Name`='$name',`Email`='$email',`Phone`='$phone',`Address`='$address' WHERE id = $id";

        $result = $connection->query($sql);

        if(!$result) {
            $errorMessage = "Invalid query" . $connection->error;
            break;
        }

        $successMessage = "Student's info updated successfully";

        header("location: ./curdapplication/home.php");
        exit;
        
    } while (true);
}
?>
 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new student</title>
    <link rel="stylesheet" href="style03.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="pagetitle py-5" style="text-align: center; background-color: #2c3e50;">
                <h2 style="font-size: 42px; margin-bottom: 15px;">Update student info</h2>
                <p style="margin-bottom: 0;">You can add a new student by inserting his name id email address etc. </p>
            </div>
        </div>
    </div>
           <div class="container">
              <?php
                  if ( !empty($errorMessage)) {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'> <strong>$errorMessage</strong> 
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
                    }
        
                 ?>

               <?php
                  if ( !empty($successMessage)) {
                     echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'> <strong>$successMessage</strong> 
                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
                    }
            
                   ?>
         </div>



    <div class="container">

        <div class="row">
            <div class="form-title text-center py-5">
                <h2 style="color: #2c3e50; margin-top: 40px;">Student form</h2>
            </div>
        </div>
    </div>      


    <div class="addform my-5">





        <form action="#" method="post">
            <input type="hidden" value="<?php echo $id; ?>">">

            <div class="row mb-3">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                <div class="form-floating mb-3">
                       <input type="text" class="form-control" id="floatingInput02" placeholder="name@example.com" name="name" value="<?php echo $name; ?>">
                       <label for="floatingInput02">Name</label>
                    </div>
                </div>
                <div class="col-xl-2"></div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                <div class="form-floating mb-3">
                       <input type="email" class="form-control" id="floatingInput03" placeholder="name@example.com" name="email" value="<?php echo $email; ?>">
                       <label for="floatingInput03">email</label>
                    </div>
                </div>
                <div class="col-xl-2"></div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                <div class="form-floating mb-3">
                       <input type="number" class="form-control" id="floatingInput04" placeholder="name@example.com" name="phone" value="<?php echo $phone; ?>">
                       <label for="floatingInput04">Phone</label>
                    </div>
                </div>
                <div class="col-xl-2"></div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                <div class="form-floating mb-3">
                       <input type="text" class="form-control" id="floatingInput05" placeholder="name@example.com" name="address" value="<?php echo $address; ?>">
                       <label for="floatingInput05">Address</label>
                    </div>
                </div>
                <div class="col-xl-2"></div>
            </div>


            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                  <button type="submit" class="btn btn-outline-success" name="submit" style="margin-right: 15px;">Save</button>
                  <a href="./curdapplication/home.php" role="button" class="btn btn-outline-danger">Cancel</a>

                </div>
                <div class="col-xl-2"></div>
            </div>

        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>