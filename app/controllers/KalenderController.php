<?php

class KalenderController extends BaseController {

    public function kalender(){
    	$kalender = Kalender::orderBy('jaar', 'desc')->first();
        $wedstrijden = Wedstrijd::getWedstrijdenVanKalender($kalender->id);
        return View::make('kalender')
        		->with("kalender", $kalender)
        		->with("wedstrijden", $wedstrijden);
    }
}

?>
