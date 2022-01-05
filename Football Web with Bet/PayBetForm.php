<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayBet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    session_start();
    include_once("Koneksi.php");
    if (isset($_GET['id_bet'])) {
        $id = $_GET['id_bet'];
    }
    $query = "SELECT * FROM bet WHERE id_bet=$id";
    $select = mysqli_query($Koneksi, $query);
    $display = mysqli_fetch_assoc($select);

    ?>
</head>

<body style="background-color:rgba(0, 0, 0, 0.2);">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="PremiumContent.php">Payment Bet</a>
    </nav>
    <br>
    <div class="card" style=" margin-left: 25% ; margin-right: 25%; background-color:white">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Payments</h5>
            <div class="card-text">
                <hr width="100%">
                <form action="PayBet.php?id_bet=<?= $display['id_bet'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="Nama" class="col-sm-2 col-form-label" hidden>Id user</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="BetID" name="BetID" value="<?php echo $display['id_bet'] ?>" hidden>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value="On Hold" hidden>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="selectRegister" class="col-sm-2 col-form-label">List Club</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Club" name="Club" value="<?php echo $display['club'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="No_Hp" class="col-sm-2 col-form-label">Placed Bet</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="placed_bet" name="placed_bet" value="<?php echo $display['placed_bet'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" placeholder="dd/mm/yyyy" value="<?php echo $display['date'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputGambar" class="form-label">Proof of Payment</label>
                        <input class="form-control" type="file" id="inputGambar" name="inputGambar" accept="image/png, image/jpeg">
                    </div>
                    <hr width="100%">
                    <div class="text-center pt-2">
                        <button type="submit" class="btn btn-primary" name="pay">Pay Bet</button>
                    </div>
                </form>
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