<?php

$sql = mysqli_connect("db", "website", "website", "website")
    or die("error:" . mysqli_connect_error($sql));

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>OS - Docker</title>
</head>

<body style="background-color: #f8fafc">
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top" style="padding: 3px 8px 3px 8px;">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="https://seeklogo.com/images/D/docker-logo-CF97D0124B-seeklogo.com.png" style="width: 40px; margin-right: 10px;"></img>
                </a>
                <div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-center">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div style="text-align: center" class="mt-5">
                <h1> Hi Daan! </h1>
            </div>
        </div>
        <div class="card mx-auto mt-5" style="max-width: 600px;">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th> Databases </th>
                    </tr>
                </thead>
                <tbody>
                    <?php //serve with cmd ipv wsl!!!

                    if (!($result = mysqli_query($sql, 'SHOW DATABASES'))) {
                        printf("Error: %s\n", mysqli_error($link));
                    }

                    while ($row = mysqli_fetch_row($result)) {
                        if (($row[0] != "information_schema") && ($row[0] != "mysql")) {
                            echo "<tr> 
                                   <td>" . $row[0] . "</td>
                                  </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>