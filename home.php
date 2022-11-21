<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student page</title>
    <link rel="stylesheet" href="style.css">
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
            <div class="page_title text-center py-5" style="background-color: #2c3e50;">
                <h2 style="margin-bottom: 10; font-size: 42px;">Student Info</h2>
                <p style="margin-bottom: 0;">Our all student's details are shown here!</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="subbtn py-5">
                <a href="./curdapp/addnewstd.php" class="btn btn-outline-primary btn-lg">Add new student</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="datatable">
                <table class="table">
                    <thead class="table-dark table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $servername = "localhost";
                           $username = "root";
                           $password = "";
                           $database = "mycurd";

                           $connection = new mysqli($servername, $username, $password, $database);

                           if ($connection->connect_error) {
                            die("Connection failed" . $connection->connect_error);
                           }
                           //echo "Connected succesfully";

                           //read all row from database
                           $sql = "SELECT * FROM `curddata`";
                           $result = $connection->query($sql);

                           if (!$result) {
                            die("Invalid query" . $connection->error);
                           }

                           //read data of each row
                           while($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                              <td>$row[ID]</td>
                              <td>$row[Name]</td>
                              <td>$row[Email]</td>
                              <td>$row[Phone]</td>
                              <td>$row[Address]</td>
                                <td>
                                     <a href='./curdapplication/editstd.php' class='btn btn-outline-secondary btn-sm' >Edit</a>
                                     <a href='./curdapplication/dltstd.php' class='btn btn-outline-danger btn-sm'>Delete</a>
                                </td>
                            </tr>
                           
                            ";
    
                         }


                        ?>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
    
</body>
</html>