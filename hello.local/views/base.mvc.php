<!DOCTYPE html>
<html>

<head>
    <title>{% yield title %}</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="..//img/logo.ico">
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/artistsMainPagestyle.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    {% yield body %}

</body>
<script src="js/script.js"></script>

</html>