<?php

class Wedstrijd extends Eloquent {

    protected $table = "wedstrijden";

    public static function getWedstrijdenDezeMaand() {
        // geef wedstrijden/evenenmenten door van de huidige maand
        $datum = date("Ym");
        $wedstrijden = Wedstrijd::whereRaw("date_format(datum, '%Y%m') = ?", [$datum])->get();
        return $wedstrijden;
    }
}

?>
