<?php $this->layout('layouts::website2'); ?>

<h1>Inloggen</h1>

<p>Log in met je email en wachtwoord.</p>

<form action="<?php echo url('login.handle')?>" method="POST">
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="emailHelp">
        <?php if ( isset( $errors['email'] ) ):?>
            <?php echo $errors['email']?>
        <?php endif;?>
    </div><br>

    <div>
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
        <?php if ( isset( $errors['wachtwoord'] ) ):?>
            <?php echo $errors['wachtwoord']?>
        <?php endif;?>
    </div><br>
    <hr>
    <button type="submit">Inloggen</button><br>

</form>