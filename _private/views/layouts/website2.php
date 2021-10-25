<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Transformers Community</title>
        <link rel="stylesheet" href="css/style2.css">
    <style>
        body {
            margin: 0;
        }
    #dashboard {
        display: grid;
        height: 100vh;
        grid-template-columns: 200px 1fr 200px;
        grid-template-rows: 50px 1fr 50px;
    }

    .header {
        grid-row: 1;
        grid-column-start: 1;
        grid-column-end: 4;
    }

    .nav {
        grid-row: 2;
        grid-column-start: 1;
        grid-column-end: 2;
    }

    .content {
        grid-row: 2;
        grid-column-start: 2;
        grid-column-end: 3;
    }

    .messages {
        grid-row: 2;
        grid-column-start: 3;
        grid-column-end: 4;
    }

    .footer {
        grid-row: 3;
        grid-column-start: 1;
        grid-column-end: 4;
    }
    </style>
</head>
<body>

<div id="dashboard">
    <div class=" header"><img src="images/logo.png" alt="Logo" height=67.5% style="float:left; padding: 7px;"></div>
    <div class=" nav">nav</div>
    <div class=" content">content</div>
    <div class=" messages">messages</div>
    <div class=" footer">footer</div>
</div>


<?php $this->start( 'javascript' ) ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<?php $this->stop(); ?>
</body>
</html>

