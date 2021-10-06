<?php

namespace Website\Controllers;

class LoginController {

    public function loginForm() {

        $template_engine = get_template_engine();
		echo $template_engine->render('loginform');
        
    }

    public function loginHandler() {
        $result = validate_form($_POST);

        if(notRegistered( $result['data']['email'])){
            $result['errors']['email'] = "Deze gebruiker bestaat niet. Registreer als je een account wilt aanmaken.";
        } else {
            $user = getUserByEmail($result['data']['email']);

            if(password_verify($result['data']['password'], $user['password'])){
                $_SESSION['userid'] = $user['id'];

                redirect(url('login.dashboard'));
                
            } else {
                $result['errors']['password'] = "Het gegeven wachtwoord is niet correct.";
            }
        }

        $template_engine = get_template_engine();
		echo $template_engine->render('loginform', ['errors' => $result['errors']]);
    }
    
    public function userDashboard() {

    }

}