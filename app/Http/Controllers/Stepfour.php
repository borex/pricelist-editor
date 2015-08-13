<?php  namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\StepfourForm;
use Validator, Input, Redirect,Session ; 

class Stepfour extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		return view('pricelist.stepfour',$this->data);	
	}

	
	
	public function process(StepfourForm $req)
	{
	$prl_imp_freesign3= $req->prl_imp_freesign3;	
	$prl_imp_2= $req->prl_imp_2;	
	$prl_multi_myview_2= $req->prl_multi_myview_2;	
	$prl_pure_life_free_2= $req->prl_pure_life_free_2;	
	$prl_pure_life_free= $req->prl_pure_life_free;	
	
	
	Session::put('prl_imp_freesign3',$prl_imp_freesign3);
	Session::put('prl_imp_2',$prl_imp_2);
	Session::put('prl_multi_myview_2',$prl_multi_myview_2);
	Session::put('prl_pure_life_free_2',$prl_pure_life_free_2);
	Session::put('prl_pure_life_free',$prl_pure_life_free);
	echo"<pre>";
	print_r(Session::all());
	//return Redirect::to('stepfive');
	}

	
	
	
	
	
}
