<?php

class ArchiefController extends BaseController {

    public function overzichtKalenders(){
    	$kalenders = Kalender::orderBy('jaar', 'desc')->get();
        return View::make('archief.kalenders')
        		->with("kalenders", $kalenders);
    }

    public function overzichtUitslagen(){
        $kalenders = Kalender::orderBy('jaar', 'desc')->get();
        return View::make('archief.uitslagen')
        		->with("kalenders", $kalenders);
    }}

?>
