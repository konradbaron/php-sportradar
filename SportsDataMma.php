<?php
/**
 * @author Konrad Baron <konradbaron@gmail.com> http://kobatechnologies.com
 */

require_once 'SportsData.php';


class SportsDataMma extends SportsData {
	
  private $base_url = "api.sportradar.us/mma-";
  private $version; // Whole number (sequential, starting with the number 1)
	
  public function __construct($api_key,$version,$access_level,$secure = false) {
    $this->api_key = $api_key;
    $this->version = $this->check_version($version);
    $this->access_level = $this->check_access_level($access_level);
    $this->url_protocol = $secure ? 'https://' : 'http://';
  }
  
  private function check_version($version) {
    if(!is_int($version)) throw new Exception('Version is invalid. Must be whole number');
    return $version;
  }
	
  public function schedule() {
    $this->send_url = $this->base_url.$this->access_level.$this->version.'/schedule.xml?api_key='.$this->api_key;
    return $this->curl($this->send_url);
  }
	
  public function event_results($event_id) {
    $this->send_url = $this->base_url.$this->access_level.$this->version.'/events/'.$event_id.'/summary.xml?api_key='.$this->api_key;
    return $this->curl($this->send_url);
  }
	
  public function participant_list() {
    $this->send_url = $this->base_url.$this->access_level.$this->version.'/profiles.xml?api_key='.$this->api_key;
    return $this->curl($this->send_url);
  }
	
  public function participant_profile($fighter_id) {
    $this->send_url = $this->base_url.$this->access_level.$this->version.'/participants/'.$fighter_id.'/profile.xml?api_key='.$this->api_key;
    return $this->curl($this->send_url);
  }
}
