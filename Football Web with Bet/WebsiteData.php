<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    session_start();
    require("Koneksi.php");
    $id = $_SESSION['id_admin'];
    $query = mysqli_query($Koneksi, "SELECT * FROM admin where id_admin='$id'");
    $row = mysqli_fetch_array($query);

    // Untuk mengakses data table user
    $query4 = mysqli_query($Koneksi, "SELECT * FROM user");

    // Untuk mengakses data table editor
    $query5 = mysqli_query($Koneksi, "SELECT * FROM editor");

    // Untuk mengakses data table bet
    $query2 = mysqli_query($Koneksi, "SELECT * FROM bet inner join user on bet.id_user = user.id_user");
    $select = mysqli_query($Koneksi, "SELECT SUM(placed_bet) AS total_bet FROM bet");
    $row2 = mysqli_fetch_assoc($select);
    $sum = $row2['total_bet'];

    // Untuk mengakses data table payment
    $query3 = mysqli_query($Koneksi, "SELECT * FROM payment join bet on payment.id_bet = bet.id_bet join user on user.id_user = bet.id_user");
    $select2 = mysqli_query($Koneksi, "SELECT SUM(placed_bet) AS total_bet FROM payment");
    $row3 = mysqli_fetch_assoc($select2);
    $sum2 = $row3['total_bet'];

    // Untuk mengakses data table article
    $query6 = mysqli_query($Koneksi, "SELECT * FROM article inner join editor on article.id_editor = editor.id_editor");

    // Untuk mengakses data table bet club
    $query7 = mysqli_query($Koneksi, "SELECT * FROM bet_club");
    ?>
</head>

<body style="background-color:rgba(0, 0, 0, 0.2);">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#Home">Footballnesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="HomeAdmin.php" class="btn btn-outline-light" role="button" aria-pressed="true"><i class="fa fa-home"></i> Home</a>
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
                        <a class="btn btn-outline-light" href="WebsiteData.php"><i class="fa fa-database"></i> Show Website Data</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#ProfileModal">Profile</button>
                </form>
            </div>
        </div>
    </nav>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show fade in bg-light text-dark" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>
    <div class="modal fade" id="ProfileModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProfileModal">Profile User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="UpdateAdmin.php?id_admin=<?= $row['id_admin'] ?>" method="POST" enctype="multipart/form-data">
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
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show fade in bg-light text-dark" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>
    <br>
    <div style="margin-left: 10% ; margin-right: 10%; background-color:white">
        <h3 class="text-center">User List</h3>
        <table id="Bet" class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
            <?php
            $num = 0;
            while ($row4 = mysqli_fetch_assoc($query4)) {
                $num++;
            ?>
                <tbody>
                    <tr>
                        <td><?= $num ?></td>
                        <td><?= $row4['nama'] ?></td>
                        <td><?= $row4['email'] ?></td>
                        <td><?= $row4['password'] ?></td>
                        <td><?= $row4['no_hp'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <br>
    <div style="margin-left: 10% ; margin-right: 10%; background-color:white">
        <h3 class="text-center">Bet Club</h3>
        <table id="Bet" class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Time</th>
                    <th>Club</th>
                    <th>Home</th>
                    <th>Draw</th>
                    <th>Away</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
            $num = 0;
            while ($row7 = mysqli_fetch_assoc($query7)) {
                $num++;
            ?>
                <tbody>
                    <tr>
                        <td><?= $num ?></td>
                        <td><?= $row7['time'] ?></td>
                        <td><?= $row7['club'] ?></td>
                        <td><?= $row7['home'] ?></td>
                        <td><?= $row7['draw'] ?></td>
                        <td><?= $row7['away'] ?></td>
                        <td><a href="DeleteBetClub.php?id_bet_club=<?= $row7['id_bet_club'] ?>" class="btn btn-danger" name='delete'>Delete</a></td>
                        <td><a href="UpdateBetClubForm.php?id_bet_club=<?= $row7['id_bet_club'] ?>" class="btn btn-success" name='update'>Update</a></td>
                    </tr>
                </tbody>
            <?php } ?>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href ="CreateBetClubForm.php"type="button" class="btn btn-primary">Create</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <br>
    <div style="margin-left: 10% ; margin-right: 10%; background-color:white">
        <h3 class="text-center">Bet List</h3>
        <table id="Bet" class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Club</th>
                    <th>Date</th>
                    <th>Placed Bet</th>
                    <th>Status</th>
                    <th>User</th>
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
                        <td><?= $row2['nama'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
            <tfoot>
                <tr class="fw-bold">
                    <td colspan="3">Total Bet From All User</td>
                    <td>$<?= $sum ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <br>
    <div style="margin-left: 10% ; margin-right: 10%; background-color:white">
        <h3 class="text-center">Payment List</h3>
        <table id="Bet" class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Club</th>
                    <th>Date</th>
                    <th>Placed Bet</th>
                    <th>Status</th>
                    <th>Proof of payment</th>
                    <th colspan="2">Action</th>
                    <th>User</th>
                </tr>
            </thead>
            <?php
            $num1 = 0;
            while ($row3 = mysqli_fetch_assoc($query3)) {
                $num1++;
            ?>
                <tbody>
                    <tr>
                        <td><?= $num1 ?></td>
                        <td><?= $row3['club'] ?></td>
                        <td><?= $row3['date'] ?></td>
                        <td>$<?= $row3['placed_bet'] ?></td>
                        <td><?= $row3['status'] ?></td>
                        <td>
                            <img src="payment/<?php echo $row3['gambar'] ?>" alt="" width="50px" height="50px">
                        </td>
                        <td><a href="DeletePayment.php?id_bet=<?= $row3['id_bet'] ?>" class="btn btn-danger" name='delete'>Delete</a></td>
                        <td><a href="UpdateBetForm.php?id_bet=<?= $row3['id_bet'] ?>" class="btn btn-success" name='update'>Update</a></td>
                        <td><?= $row3['nama'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
            <tfoot>
                <tr class="fw-bold">
                    <td colspan="3">Total Bet From All User</td>
                    <td>$<?= $sum2 ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <br>
    <div style="margin-left: 10% ; margin-right: 10%; background-color:white">
        <h3 class="text-center">Editor List</h3>
        <table id="Bet" class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
            <?php
            $num = 0;
            while ($row5 = mysqli_fetch_assoc($query5)) {
                $num++;
            ?>
                <tbody>
                    <tr>
                        <td><?= $num ?></td>
                        <td><?= $row5['nama'] ?></td>
                        <td><?= $row5['email'] ?></td>
                        <td><?= $row5['password'] ?></td>
                        <td><?= $row5['no_hp'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <br>
    <div style="margin-left: 10% ; margin-right: 10%; background-color:white">
        <h3 class="text-center">Article List</h3>
        <table id="Bet" class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publishing Date</th>
                    <th>Tag</th>
                    <th>Language</th>
                </tr>
            </thead>
            <?php
            $num = 0;
            while ($row6 = mysqli_fetch_assoc($query6)) {
                $num++;
            ?>
                <tbody>
                    <tr>
                        <td><?= $num ?></td>
                        <td><?= $row6['judul_article'] ?></td>
                        <td><?= $row6['penulis_article'] ?></td>
                        <td><?= $row6['tanggal_terbit'] ?></td>
                        <td><?= $row6['tag'] ?></td>
                        <td><?= $row6['bahasa'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <br>
</body>
<footer class="text-white text-center text-lg-start bg-secondary">
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