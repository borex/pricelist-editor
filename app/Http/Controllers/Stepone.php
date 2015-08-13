<?php  namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\SteponeForm;
use Validator, Input, Redirect,Session ; 

class Stepone extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		return view('pricelist.stepone',$this->data);	
	}

	
	
	public function process(SteponeForm $req)
	{
	$prl_priceoption= $req->prl_priceoption;	
	$prl_pricerounded= $req->prl_pricerounded;	
	$prl_old_prl= $req->prl_old_prl;	
	$margin= $req->marginmonth;	
	$cent= $req->margincent;	
	Session::put('prl_pricelistoption',$prl_priceoption);
	Session::put('prl_pricerounded',$prl_pricerounded);
	Session::put('prl_margin', $margin);	
	Session::put('prl_cent', $cent);	
	return Redirect::to('steptwo');
	}

	
	
	
	
	
}
