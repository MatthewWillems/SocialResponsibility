<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
</head>
<body>
<div class="container">
    <header>
        <h1>Social Responsibility</h1>
    </header>
    <nav>
		<?php if ( $this->section( 'navigation' ) ): ?>
			<?php echo $this->section( 'navigation' ) ?>
		<?php else: ?>
			<?php echo $this->fetch( '_navigation' ) ?>
		<?php endif ?>
    </nav>
    <main>
        <section class="content">
			<?php echo $this->section( 'content' ) ?>
        </section>
    </main>
    <footer>
        &copy; <?php echo date('Y')?>
    </footer>
</div>
<?php $this->start( 'javascript' ) ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<?php $this->stop(); ?>
</body>
</html>

