<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SteponeForm extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
			/* 'prl_company_name'=>'required',
			'prl_client_name'=>'required',
			'prl_contact_person'=>'required',
			'prl_email'=>'required',
			'prl_Address'=>'required',
			'prl_city'=>'required',
			'prl_state'=>'required',
			'prl_country'=>'required',
			'prl_pincode'=>'required',
			'prl_logo'=>'required',
			'prl_expire'=>'required | date'
 */

        ];
    }
}
