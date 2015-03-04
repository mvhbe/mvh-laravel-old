<?php

class KalenderController extends BaseController {

    public function laatsteKalender(){
    	$kalender = Kalender::orderBy('jaar', 'desc')->first();
        $wedstrijden = Wedstrijd::getWedstrijdenVanKalender($kalender->id);
        return View::make('kalender')
        		->with("kalender", $kalender)
        		->with("wedstrijden", $wedstrijden);
    }

}

?>
