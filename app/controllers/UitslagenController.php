<?php

class UitslagenController extends BaseController {

    public function uitslagen(){
    	$kalender = Kalender::orderBy('jaar', 'desc')->first();
        $wedstrijden = Wedstrijd::getWedstrijdenVanKalender($kalender->id);
        $wedstrijden = DB::select(
            'select distinct wedstrijd_id, w.datum, w.omschrijving from uitslagen u, wedstrijden w where u.wedstrijd_id = w.id'
        );
        return View::make('uitslagen')
        		->with("kalender", $kalender)
        		->with("wedstrijden", $wedstrijden);
    }

}

?>
