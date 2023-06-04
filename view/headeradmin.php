<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="view/gambar/logo.png" alt="" />
            </div>
            <span class="logo_name">Cetakin</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="dashboard.php">
                        <i class="uil uil-create-dashboard"></i>
                        <span class="link-name">Layanan</span>
                    </a>
                </li>
                <li>
                    <a href="order.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Order</span>
                    </a>
                </li>
                <li>
                    <a href="status.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Status</span>
                    </a>
                </li>
                <li>
                    <a href="history.php">
                        <i class="uil uil-history"></i>
                        <span class="link-name">History</span>
                    </a>
                </li>
            </ul>
            <ul class="logout-mode">
                <li>
                    <a href="logout.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout <br> <?= $_SESSION['user']; ?></span>
                    </a>
                </li>

                <!-- <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li> -->
            </ul>
        </div>
    </nav>