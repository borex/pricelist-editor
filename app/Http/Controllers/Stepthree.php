<?php  namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\StepthreeForm;
use Validator, Input, Redirect,Session ; 

class Stepthree extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		return view('pricelist.stepthree',$this->data);	
	}

	
	
	public function process(StepthreeForm $req)
	{
	$prl_imp_ergo_fs_2= $req->prl_imp_ergo_fs_2;	
	$prl_imp_ergo_2= $req->prl_imp_ergo_2;	
	$prl_multi_ergo_2= $req->prl_multi_ergo_2;	
	$prl_prog_ergo= $req->prl_prog_ergo;	
	
	
	Session::put('prl_imp_ergo_fs_2',$prl_imp_ergo_fs_2);
	Session::put('prl_imp_ergo_2',$prl_imp_ergo_2);
	Session::put('prl_multi_ergo_2',$prl_multi_ergo_2);
	Session::put('prl_prog_ergo',$prl_prog_ergo);
	
	
	return Redirect::to('stepfour');
	}

	
	
	
	
	
}
