<?php
/**
 * @author Konrad Baron <konradbaron@gmail.com> http://kobatechnologies.com
 */
 
class SportsData {
	
	protected $api_key;
	protected $url_protocol;
	protected $send_url;
	protected $format; // xml, json
	protected $year; // Four digit year
	protected $access_level; // Real-Time (rt), Premium (p), Standard (s), Basic (b), Trial (t)
	private $format_valid = array('json','xml');
	private $access_level_valid = array('rt','p','s','b','t');
	
	
	protected function check_format($format) {
		if(!in_array($format,$this->format_valid)) throw new Exception('Format is not valid. Must be set as one of the following: '.implode(', ',$this->format_valid));
		return $format;
	}
	
	protected function check_year($request_year) {
		if (!is_int($request_year) || strlen($request_year) != 4) throw new Exception('Year Format is not valid. Must be valid four digit year');
		return $request_year;
	}
	
	protected function check_access_level($access_level) {
		if(!in_array($access_level,$this->access_level_valid)) throw new Exception('Access Level is not valid. Must be set as one of the following: '.implode(', ',$this->access_level_valid));
		return $access_level;
	}
	
	protected function curl($send_url) {
		$url = $this->url_protocol.$this->send_url;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			$error = curl_error($ch);
			curl_close($ch);
			
			throw new Exception("Failed retrieving  '" . $this->send_url . "' because of ' " . $error . "'.");
		}
		return $result;
	}
}
