<?php

class WedstrijdController extends BaseController {

    public function dezeMaand(){
        $wedstrijden = Wedstrijd::getWedstrijdenDezeMaand();
        return View::make('home')->with("wedstrijden", $wedstrijden);
    }

}

?>
