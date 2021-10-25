<?php

namespace Website\Controllers;

class DashboardController {
    public function userDashboard() {
        echo "this thing works somehow";
    }

    public function about() {
        $template_engine = get_template_engine();
		echo $template_engine->render('about');
    }
}