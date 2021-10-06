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
        $result = validate_form($_POST);

        if (count($result['errors']) === 0){


            if ( notRegistered($result['data']['email'])){

                createAccount($result['data']);
                
                $successUrl = url('register.success');
                redirect($successUrl);
            }
            else {
                $errors['email'] = 'Dit account bestaat al!';
            }
        }
        
        $template_engine = get_template_engine();
        echo $template_engine->render( 'registerform', ['errors' => $result['errors']] );

    }

    public function registrationSuccess() {
        $template_engine = get_template_engine();
        echo $template_engine->render('registersuccess');
    }
}

