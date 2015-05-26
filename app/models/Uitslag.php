<?php

class Uitslag extends Eloquent {

	protected $table = "uitslagen";

    //public static function getUitslagenVanKalender($kalender_id) {
    //	$uitslagen = Uitslag::with('wedstrijd')->get();
    //			//->orderBy('datum')
    //			//->get();
    //	return $uitslagen;

    public function wedstrijd() {
        return $this->belongsTo('Wedstrijd');
    }

}

?>
