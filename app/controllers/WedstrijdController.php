<?php

class WedstrijdController extends BaseController {

    public function dezeMaand(){
        // geef wedstrijden/evenenmenten door van de huidige maand
        $wedstrijden = Kalender::all();
        return View::make(
            'home',
            array(
                "wedstrijden" => $wedstrijden
            )
        );
    }

}

?>
