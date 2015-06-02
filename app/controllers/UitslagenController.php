<?php

class UitslagenController extends BaseController {

    public function uitslagen(){
    	$kalender = Kalender::orderBy('jaar', 'desc')->first();
        $wedstrijden = Uitslag::getWedstrijdenVanKalender($kalender->id);
        return View::make('uitslagen')
        		->with("kalender", $kalender)
        		->with("wedstrijden", $wedstrijden);
    }

}

?>
