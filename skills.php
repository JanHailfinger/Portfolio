<?php
$currentSite = 'Skills';
include("./includes/template_top.php");
?>

<div class="container mt-5">
    <h2 class="text-center m-2">Meine Skills</h2>
    <div class="row rowy">
        <?php

        $ini = parse_ini_file('.gitignore/config.ini');
        $mysqli = new mysqli($ini["db_host"], $ini["db_user"], $ini["db_password"], $ini["db_name"]);
        if ($mysqli->connect_errno) {
            die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
        }

        $sql = "SELECT * FROM skills";
        $result = $mysqli->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-radius m-3 mb-5">
                    <img class="card-img-top img-fluid border-radius " src="' . $row["path"] . '" alt="CSharp Image">
                    <div class="card-block border-radius mb-2">
                        <h5 class="card-title pt-2 text-center">' . $row["maintitle"] . '</h4>
                        <h6 class="card-title text-center">' . $row["title"] . '</h5>
                        <h6 class="card-title text-center pt-2">Bereiche:</h5>
                        <p class="card-text text-center">' . $row["text"] . '</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <h6 class="text-center pb-2">Kenntnisstand</h6>
                        <div class="d-flex flex-row justify-content-center">
                        <i class="fa ' . ($row["rating"] >= 1 ? "fa-star" : "fa-star-o") . ' px-3 fa-lg text-warning" aria-hidden="true"></i>
                        <i class="fa ' . ($row["rating"] >= 2 ? "fa-star" : "fa-star-o") . ' px-3 fa-lg text-warning" aria-hidden="true"></i>
                        <i class="fa ' . ($row["rating"] >= 3 ? "fa-star" : "fa-star-o") . ' px-3 fa-lg text-warning" aria-hidden="true"></i>
                        <i class="fa ' . ($row["rating"] >= 4 ? "fa-star" : "fa-star-o") . ' px-3 fa-lg text-warning" aria-hidden="true"></i>
                        <i class="fa ' . ($row["rating"] >= 5 ? "fa-star" : "fa-star-o") . ' px-3 fa-lg text-warning" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>  
            </div>';
            }
        }
        ?>
    </div>
</div>

<?php include("./includes/template_bottom.php"); ?>