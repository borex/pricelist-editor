<?php  namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Validator, Input, Redirect ; 

class Pricelist extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		return view('pricelist.index',$this->data);	
	}

}
