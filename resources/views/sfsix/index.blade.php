@extends('layouts.app')
@section('content')
<script type="text/javascript" src="{{ asset('sximo/js/plugins/chartjs/Chart.min.js') }}"></script>
<div class="page-content row">
<div class="page-header">
      <div class="page-title">
        <h3><i class="fa fa-info"></i> SF 6 Database  <sup></sup></h3>
      </div>
	  	  <ul class="breadcrumb">
		<li><a href="<?php echo url('/')?>/dashboard">Home</a></li>
		<li><a href="#">SF 6</a></li>
	  </ul>	  
</div>
	</div>
    <hr>
<div class="page-content-wrapper">  

<section>
<div class="tab-content m-t">
  <div class="tab-pane active use-padding" id="info">	
  <div class="sbox  "> 
  <div class="sbox-title"></div>
  <div class="sbox-content"> 
		 <div class="form-horizontal row" >
	 <form enctype="multipart/form-data" method="post"  action="<?php echo url('sfsix')?>/uploadfile">
         <input name="_token" value="<?php echo csrf_token() ?>" type="hidden">
		   <div class="form-group">
		    <label class=" control-label col-md-4">SF 6 Database Zip File</label>
			<div class="col-md-8">
				<input name="sffile" accept='zip' type="file">
			 </div> 
		  </div>
		   <div class="form-group">
		    <label class=" control-label col-md-4"></label>
			<div class="col-md-8">
				<input name="submit"  style="min-width:100px" type="submit" class='btn btn-primary' value="Upload">
			 </div> 
		  </div>
          </form>
		</div>  
		 </div>
	</div>
	</div>	 

	<hr>

	<?php
    $uid=Session::get('uid');
	$files=DB::table('sffiles')->where('uid',$uid)->orderBy('id','desc')->get();
	?>

	<h2>Your Sfsic DB Files</h2>
	<table class='table table-hover table '>
    	<thead>
    	<tr>
    		<th>SF File</th>
    		<th>Uploaded At</th>
    		<th>Delete</th>
    	</tr>
        </thead>
    	<tbody>
        <?php
        foreach($files as $file)
        {
        ?>
        <tr>
    		<th><?php $arr=  explode('/',$file->src); echo end($arr) ?></th>
    		<th><?php echo date('l jS \of F Y h:i:s A',$file->timenow) ?></th>
    		<th><a href="<?php echo url('/') ?>/sfsix/deletefile/<?php echo $file->id ?>">Delete</a></th>
    	</tr>
        <?php
        }
		?>
        
        </tbody>
    
    
    
    
    </table>


</div>
</div>
</div>
</section>	

</div>		
</div>
@stop
