<?php
$currentSite = 'Kontakt';
include("./includes/template_top.php");
$ini = parse_ini_file('.gitignore/config.ini');
?>

<div class="container mt-5 flex-grow d-table">
<h2 class="m-2  text-center">Kontakt</h2>
    <form class="text-center border border-light p-5 my-auto" action="kontakt.php" method="post">
    
        <input required name="name" type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
        <input required name="email" type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
        <div class="form-group">
            <textarea required name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Nachricht"></textarea>
        </div>

        <div class="custom-control custom-checkbox mb-4">
            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
            <label class="custom-control-label" for="defaultContactFormCopy">Ich habe die <a href="dsgvo">Datenschutzbestimmungen</a> gelesen und akzeptiere diese</label>
        </div>

        <input type="hidden" name="token" id="token">
        <button name="submit" class="btn btn-info btn-block" type="submit">Abschicken</button>
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $ini["public_key"] ?>"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute("<?php echo $ini["public_key"] ?>", {
                    action: 'submit'
                }).then(function(token) {
                    document.getElementById("token").value = token;
                });
            });
        </script>
    </form>
    <p class="text-center"></p>
    <?php
    if (isset($_POST["submit"])) {
        $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $ini["private_key"] . "&response=" . $_POST["token"]);
        error_log($request);
        $request = json_decode($request);

        if ($request->success == true) {
            if ($request->score >= 0.7) {
                mail($ini["admin_email"], "Kontaktformular", '
                Name: ' . $_POST["name"] . '
                Email: ' . $_POST["email"] . ' Nachricht: ' . $_POST["message"]);
                echo '<p class="text-center text-success">Das Kontaktformular wurde abgesendet!</p>';
            } else {
                echo '<p class="text-center text-danger">Die Anfrage wurde aufgrund von Spamverdacht blockiert.</p>';
            }
        } else {
            echo '<p class="text-center text-danger">Es gab einen Fehler mit dem Captcha</p>';
        }
    }
    ?>


</div>

<?php include("./includes/template_bottom.php"); ?>