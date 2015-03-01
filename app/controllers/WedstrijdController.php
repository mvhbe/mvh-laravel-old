<?php

class WedstrijdController extends BaseController {

    public function dezeMaand(){
        // geef wedstrijden/evenenmenten door van de huidige maand
        $wedstrijden = Wedstrijd::whereRaw(
            "date_format(datum, '%Y%m') = ?", ['201401'])->get();
        //var_dump($wedstrijden);
        return View::make('home')->with("wedstrijden", $wedstrijden);
    }

}

?>
