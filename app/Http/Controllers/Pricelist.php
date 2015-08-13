<?php  namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\PricelistForm;
use Validator, Input, Redirect,Session ; 

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

	
	
	public function process(PricelistForm $req)
	{
	$email= $req->prl_email;	
	$company_name= $req->prl_company_name;	
	$client= $req->prl_client_name;	
	$contact= $req->prl_contact_person;	
	$address= $req->prl_Address;	
	$city= $req->prl_city;	
	$state= $req->prl_state;	
	$country= $req->prl_country;	
	$city= $req->prl_city;	
	$state= $req->prl_state;	
	$expire= $req->prl_expire;	
	

	Session::put('prl_email',$email);
	Session::put('prl_company_name', $company_name);	
	Session::put('prl_client', $client);	
	Session::put('prl_contact', $contact);	
	Session::put('prl_address', $address);	
	Session::put('prl_city', $city);	
	Session::put('prl_state', $state);	
	Session::put('prl_country', $country);
	return Redirect::to('stepone');
	}

	
	
	
	
	
}
