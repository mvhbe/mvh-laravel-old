<?php

class UitslagController extends BaseController {

    public function showWedstrijdUitslag($wedstrijd_id){
        $uitslagen = Uitslag::find($wedstrijd_id);
        return View::make('uitslag/uitslag')
        		->with("uitslagen", $uitslagen);
    }

}

?>
