<?php

class WedstrijdController extends BaseController {

    public function dezeMaand(){
        // geef wedstrijden/evenenmenten door van de huidige maand
        $wedstrijden = "Wedstrijden deze maand"
        return View::make(
            'home',
            // array(
            //     "wedstrijden" => $wedstrijden
            // )
        );
    }

}

?>
