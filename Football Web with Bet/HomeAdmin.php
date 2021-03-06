<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    session_start();
    require("Koneksi.php");
    $id = $_SESSION['id_admin'];
    $query = mysqli_query($Koneksi, "SELECT * FROM admin where id_admin='$id'");
    $row = mysqli_fetch_array($query);

    $query2 = "SELECT * FROM article";
    $select = mysqli_query($Koneksi, $query2);
    $row2 = mysqli_num_rows($select);
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
                        <a href="HomeEditor.php" class="btn btn-outline-light" role="button" aria-pressed="true"><i class="fa fa-home"></i> Home</a>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://wallpapercave.com/wp/wp7286973.jpg" class="d-block w-100" alt="PremierLeague">
                        </div>
                        <div class="carousel-item">
                            <img src="https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(webp):focal(1307x475:1309x473)/origin-imgresizer.eurosport.com/2021/08/16/3202344-65602148-2560-1440.jpg" class="d-block w-100" alt="SerieA">
                        </div>
                        <div class="carousel-item">
                            <img src="https://as01.epimg.net/futbol/imagenes/2020/03/18/primera/1584548458_525565_1584548708_noticia_normal.jpg" class="d-block w-100" alt="LaLiga">
                        </div>
                        <div class="carousel-item">
                            <img src="https://wallpapercave.com/wp/wp1996349.jpg" class="d-block w-100" alt="Bundesliga">
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.sportmob.com/resource/news/20210822_974201/cover.jpg?cache=1629651257&d=600_338" class="d-block w-100" alt="Ligue 1">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div style="background-color: white;">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">In his life, a man can change wives, political parties or religions but he
                            cannot change his favorite soccer team</p><br>
                        <footer class="blockquote-footer">Eduardo Hughes Galeano</footer>
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3">
                    <div class="card-header text-center fw-bold">Kekalahan Manchester United</div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://statik.tempo.co/data/2021/10/25/id_1060992/1060992_720.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/10/25/834079439.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Manchester United secara mengejutkan menerima kekalahan di kandangnya
                            sendiri oleh rival mereka. Liverpool berhasil mengalahkan Manchester United 5-0. Hasil yang
                            mengejutkan bagi squad asuhan Ole Gunnar Solkjaer</p>
                        <a href="#" class="btn btn-outline-secondary" style="text-align: center;">View more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <h3 class="bg-secondary text-white text-center">Football News</h3>
            <br>
            <div style="text-align: center; margin-left: 10% ; margin-right: 10%;">
                <?php
                if ($row2 == 0) {
                ?><div style="text-align:center">
                        <h3>Belum Ada Article</h3>
                        <div class="container bg-secondary" style="width: 100%; height: 5px;"></div>
                        <p>Silahkan Menambahkan Article</p>
                    </div>
                    <?php
                } else {
                    $counter = 0;
                    echo '<div class="row">';
                    while ($data = mysqli_fetch_assoc($select)) {
                        if ($counter != 0 && $counter % 3 == 0) {
                            echo '</div><div class="row">';
                        }
                    ?><br>
                        <div class="col-sm-4">
                            <img src="gambar/<?php echo $data['gambar']; ?>" width="250px" height="250px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['judul_article'] ?></h5>
                                <p class="card-text"><?php echo $data['deskripsi'] ?></p>
                                <a href="DetailArticle.php?id_article=<?= $data['id_article'] ?>" class="btn btn-secondary">Tampilkan lebih lanjut</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Created at <?php echo $data['tanggal_terbit']?></small>
                            </div>
                        </div>
                <?php
                        ++$counter;
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
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
        ?? 2021 Copyright:
        <a class="text-white">SubagjaEricDallan_1202190198</a>
    </div>
</footer>

</html>