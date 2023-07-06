<?php
/*
Plugin Name: CRYPTO CALC
Plugin URI: http://rozcode.pl/
Description: TAX CALC CRYPTO - SHORTCODE COPY
Version: 1.0.0
Author: Rozcode.pl
Author URI: http://rozcode.pl/
*/

function tax_calc() { 
echo '<div style="width: 335px;
    background: #2F495A;
    padding: 10px 20px 50px 20px;
    border-radius: 5px;">
        <h2 style="text-align: center;
    color: #eee;
    font-weight: normal;"><IMG SRC="';
	echo plugin_dir_url( __FILE__ ) . '/img/calc.png';
	
	echo '" style="height: 50%; width: 50%;"/></h2><br>
	
	
	
        <form method="POST" action="index.php#calculator">    
		<input type="hidden" name="job" value="1">
		<select style="width: 300px; margin: 10px 0px; border: none; font-size: 16pt; border-radius: 5px; background: #fff; padding: 10px;">
		<option>2023</option>
		<option>2022</option>
		<option>2021</option>
		<option>2020</option>
		<option>2019</option>
		</select>
			
            <input type="number" name="wartosc1" style="width: 300px; margin: 10px 0px; border: none; font-size: 16pt; border-radius: 5px; background: #fff; padding: 10px;" 
			autocomplete="off" placeholder="Income from traiding"><br>
			<input type="number" name="wartosc2" style="width: 300px; margin: 10px 0px; border: none; font-size: 16pt; border-radius: 5px; background: #fff; padding: 10px;" 
			autocomplete="off" placeholder="Income from mining"><br>
			<input type="number" name="wartosc3" style="width: 300px; margin: 10px 0px; border: none; font-size: 16pt; border-radius: 5px; background: #fff; padding: 10px;" 
			autocomplete="off" placeholder="Income from staking"><br>
			<input type="number" name="wartosc4" style="width: 300px; margin: 10px 0px; border: none; font-size: 16pt; border-radius: 5px; background: #fff; padding: 10px;" 
			autocomplete="off" placeholder="Other income"><br>
            <input type="submit" value="CALCULATE" name="btn_submit" style="border-top: none;
	margin: 12px 75px;
    border-right: none;
    border-left: none;
    
    padding: 10px 20px;
    color: #eee;
    font-size: 15pt;
    ">     
			<div style="color:white; width: 300px;
    margin: 0px;
    border: none;
    font-size: 16pt;
    border-radius: 5px;
    padding: 10px;  ">';
 
  if(isset($_POST['btn_submit'])){
	  
   
   $w1 = $_REQUEST['wartosc1'];
   $w2 = $_REQUEST['wartosc2'];
   $w3 = $_REQUEST['wartosc3'];
   $w4 = $_REQUEST['wartosc4'];
   
   $wartosc = $w1 + $w2 + $w3 + $w4;
   $job = $_REQUEST['job'];
   
				if($job = 1) {
				 if($wartosc <= 12570) {
				  $a=$wartosc;
				  $tax = 0;
				  $c=$tax;
				$e = "£";

				$d=$a*$c;
				echo '<h2>INCOME: '.$e.''.$a.'</h2>';
				echo "<h2>TAX FEE: ".$e."".$d."  </h2>";

				   }
				   if(12571 <= $wartosc && $wartosc <= 50270 ) {
				  $a=$wartosc;
				  $tax = 0.20;
				  $c=$tax;
				$e = "£";

				$d=$a*$c;
				echo '<h2>INCOME: '.$e.''.$a.'</h2>';
				echo "<h2>TAX FEE: ".$e."".$d."  </h2>";

				   }
				 if(50271 <= $wartosc && $wartosc <= 150000 ) {
				  $a=$wartosc;
				  $tax = 0.40;
				  $c=$tax;
				$e = "£";
				$wall = 50271;
				$tax1=$a-$wall;
				$tax2=$tax1*$c;
				$tax3=7539.80+$tax2;
				echo '<h2>INCOME: '.$e.''.$a.'</h2>';
				echo "<h2>TAX FEE: ".$e."".$tax3."  </h2>";

				   }
				 if($wartosc >= 150001 ) {
				  $a=$wartosc;
				  $tax = 0.45;
				  $c=$tax;
				$e = "£";
				$wall = 150000;
				$tax1=$a-$wall;
				$tax2=$tax1*$c;
				$tax3=7539.80+39891+$tax2;
				echo '<h2>INCOME: '.$e.''.$a.'</h2>';
				echo "<h2>TAX FEE: ".$e."".$tax3."  </h2>";

				   }
				  
				   
				   
				 

				 }
  }
				echo '		</div>
						</form>
								 
					</div>';
				};
// register shortcode
add_shortcode('taxcalc', 'tax_calc');
