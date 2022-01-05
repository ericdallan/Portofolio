<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PremiumContent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    session_start();
    require("Koneksi.php");
    $id = $_SESSION['id_user'];
    $query = mysqli_query($Koneksi, "SELECT * FROM user where id_user='$id'");
    $row = mysqli_fetch_array($query);

    $query2 = mysqli_query($Koneksi, "SELECT * FROM bet where id_user='$id'");

    $select = mysqli_query($Koneksi, "SELECT SUM(placed_bet) AS total_bet FROM bet where id_user='$id'");
    $row2 = mysqli_fetch_assoc($select);
    $sum = $row2['total_bet'];

    $query3 = "SELECT * FROM bet where id_user='$id'";
    $select3 = mysqli_query($Koneksi, $query3);
    $row3 = mysqli_num_rows($select3);
    ?>
</head>

<body style="background-color:rgba(0, 0, 0, 0.2);">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#Home">Footballnesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="HomePremium.php" class="btn btn-outline-warning" role="button" aria-pressed="true"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Premier League
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Klasemen</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Top Scorer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Jadwal dan Hasil Liga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serie A
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Klasemen</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Top Scorer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Jadwal dan Hasil Liga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            La Liga
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Klasemen</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Top Scorer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Jadwal dan Hasil Liga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bundesliga
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Klasemen</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Top Scorer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Jadwal dan Hasil Liga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ligue 1
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Klasemen</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Top Scorer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Jadwal dan Hasil Liga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning bg-dark" href="PremiumContent.php">Premium Content</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ProfileModal">Profile</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="ProfileModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProfileModal">Profile User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" width="100" class="rounded-circle"></div>
                    <hr width="100%">
                    <form action="UpdateUser.php?id_user=<?= $row['id_user'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['email']  ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $row['nama'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="No_Hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="No_Hp" name="No_Hp" value="<?php echo $row['no_hp'] ?>">
                            </div>
                        </div>
                        <hr width="100%">
                        <div class="row mb-3">
                            <label for="Password" class="col-sm-2 col-form-label">Kata Sandi</label>
                            <div class="col-sm-10">
                                <input required type="Password" class="form-control" id="Password" name="Password" placeholder="Kata Sandi">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="PasswordConfirm" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                            <div class="col-sm-10">
                                <input required type="Password" class="form-control" id="PasswordConfirm" name="PasswordConfirm" placeholder="Konfirmasi Kata Sandi">
                            </div>
                        </div>
                        <div class="text-center pt-2">
                            <button type="submit" class="btn btn-outline-success" name="update">Update</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                    <a class="btn btn-outline-danger" href="LogoutUser.php" role="button">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" aria-label="Twelfth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="#">Premium Content only</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><b>Bet</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Analisis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Taktik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prediksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show fade in" role="alert" style="background-color:lightred;">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Today
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                            <li><a class="dropdown-item" href="#">Next Week</a></li>
                        </ul>
                    </div>
                    <div class="card-body text-center">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Time</th>
                                    <th scope="col">Club</th>
                                    <th scope="col">Home</th>
                                    <th scope="col">Draw</th>
                                    <th scope="col">Away</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>00:00</th>
                                    <td>Manchester United vs Liverpool</td>
                                    <td>5.35</td>
                                    <td>2.05</td>
                                    <td>2.50</td>
                                </tr>
                                <tr>
                                    <th>01:00</th>
                                    <td>Barcelona vs Real Madrid</td>
                                    <td>3.40</td>
                                    <td>2.40</td>
                                    <td>2.40</td>
                                </tr>
                                <tr>
                                    <th>02:30</th>
                                    <td>Inter vs Juventus</td>
                                    <td>4.50</td>
                                    <td>3.40</td>
                                    <td>4.25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button type="button" class="btn btn-warning btn-lg text-dark" data-bs-toggle="modal" data-bs-target="#BetModal">Place your bet !</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="BetModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="BetModal">Bet</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="AddBet.php?id_user=<?= $row['id_user'] ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="Nama" class="col-sm-2 col-form-label" hidden>Id user</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="UserID" name="UserID" value="<?php echo $row['id_user'] ?>" hidden>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="status" name="status" value="On Hold" hidden>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="selectRegister" class="col-sm-2 col-form-label">List Club</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="selectClub" name="selectClub">
                                                <option value="Manchester United vs Liverpool">Manchester United vs Liverpool</option>
                                                <option value="Barcelona vs Real Madrid">Barcelona vs Real Madrid</option>
                                                <option value="Inter vs Juventus">Inter vs Juventus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="No_Hp" class="col-sm-2 col-form-label">Placed Bet</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="placed_bet" name="placed_bet" placeholder="$">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="date" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <hr width="100%">
                                    <div class="text-center pt-2">
                                        <button type="submit" class="btn btn-primary" name="add">Add Bet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">League</div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">Premier League</li>
                        <li class="list-group-item">Serie A</li>
                        <li class="list-group-item">La Liga</li>
                        <li class="list-group-item">Bundesliga</li>
                        <li class="list-group-item">Ligue 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <h4 class="text-center">Bet List</h4>
        <div style="margin-left: 10% ; margin-right: 10%; background-color:white">
            <?php if ($row3 == 0) : ?>
                <div style="text-align:center">
                    <br><h3>Belum Ada Bet</h3>
                    <div class="container bg-warning" style="width: 100%; height: 5px;"></div>
                    <p>Silahkan Menambahkan Bet</p>
                </div>
            <?php else : ?>
                <table id="Bet" class="table table-bordered mt-3 text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Club</th>
                            <th>Date</th>
                            <th>Placed Bet</th>
                            <th>Status</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $num = 0;
                    while ($row2 = mysqli_fetch_assoc($query2)) {
                        $num++;
                    ?>
                        <tbody>
                            <tr>
                                <td><?= $num ?></td>
                                <td><?= $row2['club'] ?></td>
                                <td><?= $row2['date'] ?></td>
                                <td>$<?= $row2['placed_bet'] ?></td>
                                <td><?= $row2['status'] ?></td>
                                <td><a href="DeleteBet.php?id_bet=<?= $row2['id_bet'] ?>" class="btn btn-danger" name='delete'>Delete</a></td>
                                <td><a href="PayBetForm.php?id_bet=<?= $row2['id_bet'] ?>" class="btn btn-success" name='pay'>Pay</a></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <tfoot>
                        <tr class="fw-bold">
                            <td colspan="3">Total Bet</td>
                            <td>$<?= $sum ?></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endif; ?>
        </div>
        <br>
        <div class="ProgressBar text-center">
            <p>Betting Dealer Percentage </p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 60%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-8 text-success">
                        Success
                    </div>
                    <div class="col-4 text-danger">
                        Failed
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
<footer class="text-white text-center text-lg-start bg-dark">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Profile Footballnesia</h5>
                <iframe width="200" height="250" src="https://www.youtube.com/embed/nLxmuh6wCVY?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col-md-6 float-md-end mb-3 ms-md-3"></iframe>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit doloribus ratione iusto ducimus
                    impedit inventore quo, expedita, cumque eius perferendis iste voluptatem nam nihil laudantium,
                    dolore atque harum laboriosam recusandae.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis autem, error unde cumque debitis
                    est quod fugit nemo. Tempore, corporis? Sapiente, facere ut blanditiis omnis temporibus voluptatum
                    voluptatibus vitae itaque!
                </p>
                <div class="mt-4">
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-google"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <ul type="none">
                    <li>
                        <h5 class="text-uppercase mb-4">Find Our Location</h5>
                        <div id="map-container-google-2" class="z-depth-1-half map-container">
                            <iframe src="https://maps.google.com/maps?q=Istana+Kepresidenan+Cipanas&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </li>
                    <br>
                    <li>
                        <h5 class="text-uppercase mb-4">Opening hours</h5>
                        <table class="table text-center text-white">
                            <tbody class="font-weight-normal">
                                <tr>
                                    <td>Mon - Thu:</td>
                                    <td>8am - 9pm</td>
                                </tr>
                                <tr>
                                    <td>Fri - Sat:</td>
                                    <td>8am - 1am</td>
                                </tr>
                                <tr>
                                    <td>Sunday:</td>
                                    <td>9am - 10pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white">SubagjaEricDallan_1202190198</a>
    </div>
</footer>

</html>