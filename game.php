<?php

function val(){
	return rand(0,2);
}

	$ar=array('rock','paper','scissors');
	$p1="";
	$p2="";
	$p3="";
	$p4="";
	

function rps(){
	 
	 $GLOBALS['p1']=$GLOBALS['ar'][val()];
	$GLOBALS['p2']=$GLOBALS['ar'][val()];
	$GLOBALS['p3']=$GLOBALS['ar'][val()];
	 $GLOBALS['p4']=$GLOBALS['ar'][val()];

			echo "
<div class='d-flex justify-content-center'>
			<table class='table table-bordered'>

			  <thead>
			    <tr>
			      <th scope='col'>Player 1</th>
			      <th scope='col'>Player 2</th>
			      <th scope='col'>Player 3</th>
			      <th scope='col'>Player 4</th>
			    </tr>
			  </thead>

			  <tbody>

			    <tr>
			      
			      <td>".$GLOBALS['p1']."</td>
			      <td>".$GLOBALS['p2']."</td>
			   	  <td>".$GLOBALS['p3']."</td>
			   	  <td>".$GLOBALS['p4']."</td>
			    </tr>

			  </tbody>

			</table>
			</div>
			<br>
			";
}

function result(){
	$g1=$GLOBALS['p1'];
	$g2=$GLOBALS['p2'];
	$g3=$GLOBALS['p3'];
	 $g4=$GLOBALS['p4'];
/*echo $g1;
echo $g2;
echo $g3;
echo $g4;
die;*/


	 $r=array('p11' => 0,'p12'=>0,'p13' => 0,'p14'=>0, 'p21' => 0,'p22'=>0, 'p23' => 0,'p24'=>0, 'p31' => 0,'p32'=>0, 'p33' => 0,'p34'=>0, 'p41' => 0,'p42'=>0, 'p43' => 0,'p44'=>0 );

	 //for g1
		



	 	if(($g1=='paper' && $g2=='rock') || ($g1=='scissors' && $g2=='paper') || ($g1=='rock' && $g2=='scissors'))
	 	{
	 		$r['p12']=1;
	 		$r['p21']=0;
	 			
	 	}
	 	else
	 	{
			$r['p12']=0;
	 		$r['p21']=1;
	 	}
	 		
 	if(($g1=='paper' && $g3=='rock') || ($g1=='scissors' && $g3=='paper') || ($g1=='rock' && $g3=='scissors'))
	 	{
	 		$r['p13']=1;
	 		$r['p31']=0;
	 			
	 	}
	 	else
	 	{
			$r['p13']=0;
	 		$r['p31']=1;
	 	}
	 		

	 	if(($g1=='paper' && $g4=='rock') || ($g1=='scissors' && $g4=='paper') || ($g1=='rock' && $g4=='scissors'))
	 	{
	 		$r['p14']=1;
	 		$r['p41']=0;
	 			
	 	}
	 	else
	 	{
			$r['p14']=0;
	 		$r['p41']=1;
	 	}
	 		
	 	

	 		if(($g2=='paper' && $g3=='rock') || ($g2=='scissors' && $g3=='paper') || ($g2=='rock' && $g3=='scissors'))
	 	{
	 		$r['p23']=1;
	 		$r['p32']=0;
	 			
	 	}
	 	else
	 	{
			$r['p23']=0;
	 		$r['p32']=1;
	 	}
	

	 		if(($g2=='paper' && $g4=='rock') || ($g2=='scissors' && $g4=='paper') || ($g2=='rock' && $g4=='scissors'))
	 	{
	 		$r['p24']=1;
	 		$r['p42']=0;
	 			
	 	}
	 	else
	 	{
			$r['p24']=0;
	 		$r['p42']=1;
	 	}
	
	 	

	 			if(($g3=='paper' && $g4=='rock') || ($g3=='scissors' && $g4=='paper') || ($g3=='rock' && $g4=='scissors'))
	 	{
	 		$r['p34']=1;
	 		$r['p43']=0;
	 			
	 	}
	 	else
	 	{
			$r['p34']=0;
	 		$r['p43']=1;
	 	}
	
	
	 
	$blank="";

			echo "<div class='d-flex justify-content-center'>
			
<table class='table table-bordered'>

			  <thead>
			    <tr>
			      <th scope='col'>Totals</th>
			      <th scope='col'>".$blank."</th>
			      
			    <th scope='col'>".$blank."</th>
			    <th scope='col'>Against</th>
			     <th scope='col'>".$blank."</th>
			      <th scope='col'>".$blank."</th>
			    </tr>
			  </thead>

			  <tbody>

			    <tr>
			    	 <td scope='col'>".$blank."</td>
			    	<td scope='col'>".$blank."</td>
			      	<td>Player 1</td>
			      	<td>Player 2</td>
			      	<td>Player 3</td>
			      	<td>Player 4</td>
			    </tr>

			    <tr>
			     <td>Player Wins</td>
			      <td>Player 1</td>
			    <td>"."-".".</td>
			    <td>".$r['p12']."</td>
			    <td>".$r['p13']."</td>
			    <td>".$r['p14']."</td>
			    </tr>

			  	   <tr>
			     <th scope='col'>".$blank."</th>
			      <td>Player 2</td>
			    <td>".$r['p21']."</td>
			    <td>"."-"."</td>
			    <td>".$r['p23']."</td>
			    <td>".$r['p24']."</td>
			    </tr>

			       <tr>
			    <th scope='col'>".$blank."</th>
			      <td>Player 3</td>
			    <td>".$r['p31']."</td>
			    <td>".$r['p32']."</td>
			    <td>"."-"."</td>
			    <td>".$r['p34']."</td>
			    </tr>

			       <tr>
			    <th scope='col'>".$blank."</th>
			      <td>Player 4</td>
			    <td>".$r['p41']."</td>
			    <td>".$r['p42']."</td>
			    <td>".$r['p43']."</td>
			    <td>"."-"."</td>
			    </tr>

			  </tbody>

			</table>

			</div>  
			<br>";



}

?>