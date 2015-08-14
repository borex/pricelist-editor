<?php  namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\StepfiveForm;
use Validator, Input, Redirect,Session ; 

class Stepfive extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		return view('pricelist.stepfive',$this->data);	
	}

	
	
	public function process(StepfiveForm $req)
	{
		
	$prl_cosmolit_bifolitc28as = $req->prl_cosmolit_bifolitc28as;	
	$prl_grandalitc28= $req->prl_grandalitc28;	
	$prl_trifolitc828= $req->prl_trifolitc828;	
	$prl_dufolits28= $req->prl_dufolits28;	
	$prl_bifolitc26= $req->prl_bifolitc26;	
	$prl_disablefive= $req->prl_disablefive;	
	
	if($prl_disablefive=='Yes')
	{
	 print_r(Session::all());
		return;
		
	}
	
	Session::put('prl_cosmolit_bifolitc28as' ,$prl_cosmolit_bifolitc28as);
	Session::put('prl_grandalitc28',$prl_grandalitc28);
	Session::put('prl_trifolitc828',$prl_trifolitc828);
	Session::put('prl_dufolits28',$prl_dufolits28);
	Session::put('prl_bifolitc26',$prl_bifolitc26);
	 echo "<pre>";
	  print_r(Session::all());
		return;
	}

	
	
	
	
	
}
