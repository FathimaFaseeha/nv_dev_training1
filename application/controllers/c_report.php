<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_report extends CI_Controller {

    public function __conctruct(){
        parent:: __construct();
        $this->load->library('employee_report');
    }

    public function index(){

        $this->load->view('EmployeeReport/v_report');
    }
}
