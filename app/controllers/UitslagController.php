<?php

class UitslagController extends BaseController {

    public function showWedstrijdUitslag($wedstrijd_id){
        $uitslagen = Uitslag::getWedstrijdUitslag($wedstrijd_id);
        // terug verwijderen !!
        $wedstrijd = Wedstrijd::find($wedstrijd_id);
        return View::make('uitslag/uitslag')
                ->with("wedstrijd", $wedstrijd)
        		->with("uitslagen", $uitslagen);
    }

}

?>
