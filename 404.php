
<!DOCTYPE HTML>
<html id="bg">

<head>
    <title>Spyservices</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/theme.css">
</head>

<body>
    <?php
    include("content/menu.html");
    include("content/notfound.html");
    ?>
</body>

</html>

<script>
    // hard coded but who gives
    if (!document.getElementById("spybg")) {
        document.getElementById("bg").style.backgroundColor = "#D8E0EB"
    }
</script>