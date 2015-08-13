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
						$basic_array=array('BaseCurve.Dat','CodeSubstitution.Dat','Combination.Dat' ,'Head.dat','Information.Dat','LensGeo.Dat','LensPrice.Dat','LensRange.Dat','LensType.Dat','Options.Dat', 'OptionsColor.Dat','OptionsPrice.Dat', 'OrderOptions.Dat', 'OrderOptionsNames.Dat','OrderOptionsRange.Dat','ProductGroup.Dat' ) ;
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
						$dir=public_path().'/sffiles/'.$filename;
						if (is_dir($dir))
						{
  							if ($dh = opendir($dir))
							{
    							if(is_dir(public_path().'/sffiles/'.$filename))
								{
									$dh=opendir(public_path().'/sffiles/'.$filename);
									{
										while(($file=readdir($dh))!= false)
										{
											
											echo $uid=Session::get('id');
										//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											if($file=='LensPrice.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$lenstype= substr($row,0,6);
													$lensprice= substr($row,6,5);
													$lenscode= substr($row,11,50);
													DB::table('sf_lenceprice')->insert(array('lenstype'=>"$lenstype",'lensprice'=>"$lensprice",'lenscode'=>"$lenscode",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											
											//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											if($file=='BaseCurve.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$bcurvetype= substr($row,0,6);
													$bcurvevalue= substr($row,6,5);
													$bcurvecode= substr($row,11,100);
													DB::table('sf_basecurve')->insert(array('bcurvetype'=>"$bcurvetype",'bcurvevalue'=>"$bcurvevalue",'bcurvecode'=>"$bcurvecode",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											
											
											
											if($file=='Head.dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$headtype= substr($row,0,32);
													$headvalue= substr($row,32,100);
													echo "<br>";
													DB::table('sf_head')->insert(array('headtype'=>"$headtype",'headvalue'=>"$headvalue",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											if($file=='CodeSubstitution.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$cstype= substr($row,0,5);
													$csvalue= substr($row,5,100);
													echo "<br>";
													DB::table('sf_codesubstitution')->insert(array('cstype'=>"$cstype",'csvalue'=>"$csvalue",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											if($file=='Information.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$infoone= substr($row,0,7);
													$infotwo= substr($row,7,5);
													$infothree= substr($row,19);
													echo "<br>";
													DB::table('sf_information')->insert(array('infoone'=>"$infoone",'infotwo'=>"$infotwo",'infothree'=>"$infothree",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											if($file=='LensRange.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$lrone= substr($row,0,6);
													$lrtwo= substr($row,6,5);
													$lrthree= substr($row,11,69);
													$lrfour= substr($row,95,4);
													$lrfive= substr($row,100,10);
													$lrsix= substr($row,110);
													echo "<br>";
													DB::table('sf_lensrange')->insert(array('lrone'=>"$lrone",'lrtwo'=>"$lrtwo",'lrthree'=>"$lrthree",'lrfour'=>"$lrfour",'lrfive'=>"$lrfive",'lrsix'=>"$lrsix",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											if($file=='Combination.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$combone= substr($row,0,10);
													$combtwo= substr($row,13,5);
													$combthree= substr($row,19,100);
													echo "<br>";
													DB::table('sf_combination')->insert(array('combone'=>"$combone",'combtwo'=>"$combtwo",'combthree'=>"$combthree",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											
											
											 
											
											if($file=='LensGeo.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													echo $combone= substr($row,0,6);
													echo $combtwo= substr($row,6,5);
													echo$combthree= substr($row,11,150);
													echo "<br>";
													DB::table('sf_lensgeo')->insert(array('lgone'=>"$combone",'lgtwo'=>"$combtwo",'combthree'=>"$lgthree",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
										
											if($file=='Options.Dat')
											{
												$fl=fopen(public_path().'/sffiles/'.$filename.'/'.$file,'r');
												while(!feof($fl))
												{	
													echo "<pre>";
													$row= fgets($fl) ;
													$optone= substr($row,0,6);
													$opttwo= substr($row,6,40);
													$optthree= substr($row,40,6);
													$optfour= substr($row,46,18);
													$optfive= substr($row,62,57);
													$optsix= substr($row,119);
													echo "<br>";
													DB::table('sf_options')->insert(array('optone'=>"$optone",'opttwo'=>"$opttwo",'optthree'=>"$optthree",'optfour'=>"$optfour",'optfive'=>"$optfive",'optsix'=>"$optsix",'uid'=>"$uid"));
													echo "</pre>";
												}
											}
											

											//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											

											}
									}
								}
							}	
						}
						
											exit;
						
						
						
						
						
						
						
						
/* 						File::deleteDirectory($path."/__MACOSX");								
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
						
 */						return Redirect::to('sfsix')->with(['message'=>'Succefully Uploaded']);
						
						
					}
					}
				}
				
				
				public function delete($id=0)
				{
				
					$values=array('id'=>$id);	
					DB::table('sffiles')->delete($values);
					return Redirect::to('sfsix')->with(['message'=>'Succefully Deleted']);
				}
				


			}
