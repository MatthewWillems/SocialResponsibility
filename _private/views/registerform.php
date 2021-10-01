<?php $this->layout('layouts::website'); ?>

<h1>Inschrijven</h1>

<p>Schrijf je hier in om toegang te krijgen tot Transformers.community!</p>

<form action="<?php echo url('register.handle')?>" method="POST">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Je email zal met niemand gedeeld worden, het wordt exclusief gebruikt voor inloggen en evt. opname van contact.</small>
        <?php if ( isset( $errors['email'] ) ):?>
            <?php echo $errors['email']?>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
        <?php if ( isset( $errors['wachtwoord'] ) ):?>
            <?php echo $errors['wachtwoord']?>
        <?php endif;?>
    </div>
    <button type="submit" class="btn btn-primary">Aanmelden</button>
</form>