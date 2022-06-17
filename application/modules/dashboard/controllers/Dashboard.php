<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function iqbalnet()
	{
		$data['url1'] = 'http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-day.png';
		$data['url2'] = 'http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-week.png';
		$data['url3'] = 'http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-month.png';
    $this->load->view('home/template/header.php');
		$this->load->view('v_dashboard',$data);
    $this->load->view('home/template/footer.php');;
	}
	public function izul()
	{
		$data['url1'] = 'http://103.170.22.4/izul/mikrotik-simple-queue-in-out-day.png';
		$data['url2'] = 'http://103.170.22.4/izul/mikrotik-simple-queue-in-out-week.png';
		$data['url3'] = 'http://103.170.22.4/izul/mikrotik-simple-queue-in-out-month.png';
		$this->load->view('home/template/header.php');
		$this->load->view('v_dashboard',$data);
		$this->load->view('home/template/footer.php');;
	}
	public function kopitom()
	{
		$data['url1'] = 'http://103.170.22.4/kopitom/mikrotik-simple-queue-in-out-day.png';
		$data['url2'] = 'http://103.170.22.4/kopitom/mikrotik-simple-queue-in-out-week.png';
		$data['url3'] = 'http://103.170.22.4/kopitom/mikrotik-simple-queue-in-out-month.png';
		$this->load->view('home/template/header.php');
		$this->load->view('v_dashboard',$data);
		$this->load->view('home/template/footer.php');;
	}
	public function graph()
	{
		$this->load->view('v_graph');
	}
}
