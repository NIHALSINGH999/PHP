<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-dark bg-dark"
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
        <main>
        <div class="container mt-5">
    <h2 class="text-center">Employee Information Form</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="name">NAME:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="salary">SALARY:</label>
            <input type="text" class="form-control" id="salary" name="salary" required>
        </div>
        <div class="form-group">
            <label for="department">DEPARTMENT:</label>
            <input type="text" class="form-control" id="department" name="department" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php
include 'dbconnection.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $sql=$con->prepare("INSERT INTO emp (id,name,salary,department) VALUES (?, ?,?,?)");
    $sql->bind_param("isis", $id,$name,$salary,$department);
    $id = $_POST["id"];
    $name = $_POST["name"];
    $salary = $_POST["salary"];
    $department = $_POST["department"];
    
    if ($sql->execute()) {
        echo "<div class='alert alert-success text-center'>DATA INSERTED</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . $sql->error . "</div>";
    }
    $sql->close();
    $con->close();
}
?>
