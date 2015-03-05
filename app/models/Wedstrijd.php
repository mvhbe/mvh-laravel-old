<?php

class Wedstrijd extends Eloquent {

    protected $table = "wedstrijden";

    public static function getWedstrijdenDezeMaand() {
        // geef wedstrijden/evenenmenten door van de huidige maand
        $datum = date("Ym");
        $wedstrijden = Wedstrijd::whereRaw("date_format(datum, '%Y%m') = ?", [$datum])
        		->orderByRaw('datum')
        		->get();
        return $wedstrijden;
    }
    
    public static function getWedstrijdenVanKalender($kalender_id) {
    	$wedstrijden = Wedstrijd::where('kalender_id', '=', $kalender_id)
    			->orderBy('datum')
    			->get();
    	return $wedstrijden;
    }

}

?>
