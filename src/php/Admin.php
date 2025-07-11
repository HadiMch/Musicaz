<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        main {
            margin-bottom: 100px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>

    <header class="p-3 bg-dark text-white text-center py-3">
        <h1>Admin Page</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.html">Musicz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="songs.html">Songs</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.html">About Us</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Logout</a></li>
            </ul>
        </div>
    </nav>

    <main class="container my-5">
        <h2>YOU ARE IN THE ADMIN PAGE</h2>
        <h2>!ONLY ADMINS CAN BE HERE!</h2>
    </main>

    <div class="container">
        <h1>Emails And Passwords</h1>
        <?php
            echo "";
            $con = mysqli_connect("localhost", "root", "", "authen");
            if (!$con) {
                echo "not connected";
            } else {
                echo ("<table class='table table-bordered'><thead class='thead-dark'><tr><th>Login</th><th>Pass</th><th>Cate</th></tr></thead><tbody>");
                $r = mysqli_query($con, "select * from login");
                if ($r) {
                    while ($row = mysqli_fetch_array($r)) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "</tr>";
                    }
                }
                echo "</tbody></table>";
            }
        ?>

        <h1>Feedbacks</h1>
        <?php
            echo "<br>";
            if (!$con) {
                echo "not connected";
            } else {
                echo ("<table class='table table-bordered'><thead class='thead-dark'><tr><th>Name</th><th>Email</th><th>Feedback</th></tr></thead><tbody>");
                $r = mysqli_query($con, "select * from feedback");
                if ($r) {
                    while ($row = mysqli_fetch_array($r)) {
                        echo "<tr>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        echo "</tr>";
                    }
                }
                echo "</tbody></table>";
            }
        ?>
    </div>

    <footer class="bg-light text-center py-3">
        <div class="Footer">
            &copy;2024 LIU <br>Muhammad Abdallah<br> Hadi Mcheimech
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
