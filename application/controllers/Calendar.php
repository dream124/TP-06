<?php
class calendar extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->library('calendar');

$this->load->library('calendar');
echo $this->calendar->generate();

}
}
