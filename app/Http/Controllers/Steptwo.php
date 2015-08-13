<?php  namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\SteptwoForm;
use Validator, Input, Redirect,Session ; 

class Steptwo extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		return view('pricelist.steptwo',$this->data);	
	}

	
	
	public function process(SteptwoForm $req)
	{
	$prl_pric_mono_plus_2= $req->prl_pric_mono_plus_2;	
	$prl_pric_mono_2= $req->prl_pric_mono_2;	
	$multi_mono_plus_2= $req->prl_multi_mono_plus_2;	
	$multi_mono_2= $req->prl_multi_mono_2;	
	$cosmolit= $req->prl_cosmolit;	
	$perfalit_stock_price_stock_price= $req->prl_cosmolit_stockline;	
	$perfalit= $req->prl_perfalit;	
	$perfalit_stock_price= $req->prl_perfalit_stockline;	
	
	
	Session::put('prl_pric_mono_plus_2',$prl_pric_mono_plus_2);
	Session::put('prl_pric_mono_2',$prl_pric_mono_2);
	Session::put('prl_multi_mono_plus_2',$multi_mono_plus_2);
	Session::put('prl_multi_mono_2',$multi_mono_2);
	Session::put('prl_cosmolit',$cosmolit);
	Session::put('prl_perfalit',$perfalit);
	Session::put('prl_perfalit_stockline',$perfalit_stock_price);
	Session::put('prl_perfalit_stockline',$perfalit_stock_price);
	


	
	return Redirect::to('stepthree');
	}

	
	
	
	
	
}
