<?php
include 'dbconnection.php';
$sql = "SELECT * FROM emp";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<header>
            <nav
                class="navbar navbar-expand-sm navbar-dark bg-dark "
            >
                <div class="container">
                    <a class="navbar-brand" href="insertdata.php">insert data</a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="updatedata.php" aria-current="page"
                                    >update data
                                    <span class="visually-hidden"></span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="deletedata.php">delete data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="showdata.php">show data</a>
                            </li>
                           
                        </ul>
                        
                    </div>
                </div>
            </nav>

            
        </header>
<div class="container">
    <h2 class="text-center">Employee Information</h2>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SALARY</th>
                <th>DEPARTMENT</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["salary"]."</td>
                        <td>".$row["department"]."</td>
                        <td>
                            <a href='updatedata.php?id=".$row["id"]."' class='btn btn-primary'>Edit</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3' class='text-center'>No record found</td></tr>";
        }
        $con->close();
        ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>