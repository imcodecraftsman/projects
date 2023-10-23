<?php
namespace App\Libraries;
require_once('tcpdf\tcpdf.php');
use TCPDF;

class PDFReport extends TCPDF
{
	public function __construct(){
		parent::__construct();
	}
}