<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    session_start();
    require("Koneksi.php");
    $id = $_SESSION['id_editor'];
    $query = mysqli_query($Koneksi, "SELECT * FROM editor where id_editor='$id'");
    $row = mysqli_fetch_array($query);
    ?>
</head>

<body style="background-color:rgba(0, 0, 0, 0.2);">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary justify-content-center">
        <a class="navbar-brand" href="HomeEditor.php">Footballnesia</a>
    </nav>
    <div style="padding-top :5% ; margin-left: 10% ; margin-right: 10%;">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <h3 style="text-align: center; font-weight: bold;">Create Article</h3>
            <form action="CreateArticle.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="inputJudul" class="form-label" style="font-weight: bold;">Title Article</label>
                    <input class="form-control" id="inputID" name="inputID" type="text" value="<?php echo $row['id_editor'] ?>" hidden>
                    <input type="text" class="form-control" id="inputJudul" name="inputJudul">
                </div>
                <div class="mb-3">
                    <label for="inputPenulis" class="form-label" style="font-weight: bold;">Penulis Article</label>
                    <input class="form-control" id="inputPenulis" name="inputPenulis" type="text" value="<?php echo $row['nama'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="inputTahun" class="form-label" style="font-weight: bold;">Year</label>
                    <input type="date" class="form-control" id="inputTahun" name="inputTahun" placeholder="Contoh : 1980">
                </div>
                <div class="mb-3">
                    <label for="inputDeskripsi" class="form-label" style="font-weight: bold;">Description</label>
                    <textarea class="form-control" id="inputDeskripsi" name="inputDeskripsi" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="inputBahasa" class="form-label" style="font-weight: bold;">Language</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Bahasa" id="inlineRadio1" value="Indonesia">
                        <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Bahasa" id="inlineRadio2" value="Lainnya">
                        <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputTag" class="form-label" style="font-weight: bold;">Tag</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="Tag[]" value="Premier League">
                        <label class="form-check-label" for="inlineCheckbox1">Premier League</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Tag[]" value="Serie A">
                        <label class="form-check-label" for="inlineCheckbox2">Serie A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="Tag[]" value="La Liga">
                        <label class="form-check-label" for="inlineCheckbox3">La Liga</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="Tag[]" value="Bundesliga">
                        <label class="form-check-label" for="inlineCheckbox4">Bundesliga</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="Tag[]" value="Ligue 1">
                        <label class="form-check-label" for="inlineCheckbox5">Ligue 1</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputGambar" class="form-label" style="font-weight: bold;">Picture</label>
                    <input class="form-control" type="file" id="inputGambar" name="inputGambar" accept="image/png, image/jpeg">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" name="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</body>

<footer class="text-white text-center text-lg-start bg-primary">
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