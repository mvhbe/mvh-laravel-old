<?php

class Uitslag extends Eloquent {

	protected $table = "uitslagen";

    public static function getWedstrijdUitslag($wedstrijd_id) {
    	$uitslagen = Uitslag::where('wedstrijd_id', "=", $wedstrijd_id)->get();
    	return $uitslagen;
    }

    public static function getWedstrijdenVanKalender($kalender_id) {
        $wedstrijden = DB::table("uitslagen")
                ->join("wedstrijden", "wedstrijden.id", "=", "uitslagen.wedstrijd_id")
                ->where("wedstrijden.kalender_id", "=", $kalender_id)
                ->distinct()
                ->select("wedstrijden.id as wedstrijd_id", DB::raw("date_format(wedstrijden.datum, '%d/%m/%Y') as datum"), "wedstrijden.omschrijving as omschrijving")
		->orderBy('wedstrijden.datum')
                ->get();
    	return $wedstrijden;
    }

    public function wedstrijd() {
        return $this->belongsTo('Wedstrijd');
    }

}

?>
