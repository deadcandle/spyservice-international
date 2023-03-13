
<div class="container">
    <?php

    $password = password_hash("NulNulZeven!", PASSWORD_BCRYPT);
    // echo (password_verify("", "$2y$10$9wpOzBBQE284II69rQ7dJuuPSLEPKkLj7n5gLq0O6s.1ZUYHPcHKi")) ? "GOOD" : "NO";

    $msg = "";
    if (isset($_POST["submit"])) {
        if (!($_POST["username"] == "J_Bond") || !(password_verify($_POST["password"], $password))) { //  NulNulZeven!
            $msg = "Fout: gebruikersnaam en/of wachtwoord zijn incorrect";
            include("content/login.html");
        } else {
            include("content/classified.html");
        }
    } else {
        include("content/login.html");
    }

    ?>
</div>