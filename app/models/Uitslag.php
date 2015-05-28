<?php

class Uitslag extends Eloquent {

	protected $table = "uitslagen";

    public static function getWedstrijdUitslag($wedstrijd_id) {
    	$uitslagen = Uitslag::where('wedstrijd_id', "=", $wedstrijd_id)->get();
    	return $uitslagen;
    }

    public function wedstrijd() {
        return $this->belongsTo('Wedstrijd');
    }

}

?>
