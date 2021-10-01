<?php

namespace Website\Controllers;

/**
 * Class RegistrationController
 *
 * Deze handelt de registratie van gebruikers
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class RegistrationController {

	public function registrationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('registerform');

	}

    public function registrationHandler() {
        $errors = [];

        $email    = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password = trim($_POST['wachtwoord']);

        if ($email === false){
            $errors['email'] = "Ongeldig e-mailadres!";
        };

        if (empty($password) || strlen( $password ) < 6 ) {
            $errors['wachtwoord'] = "Wachtwoord moet langer dan 6 tekens zijn!";
        };

        if (count($errors) === 0){
            $connection = dbConnect();
            $sql        = "SELECT * from `gebruikers` WHERE `email` = :email";
            $statement  = $connection->prepare($sql);
            $statement->execute( ['email' => $email] );

            if ( $statement->rowCount() === 0){
                $sql        = "INSERT INTO `gebruikers` (`email`, `password`) VALUES (:email, :password)";
                $statement  = $connection->prepare($sql);
                $hashedpass = password_hash($password, PASSWORD_DEFAULT);
                $params     = [
                    'email'    => $email,
                    'password' => $hashedpass
                ];
                $statement->execute($params);
                
                $successUrl = url('register.success');
                redirect($successUrl);
            }
            else {
                $errors['email'] = 'Dit account bestaat al!';
            }
        }
        
        $template_engine = get_template_engine();
        echo $template_engine->render( 'registerform', ['errors' => $errors] );

    }

    public function registrationSuccess() {
        $template_engine = get_template_engine();
        echo $template_engine->render('registersuccess');
    }
}

