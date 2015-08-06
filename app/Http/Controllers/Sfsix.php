<?php  namespace App\Http\Controllers;

use App\User ;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator, Input,Session, Redirect, File, DB ; 

class Sfsix extends Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		return view('sfsix.index',$this->data);	
	}
	
	
			public function upload()
			{
				$file = Input::file('sffile');
				if($file->isValid())
				{
					$name=$file->getClientOriginalName();
					if(strtolower(end((explode('.',$name))))=='zip');
					{
						$basic_array=array('.','..','.DS_Store','BaseCurve.Dat','CodeSubstitution.Dat','Combination.Dat' ,'Head.dat','Information.Dat','LensGeo.Dat','LensPrice.Dat','LensRange.Dat','LensType.Dat','Options.Dat', 'OptionsColor.Dat','OptionsPrice.Dat', 'OrderOptions.Dat', 'OrderOptionsNames.Dat','OrderOptionsRange.Dat','ProductGroup.Dat' ) ;
						$uid=Session::get('uid');
						$username=DB::table('tb_users')->select('username')->where('id',$uid)->limit(1)->get();
						$username=ucfirst($username=($username[0]->username));
						$date=date("l-jS-\of-F-Y-h-i-s-A");
						$filename=$username."-".$date ;
						$path=public_path().'/sffiles/'.$filename;
						$file->move(public_path().'/sffiles/',$filename.".zip");
						$zip= new \ZipArchive();
						$zip->open($path.".zip");
						$zip->extractTo(public_path().'/sffiles/'.$filename);
						$zip->close();
						
						File::deleteDirectory($path."/__MACOSX");								
						File::delete($path.".zip");								
						$arr=(scandir(public_path().'/sffiles/'.$filename));
						foreach($arr as $ell)
						{
							if($ell=='.' || $ell=="..")
							{
								continue;
							}
							
							if(!empty(array_intersect(array_values(scandir(public_path().'/sffiles/'.$filename."/".$ell)), $basic_array )))
							{
							rename(public_path().'/sffiles/'.$filename."/".$ell,$path."/sfdb");
							}
							
						}
						$values =array('src'=>public_path().'/sffiles/'.$filename,'uid'=>$uid,'timenow'=>time());
						DB::table('sffiles')->insert($values);
						
						return Redirect::to('sfsix')->with(['message'=>'Succefully Uploaded']);
						
						
					}
					}
				}
				
				
				
				
				
				
				
				
				
				
				
				
				
				public function delete($id=0)
				{
					exit;
					$values=array('id'=>$id);	
					DB::table('sffiles')->delete($values);
					return Redirect::to('sfsix')->with(['message'=>'Succefully Deleted']);
				}
				
				
				
				
	
			}
