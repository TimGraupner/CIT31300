<?php

class WeatherController extends Controller {

	public $result;

	public function index(){

		$this->set('result',false);
	}

	public function getResults() {
		$url = "http://api.worldweatheronline.com/premium/v1/weather.ashx?key=23d979acb7c6490785c41110171311&q=".$_POST['zip']."&format=xml&num_of_days=2";
		$xml = simplexml_load_file($url);

		$xml->zip = $_POST['zip'];

		$this->set('result',true);
		$this->set('weather',$xml);

	}

}
