<?php
/**
 * Charts 4 PHP
 *
 * @author Shani <support@chartphp.com> - http://www.chartphp.com
 * @version 2.0
 * @license: see license.txt included in package
 */
?>
  		<div id="<?php  echo $this->name;
?>" style="height:<?php  echo $this->height;
?>;width:<?php  echo $this->width;
?>"><!-- chart will be drawn inside this DIV --></div>
		<style>.pointtext{display:none;}</style>
		<script>
		(function()
		{
			var d3 = Plotly.d3;

			var WIDTH_IN_PERCENT_OF_PARENT = 100,
				HEIGHT_IN_PERCENT_OF_PARENT = 100;

			var gd3 = d3.select('#<?php  echo $this->name;
?>')
				.append('div')
				.style({
					width: WIDTH_IN_PERCENT_OF_PARENT + '%',
					height: HEIGHT_IN_PERCENT_OF_PARENT + '%'
				});
				
			var gd = gd3.node();

			<?php
 if($this->type == base64_decode(base64_decode(base64_decode("W".chr(81).'='.'=').chr(103).base64_decode(chr(80).'Q'."="."=").base64_decode('P'.chr(81)."=".'=')).base64_decode(chr(82).chr(119).base64_decode(chr(80).'Q'.'='.chr(61)).chr(61)).base64_decode(chr(98).chr(65).chr(61).base64_decode("P"."Q".'='.'=')).chr(117).chr(90).chr(83).base64_decode(base64_decode(chr(84)."Q".'='."=").chr(81).base64_decode("P".chr(81).chr(61)."=").chr(61)).chr(105).chr(89).base64_decode(base64_decode("V".'w'."=".'=').chr(65).base64_decode("P"."Q".chr(61).chr(61)).chr(61)).base64_decode(chr(83).chr(81).chr(61).base64_decode("P".chr(81).'='."=")).base64_decode(chr(80).base64_decode(chr(85).'Q'."=".chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61)).base64_decode(chr(80)."Q".chr(61)."=")))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(chr(87).base64_decode(base64_decode(chr(85)."Q".'='."=").base64_decode('d'.chr(119).'='.'=').chr(61).base64_decode(chr(80).'Q'.chr(61).'=')).base64_decode(base64_decode('T'.'Q'."=".'=').base64_decode('U'."Q".chr(61).'=').chr(61).base64_decode("P".'Q'.chr(61)."=")).base64_decode(chr(97).chr(65).chr(61).base64_decode('P'."Q".'='.chr(61))).base64_decode(chr(90).base64_decode(chr(85)."Q".chr(61).'=').chr(61).base64_decode('P'."Q"."=".chr(61))).chr(71).base64_decode(chr(98).base64_decode(chr(81)."Q".'='.chr(61)).base64_decode(chr(80)."Q"."=".'=').chr(61)).chr(122).base64_decode(chr(83).base64_decode('U'."Q".'='.chr(61)).chr(61).chr(61)).base64_decode(base64_decode('U'.chr(103).chr(61).chr(61)).chr(119).chr(61).base64_decode("P".chr(81)."=".chr(61))).chr(70).base64_decode(base64_decode(chr(90)."A".chr(61).chr(61)).chr(81).chr(61).chr(61)).base64_decode(base64_decode("V".'w'.chr(61).'=').chr(103).base64_decode('P'."Q".'='.chr(61)).chr(61)).base64_decode(chr(81).chr(119).base64_decode(chr(80).chr(81)."=".'=').chr(61)).chr(66).base64_decode(base64_decode(chr(86).'w'."="."=").base64_decode(chr(90).'w'.chr(61).'=').chr(61).chr(61)).chr(76).base64_decode(chr(86).base64_decode(chr(100).'w'.'='.chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81)."=".chr(61))).chr(70).chr(52).chr(97).base64_decode(base64_decode("V"."w"."=".'=').base64_decode(chr(81).chr(81).'='.'=').base64_decode(chr(80).'Q'."=".'=').base64_decode('P'.chr(81).'='.'=')).chr(77).chr(103).base64_decode(chr(87).base64_decode(chr(90).chr(119).chr(61).'=').chr(61).base64_decode("P"."Q".chr(61).'=')).base64_decode(chr(82).chr(119).chr(61).chr(61)).base64_decode(chr(82).base64_decode(chr(90).chr(119).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).'=').chr(61)).chr(48).chr(89).base64_decode(base64_decode("V".'Q'."=".chr(61)).chr(119).chr(61).chr(61)).base64_decode(chr(81).chr(103).chr(61).chr(61)).base64_decode(chr(100).base64_decode("Q".'Q'.chr(61)."=").chr(61).base64_decode("P"."Q".'='.'=')).chr(100).base64_decode(chr(87).base64_decode('Q'.chr(81).'='.'=').chr(61).base64_decode("P".'Q'.chr(61).'=')).base64_decode(base64_decode(chr(86).'A'.chr(61).chr(61)).base64_decode(chr(90)."w".'='.chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).base64_decode(base64_decode('T'.'Q'.chr(61).chr(61)).chr(65).chr(61).chr(61)).base64_decode(chr(83).chr(81).chr(61).chr(61)).base64_decode(chr(82).base64_decode("d"."w"."=".'=').chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(chr(83).chr(103).chr(61).chr(61)).chr(108).chr(73).base64_decode(base64_decode(chr(85).chr(119)."="."=").base64_decode(chr(81).chr(81).'='.chr(61)).chr(61).chr(61)).chr(78).base64_decode(chr(97).base64_decode('Q'.chr(81).chr(61).chr(61)).base64_decode("P".chr(81).chr(61).'=').base64_decode(chr(80).chr(81).chr(61)."=")).chr(98).chr(87).base64_decode(base64_decode('V'.chr(103)."=".chr(61)).chr(81).chr(61).chr(61)).chr(61)),E_USER_ERROR);return $str;return (true);}$j=0;$k=0;foreach($this->xaxis2 as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {
																
						x: <?php  echo json_encode($i);
?>, 
						y: <?php  echo json_encode($this->yaxis2[$j-1]);
?>, 
						<?php  if(!empty($this->tracename[$j-1])){echo base64_decode(chr(98).base64_decode(chr(98).chr(81).base64_decode("P"."Q".chr(61).chr(61)).base64_decode("P"."Q".chr(61).'=')).chr(70).chr(116).base64_decode(base64_decode(chr(86)."w"."="."=").base64_decode("Z".chr(119)."=".'=').base64_decode(chr(80)."Q".chr(61).'=').chr(61)).base64_decode(chr(86).base64_decode("Q".chr(81)."=".'=').chr(61).chr(61)).base64_decode(base64_decode(chr(89).chr(103).'='.'=').chr(119).chr(61).chr(61)).base64_decode(chr(97).chr(81).base64_decode('P'.chr(81)."=".'=').chr(61))).$this->tracename[$j-1].base64_decode(chr(73).chr(105).chr(119).chr(61));}
?>
						line: {
							shape: <?php  echo json_encode($this->shape);
?>},  
							<?php  if($this->orientation == base64_decode(base64_decode(chr(89).base64_decode(chr(85).chr(81)."=".chr(61)).chr(61).chr(61)).chr(65).base64_decode(base64_decode("U".'A'.chr(61).chr(61)).base64_decode(chr(85).chr(81).chr(61)."=").base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(80).base64_decode(chr(85).'Q'.chr(61).chr(61)).chr(61).chr(61)))){echo base64_decode(chr(98).chr(51).chr(74).base64_decode(base64_decode(chr(89).chr(119).chr(61).chr(61)).chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).chr(90).base64_decode(chr(86).chr(119).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(78).base64_decode("U".chr(81).chr(61).'=').base64_decode(chr(80).'Q'.chr(61)."=").base64_decode("P".'Q'."=".chr(61))).chr(48).base64_decode(chr(87).chr(81).base64_decode(chr(80).chr(81).'='.chr(61)).chr(61)).base64_decode(chr(87).chr(65).chr(61).base64_decode("P".chr(81).chr(61).chr(61))).chr(82).chr(112).base64_decode(chr(89).chr(103).chr(61).base64_decode("P".'Q'."=".chr(61))).base64_decode(chr(77).base64_decode('Z'.chr(119)."=".chr(61)).base64_decode(chr(80).'Q'.'='.chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(base64_decode('T'.chr(103)."=".chr(61)).chr(65).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(chr(78).chr(103).base64_decode(chr(80)."Q".chr(61).'=').base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(chr(83).base64_decode('U'.chr(81)."=".chr(61)).base64_decode("P".chr(81).'='.'=').base64_decode('P'."Q".chr(61).chr(61))).chr(67).base64_decode(chr(90).chr(65).chr(61).base64_decode(chr(80).chr(81).'='.'=')).base64_decode(base64_decode(chr(89).chr(103).'='."=").chr(119).chr(61).base64_decode(chr(80).'Q'.chr(61)."=")).base64_decode(base64_decode(chr(85).chr(119).chr(61).chr(61)).base64_decode(chr(90).'w'.chr(61).chr(61)).base64_decode('P'.chr(81)."=".chr(61)).chr(61)).chr(121).base64_decode(chr(100).base64_decode(chr(100).chr(119).chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(80).base64_decode('U'.chr(81)."=".chr(61)).chr(61).chr(61)));}
?>
							type: 'scatter',
							yaxis: 'y2',
							mode: 'lines+markers' ,
							marker:{
							color: '<?php  echo $this->seriesColors[1]
?>'
							}	 			 
						};
						<?php  }foreach($this->xaxis as $l){$j++;$k++
?>
					var trace<?php  echo $j;
?> = {
						x: <?php  echo json_encode($l);
?>, 
						y: <?php  echo json_encode($this->yaxis[$k-1]);
?>, 
						<?php  if(!empty($this->tracename[$j-1])){echo base64_decode(chr(98).base64_decode(chr(98).base64_decode(chr(85).'Q'.chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(82).chr(103).chr(61).chr(61)).chr(116).chr(90).base64_decode(chr(86).base64_decode('Q'.'Q'.'='.'=').chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(base64_decode(chr(89).'g'.chr(61)."=").chr(119).base64_decode(chr(80).chr(81).chr(61)."=").base64_decode('P'.chr(81).chr(61)."=")).chr(105)).$this->tracename[$j-1].base64_decode(chr(73).base64_decode(chr(97).chr(81).chr(61).chr(61)).base64_decode(chr(100).chr(119).chr(61).chr(61)).base64_decode(chr(80).base64_decode('U'.'Q'.chr(61).chr(61)).base64_decode('P'.chr(81).'='.chr(61)).chr(61)));}
?>
						line: {shape: <?php  echo json_encode($this->shape);
?>}, 
						<?php  if($this->orientation == base64_decode(base64_decode(chr(89).chr(81).base64_decode('P'."Q"."=".'=').chr(61)).chr(65).chr(61).chr(61))){echo base64_decode(chr(98).chr(51).base64_decode(base64_decode("U"."w".chr(61).chr(61)).chr(103).base64_decode("P"."Q".chr(61).chr(61)).chr(61)).base64_decode(chr(99).base64_decode('Q'.chr(81).'='.chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode("P".'Q'.'='."=")).base64_decode(chr(87).base64_decode("Z".chr(119).chr(61)."=").base64_decode(chr(80).chr(81)."=".chr(61)).base64_decode("P".chr(81).chr(61).chr(61))).chr(87).base64_decode(base64_decode("T".'g'."=".chr(61)).chr(81).chr(61).chr(61)).chr(48).base64_decode(chr(87).base64_decode(chr(85)."Q"."=".chr(61)).base64_decode('P'.'Q'.chr(61).chr(61)).base64_decode(chr(80)."Q"."=".chr(61))).base64_decode(chr(87).chr(65).chr(61).chr(61)).chr(82).base64_decode(base64_decode(chr(89)."w".chr(61)."=").base64_decode(chr(81).'Q'."="."=").base64_decode("P"."Q".chr(61).'=').base64_decode('P'."Q"."=".chr(61))).chr(98).chr(50).base64_decode(chr(78).chr(65).chr(61).chr(61)).chr(54).base64_decode(base64_decode('U'.'w'.chr(61).chr(61)).chr(81).chr(61).base64_decode(chr(80).chr(81).'='.'=')).base64_decode(base64_decode(chr(85).chr(81).'='."=").chr(119).chr(61).base64_decode(chr(80).chr(81).'='.'=')).chr(100).chr(111).chr(74).base64_decode(base64_decode("Z".'Q'.chr(61).chr(61)).base64_decode(chr(85)."Q".'='.chr(61)).chr(61).chr(61)).base64_decode(chr(100).chr(119).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(80).base64_decode(chr(85).chr(81).'='.chr(61)).chr(61).base64_decode("P"."Q".chr(61).chr(61))));}
?>
						type: 'bar',
						marker:{
						color: <?php  echo json_encode($this->seriesColors[$k-1]);
?>
					  }				   
					};
				<?php  }
?>				
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(base64_decode(base64_decode(chr(87).chr(103).'='.chr(61)).base64_decode('Q'.'Q'.chr(61).chr(61)).chr(61).base64_decode('P'."Q".chr(61)."=")).base64_decode(base64_decode(chr(85).chr(119).'='.chr(61)).base64_decode('Q'.chr(81).chr(61).'=').base64_decode('P'.'Q'.'='."=").base64_decode("P"."Q"."="."=")).base64_decode(base64_decode("U".'w'.chr(61).chr(61)).base64_decode('Z'.chr(119).chr(61).'=').chr(61).base64_decode('P'.chr(81).chr(61)."=")).base64_decode(chr(97).chr(65).chr(61).chr(61)).chr(89).base64_decode(chr(77).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(61).chr(61)).chr(85).chr(61)).$i.base64_decode(base64_decode(base64_decode("V".'A'.'='.chr(61)).base64_decode(chr(81).chr(81).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).chr(65).base64_decode(chr(80).base64_decode('U'.chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode("P"."Q".chr(61)."=")).base64_decode(chr(80).chr(81).chr(61).base64_decode("P".'Q'.chr(61)."=")));}
?>];
				var layout = {
				 title: '<?php  echo $this->title;
?>',
				  xaxis: {
					title: '<?php  echo $this->xaxistitle;
?>', 
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>, 
					showline: <?php  echo $this->showline;
?>
				  }, 
				  yaxis: {
					title: '<?php  echo $this->yaxistitle;
?>', 
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>, 
					showline: <?php  echo $this->showline;
?>
				  },
				  yaxis2: {
					title: '<?php  echo $this->tracename[0];
?>', 
					overlaying: 'y',
					side: 'right'
				  },
				  barmode: '<?php  echo $this->barmode;
?>'
				};
			<?php
 }if($this->type == base64_decode(base64_decode(base64_decode("W".chr(81).chr(61).chr(61)).base64_decode('U'.chr(81).'='."=").base64_decode('P'.chr(81).'='.'=').base64_decode("P".'Q'.'='.chr(61))).chr(71).chr(86).chr(104).chr(100).chr(71).chr(49).base64_decode(base64_decode(chr(89)."Q".chr(61).chr(61)).base64_decode(chr(81).chr(81).chr(61).'=').chr(61).base64_decode(chr(80)."Q"."=".chr(61))).base64_decode(base64_decode(chr(87).chr(81).chr(61).'=').base64_decode(chr(100)."w".chr(61).'=').base64_decode("P".'Q'.chr(61)."=").base64_decode("P".'Q'."=".chr(61))).chr(65).chr(61).base64_decode(chr(80).base64_decode(chr(85).chr(81)."="."=").chr(61).chr(61)))){$j=0;foreach($this->zaxis as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {

					  z: <?php  echo json_encode($i);
?>,
					  <?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(chr(98).base64_decode(chr(98).chr(81).chr(61).base64_decode('P'."Q".chr(61).'=')).base64_decode(base64_decode('U'.'g'.chr(61)."=").chr(103).chr(61).chr(61)).chr(116).base64_decode(chr(87).chr(103).base64_decode("P"."Q"."=".'=').chr(61)).base64_decode(base64_decode("V".'g'."=".chr(61)).chr(65).chr(61).chr(61)).chr(111).chr(105)).$this->tracename[$j-1].base64_decode(base64_decode(chr(83).chr(81).chr(61).chr(61)).chr(105).base64_decode(base64_decode("Z"."A".'='."=").base64_decode('d'."w"."=".chr(61)).chr(61).base64_decode('P'.chr(81)."=".chr(61))).chr(61));}
?>
						type: '<?php  echo $this->type;
?>',
						xgap: 3,
						ygap: 3,
						colorscale: <?php  echo $this->hmapcolorseries;
?>
						};
					<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(chr(100).base64_decode(base64_decode('U'."w".chr(61).'=').base64_decode(chr(81).chr(81).'='."=").chr(61).base64_decode("P".chr(81).chr(61).chr(61))).chr(74).base64_decode(base64_decode('Y'.'Q'.'='.chr(61)).base64_decode("Q".chr(81)."="."=").chr(61).base64_decode('P'."Q".chr(61)."=")).base64_decode(chr(87).chr(81).base64_decode(chr(80)."Q"."=".chr(61)).chr(61)).chr(50).chr(85).base64_decode(base64_decode(chr(85).'A'.'='.chr(61)).chr(81).base64_decode(chr(80).'Q'.chr(61).'=').chr(61))).$i;}
?>];
				var layout = {
					title:'<?php  echo $this->title;
?>',
					xaxis: {
						title: '<?php  echo $this->xaxistitle;
?>'
					},
					yaxis: {
						title: '<?php  echo $this->yaxistitle;
?>'
					}
				};
				<?php
 }if($this->type == base64_decode(base64_decode(chr(87).chr(81).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(50).chr(70).base64_decode(chr(100).chr(81).chr(61).base64_decode(chr(80).chr(81).'='.'=')).chr(90).base64_decode(chr(82).base64_decode(chr(100).chr(119)."=".chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).chr(120).base64_decode(base64_decode("Y".'g'.chr(61).chr(61)).chr(65).chr(61).chr(61)).chr(99).chr(51).base64_decode(base64_decode('V'.chr(81).'='.chr(61)).chr(103).base64_decode(chr(80).chr(81).'='.'=').base64_decode(chr(80).'Q'.chr(61).'=')).base64_decode(chr(99).base64_decode('Q'.chr(81)."=".'=').chr(61).base64_decode(chr(80)."Q"."=".'=')).base64_decode(chr(87).chr(81).base64_decode('P'."Q".chr(61)."=").chr(61)).base64_decode(chr(77).base64_decode(chr(90).'w'.chr(61).chr(61)).base64_decode('P'."Q".'='.chr(61)).chr(61)).chr(115).base64_decode(chr(80).base64_decode(chr(85)."Q".chr(61)."=").base64_decode('P'.chr(81).chr(61).'=').chr(61)))){if(!(count($this->xaxis) == count($this->close))){trigger_error(base64_decode(chr(87).base64_decode(base64_decode('U'.chr(81)."="."=").base64_decode("d".'w'.chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61)."=").base64_decode('P'."Q"."=".chr(61))).chr(49).chr(104).chr(101).base64_decode(chr(82).base64_decode(chr(100).'w'."=".chr(61)).chr(61).base64_decode('P'.'Q'."="."=")).base64_decode(base64_decode('Y'.chr(103).chr(61).'=').chr(65).base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(101).base64_decode(chr(90)."w".'='."=").base64_decode("P".'Q'.'='.chr(61)).chr(61)).chr(73).chr(71).chr(70).chr(117).chr(90).base64_decode(chr(81).chr(119).base64_decode("P"."Q".chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(85)."Q".chr(61).chr(61)).chr(103).base64_decode(chr(80)."Q".chr(61).'=').chr(61)).base64_decode(chr(97).base64_decode('Z'.chr(119).'='.chr(61)).base64_decode("P".chr(81)."="."=").base64_decode(chr(80).'Q'.chr(61).chr(61))).chr(98).base64_decode(base64_decode(chr(85)."g".'='.chr(61)).chr(119).chr(61).base64_decode(chr(80).chr(81)."=".'=')).chr(57).chr(122).chr(97).chr(87).base64_decode(chr(78).chr(81).chr(61).chr(61)).chr(110).chr(73).base64_decode(base64_decode('U'.chr(103).'='.chr(61)).base64_decode(chr(100).chr(119).'='.chr(61)).chr(61).chr(61)).base64_decode(base64_decode(chr(86).'Q'.'='.chr(61)).base64_decode(chr(90).chr(119).'='.chr(61)).base64_decode(chr(80).chr(81)."="."=").base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(base64_decode("Y".chr(81).chr(61).chr(61)).chr(65).chr(61).chr(61)).chr(100).base64_decode(base64_decode(chr(85).chr(103)."=".chr(61)).chr(119).base64_decode('P'.chr(81)."=".chr(61)).base64_decode('P'.chr(81).chr(61)."=")).base64_decode(chr(82).chr(81).base64_decode("P".'Q'.chr(61)."=").base64_decode("P".'Q'.chr(61).chr(61))).chr(103).chr(98).base64_decode(base64_decode("V".chr(119)."=".chr(61)).chr(65).chr(61).chr(61)).base64_decode(chr(86).chr(103).chr(61).chr(61)).chr(122).base64_decode(base64_decode(chr(87)."g"."=".'=').chr(65).base64_decode("P".chr(81).chr(61)."=").chr(61)).base64_decode(chr(81).chr(119).chr(61).chr(61)).chr(66).base64_decode(chr(97).base64_decode('U'.chr(81).'='.'=').chr(61).chr(61)).base64_decode(chr(87).base64_decode("Z".chr(119)."="."=").base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode("P".chr(81).'='.'=')).base64_decode(base64_decode(chr(86).chr(81).chr(61).'=').chr(119).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(81).base64_decode('Z'.chr(119).chr(61)."=").chr(61).chr(61)).chr(122).base64_decode(chr(87).chr(81).chr(61).base64_decode("P"."Q".chr(61).chr(61))).base64_decode(chr(86).base64_decode('d'."w".chr(61).'=').base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(49).base64_decode(base64_decode(chr(89).chr(103).chr(61).chr(61)).chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61)))),E_USER_ERROR);return (true);}$j=0;foreach($this->close as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {
					  x: <?php  echo json_encode($this->xaxis[$j-1]);
?>,
					  close: <?php  echo json_encode($i);
?>,
					  decreasing: {line: {color: <?php  echo json_encode($this->decreasing_line_color);
?>}},
					  high: <?php  echo json_encode($this->high[$j-1]);
?>,
					  increasing: {line: {color: <?php  echo json_encode($this->increasing_line_color);
?>}},
					  low: <?php  echo json_encode($this->low[$j-1]);
?>,
					  open: <?php  echo json_encode($this->open[$j-1]);
?>,
					  type: '<?php  echo $this->type;
?>',
					  <?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(base64_decode(chr(89).chr(103).chr(61).base64_decode('P'.'Q'."="."=")).base64_decode(base64_decode('Y'."g".chr(61).chr(61)).base64_decode("U"."Q".chr(61).chr(61)).base64_decode('P'.chr(81).'='.chr(61)).base64_decode(chr(80).chr(81).'='.chr(61))).chr(70).chr(116).chr(90).base64_decode(chr(86).base64_decode(chr(81).chr(81).chr(61)."=").chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).chr(111).base64_decode(chr(97).base64_decode(chr(85)."Q".'='."=").chr(61).base64_decode(chr(80).chr(81).chr(61).'='))).$this->tracename[$j-1].base64_decode(chr(73).base64_decode(base64_decode("Y".chr(81)."=".chr(61)).chr(81).base64_decode(chr(80).'Q'."=".chr(61)).base64_decode('P'."Q".chr(61).chr(61))).chr(119).base64_decode(base64_decode(chr(85)."A".chr(61).chr(61)).base64_decode(chr(85)."Q"."=".chr(61)).chr(61).chr(61)));}
?>
					  xaxis: 'x',
					  yaxis: 'y'

					   };
					<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(base64_decode(chr(90).chr(65).chr(61).chr(61)).chr(72).chr(74).base64_decode(chr(97).chr(65).base64_decode(chr(80).chr(81)."=".'=').base64_decode(chr(80).'Q'.'='.chr(61))).chr(89).chr(50).base64_decode(chr(86).chr(81).base64_decode('P'.chr(81).'='."=").base64_decode(chr(80).'Q'.'='.chr(61))).chr(61)).$i.base64_decode(base64_decode(chr(84).chr(65).base64_decode(chr(80).'Q'."=".'=').chr(61)).chr(65).base64_decode(chr(80).base64_decode('U'.chr(81).chr(61).'=').chr(61).base64_decode("P"."Q"."=".chr(61))).base64_decode(chr(80).chr(81).chr(61).base64_decode('P'.chr(81)."=".chr(61))));}
?>];

				var layout = {
				  dragmode: 'zoom',
				  margin: {
					r: 10,
					t: 25,
					b: 40,
					l: 60
				  },
				  xaxis: {
					autorange: true,
					domain: [0, 1],
					range: ['<?php  echo $this->rangestart;
?>', '<?php  echo $this->rangeend;
?>'],
					rangeslider: {range: ['<?php  echo $this->rangesliderstart;
?>', '<?php  echo $this->rangesliderend;
?>']},
					title: '<?php  echo $this->rangetitle;
?>',
					type: '<?php  echo $this->rangetype;
?>'
				  },
				  yaxis: {
					autorange: true,
					domain: [0, 1],
					range: [<?php  echo $this->yrangestart;
?>, <?php  echo $this->yrangeend;
?>],
					type: 'linear'
				  }
				};
			<?php
 }if($this->type == base64_decode(base64_decode(base64_decode(chr(87)."Q".'='.chr(61)).chr(119).base64_decode(chr(80)."Q".chr(61)."=").chr(61)).base64_decode(base64_decode('Y'."g".'='.chr(61)).chr(81).chr(61).chr(61)).chr(108).base64_decode(base64_decode('Y'."Q"."=".'=').base64_decode(chr(85)."Q"."=".chr(61)).base64_decode(chr(80).chr(81).chr(61)."=").base64_decode('P'."Q".chr(61).chr(61))).chr(89).base64_decode(chr(98).base64_decode('U'.chr(81).chr(61).chr(61)).chr(61).chr(61)).chr(57).base64_decode(base64_decode('Z'.chr(65).chr(61).chr(61)).chr(81).chr(61).base64_decode("P".chr(81)."=".'=')))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(base64_decode(chr(86).base64_decode("d".chr(119).chr(61).chr(61)).chr(61).base64_decode("P"."Q"."=".chr(61))).chr(67).base64_decode(chr(77).base64_decode('U'.chr(81).'='.'=').chr(61).base64_decode("P".chr(81)."="."=")).base64_decode(chr(97).base64_decode(chr(81).chr(81).chr(61)."=").chr(61).base64_decode('P'."Q".'='.'=')).chr(101).base64_decode(base64_decode(chr(85).'g'.'='.chr(61)).base64_decode(chr(100).chr(119).chr(61)."=").base64_decode(chr(80).'Q'.'='.chr(61)).chr(61)).chr(108).base64_decode(base64_decode('Z'.chr(81).chr(61).'=').chr(103).base64_decode(chr(80).chr(81)."=".chr(61)).base64_decode(chr(80)."Q".chr(61).chr(61))).chr(73).chr(71).base64_decode(base64_decode(chr(85).chr(103)."="."=").base64_decode("Z".chr(119)."=".chr(61)).chr(61).chr(61)).base64_decode(base64_decode("Z"."A".'='.chr(61)).base64_decode(chr(85).chr(81).'='."=").chr(61).base64_decode(chr(80)."Q".chr(61).chr(61))).chr(90).chr(67).base64_decode(base64_decode(chr(85)."Q".'='.chr(61)).chr(103).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).chr(90).base64_decode(base64_decode("V"."A"."=".chr(61)).base64_decode("Q"."Q"."=".'=').base64_decode(chr(80)."Q"."="."=").chr(61)).base64_decode(base64_decode('V'."g".chr(61).chr(61)).chr(119).chr(61).chr(61)).chr(70).chr(52).base64_decode(base64_decode("W"."Q".chr(61).chr(61)).chr(81).chr(61).chr(61)).chr(88).chr(77).base64_decode(chr(90).base64_decode("d".chr(119).chr(61).chr(61)).base64_decode('P'."Q".'='.chr(61)).chr(61)).chr(90).base64_decode(base64_decode(chr(85).chr(103).'='."=").chr(119).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).base64_decode(chr(82).chr(103).chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).base64_decode(base64_decode('T'."Q".chr(61).chr(61)).base64_decode('Q'.chr(81).'='.'=').chr(61).chr(61)).base64_decode(chr(87).base64_decode(chr(85).chr(81)."=".chr(61)).base64_decode(chr(80).'Q'."=".chr(61)).chr(61)).base64_decode(base64_decode("V"."Q".'='.'=').chr(119).chr(61).chr(61)).base64_decode(base64_decode('U'.'Q'.chr(61)."=").base64_decode(chr(90).chr(119).chr(61)."=").base64_decode('P'.'Q'.'='.chr(61)).chr(61)).chr(116).chr(100).chr(88).base64_decode(base64_decode(chr(86).chr(65).'='.'=').base64_decode('Z'.chr(119)."="."=").chr(61).chr(61)).base64_decode(base64_decode(chr(84).'Q'.'='.chr(61)).chr(65).chr(61).chr(61)).chr(73).chr(71).chr(74).chr(108).chr(73).chr(72).chr(78).base64_decode(base64_decode('Y'.'Q'.chr(61).chr(61)).base64_decode("Q".chr(81).'='.chr(61)).chr(61).base64_decode('P'."Q".'='.'=')).chr(98).chr(87).chr(85).base64_decode(base64_decode('U'."A".chr(61).chr(61)).chr(81).base64_decode('P'."Q".chr(61).chr(61)).base64_decode(chr(80).'Q'.chr(61).'='))),E_USER_ERROR);return $str;return (true);}$j=0;foreach($this->xaxis as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {

					  x: <?php  echo json_encode($i);
?>,
					  y: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
					  z: <?php  echo json_encode($this->zaxis[$k-1]);
?>,		  
					  
					  <?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(chr(98).chr(109).chr(70).base64_decode(base64_decode(chr(90).chr(65).chr(61).chr(61)).chr(65).chr(61).base64_decode('P'.chr(81).chr(61)."=")).chr(90).base64_decode(base64_decode(chr(86).'g'."=".chr(61)).base64_decode(chr(81).chr(81).'='.chr(61)).base64_decode(chr(80).'Q'.chr(61).'=').base64_decode(chr(80)."Q".chr(61)."=")).chr(111).base64_decode(base64_decode('Y'.chr(81).chr(61).chr(61)).base64_decode(chr(85).chr(81)."=".chr(61)).chr(61).chr(61))).$this->tracename[$j-1].base64_decode(base64_decode(base64_decode("U"."w"."="."=").base64_decode(chr(85)."Q"."=".'=').chr(61).chr(61)).chr(105).base64_decode(base64_decode(chr(90).chr(65).chr(61).'=').chr(119).base64_decode("P".'Q'.'='."=").chr(61)).chr(61));}
?>
						  type: 'surface',
						  showscale: false

					};
					<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(chr(100).base64_decode(chr(83).chr(65).chr(61).base64_decode("P".chr(81).chr(61).'=')).chr(74).base64_decode(base64_decode(chr(89).chr(81).'='."=").chr(65).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(base64_decode(chr(86).chr(119)."=".chr(61)).chr(81).base64_decode(chr(80).chr(81)."=".chr(61)).base64_decode(chr(80)."Q".'='.chr(61))).chr(50).base64_decode(chr(86).chr(81).base64_decode(chr(80).chr(81).'='.chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(chr(80).base64_decode("U"."Q"."=".chr(61)).base64_decode(chr(80).'Q'.chr(61).'=').chr(61))).$i.base64_decode(chr(76).base64_decode(base64_decode('U'.chr(81).chr(61)."=").chr(81).base64_decode("P"."Q".'='.chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(base64_decode(chr(85).chr(65)."="."=").base64_decode("U".chr(81).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81)."="."=")).chr(61));}
?>];
				var layout = {
				 title: '<?php  echo $this->title;
?>',
				 showlegend: false,
				 autosize: true,
				 scene: {
				  xaxis: {
					title: '<?php  echo $this->xaxistitle;
?>'//,
//					showticklabels:true,
//					showgrid: <?php  echo $this->showgrid;
?>,
//					showline: <?php  echo $this->showline;
?>
				  },
				  yaxis: {
					title: '<?php  echo $this->yaxistitle;
?>'//,
//					showticklabels:true,
//					showgrid: <?php  echo $this->showgrid;
?>,
//					showline: <?php  echo $this->showline;
?>,
//					zeroline: false
				  },
				  zaxis: {
					title: '<?php  echo $this->zaxistitle;
?>'
				  }//,
//				 barmode: '<?php  echo $this->barmode;
?>'
				 }
				};
			<?php
 }if($this->type == base64_decode(base64_decode(base64_decode('W'.'Q'.chr(61).'=').chr(103).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(chr(82).base64_decode("d"."w".'='.chr(61)).chr(61).base64_decode("P".'Q'.'='.chr(61))).base64_decode(chr(98).base64_decode("Q".chr(81).chr(61).'=').base64_decode(chr(80).'Q'."=".chr(61)).chr(61)).chr(117).chr(90).base64_decode(base64_decode(chr(86).chr(81)."=".chr(61)).chr(81).base64_decode(chr(80).'Q'."=".'=').base64_decode(chr(80).chr(81)."="."=")).base64_decode(base64_decode("U".'A'.chr(61)."=").chr(81).base64_decode(chr(80).'Q'.chr(61).'=').chr(61)).chr(61))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(base64_decode(base64_decode("V".chr(103)."=".'=').base64_decode('d'.'w'.chr(61)."=").base64_decode('P'.'Q'."="."=").base64_decode('P'."Q".chr(61).chr(61))).base64_decode(base64_decode("U".chr(81).chr(61)."=").base64_decode("d"."w".chr(61).'=').chr(61).chr(61)).chr(49).base64_decode(base64_decode(chr(89).'Q'."=".chr(61)).base64_decode("Q".chr(81).'='.'=').base64_decode(chr(80)."Q".chr(61)."=").base64_decode('P'."Q"."=".chr(61))).chr(101).base64_decode(base64_decode(chr(85).'g'.chr(61).chr(61)).chr(119).chr(61).base64_decode("P".chr(81).chr(61).chr(61))).base64_decode(chr(98).chr(65).chr(61).base64_decode('P'.'Q'."=".'=')).base64_decode(chr(101).base64_decode(chr(90).'w'.'='."=").base64_decode("P"."Q".'='."=").base64_decode('P'."Q".chr(61).'=')).chr(73).chr(71).base64_decode(base64_decode(chr(85).chr(103).chr(61).chr(61)).chr(103).chr(61).base64_decode("P".'Q'.'='.'=')).chr(117).base64_decode(base64_decode(chr(86).chr(119).chr(61)."=").base64_decode(chr(90)."w"."=".chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).base64_decode(chr(81).base64_decode(chr(100).'w'.'='.chr(61)).base64_decode(chr(80).chr(81).'='."=").chr(61)).base64_decode(chr(81).chr(103).base64_decode(chr(80).chr(81)."=".'=').chr(61)).base64_decode(chr(87).base64_decode(chr(90)."w"."=".'=').chr(61).base64_decode("P".'Q'.'='.'=')).chr(76).chr(87).base64_decode(base64_decode(chr(85).'g'.'='.'=').chr(103).chr(61).chr(61)).base64_decode(base64_decode('T'.chr(103).'='.chr(61)).chr(65).chr(61).chr(61)).base64_decode(base64_decode("W"."Q".'='.chr(61)).base64_decode("U".chr(81).'='.chr(61)).chr(61).chr(61)).chr(88).base64_decode(chr(84).base64_decode(chr(85).'Q'.'='.chr(61)).base64_decode(chr(80).'Q'."=".chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).chr(103).base64_decode(chr(87).chr(103).base64_decode(chr(80).chr(81).'='."=").chr(61)).base64_decode(base64_decode(chr(85).chr(103).chr(61).chr(61)).base64_decode(chr(100).chr(119).chr(61).chr(61)).chr(61).base64_decode(chr(80)."Q".'='.chr(61))).base64_decode(chr(82).chr(103).base64_decode('P'.chr(81).chr(61)."=").chr(61)).base64_decode(chr(77).base64_decode("Q"."Q"."=".chr(61)).base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)).chr(89).base64_decode(base64_decode("V".chr(81).'='.'=').base64_decode(chr(100).chr(119)."=".chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(81).base64_decode(chr(90).'w'.chr(61).'=').base64_decode('P'.chr(81).chr(61)."=").base64_decode('P'."Q"."="."=")).chr(116).chr(100).base64_decode(base64_decode(chr(86).chr(119).chr(61)."=").base64_decode('Q'.chr(81).chr(61).'=').chr(61).base64_decode(chr(80).'Q'.chr(61)."=")).base64_decode(chr(84).chr(103).chr(61).base64_decode('P'.chr(81).chr(61)."=")).base64_decode(chr(77).base64_decode("Q"."Q".chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(83).chr(81).base64_decode("P".chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(82).chr(119).base64_decode("P"."Q".chr(61).chr(61)).base64_decode("P"."Q".'='."=")).base64_decode(base64_decode('U'.chr(119).chr(61).chr(61)).chr(103).chr(61).base64_decode(chr(80).chr(81)."="."=")).base64_decode(chr(98).base64_decode('Q'.chr(81).'='.'=').chr(61).chr(61)).base64_decode(base64_decode(chr(85).'w'.'='.chr(61)).base64_decode(chr(85)."Q".chr(61)."=").chr(61).base64_decode('P'."Q".'='.chr(61))).chr(72).chr(78).chr(104).chr(98).chr(87).base64_decode(chr(86).base64_decode(chr(85).chr(81)."=".chr(61)).base64_decode('P'.chr(81).chr(61).'=').chr(61)).chr(61)),E_USER_ERROR);return $str;return (true);}$j=0;foreach($this->xaxis as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {

					  x: <?php  echo json_encode($i);
?>,
					  y: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
					  <?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(base64_decode(chr(89).chr(103).chr(61).chr(61)).base64_decode(chr(98).base64_decode('U'."Q".chr(61).chr(61)).chr(61).base64_decode(chr(80)."Q".'='.'=')).chr(70).base64_decode(base64_decode('Z'."A"."="."=").chr(65).base64_decode('P'.chr(81).chr(61)."=").chr(61)).base64_decode(chr(87).base64_decode(chr(90).chr(119).chr(61).chr(61)).base64_decode('P'."Q".'='.chr(61)).base64_decode(chr(80)."Q"."=".chr(61))).base64_decode(chr(86).base64_decode(chr(81).'Q'.chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81)."="."=")).chr(111).base64_decode(base64_decode('Y'.'Q'.'='."=").chr(81).chr(61).base64_decode('P'.chr(81).chr(61).chr(61)))).$this->tracename[$j-1].base64_decode(chr(73).base64_decode(chr(97).base64_decode('U'.chr(81).'='.'=').base64_decode("P".chr(81).'='.chr(61)).base64_decode("P".'Q'."=".'=')).base64_decode(base64_decode(chr(90).'A'."=".chr(61)).base64_decode("d".chr(119).chr(61)."=").base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(61));}
?>
					   line: {
								shape: <?php  echo json_encode($this->shape);
?>},
					  <?php  if($this->orientation == base64_decode(chr(97).base64_decode(chr(81).base64_decode('U'.'Q'.chr(61).chr(61)).chr(61).base64_decode(chr(80).'Q'.chr(61).'=')).base64_decode(base64_decode(chr(85).'A'.chr(61).'=').chr(81).chr(61).base64_decode('P'."Q".'='."=")).chr(61))){echo base64_decode(chr(98).chr(51).base64_decode(chr(83).chr(103).base64_decode(chr(80).chr(81).'='."=").chr(61)).chr(112).chr(90).chr(87).base64_decode(chr(78).chr(81).chr(61).chr(61)).chr(48).base64_decode(base64_decode('V'.chr(119).chr(61).chr(61)).base64_decode('U'.'Q'.chr(61).chr(61)).chr(61).base64_decode('P'.chr(81)."="."=")).base64_decode(base64_decode('V'.chr(119).chr(61).'=').base64_decode("Q".chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)).chr(82).base64_decode(chr(99).base64_decode(chr(81).'Q'."=".chr(61)).chr(61).chr(61)).base64_decode(chr(89).base64_decode(chr(90)."w".chr(61).chr(61)).chr(61).base64_decode(chr(80)."Q".'='.chr(61))).base64_decode(base64_decode(chr(84).chr(81).'='.'=').chr(103).base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)).base64_decode(base64_decode("T"."g".chr(61).chr(61)).chr(65).base64_decode("P"."Q"."=".chr(61)).chr(61)).chr(54).base64_decode(chr(83).chr(81).base64_decode('P'.chr(81).chr(61)."=").base64_decode('P'.'Q'.chr(61).chr(61))).chr(67).base64_decode(base64_decode('W'.chr(103).chr(61).chr(61)).base64_decode(chr(81).chr(81).chr(61).chr(61)).chr(61).base64_decode("P".chr(81)."=".chr(61))).base64_decode(chr(98).chr(119).chr(61).chr(61)).base64_decode(chr(83).chr(103).chr(61).chr(61)).chr(121).base64_decode(chr(100).chr(119).chr(61).chr(61)).chr(61));}
?>
					   type: '<?php  echo $this->type;
?>',
					  <?php
 if($this->show_point_label == true){
?>
					   text: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
					   textposition: 'top center',
					   textfont: {
							family:  'roboto, sans-serif'
						  },
					   mode: 'lines+markers+text' ,
					   hoverinfo: 'x+y',
					 <?php  };
?>
					   marker:{
						color: <?php  echo json_encode($this->seriesColors[$j-1]);
?>
					  }
					};
					<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(base64_decode(base64_decode(chr(87)."g"."="."=").base64_decode(chr(81)."Q".chr(61).chr(61)).base64_decode(chr(80)."Q".'='.'=').chr(61)).base64_decode(base64_decode("U".chr(119).chr(61).chr(61)).chr(65).chr(61).base64_decode('P'."Q".chr(61)."=")).chr(74).chr(104).chr(89).chr(50).chr(85).base64_decode(base64_decode(chr(85).'A'.'='.chr(61)).base64_decode(chr(85).chr(81).chr(61).'=').chr(61).chr(61))).$i.base64_decode(base64_decode(chr(84).chr(65).base64_decode("P".chr(81).chr(61).'=').chr(61)).base64_decode(base64_decode(chr(85).chr(81).'='."=").base64_decode("U".'Q'.'='.chr(61)).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61));}
?>];
				var layout = {
				 title: '<?php  echo $this->title;
?>',
				  xaxis: {
					title: '<?php  echo $this->xaxistitle;
?>',
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },
				  yaxis: {
					title: '<?php  echo $this->yaxistitle;
?>',
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>,
					zeroline: false
				  },
				  barmode: '<?php  echo $this->barmode;
?>'
				};
			<?php
 }if($this->type == base64_decode(base64_decode(chr(87).chr(81).chr(61).base64_decode(chr(80).'Q'.chr(61).'=')).base64_decode(chr(98).chr(81).base64_decode('P'.chr(81).chr(61)."=").base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(82).base64_decode('Z'.chr(119).'='.'=').base64_decode(chr(80).chr(81).chr(61)."=").base64_decode(chr(80).'Q'.chr(61).chr(61))).chr(121))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(base64_decode(chr(86).chr(119).chr(61).base64_decode(chr(80).'Q'.chr(61).chr(61))).chr(67).chr(49).base64_decode(base64_decode(chr(89).chr(81).'='.chr(61)).chr(65).base64_decode('P'.chr(81).'='.'=').base64_decode("P".chr(81).chr(61).chr(61))).chr(101).base64_decode(base64_decode("U".chr(103).chr(61).chr(61)).chr(119).chr(61).chr(61)).chr(108).base64_decode(base64_decode("Z"."Q".chr(61).'=').chr(103).base64_decode(chr(80).chr(81).chr(61).'=').base64_decode(chr(80)."Q"."=".'=')).base64_decode(base64_decode(chr(85)."w"."=".'=').chr(81).base64_decode(chr(80)."Q".chr(61).'=').base64_decode('P'."Q".'='.chr(61))).chr(71).chr(70).chr(117).chr(90).chr(67).base64_decode(chr(81).chr(103).base64_decode(chr(80)."Q".chr(61)."=").base64_decode(chr(80).chr(81).chr(61).'=')).chr(90).base64_decode(base64_decode('V'."A".chr(61).chr(61)).chr(65).chr(61).base64_decode("P"."Q".chr(61)."=")).base64_decode(base64_decode("V".chr(103).chr(61)."=").chr(119).chr(61).chr(61)).base64_decode(base64_decode('U'.chr(103).chr(61).'=').base64_decode("Z".chr(119).'='.chr(61)).base64_decode(chr(80).'Q'."=".chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61))).chr(52).base64_decode(chr(89).base64_decode('U'.chr(81)."=".'=').chr(61).chr(61)).chr(88).chr(77).base64_decode(chr(90).base64_decode("d".chr(119).chr(61).chr(61)).chr(61).chr(61)).chr(90).base64_decode(chr(82).base64_decode(chr(100).'w'.'='.chr(61)).base64_decode(chr(80).chr(81).'='."=").base64_decode(chr(80).chr(81).'='.'=')).chr(70).chr(48).chr(89).chr(83).base64_decode(chr(81).chr(103).base64_decode(chr(80).'Q'.'='.chr(61)).base64_decode(chr(80)."Q".'='."=")).base64_decode(base64_decode("Z".'A'.chr(61).chr(61)).base64_decode('Q'.'Q'.chr(61)."=").chr(61).chr(61)).base64_decode(base64_decode('W'.'g'.chr(61).chr(61)).base64_decode('Q'.chr(81).'='.chr(61)).base64_decode(chr(80)."Q".'='.chr(61)).chr(61)).chr(88).chr(78).chr(48).chr(73).chr(71).chr(74).chr(108).base64_decode(chr(83).base64_decode('U'.'Q'.chr(61)."=").chr(61).chr(61)).base64_decode(base64_decode('U'.chr(119)."="."=").base64_decode('Q'.'Q'.chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(84).chr(103).base64_decode(chr(80)."Q".'='.chr(61)).base64_decode('P'.chr(81)."=".chr(61))).chr(104).chr(98).base64_decode(chr(86).base64_decode('d'.chr(119).chr(61).chr(61)).chr(61).base64_decode(chr(80)."Q".'='.chr(61))).base64_decode(chr(86).chr(81).chr(61).chr(61)).chr(61)),E_USER_ERROR);return $str;return (true);}$j=0;foreach($this->xaxis as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {
						x: <?php  echo json_encode($i);
?>,
						y: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
						<?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(chr(98).base64_decode(chr(98).base64_decode('U'."Q".chr(61).'=').chr(61).chr(61)).base64_decode(chr(82).base64_decode("Z".chr(119)."="."=").chr(61).base64_decode(chr(80).chr(81)."=".'=')).chr(116).chr(90).chr(84).chr(111).base64_decode(base64_decode('Y'.chr(81).'='.chr(61)).chr(81).chr(61).chr(61))).$this->tracename[$j-1].base64_decode(chr(73).chr(105).chr(119).base64_decode(chr(80).chr(81).chr(61).base64_decode('P'.chr(81).'='.chr(61))));}
?>
						line: {shape: <?php  echo json_encode($this->shape);
?>},
						<?php  if($this->orientation == base64_decode(chr(97).chr(65).chr(61).chr(61))){echo base64_decode(chr(98).chr(51).chr(74).base64_decode(base64_decode('Y'.chr(119).chr(61).chr(61)).base64_decode('Q'.chr(81).'='."=").chr(61).base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(chr(87).chr(103).chr(61).base64_decode("P".chr(81)."=".'=')).base64_decode(chr(86).base64_decode(chr(100).'w'.chr(61)."=").base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(84).'g'.chr(61)."=").base64_decode('U'.'Q'."=".chr(61)).chr(61).chr(61)).base64_decode(base64_decode('T'."Q".'='."=").base64_decode('Q'.'Q'."=".chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).chr(89).base64_decode(chr(87).chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(base64_decode(chr(86)."Q".'='.chr(61)).chr(103).base64_decode(chr(80)."Q".'='.chr(61)).chr(61)).chr(112).chr(98).chr(50).base64_decode(chr(78).chr(65).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).chr(54).base64_decode(base64_decode("U".chr(119)."=".chr(61)).chr(81).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61)."=")).chr(67).chr(100).base64_decode(base64_decode('Y'."g".'='."=").base64_decode(chr(100).chr(119).chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(83).base64_decode('Z'."w".chr(61).chr(61)).base64_decode('P'.chr(81).'='.'=').base64_decode("P".chr(81)."=".chr(61))).chr(121).chr(119).chr(61));}
?>
						type: '<?php  echo $this->type;
?>',
						<?php
 if($this->show_point_label == true){if($this->orientation == base64_decode(base64_decode(base64_decode(chr(87).'Q'.chr(61).chr(61)).base64_decode(chr(85).chr(81).'='.'=').chr(61).base64_decode('P'.'Q'.'='.'=')).chr(65).chr(61).base64_decode(base64_decode(chr(85)."A".chr(61).'=').chr(81).base64_decode("P".chr(81).'='.'=').base64_decode("P".'Q'.'='.chr(61)))))$axis=$this->xaxis;else$axis=$this->yaxis;
?>
						text: <?php  echo json_encode($axis[$j-1]);
?>,
						textposition: 'auto',
						insidetextfont: {
							family:  'roboto, sans-serif',
							color: '#FFFFFF'
						  },
						outsidetextfont: {
							family:  'roboto, sans-serif',
							color: <?php  echo (($this->theme == base64_decode(base64_decode(chr(87).base64_decode('Z'.'w'.'='."=").base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)).base64_decode(chr(82).base64_decode("d".chr(119)."=".chr(61)).base64_decode(chr(80).chr(81).'='.chr(61)).base64_decode(chr(80).chr(81).chr(61)."=")).chr(70).chr(121).base64_decode(base64_decode('W'."Q"."=".chr(61)).base64_decode(chr(85).chr(81)."=".'=').base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).chr(119).chr(61).base64_decode(chr(80).chr(81).chr(61).base64_decode('P'.'Q'.chr(61).chr(61)))))?base64_decode(chr(74).chr(121).chr(78).base64_decode(base64_decode("U"."g"."="."=").base64_decode(chr(100).chr(119).'='."=").chr(61).base64_decode("P".chr(81).chr(61).chr(61))).chr(82).chr(107).base64_decode(chr(87).base64_decode('Z'.chr(119).chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(82).chr(119).base64_decode('P'.chr(81)."=".chr(61)).base64_decode(chr(80).chr(81).'='.chr(61))).base64_decode(chr(85).chr(103).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).chr(107).base64_decode(chr(87).base64_decode(chr(85).'Q'.'='.chr(61)).base64_decode(chr(80).'Q'."=".chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(base64_decode("Y".chr(103).chr(61).'=').chr(103).base64_decode('P'.chr(81)."=".chr(61)).chr(61))):base64_decode(chr(74).chr(121).chr(77).chr(51).base64_decode(base64_decode("V".chr(65).'='.'=').chr(103).chr(61).chr(61)).chr(122).base64_decode(chr(89).base64_decode("d".chr(119).chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(77).chr(119).base64_decode(chr(80)."Q".'='.chr(61)).chr(61)).chr(78).base64_decode(base64_decode("Z".chr(81)."=".chr(61)).chr(103).chr(61).base64_decode("P".chr(81).chr(61).chr(61))).base64_decode(base64_decode('W'."Q".chr(61)."=").chr(119).chr(61).chr(61)).chr(110)))
?>
						  },
						  
						hoverinfo: 'x+y',
						<?php  }
?>
						marker:{
						color: <?php  echo json_encode($this->seriesColors[$j-1]);
?>
					  }
					};
				<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(chr(100).chr(72).chr(74).chr(104).base64_decode(base64_decode(chr(86).'w'.chr(61).chr(61)).chr(81).chr(61).chr(61)).base64_decode(base64_decode("T".chr(81)."=".chr(61)).base64_decode(chr(90).chr(119).chr(61)."=").base64_decode("P".chr(81).chr(61).'=').chr(61)).base64_decode(chr(86).base64_decode("U".'Q'.chr(61).chr(61)).chr(61).base64_decode('P'.chr(81).'='.'=')).base64_decode(base64_decode("U".'A'.chr(61).chr(61)).chr(81).chr(61).chr(61))).$i.base64_decode(base64_decode(base64_decode(chr(86).chr(65).chr(61).'=').base64_decode(chr(81).chr(81).chr(61).'=').chr(61).chr(61)).chr(65).base64_decode(base64_decode("U".'A'.'='.chr(61)).chr(81).base64_decode("P".chr(81).chr(61).chr(61)).base64_decode('P'."Q".'='.chr(61))).chr(61));}
?>];

				var layout = {
				 title: '<?php  echo $this->title;
?>',
				  xaxis: {
					title: '<?php  echo $this->xaxistitle;
?>',
					showticklabels:<?php  echo $this->show_xticks;
?>,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },
				  yaxis: {
					title: '<?php  echo $this->yaxistitle;
?>',
					showticklabels:<?php  echo $this->show_yticks;
?>,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },<?php  if($this->targetx_start != null){
?>
				shapes: [
					//Line Horizontal
					{
					  type: 'line',
					  x0: '<?php  echo $this->targetx_start;
?>',
					  y0: '<?php  echo $this->targety_start;
?>',
					  x1: '<?php  echo $this->targetx_end;
?>',
					  y1: '<?php  echo $this->targety_end;
?>',
					  line: {
						color: '<?php  echo $this->targetline_color;
?>',
						width: <?php  echo $this->targetline_width;
?>,
						dash: '<?php  echo $this->targetline_style;
?>'
					  }
					}
				],<?php  };
?>				  
				  barmode: '<?php  echo $this->barmode;
?>'
				};
				<?php
 }if($this->type == base64_decode(chr(90).chr(88).base64_decode(base64_decode('U'.chr(119).chr(61).'=').chr(103).base64_decode('P'.'Q'.chr(61).chr(61)).base64_decode('P'.chr(81)."=".chr(61))).base64_decode(chr(101).chr(81).chr(61).chr(61)).chr(98).base64_decode(base64_decode(chr(84)."Q".'='."=").chr(119).chr(61).chr(61)).base64_decode(chr(83).base64_decode("U"."Q".chr(61).chr(61)).chr(61).chr(61)).base64_decode(base64_decode('Z'.'A'.chr(61).chr(61)).base64_decode('Q'.chr(81).chr(61).'=').base64_decode(chr(80).'Q'."=".'=').chr(61)).chr(89).base64_decode(chr(98).chr(81).base64_decode('P'.chr(81).'='."=").chr(61)).chr(70).base64_decode(chr(101).base64_decode("U".'Q'.chr(61).chr(61)).base64_decode(chr(80)."Q".'='.chr(61)).chr(61)))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(chr(87).base64_decode(base64_decode(chr(85).chr(81).chr(61).'=').chr(119).chr(61).base64_decode(chr(80).'Q'."="."=")).chr(49).base64_decode(base64_decode(chr(89).chr(81).chr(61).'=').base64_decode(chr(81).chr(81).chr(61)."=").base64_decode(chr(80).chr(81).'='.'=').chr(61)).chr(101).chr(71).base64_decode(chr(98).chr(65).chr(61).base64_decode(chr(80).chr(81)."=".chr(61))).chr(122).chr(73).chr(71).chr(70).base64_decode(base64_decode(chr(90).chr(65).chr(61).chr(61)).base64_decode(chr(85).'Q'."="."=").base64_decode(chr(80).chr(81)."=".'=').chr(61)).base64_decode(base64_decode(chr(86).chr(119)."=".'=').base64_decode("Z".chr(119).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).'='.'=')).base64_decode(chr(81).chr(119).base64_decode('P'.chr(81)."=".chr(61)).base64_decode('P'."Q"."=".'=')).base64_decode(base64_decode(chr(85)."Q".'='.chr(61)).base64_decode(chr(90).'w'.chr(61)."=").base64_decode('P'."Q".chr(61).'=').base64_decode('P'.'Q'.chr(61).chr(61))).chr(90).chr(76).base64_decode(chr(86).chr(119).chr(61).base64_decode("P".chr(81).chr(61).'=')).chr(70).base64_decode(chr(78).chr(65).chr(61).base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(base64_decode(chr(87).chr(81).chr(61).chr(61)).base64_decode("U".chr(81).chr(61).chr(61)).base64_decode("P"."Q".'='."=").chr(61)).base64_decode(chr(87).base64_decode("Q".chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).chr(77).chr(103).base64_decode(base64_decode("V"."w"."="."=").chr(103).chr(61).chr(61)).base64_decode(base64_decode("U"."g".chr(61).chr(61)).chr(119).base64_decode("P"."Q".chr(61).chr(61)).chr(61)).chr(70).base64_decode(chr(77).base64_decode("Q".chr(81)."=".'=').base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode("P".chr(81).chr(61).'=')).base64_decode(chr(87).chr(81).chr(61).chr(61)).base64_decode(chr(85).chr(119).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(base64_decode(chr(85).'Q'.'='.'=').base64_decode(chr(90).chr(119).chr(61).chr(61)).base64_decode("P"."Q".'='."=").base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(base64_decode("Z"."A".'='.chr(61)).chr(65).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61)."=")).chr(100).base64_decode(chr(87).base64_decode(chr(81).'Q'."=".'=').base64_decode(chr(80)."Q"."=".'=').chr(61)).chr(78).base64_decode(chr(77).base64_decode(chr(81).chr(81).chr(61).'=').base64_decode(chr(80).chr(81).chr(61)."=").base64_decode("P".'Q'.chr(61).chr(61))).chr(73).chr(71).base64_decode(base64_decode(chr(85).chr(119).'='.chr(61)).chr(103).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(98).chr(65).base64_decode(chr(80)."Q".chr(61).'=').base64_decode(chr(80).'Q'.chr(61).chr(61))).chr(73).chr(72).base64_decode(base64_decode(chr(86).'A'.'='.'=').chr(103).base64_decode("P".'Q'.chr(61)."=").chr(61)).base64_decode(base64_decode("Y".chr(81).chr(61).chr(61)).chr(65).base64_decode(chr(80).chr(81).'='."=").base64_decode('P'."Q".'='.chr(61))).chr(98).chr(87).base64_decode(chr(86).base64_decode('U'.chr(81).chr(61).chr(61)).chr(61).base64_decode('P'.chr(81).'='."=")).chr(61)),E_USER_ERROR);return $str;return (true);}$j=0;foreach($this->xaxis as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {
						x: <?php  echo json_encode($i);
?>,
						y: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
						<?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(base64_decode(base64_decode(chr(87).chr(81)."=".'=').base64_decode('Z'.chr(119).chr(61).'=').base64_decode('P'.'Q'."=".'=').base64_decode(chr(80)."Q"."=".chr(61))).chr(109).base64_decode(chr(82).chr(103).base64_decode(chr(80).chr(81).'='.chr(61)).base64_decode("P".'Q'."=".'=')).chr(116).base64_decode(base64_decode('V'.chr(119)."="."=").chr(103).base64_decode("P".chr(81)."="."=").chr(61)).base64_decode(chr(86).base64_decode(chr(81).chr(81).chr(61)."=").chr(61).base64_decode(chr(80).chr(81)."=".chr(61))).chr(111).chr(105)).$this->tracename[$j-1].base64_decode(chr(73).chr(105).base64_decode(chr(100).chr(119).base64_decode(chr(80).'Q'.'='.chr(61)).chr(61)).chr(61));}
?>
						error_y: {
							type: 'data',
							array: <?php  echo json_encode($this->errarr[$j-1]);
?>,
							visible: true
						},
						line: {shape: <?php  echo json_encode($this->shape);
?>},
						<?php  if($this->orientation == base64_decode(base64_decode(chr(89).chr(81).chr(61).chr(61)).base64_decode(base64_decode('U'.'Q'."=".chr(61)).base64_decode(chr(85).chr(81)."="."=").base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(85).chr(65)."=".chr(61)).base64_decode(chr(85).chr(81)."=".'=').chr(61).base64_decode(chr(80).chr(81)."="."=")).base64_decode(chr(80).base64_decode(chr(85).chr(81).'='."=").base64_decode("P".chr(81)."=".chr(61)).base64_decode(chr(80).chr(81)."=".chr(61))))){echo base64_decode(chr(98).base64_decode(base64_decode(chr(84).chr(81)."="."=").chr(119).chr(61).base64_decode("P".'Q'.'='.'=')).base64_decode(base64_decode(chr(85)."w".chr(61).chr(61)).base64_decode("Z"."w".chr(61)."=").chr(61).chr(61)).chr(112).base64_decode(base64_decode('V'.chr(119).chr(61).chr(61)).chr(103).chr(61).base64_decode("P".chr(81)."=".chr(61))).chr(87).base64_decode(chr(78).base64_decode(chr(85).'Q'.chr(61).chr(61)).base64_decode('P'."Q".chr(61)."=").chr(61)).base64_decode(base64_decode(chr(84)."Q"."=".'=').chr(65).chr(61).chr(61)).chr(89).base64_decode(base64_decode('V'.chr(119).'='.'=').chr(65).chr(61).chr(61)).chr(82).chr(112).chr(98).base64_decode(chr(77).chr(103).base64_decode(chr(80).chr(81).chr(61).'=').base64_decode("P".'Q'.chr(61)."=")).chr(52).chr(54).chr(73).chr(67).chr(100).chr(111).chr(74).chr(121).chr(119).base64_decode(chr(80).base64_decode("U"."Q"."=".chr(61)).chr(61).chr(61)));}
?>
						type: 'bar',
						<?php
 if($this->show_point_label == true){if($this->orientation == base64_decode(chr(97).chr(65).base64_decode(base64_decode('U'.'A'.chr(61).'=').chr(81).base64_decode(chr(80).chr(81)."=".'=').base64_decode(chr(80).chr(81).chr(61).'=')).chr(61)))$axis=$this->xaxis;else$axis=$this->yaxis;
?>
						text: <?php  echo json_encode($axis[$j-1]);
?>,
						textposition: 'auto',
						insidetextfont: {
							family:  'roboto, sans-serif',
							color: '#FFFFFF'
						  },
						outsidetextfont: {
							family:  'roboto, sans-serif',
							color: <?php  echo (($this->theme == base64_decode(chr(90).base64_decode(base64_decode(chr(85).'g'."=".chr(61)).base64_decode(chr(100).chr(119).chr(61).chr(61)).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(70).chr(121).chr(97).base64_decode(base64_decode(chr(90)."A".'='.chr(61)).chr(119).base64_decode(chr(80).chr(81).'='.chr(61)).base64_decode('P'.'Q'.chr(61)."=")).chr(61).chr(61)))?base64_decode(base64_decode(chr(83).base64_decode(chr(90).chr(119)."=".chr(61)).base64_decode("P".'Q'.'='.chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(121).chr(78).base64_decode(chr(82).base64_decode(chr(100).chr(119)."=".'=').chr(61).chr(61)).base64_decode(base64_decode(chr(86)."Q".chr(61).'=').chr(103).chr(61).chr(61)).base64_decode(chr(97).base64_decode(chr(100).chr(119).'='.'=').chr(61).chr(61)).base64_decode(chr(87).base64_decode("Z".chr(119).chr(61).chr(61)).chr(61).base64_decode(chr(80).'Q'.chr(61)."=")).base64_decode(chr(82).base64_decode("d"."w".chr(61).'=').base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).chr(82).chr(107).chr(89).chr(110)):base64_decode(chr(74).chr(121).base64_decode(chr(84).chr(81).chr(61).base64_decode(chr(80).'Q'."=".'=')).base64_decode(chr(77).base64_decode("d".'w'."=".'=').chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(78).base64_decode(chr(101).chr(103).chr(61).chr(61)).chr(99).chr(51).chr(78).chr(122).chr(99).base64_decode(chr(98).chr(103).chr(61).chr(61))))
?>
						  },
						  
						hoverinfo: 'x+y',
						<?php  }
?>
						marker:{
						color: <?php  echo json_encode($this->seriesColors[$j-1]);
?>
					  }
					};
				<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(base64_decode(base64_decode('W'."g"."=".chr(61)).base64_decode('Q'.chr(81).chr(61).'=').base64_decode("P"."Q".chr(61)."=").base64_decode('P'.chr(81).chr(61)."=")).chr(72).chr(74).chr(104).base64_decode(base64_decode(chr(86).chr(119)."=".chr(61)).chr(81).chr(61).chr(61)).base64_decode(base64_decode("T".chr(81).chr(61).'=').chr(103).chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).chr(85).base64_decode(chr(80).chr(81).base64_decode("P"."Q".'='.chr(61)).base64_decode('P'.chr(81).chr(61).'='))).$i.base64_decode(chr(76).base64_decode(chr(81).base64_decode("U"."Q"."=".chr(61)).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).chr(61).chr(61));}
?>];

				var layout = {
				 title: '<?php  echo $this->title;
?>',
				  xaxis: {
					title: '<?php  echo $this->xaxistitle;
?>',
					showticklabels:<?php  echo $this->show_xticks;
?>,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },
				  yaxis: {
					title: '<?php  echo $this->yaxistitle;
?>',
					showticklabels:<?php  echo $this->show_yticks;
?>,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },			  
				  barmode: '<?php  echo $this->barmode;
?>'
				};
				<?php
 }if($this->type == base64_decode(chr(89).base64_decode(chr(87).base64_decode(chr(81).chr(81).chr(61).chr(61)).base64_decode("P".chr(81)."="."=").chr(61)).chr(74).chr(108).chr(89).chr(81).chr(61).chr(61))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(base64_decode(chr(86).chr(119).base64_decode('P'.chr(81).chr(61)."=").base64_decode(chr(80)."Q".chr(61)."=")).chr(67).base64_decode(chr(77).base64_decode(chr(85)."Q".chr(61)."=").chr(61).base64_decode(chr(80).'Q'.'='.chr(61))).chr(104).chr(101).chr(71).chr(108).base64_decode(chr(101).base64_decode('Z'.chr(119)."="."=").chr(61).chr(61)).base64_decode(base64_decode(chr(85).'w'.chr(61).'=').base64_decode("U".'Q'.chr(61).chr(61)).base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)).chr(71).chr(70).chr(117).base64_decode(base64_decode("V"."w".chr(61).'=').chr(103).base64_decode("P".chr(81).'='.'=').base64_decode("P".chr(81)."=".chr(61))).chr(67).base64_decode(chr(81).base64_decode('Z'.chr(119).chr(61).chr(61)).base64_decode(chr(80).'Q'.chr(61)."=").chr(61)).chr(90).chr(76).base64_decode(base64_decode(chr(86)."g".chr(61).chr(61)).chr(119).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode(chr(80)."Q".chr(61)."=")).base64_decode(chr(82).chr(103).chr(61).chr(61)).base64_decode(chr(78).base64_decode(chr(81).'Q'.'='."=").base64_decode("P"."Q".'='.chr(61)).base64_decode(chr(80)."Q".'='.chr(61))).chr(97).base64_decode(base64_decode('V'.'w'.chr(61).chr(61)).base64_decode(chr(81).'Q'.'='.chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).chr(77).base64_decode(chr(90).chr(119).base64_decode('P'."Q".chr(61).chr(61)).chr(61)).base64_decode(chr(87).chr(103).chr(61).base64_decode(chr(80).chr(81).'='."=")).chr(71).base64_decode(base64_decode(chr(85).chr(103)."=".chr(61)).chr(103).chr(61).base64_decode(chr(80).chr(81)."=".'=')).base64_decode(base64_decode("T"."Q".chr(61).chr(61)).chr(65).base64_decode("P"."Q".chr(61).chr(61)).chr(61)).chr(89).base64_decode(base64_decode(chr(86).chr(81)."=".'=').base64_decode('d'.chr(119)."=".'=').chr(61).chr(61)).chr(66).chr(116).base64_decode(chr(90).chr(65).chr(61).base64_decode(chr(80).chr(81)."="."=")).chr(88).base64_decode(base64_decode("V".chr(65).chr(61).chr(61)).chr(103).base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(77).base64_decode("Q"."Q".chr(61).'=').base64_decode(chr(80)."Q".'='.'=').base64_decode("P"."Q".chr(61).chr(61))).base64_decode(chr(83).chr(81).base64_decode(chr(80).chr(81).chr(61)."=").chr(61)).base64_decode(base64_decode('U'."g".'='.chr(61)).chr(119).base64_decode(chr(80)."Q".'='.'=').chr(61)).base64_decode(base64_decode(chr(85).chr(119)."=".chr(61)).chr(103).chr(61).chr(61)).base64_decode(base64_decode(chr(89).chr(103).'='."=").chr(65).chr(61).chr(61)).base64_decode(base64_decode("U"."w".chr(61).chr(61)).base64_decode("U".'Q'.'='.chr(61)).chr(61).base64_decode('P'.chr(81)."=".chr(61))).chr(72).base64_decode(chr(84).base64_decode(chr(90).chr(119).chr(61).'=').base64_decode('P'."Q".chr(61).'=').chr(61)).chr(104).chr(98).chr(87).chr(85).chr(61)),E_USER_ERROR);return $str;return (true);}$j=0;foreach($this->xaxis as $i){if($this->subtype == base64_decode(base64_decode(chr(89).base64_decode(chr(100).chr(119).'='."=").chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(base64_decode("T".'Q'.chr(61).chr(61)).chr(119).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).chr(82).chr(104).base64_decode(base64_decode(chr(86).chr(119).chr(61).chr(61)).base64_decode('U'.'Q'.'='.'=').base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(77).base64_decode('Z'.chr(119).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(116).base64_decode(base64_decode(chr(89).chr(103)."=".chr(61)).base64_decode("Q"."Q"."=".chr(61)).base64_decode('P'.'Q'.chr(61).chr(61)).base64_decode(chr(80)."Q".'='.'=')).base64_decode(chr(87).base64_decode(chr(90).chr(119).'='.chr(61)).base64_decode('P'.chr(81)."="."=").chr(61)).chr(65).chr(61).chr(61)))$fill=base64_decode(base64_decode(base64_decode(chr(87).'g'.chr(61).'=').base64_decode(chr(81).chr(81).chr(61)."=").base64_decode("P".chr(81)."=".chr(61)).chr(61)).base64_decode(chr(82).chr(119).base64_decode(chr(80).'Q'.'='."=").base64_decode(chr(80).chr(81)."=".chr(61))).chr(57).chr(117).base64_decode(base64_decode('V'.'w'."="."=").base64_decode(chr(90).chr(119).'='."=").base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(86).'w'."="."=").base64_decode("Q"."Q"."="."=").chr(61).base64_decode("P".chr(81).'='.'=')).chr(104).chr(48).chr(101).base64_decode(base64_decode('V'.chr(81).chr(61).chr(61)).chr(81).chr(61).base64_decode("P".chr(81).chr(61).'=')).base64_decode(base64_decode("U".'A'."=".'=').base64_decode('U'.chr(81).chr(61).chr(61)).chr(61).chr(61)).chr(61));else$fill=base64_decode(base64_decode(chr(90).chr(65).base64_decode("P".chr(81).chr(61)."=").chr(61)).base64_decode(base64_decode(chr(85).'g'.chr(61).chr(61)).chr(119).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(57).chr(54).chr(90).base64_decode(chr(87).base64_decode('Q'.chr(81)."=".'=').base64_decode("P".chr(81)."=".chr(61)).base64_decode(chr(80)."Q".chr(61).chr(61))).base64_decode(base64_decode('U'.chr(119).'='."=").chr(103).chr(61).base64_decode(chr(80)."Q"."=".chr(61))).chr(118).chr(101).chr(81).chr(61).base64_decode(chr(80).base64_decode('U'."Q".'='.chr(61)).base64_decode(chr(80).'Q'."=".chr(61)).base64_decode('P'.chr(81)."=".'=')));$j++;
?>
					var trace<?php  echo $j;
?> = {
					  x: <?php  echo json_encode($i);
?>,
					  y: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
					  <?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(chr(98).base64_decode(base64_decode(chr(89).chr(103).chr(61).chr(61)).base64_decode("U".chr(81).chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(82).base64_decode('Z'.chr(119).'='."=").chr(61).base64_decode(chr(80)."Q"."="."=")).base64_decode(chr(100).chr(65).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode("P".'Q'.chr(61)."=")).base64_decode(chr(87).chr(103).chr(61).chr(61)).chr(84).chr(111).base64_decode(chr(97).chr(81).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode('P'."Q".chr(61).'='))).$this->tracename[$j-1].base64_decode(base64_decode(chr(83).base64_decode("U"."Q".chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(97).chr(81).chr(61).base64_decode('P'.chr(81).'='."=")).chr(119).chr(61));}
?>
					  fill: '<?php  echo $fill
?>',
					  line:{shape: <?php  echo json_encode($this->shape);
?>},
					  <?php  if($this->orientation == base64_decode(chr(97).base64_decode(base64_decode(chr(85).chr(81)."=".chr(61)).chr(81).chr(61).chr(61)).base64_decode(chr(80).base64_decode("U".chr(81)."=".'=').chr(61).base64_decode(chr(80)."Q"."=".chr(61))).base64_decode(chr(80).base64_decode("U".chr(81).chr(61).chr(61)).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))))){echo base64_decode(chr(98).base64_decode(chr(77).chr(119).base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).chr(74).base64_decode(chr(99).chr(65).chr(61).chr(61)).chr(90).base64_decode(chr(86).base64_decode(chr(100).chr(119).chr(61).chr(61)).base64_decode("P".chr(81).chr(61)."=").base64_decode(chr(80)."Q".'='."=")).base64_decode(base64_decode(chr(84).'g'.'='.chr(61)).base64_decode(chr(85)."Q"."=".chr(61)).base64_decode('P'."Q".'='.'=').base64_decode(chr(80)."Q".'='."=")).chr(48).chr(89).chr(88).base64_decode(chr(85).base64_decode("Z".chr(119)."=".chr(61)).base64_decode("P".'Q'."="."=").chr(61)).base64_decode(base64_decode(chr(89)."w"."=".chr(61)).base64_decode(chr(81).'Q'.chr(61).chr(61)).chr(61).base64_decode(chr(80).'Q'.'='.chr(61))).base64_decode(chr(89).chr(103).base64_decode("P".chr(81)."=".chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(77).chr(103).base64_decode("P"."Q".chr(61)."=").chr(61)).chr(52).chr(54).chr(73).chr(67).base64_decode(chr(90).base64_decode(chr(81)."Q".chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(98).chr(119).chr(61).base64_decode('P'.chr(81).'='.chr(61))).chr(74).chr(121).chr(119).base64_decode(base64_decode("U".chr(65).chr(61)."=").chr(81).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)));}
?>
					  type: '<?php  echo $this->type;
?>',
					  <?php
 if($this->show_point_label == true){
?>
					  text: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
					   textposition: 'top center',
					   textfont: {
							family:  'roboto, sans-serif'
						  },
				       mode: 'lines+markers+text' ,
					   hoverinfo: 'x+y',
						<?php
 };
?>
					  marker:{
						color: <?php  echo json_encode($this->seriesColors[$j-1]);
?>
					  }
					};
					<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(chr(100).base64_decode(chr(83).chr(65).base64_decode(chr(80).'Q'.chr(61)."=").base64_decode('P'.'Q'.chr(61).chr(61))).base64_decode(base64_decode(chr(85).chr(119)."=".chr(61)).base64_decode(chr(90)."w".'='."=").chr(61).base64_decode('P'.chr(81).'='.chr(61))).chr(104).base64_decode(chr(87).base64_decode('U'.chr(81)."=".chr(61)).chr(61).base64_decode(chr(80).'Q'."="."=")).chr(50).chr(85).chr(61)).$i.base64_decode(base64_decode(chr(84).chr(65).chr(61).chr(61)).chr(65).chr(61).chr(61));}
?>];

				<?php
 if($this->subtype == base64_decode(base64_decode(chr(89).base64_decode('d'.chr(119).'='.chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(77).chr(119).chr(61).chr(61)).chr(82).chr(104).chr(89).chr(50).chr(116).chr(108).chr(90).base64_decode(chr(81).chr(81).base64_decode('P'."Q".chr(61).chr(61)).base64_decode('P'.chr(81)."="."=")).chr(61).base64_decode(chr(80).chr(81).base64_decode('P'.'Q'.chr(61).'=').base64_decode(chr(80).chr(81)."=".chr(61))))){
?>
				function stackedArea(traces) {
					for(var i=1; i<traces.length; i++) {
						for(var j=0; j<(Math.min(traces[i]['y'].length, traces[i-1]['y'].length)); j++) {
							traces[i]['y'][j] += traces[i-1]['y'][j];
						}
					}
					return traces;
				}				
				data = stackedArea(data);
				<?php
 }
?>
				
				var layout = {
				 title: '<?php  echo $this->title;
?>',
				  xaxis: {
					title: '<?php  echo $this->xaxistitle;
?>',
					showticklabels:<?php  echo $this->show_xticks;
?>,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },
				  yaxis: {
					title: '<?php  echo $this->yaxistitle;
?>',
					showticklabels:<?php  echo $this->show_yticks;
?>,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>,
				  },
				  barmode: '<?php  echo $this->barmode;
?>'
				};

			<?php
 }if($this->type == base64_decode(base64_decode(base64_decode("V".chr(119).chr(61).chr(61)).base64_decode(chr(85)."Q".chr(61)."=").chr(61).chr(61)).base64_decode(chr(98).base64_decode("Z"."w".chr(61).'=').base64_decode(chr(80).chr(81).chr(61)."=").base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(base64_decode('V'.chr(103).chr(61).chr(61)).chr(103).chr(61).chr(61)).chr(105).chr(89).chr(109).chr(120).chr(108))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(chr(87).chr(67).base64_decode(chr(77).chr(81).chr(61).chr(61)).chr(104).base64_decode(base64_decode(chr(87)."g".chr(61).'=').chr(81).chr(61).base64_decode('P'.'Q'.chr(61).chr(61))).base64_decode(chr(82).chr(119).base64_decode("P".chr(81).'='."=").chr(61)).chr(108).chr(122).chr(73).base64_decode(base64_decode("U"."g".chr(61).chr(61)).base64_decode(chr(100).'w'."="."=").base64_decode("P"."Q".'='.chr(61)).base64_decode(chr(80).chr(81)."=".chr(61))).chr(70).base64_decode(base64_decode("Z"."A".'='.'=').chr(81).chr(61).chr(61)).base64_decode(chr(87).chr(103).base64_decode(chr(80).'Q'.'='.'=').chr(61)).base64_decode(chr(81).chr(119).chr(61).chr(61)).base64_decode(base64_decode(chr(85).chr(81).chr(61).chr(61)).chr(103).base64_decode(chr(80)."Q".chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(87).base64_decode(chr(90).chr(119).chr(61)."=").base64_decode(chr(80).'Q'."="."=").chr(61)).chr(76).base64_decode(base64_decode("V".chr(103).'='.'=').chr(119).base64_decode(chr(80)."Q"."=".'=').base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(70).chr(52).chr(97).chr(88).base64_decode(base64_decode('V'.chr(65)."="."=").chr(81).base64_decode(chr(80).chr(81)."=".'=').base64_decode(chr(80)."Q".chr(61).chr(61))).chr(103).base64_decode(base64_decode('V'.chr(119).'='."=").chr(103).chr(61).chr(61)).chr(71).chr(70).chr(48).base64_decode(chr(87).base64_decode(chr(85).chr(81).chr(61)."=").base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(86).chr(81)."=".chr(61)).base64_decode("d".'w'.'='.'=').chr(61).base64_decode(chr(80)."Q".chr(61).chr(61))).base64_decode(base64_decode("U"."Q"."=".chr(61)).chr(103).chr(61).base64_decode(chr(80)."Q".'='.chr(61))).chr(116).base64_decode(chr(90).base64_decode("Q"."Q".'='."=").base64_decode(chr(80).'Q'."=".chr(61)).chr(61)).chr(88).chr(78).base64_decode(base64_decode(chr(84).'Q'."="."=").chr(65).chr(61).base64_decode("P"."Q".chr(61)."=")).base64_decode(chr(83).base64_decode("U".chr(81)."=".chr(61)).chr(61).base64_decode("P".chr(81)."=".chr(61))).chr(71).base64_decode(base64_decode(chr(85).chr(119).chr(61).chr(61)).base64_decode('Z'.'w'.'='.chr(61)).chr(61).chr(61)).base64_decode(chr(98).base64_decode("Q".'Q'.chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(83).base64_decode(chr(85).'Q'.chr(61).'=').base64_decode(chr(80)."Q".chr(61)."=").base64_decode("P".chr(81).chr(61)."=")).base64_decode(base64_decode("U".chr(119)."=".'=').chr(65).chr(61).chr(61)).base64_decode(chr(84).base64_decode(chr(90).'w'.chr(61).'=').base64_decode(chr(80).chr(81).'='.'=').base64_decode('P'."Q"."="."=")).base64_decode(base64_decode(chr(89).chr(81).chr(61).chr(61)).chr(65).chr(61).base64_decode('P'.'Q'.'='."=")).base64_decode(chr(89).base64_decode('Z'.chr(119)."=".'=').chr(61).base64_decode('P'."Q"."=".chr(61))).base64_decode(chr(86).base64_decode(chr(100)."w".'='."=").base64_decode(chr(80).chr(81)."="."=").base64_decode(chr(80).'Q'.'='."=")).chr(85).chr(61)),E_USER_ERROR);return $str;return (true);}if(count($this->xaxis)>count($this->tracename)){for($k=count($this->tracename);$k<count($this->xaxis);$k++)$this->tracename[$k]="";}if($this->xtype == null){$this->xtype=base64_decode(chr(76).base64_decode(chr(85).base64_decode(chr(85).chr(81).chr(61)."=").base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(80).chr(81).base64_decode(chr(80).'Q'.'='.'=').base64_decode(chr(80).chr(81).'='.chr(61))).chr(61));}if($this->ytype == null){$this->ytype=base64_decode(chr(76).chr(81).chr(61).base64_decode(base64_decode('U'."A"."=".chr(61)).chr(81).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))));}$j=0;foreach($this->xaxis as $i){$j++;$size_ref=base64_decode(base64_decode(base64_decode("V"."A".'='.chr(61)).chr(81).base64_decode(chr(80).chr(81)."=".chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(81).base64_decode(chr(100).chr(119).'='.chr(61)).chr(61).base64_decode("P".chr(81).'='.'=')).base64_decode(chr(78).base64_decode(chr(81)."Q".chr(61).chr(61)).base64_decode("P".chr(81).'='.'=').base64_decode(chr(80).'Q'.chr(61).'=')).chr(121));foreach($this->bubblesize[$j-1] as $bs){if($bs>10000){$size_ref=base64_decode(base64_decode(base64_decode('V'.'A'.chr(61).chr(61)).chr(81).chr(61).chr(61)).chr(109).chr(85).chr(49));break;}}
?>
					var trace<?php  echo $j;
?> = {

						x: <?php  echo json_encode($i);
?>,
						y: <?php  echo json_encode($this->yaxis[$j-1]);
?>,

						<?php
 if(!empty($this->bubbletext[$j-1])){echo base64_decode(chr(100).chr(71).chr(86).chr(52).chr(100).base64_decode(chr(82).base64_decode("Q".chr(81).'='.chr(61)).base64_decode('P'.'Q'.chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(chr(98).base64_decode(chr(100)."w".'='.'=').chr(61).chr(61)).chr(61)).json_encode($this->bubbletext[$j-1]).base64_decode(base64_decode(chr(84).base64_decode(chr(81).chr(81).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(81).chr(81).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(80).base64_decode("U"."Q".'='.chr(61)).base64_decode(chr(80).'Q'.'='."=").chr(61)).chr(61));}
?>
						name: <?php  echo json_encode($this->tracename[$j-1]);
?>,
						line: {shape: <?php  echo json_encode($this->shape);
?>},
						<?php  if($this->orientation == base64_decode(base64_decode(base64_decode("W".chr(81)."="."=").chr(81).base64_decode('P'.chr(81).'='."=").base64_decode('P'.chr(81).chr(61).'=')).chr(65).base64_decode(base64_decode("U".'A'.chr(61).'=').base64_decode('U'.'Q'."=".'=').base64_decode(chr(80).chr(81).chr(61).'=').chr(61)).base64_decode(base64_decode(chr(85).'A'.chr(61).'=').base64_decode("U".chr(81)."=".'=').chr(61).base64_decode('P'.'Q'.chr(61)."=")))){echo base64_decode(chr(98).chr(51).base64_decode(chr(83).chr(103).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).'=')).chr(112).chr(90).base64_decode(chr(86).base64_decode('d'.chr(119)."=".chr(61)).chr(61).chr(61)).base64_decode(base64_decode(chr(84).chr(103).chr(61).chr(61)).chr(81).base64_decode(chr(80)."Q".chr(61).chr(61)).base64_decode('P'."Q".'='."=")).base64_decode(chr(77).base64_decode("Q".'Q'."="."=").base64_decode("P".chr(81)."=".chr(61)).base64_decode("P"."Q".'='.chr(61))).base64_decode(chr(87).base64_decode("U".chr(81).chr(61).chr(61)).base64_decode('P'.'Q'.chr(61).'=').chr(61)).base64_decode(chr(87).chr(65).base64_decode(chr(80).'Q'.'='.chr(61)).base64_decode(chr(80).chr(81).chr(61)."=")).chr(82).base64_decode(chr(99).base64_decode(chr(81).chr(81)."=".chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(98).chr(50).chr(52).chr(54).base64_decode(base64_decode("U".'w'."=".'=').chr(81).base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)).chr(67).base64_decode(base64_decode('W'.chr(103).'='.chr(61)).base64_decode('Q'."Q".chr(61).'=').base64_decode(chr(80)."Q".chr(61).chr(61)).base64_decode(chr(80)."Q"."=".chr(61))).chr(111).chr(74).base64_decode(chr(101).base64_decode("U".'Q'."=".chr(61)).base64_decode(chr(80).'Q'."=".chr(61)).chr(61)).chr(119).base64_decode(chr(80).chr(81).chr(61).chr(61)));}
?>
						mode: 'markers',
						marker:{
							size: <?php  if(!empty($this->bubblesize[$j-1])){echo json_encode($this->bubblesize[$j-1]);}else{echo json_encode($i);}
?>,
							sizeref: <?php  echo $size_ref
?>,
							sizemode: 'area',
							color: <?php  echo json_encode($this->seriesColors[$j-1]);
?>
						}
					};
				<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(chr(100).chr(72).chr(74).base64_decode(chr(97).chr(65).base64_decode(chr(80)."Q"."="."=").chr(61)).chr(89).chr(50).base64_decode(base64_decode(chr(86).chr(103).chr(61).chr(61)).base64_decode('U'.chr(81).'='.chr(61)).chr(61).base64_decode('P'.'Q'.chr(61).chr(61))).chr(61)).$i.base64_decode(chr(76).base64_decode(base64_decode(chr(85).'Q'.chr(61)."=").base64_decode(chr(85).chr(81).chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(80).chr(81).base64_decode('P'."Q"."="."=").base64_decode(chr(80).'Q'.'='."=")).chr(61));}
?>];

				var layout = {
				 title: '<?php  echo $this->title;
?>',
				  xaxis: {
					range: <?php  echo json_encode($this->xrange);
?>,
					title: '<?php  echo $this->xaxistitle;
?>',
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>, 
					type: '<?php  echo $this->xtype;
?>'
				  },
				  yaxis: {
					range: <?php  echo json_encode($this->yrange);
?>,
   				    title: '<?php  echo $this->yaxistitle;
?>',
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?> ,
					type: '<?php  echo $this->ytype;
?>'
				  },
				  barmode: '<?php  echo $this->barmode;
?>',
				  hovermode: 'closest'
				};
			<?php
 }if($this->type == base64_decode(base64_decode(chr(89).chr(81).base64_decode(chr(80)."Q"."="."=").chr(61)).chr(71).base64_decode(base64_decode('Y'.chr(103).'='.chr(61)).chr(65).base64_decode(chr(80)."Q".'='.'=').base64_decode('P'.chr(81)."="."=")).base64_decode(base64_decode('Z'.'Q'.chr(61).chr(61)).chr(103).chr(61).chr(61)).base64_decode(base64_decode('W'."g".chr(61)."=").chr(65).chr(61).base64_decode(chr(80).'Q'."=".chr(61))).base64_decode(base64_decode(chr(85).'g'.chr(61).chr(61)).base64_decode(chr(100).'w'."=".'=').chr(61).chr(61)).chr(57).base64_decode(chr(98).chr(103).base64_decode('P'.'Q'."=".'=').chr(61)).base64_decode(base64_decode(chr(87).chr(81).'='.chr(61)).chr(119).base64_decode('P'.chr(81)."=".chr(61)).base64_decode('P'.'Q'."=".chr(61))).base64_decode(base64_decode('Y'."g".chr(61).'=').base64_decode(chr(85).chr(81).'='."=").chr(61).chr(61)).base64_decode(chr(82).chr(103).chr(61).chr(61)).chr(116))){$j=0;foreach($this->xaxis as $i){$j++;
?>
					var trace<?php  echo $j;
?> = {
						x: <?php  echo json_encode($i);
?>,
						<?php
 if(!empty($this->tracename[$j-1])){echo base64_decode(base64_decode(base64_decode(chr(87).'Q'."="."=").chr(103).chr(61).chr(61)).base64_decode(chr(98).base64_decode(chr(85)."Q".chr(61).chr(61)).chr(61).base64_decode(chr(80).'Q'.chr(61)."=")).base64_decode(chr(82).base64_decode(chr(90).chr(119).chr(61)."=").base64_decode(chr(80).chr(81).chr(61)."=").base64_decode('P'.chr(81).'='.'=')).chr(116).base64_decode(base64_decode("V".chr(119)."=".'=').chr(103).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).chr(84).base64_decode(base64_decode(chr(89)."g".chr(61).chr(61)).chr(119).chr(61).base64_decode('P'.chr(81).chr(61)."=")).base64_decode(base64_decode("Y".'Q'.chr(61).'=').chr(81).chr(61).chr(61))).$this->tracename[$j-1].base64_decode(base64_decode(base64_decode(chr(85).'w'.chr(61).chr(61)).chr(81).chr(61).base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(chr(97).chr(81).base64_decode('P'.chr(81).chr(61).'=').base64_decode(chr(80).'Q'.chr(61).'=')).base64_decode(chr(100).base64_decode(chr(100).'w'."=".chr(61)).chr(61).base64_decode("P"."Q".'='.chr(61))).base64_decode(base64_decode("U"."A"."=".'=').base64_decode("U".chr(81).chr(61).chr(61)).base64_decode(chr(80).'Q'.chr(61).'=').chr(61)));}
?>
						line: {shape: <?php  echo json_encode($this->shape);
?>},
						<?php  if($this->orientation == base64_decode(base64_decode(chr(89).chr(81).chr(61).chr(61)).chr(65).chr(61).chr(61))){echo base64_decode(chr(98).chr(51).chr(74).chr(112).chr(90).base64_decode(chr(86).chr(119).base64_decode(chr(80).'Q'.chr(61).'=').base64_decode(chr(80).chr(81)."=".'=')).base64_decode(base64_decode(chr(84)."g"."="."=").chr(81).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(77).base64_decode(chr(81).chr(81).chr(61)."=").chr(61).base64_decode('P'.chr(81).'='."=")).base64_decode(base64_decode(chr(86).'w'.chr(61).chr(61)).chr(81).chr(61).chr(61)).chr(88).base64_decode(base64_decode('V'.'Q'.chr(61).'=').base64_decode(chr(90)."w"."="."=").chr(61).chr(61)).base64_decode(chr(99).chr(65).base64_decode("P"."Q"."=".'=').chr(61)).base64_decode(chr(89).chr(103).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(50).base64_decode(base64_decode(chr(84).chr(103).chr(61).'=').chr(65).base64_decode('P'.chr(81).'='.chr(61)).chr(61)).base64_decode(base64_decode("T".chr(103).chr(61)."=").base64_decode('Z'."w".chr(61).'=').base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).'Q'."=".chr(61))).chr(73).base64_decode(chr(81).base64_decode('d'.chr(119).chr(61)."=").chr(61).chr(61)).chr(100).chr(111).base64_decode(base64_decode(chr(85)."w"."=".'=').chr(103).chr(61).chr(61)).base64_decode(base64_decode(chr(90).chr(81)."=".chr(61)).base64_decode("U".'Q'.'='.'=').chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(100).chr(119).chr(61).chr(61)).chr(61));}
?>
						type: '<?php  echo $this->type;
?>'
					};
					<?php
 }
?>
				var data = [<?php  for($i=1;$i<$j+1;$i++){echo base64_decode(base64_decode(base64_decode(chr(87).chr(103).chr(61)."=").base64_decode(chr(81).chr(81).'='.chr(61)).base64_decode(chr(80).chr(81)."="."=").chr(61)).base64_decode(base64_decode('U'.chr(119).chr(61).'=').base64_decode('Q'.chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(83).chr(103).chr(61).base64_decode(chr(80)."Q".chr(61).chr(61))).base64_decode(base64_decode(chr(89).chr(81).chr(61)."=").base64_decode(chr(81)."Q"."=".chr(61)).base64_decode(chr(80).'Q'.'='.chr(61)).base64_decode('P'."Q".chr(61).'=')).base64_decode(base64_decode(chr(86).chr(119).chr(61).chr(61)).chr(81).chr(61).chr(61)).chr(50).chr(85).base64_decode(chr(80).chr(81).base64_decode("P".chr(81)."=".'=').chr(61))).$i.base64_decode(chr(76).base64_decode(base64_decode('U'.chr(81)."=".chr(61)).chr(81).base64_decode("P".'Q'.'='.chr(61)).chr(61)).base64_decode(chr(80).chr(81).base64_decode('P'.chr(81)."=".'=').chr(61)).base64_decode(chr(80).base64_decode(chr(85).'Q'.'='."=").chr(61).base64_decode('P'.'Q'.'='.chr(61))));}
?>];

				var layout = {
				 title: '<?php  echo $this->title;
?>',
				  xaxis: {
					title: '<?php  echo $this->xaxistitle;
?>',
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },
				  yaxis: {
					title: '<?php  echo $this->yaxistitle;
?>',
					showticklabels:true,
					showgrid: <?php  echo $this->showgrid;
?>,
					showline: <?php  echo $this->showline;
?>
				  },
				  barmode: '<?php  echo $this->barmode;
?>'
				};
			<?php
 }if($this->type == base64_decode(chr(99).base64_decode(chr(82).base64_decode("d".chr(119).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).base64_decode(chr(98).chr(65).chr(61).base64_decode("P".chr(81).'='."=")).chr(108))){if(!(count($this->xaxis) == count($this->yaxis))){trigger_error(base64_decode(chr(87).base64_decode(base64_decode(chr(85).chr(81).chr(61).chr(61)).base64_decode('d'.'w'.'='.'=').base64_decode("P".chr(81).'='.chr(61)).chr(61)).base64_decode(chr(77).base64_decode(chr(85).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).'=').base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(97).base64_decode("Q".'Q'.chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).'='."=")).chr(101).chr(71).base64_decode(chr(98).base64_decode('Q'.'Q'.chr(61).chr(61)).base64_decode('P'.'Q'.chr(61)."=").chr(61)).chr(122).chr(73).chr(71).chr(70).base64_decode(base64_decode('Z'.chr(65)."=".chr(61)).chr(81).chr(61).base64_decode("P".chr(81)."=".chr(61))).base64_decode(base64_decode(chr(86).chr(119).chr(61).chr(61)).chr(103).chr(61).base64_decode("P"."Q".chr(61).chr(61))).base64_decode(chr(81).base64_decode(chr(100)."w".chr(61)."=").base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).chr(66).chr(90).chr(76).base64_decode(chr(86).base64_decode('d'.chr(119).chr(61).chr(61)).chr(61).base64_decode('P'."Q".chr(61).chr(61))).chr(70).base64_decode(base64_decode("T".'g'.chr(61).'=').chr(65).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(97).base64_decode(base64_decode(chr(86)."w".chr(61)."=").chr(65).base64_decode(chr(80).chr(81)."=".'=').chr(61)).base64_decode(chr(84).base64_decode('U'.chr(81).chr(61)."=").base64_decode('P'.'Q'.'='.chr(61)).base64_decode("P".'Q'.'='.'=')).chr(103).chr(90).chr(71).chr(70).chr(48).base64_decode(base64_decode("V".chr(119).chr(61).'=').base64_decode(chr(85).chr(81)."="."=").chr(61).base64_decode('P'.chr(81)."=".chr(61))).base64_decode(base64_decode(chr(86)."Q".chr(61).chr(61)).chr(119).base64_decode("P".chr(81)."=".chr(61)).base64_decode(chr(80).chr(81)."="."=")).chr(66).chr(116).base64_decode(base64_decode(chr(87).chr(103)."="."=").base64_decode('Q'.'Q'.chr(61).chr(61)).base64_decode("P"."Q".chr(61).chr(61)).base64_decode(chr(80).chr(81).'='.'=')).base64_decode(base64_decode(chr(86).'w'.chr(61)."=").chr(65).base64_decode('P'.chr(81).chr(61).'=').chr(61)).chr(78).base64_decode(chr(77).chr(65).chr(61).chr(61)).base64_decode(base64_decode(chr(85).chr(119)."=".chr(61)).chr(81).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).chr(71).base64_decode(chr(83).chr(103).chr(61).chr(61)).chr(108).chr(73).base64_decode(base64_decode("U".'w'.chr(61)."=").chr(65).chr(61).base64_decode('P'."Q".chr(61).chr(61))).base64_decode(base64_decode('V'.chr(65)."=".'=').chr(103).base64_decode('P'.chr(81).chr(61).'=').chr(61)).chr(104).chr(98).base64_decode(base64_decode(chr(86).'g'."=".chr(61)).base64_decode('d'.chr(119).'='."=").base64_decode('P'.'Q'.'='.'=').base64_decode(chr(80).chr(81).chr(61)."=")).chr(85).chr(61)),E_USER_ERROR);return (true);}$j=0;foreach($this->xaxis as $i){$j++;
?>
					var trace<?php  echo $j;
?> =
					{
					  values: <?php  echo json_encode($i);
?>,
					  labels: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
					  hole: <?php  echo $this->hole;
?>,
					  type: '<?php  echo $this->type;
?>',
					  marker:{
						colors: <?php  echo json_encode($this->seriesColors);
?>
					  },
					  textinfo:'label',
					  textposition:'outside',
					  hoverinfo:'label',
					  textfont: {"color":"black"},
					};
					var trace<?php  echo $j+1;
?> =
					{
					  values: <?php  echo json_encode($i);
?>,
					  labels: <?php  echo json_encode($this->yaxis[$j-1]);
?>,
					  hole: <?php  echo $this->hole;
?>,
					  type: '<?php  echo $this->type;
?>',
					  marker:{
						colors: <?php  echo json_encode($this->seriesColors);
?>
					  },
					  textinfo:'percent+value',
					  textposition:'inside',
					  hoverinfo:'label',
					  textfont: {"color":"white"},
					};
					<?php
 }
?>
				var data = [<?php  for($i=1;$i <= $j;$i += 2){echo base64_decode(chr(100).chr(72).chr(74).chr(104).chr(89).chr(50).chr(85).base64_decode(base64_decode(chr(85)."A".'='.'=').chr(81).chr(61).chr(61))).$i.base64_decode(base64_decode(base64_decode('V'.chr(65).'='."=").chr(65).chr(61).chr(61)).base64_decode(base64_decode("U"."Q".chr(61).chr(61)).chr(81).chr(61).chr(61)).base64_decode(base64_decode("U".chr(65)."=".chr(61)).chr(81).chr(61).chr(61)).chr(61));echo base64_decode(base64_decode(chr(90).chr(65).chr(61).chr(61)).base64_decode(chr(83).base64_decode('Q'.chr(81).'='.chr(61)).chr(61).chr(61)).chr(74).chr(104).chr(89).chr(50).chr(85).chr(61)).($i+1).base64_decode(base64_decode(chr(84).chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(base64_decode('U'.chr(81).chr(61)."=").chr(81).chr(61).chr(61)).base64_decode(base64_decode("U".chr(65).'='."=").chr(81).chr(61).chr(61)).chr(61));}
?>];
				var layout = {
					title: '<?php  echo $this->title;
?>',
				};
			<?php
 }if($this->type == base64_decode(chr(98).chr(87).base64_decode(base64_decode("U".chr(103)."=".'=').chr(103).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(119))){
?>
				Plotly.d3.csv('<?php  echo $this->csv;
?>', function(err, rows)
				{
					function unpack(rows, key) {
						return rows.map(function(row) { return row[key]; });
					}

					var data = [{
								  type: 'choropleth',
								  locations: unpack(rows, 'CODE'),
								  z: unpack(rows, '<?php  echo $this->csvdata;
?>'),
								  text: unpack(rows, 'COUNTRY'),
								  colorbar: {
									autotic: true,
									title: '<?php  echo $this->csvdata;
?>'
								  }
							  }];

					console.log(data.locations);
					var layout = {
						title: '<?php  echo $this->title;
?>',
						geo:{
							showframe: false,
							showcoastlines: false,
							projection:{
								type: 'mercator' //'robinson'
							}
						}
					};
				};
				<?php
 }
?>

			layout = $.extend(true,layout,<?php  echo json_encode($layout)
?>);
			data = $.extend(true,data,<?php  echo json_encode($data)
?>);
			
			var modeBarManage = {
			modeBarButtonsToRemove: ['sendDataToCloud'],
 			displaylogo: false, 	// Uncomment this line to enable modebar

			// ### P ###
			displayModeBar: <?php  echo (($this->export)?base64_decode(chr(100).chr(72).base64_decode(base64_decode("U"."w".chr(61).'=').base64_decode(chr(90).'w'.chr(61).'=').chr(61).chr(61)).chr(49).base64_decode(chr(87).chr(103).base64_decode(chr(80).chr(81).chr(61)."=").chr(61)).chr(81).chr(61).chr(61)):base64_decode(chr(90).chr(109).base64_decode(chr(82).chr(103).base64_decode(chr(80).'Q'.'='.'=').chr(61)).base64_decode(base64_decode('Y'.'w'.chr(61).chr(61)).base64_decode(chr(100)."w".chr(61).chr(61)).base64_decode('P'.'Q'."="."=").base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(base64_decode('W'.'Q'.chr(61).chr(61)).chr(119).chr(61).chr(61)).base64_decode(base64_decode(chr(84).chr(81)."=".chr(61)).base64_decode(chr(90)."w"."=".chr(61)).chr(61).chr(61)).chr(85).chr(61)))
?> // Comment this line to enable modebar
			// ### END ###

			};

			Plotly.plot(gd, data, layout, modeBarManage);

			// ### P ###
			// removed extra buttons
			jQuery('a[data-title="Zoom in"]').hide();
			jQuery('a[data-title="Zoom out"]').hide();
			jQuery('a[data-title="Lasso Select"]').hide();
			jQuery('a[data-title="Box Select"]').hide();
			jQuery('a[data-title="Reset axes"]').hide();
			jQuery('a[data-title="Show closest data on hover"]').hide();
			jQuery('a[data-title="Compare data on hover"]').hide();
			jQuery('.js-plotly-plot .plotly .modebar-group').css({'margin-left':'0px'});
			jQuery('.js-plotly-plot .plotly .modebar-btn').css({'padding-left':'8px'});
			jQuery('.js-plotly-plot .plotly .modebar').css({'top':'0px'});
			// ### END ###


			window.addEventListener('resize', function() { Plotly.Plots.resize(gd); });

		})();
		</script>
		<?php
 }}function format_data($o){$in=$o->data;$out=array();foreach($in as $trace){$x=array();$y=array();$b=array();$t=array();$e=array();$err=array();foreach($trace as $v){$x[]=$v[0];$y[]=$v[1];if($o->chart_type == base64_decode(chr(89).base64_decode(chr(98).base64_decode(chr(90).'w'.'='.'=').base64_decode(chr(80).chr(81)."="."=").base64_decode(chr(80)."Q".chr(61).'=')).base64_decode(chr(86).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(97).chr(81).chr(61).chr(61)).chr(89).chr(109).base64_decode(base64_decode("Z".'Q'."="."=").chr(65).base64_decode(chr(80).chr(81).chr(61).'=').chr(61)).base64_decode(chr(98).base64_decode(chr(81).'Q'.chr(61).chr(61)).chr(61).chr(61)))){$b[]=$v[2];$t[]=$v[3];}if($o->chart_type == base64_decode(chr(90).base64_decode(chr(87).base64_decode("Q"."Q"."="."=").chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(83).base64_decode("Z"."w"."=".chr(61)).base64_decode('P'."Q".'='.chr(61)).chr(61)).chr(121).base64_decode(base64_decode(chr(87).'Q'.chr(61).chr(61)).base64_decode(chr(90).chr(119)."="."=").base64_decode("P"."Q".chr(61)."=").chr(61)).base64_decode(base64_decode('T'.'Q'.chr(61).chr(61)).base64_decode("d".chr(119)."="."=").chr(61).base64_decode(chr(80).'Q'.chr(61)."=")).base64_decode(base64_decode(chr(85).'w'."=".chr(61)).base64_decode("U".chr(81).chr(61)."=").chr(61).base64_decode(chr(80).'Q'.chr(61).'=')).base64_decode(base64_decode(chr(90).'A'."=".chr(61)).chr(65).base64_decode('P'."Q".chr(61).chr(61)).base64_decode('P'.'Q'."=".'=')).base64_decode(chr(87).base64_decode("U"."Q"."=".'=').base64_decode(chr(80).chr(81).'='.chr(61)).base64_decode('P'."Q".'='.chr(61))).base64_decode(base64_decode("Y".'g'.'='.chr(61)).chr(81).base64_decode("P".chr(81)."="."=").chr(61)).chr(70).base64_decode(chr(101).chr(81).chr(61).chr(61)))){$err[]=$v[2];}}if($o->chart_type == base64_decode(base64_decode(base64_decode('W'.chr(81).chr(61).'=').base64_decode(chr(100).chr(119)."=".chr(61)).chr(61).chr(61)).base64_decode(chr(82).base64_decode("d".chr(119).'='.chr(61)).chr(61).base64_decode('P'.chr(81).'='.chr(61))).chr(108).base64_decode(base64_decode(chr(89)."g".'='.chr(61)).base64_decode(chr(81).chr(81).chr(61).'=').chr(61).chr(61))) or $o->chart_type == base64_decode(chr(90).base64_decode(chr(82).chr(119).chr(61).chr(61)).base64_decode(base64_decode(chr(84).chr(119).chr(61).'=').base64_decode(chr(85).'Q'.chr(61).'=').chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(100).base64_decode(chr(85).chr(81).chr(61).chr(61)).chr(61).chr(61)).chr(100).chr(88).base64_decode(chr(85).chr(81).base64_decode(chr(80).chr(81).chr(61)."=").base64_decode(chr(80).chr(81)."=".chr(61))).chr(61))){$out[base64_decode(chr(101).chr(81).base64_decode(chr(80).chr(81).base64_decode(chr(80)."Q".chr(61)."=").base64_decode(chr(80).'Q'.chr(61).'=')).chr(61))][]=$x;$out[base64_decode(base64_decode(base64_decode("W"."g".'='."=").base64_decode("U".'Q'."=".chr(61)).base64_decode(chr(80)."Q"."=".'=').base64_decode(chr(80).'Q'."=".chr(61))).chr(65).chr(61).chr(61))][]=$y;}else{$out[base64_decode(base64_decode(chr(90).chr(81).base64_decode(chr(80)."Q".'='.chr(61)).chr(61)).base64_decode(chr(81).chr(81).chr(61).base64_decode(chr(80)."Q".chr(61).'=')).chr(61).chr(61))][]=$x;$out[base64_decode(base64_decode(chr(90).base64_decode("U".chr(81).chr(61).chr(61)).base64_decode(chr(80)."Q"."=".chr(61)).base64_decode('P'.chr(81)."=".chr(61))).chr(81).base64_decode(chr(80).chr(81).chr(61).base64_decode(chr(80).'Q'."=".'=')).chr(61))][]=$y;}if($o->chart_type == base64_decode(chr(89).base64_decode(chr(98).base64_decode("Z".chr(119).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode('P'."Q"."=".'=')).base64_decode(base64_decode(chr(86).chr(103).chr(61).chr(61)).base64_decode(chr(90).chr(119).chr(61).'=').chr(61).chr(61)).chr(105).base64_decode(base64_decode('V'.chr(119)."=".'=').chr(81).chr(61).base64_decode(chr(80).chr(81)."="."=")).chr(109).base64_decode(chr(101).chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(base64_decode(chr(89).chr(103).chr(61)."=").chr(65).chr(61).base64_decode(chr(80).chr(81).'='.'=')))){$out[base64_decode(base64_decode(base64_decode(chr(86).'w'.chr(61).chr(61)).base64_decode("U"."Q".chr(61).chr(61)).base64_decode('P'.'Q'.chr(61).'=').base64_decode('P'."Q".'='."=")).chr(103).base64_decode(chr(80).chr(81).chr(61).base64_decode(chr(80).'Q'.chr(61).'=')).base64_decode(base64_decode("U"."A"."=".chr(61)).chr(81).chr(61).chr(61)))][]=$b;$out[base64_decode(chr(100).chr(65).chr(61).chr(61))][]=$t;}if($o->chart_type == base64_decode(chr(90).chr(88).base64_decode(chr(83).base64_decode('Z'."w".chr(61)."=").base64_decode('P'.chr(81).'='.chr(61)).base64_decode("P".chr(81)."=".'=')).base64_decode(base64_decode(chr(90)."Q".'='.chr(61)).base64_decode("U".'Q'."=".chr(61)).base64_decode('P'.'Q'.chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(87).chr(81).chr(61).'=').base64_decode(chr(90).chr(119).chr(61).'=').base64_decode(chr(80).chr(81).'='."=").chr(61)).chr(51).chr(73).base64_decode(chr(100).chr(65).chr(61).chr(61)).chr(89).base64_decode(base64_decode(chr(89).chr(103).chr(61)."=").base64_decode(chr(85)."Q".chr(61).chr(61)).base64_decode('P'.chr(81)."=".'=').chr(61)).base64_decode(chr(82).chr(103).chr(61).base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(base64_decode("Z".'Q'.chr(61).chr(61)).base64_decode('U'.'Q'.chr(61).'=').base64_decode('P'.chr(81).'='.chr(61)).base64_decode('P'.chr(81).'='.'=')))){$out[base64_decode(chr(90).base64_decode(base64_decode("V".chr(119).'='."=").chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(83).base64_decode(chr(90).chr(119).'='.'=').chr(61).base64_decode('P'."Q"."=".'=')).chr(121))][]=$err;}}return $out;}function format_linebardata($o){$in=$o->data;$out=array();foreach($in[0] as $trace){$x=array();$y=array();foreach($trace as $v){$x[]=$v[0];$y[]=$v[1];}$out[base64_decode(base64_decode(base64_decode(chr(87).chr(103).chr(61).chr(61)).chr(81).base64_decode(chr(80)."Q"."=".'=').base64_decode('P'."Q".'='."=")).chr(65).base64_decode(chr(80).chr(81).base64_decode(chr(80).chr(81).'='.'=').chr(61)).chr(61))][]=$x;$out[base64_decode(base64_decode(chr(90).chr(81).chr(61).chr(61)).chr(81).chr(61).chr(61))][]=$y;}foreach($in[1] as $trace2){$x=array();$y=array();foreach($trace2 as $v){$x[]=$v[0];$y[]=$v[1];}$out[base64_decode(base64_decode(base64_decode(chr(87)."g"."=".chr(61)).chr(81).chr(61).base64_decode("P".chr(81).chr(61).chr(61))).chr(68).base64_decode(chr(83).chr(81).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode("P".chr(81).chr(61).chr(61))).chr(61))][]=$x;$out[base64_decode(base64_decode(base64_decode(chr(87)."g".chr(61)."=").base64_decode(chr(85).chr(81).'='.'=').base64_decode("P".chr(81).'='.chr(61)).chr(61)).base64_decode(base64_decode('V'.chr(103).chr(61).chr(61)).base64_decode(chr(81).chr(81).chr(61)."=").base64_decode(chr(80).chr(81)."=".chr(61)).base64_decode("P".chr(81).'='.chr(61))).base64_decode(chr(83).base64_decode(chr(85).'Q'.'='."=").chr(61).chr(61)).chr(61))][]=$y;}return $out;}function format_candlestickdata($o){$in=$o->data;$out=array();foreach($in as $trace){$x=array();$cl=array();$hi=array();$lo=array();$op=array();foreach($trace as $v){$x[]=$v[0];$cl[]=$v[1];$hi[]=$v[2];$lo[]=$v[3];$op[]=$v[4];}$out[base64_decode(base64_decode(chr(90).base64_decode(chr(85)."Q".chr(61).'=').chr(61).chr(61)).chr(65).chr(61).chr(61))][]=$x;$out[base64_decode(base64_decode(chr(87).base64_decode('U'.chr(81).chr(61).'=').chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).base64_decode(chr(77).chr(103).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(90)."A"."="."=").base64_decode('d'.chr(119).'='.'=').base64_decode('P'.chr(81)."="."=").base64_decode(chr(80)."Q".chr(61).chr(61))).base64_decode(base64_decode(chr(85).chr(65).chr(61).'=').chr(81).base64_decode(chr(80).chr(81)."=".'=').chr(61)))][]=$cl;$out[base64_decode(base64_decode(base64_decode("W".'Q'.'='."=").chr(81).chr(61).base64_decode('P'.chr(81)."=".'=')).base64_decode(base64_decode('U'."g".chr(61).'=').base64_decode("d".chr(119).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81)."=".chr(61))).chr(107).base64_decode(base64_decode(chr(85).chr(65)."=".chr(61)).chr(81).chr(61).chr(61)))][]=$hi;$out[base64_decode(base64_decode(base64_decode('W'."Q".chr(61).chr(61)).chr(103).chr(61).chr(61)).base64_decode(base64_decode('U'."g".chr(61).chr(61)).chr(119).base64_decode('P'.chr(81)."=".'=').base64_decode(chr(80).chr(81)."=".chr(61))).chr(56).chr(61))][]=$lo;$out[base64_decode(chr(98).base64_decode(base64_decode(chr(84).'Q'.chr(61).chr(61)).chr(119).base64_decode(chr(80)."Q".'='."=").base64_decode('P'.chr(81)."=".chr(61))).chr(65).chr(61))][]=$op;}return $out;}function render_alpha($id,$obj){$c= new alpha($id);$c->layout=$obj->layout;$c->height=$obj->height;$c->width=$obj->width;$c->title=$obj->title;$c->legend=$obj->legend;$c->xaxistitle=$obj->xlabel;$c->yaxistitle=$obj->ylabel;$c->tracename=$obj->series_label;$c->color_choice=$obj->color;$c->logo=$obj->logo;$c->theme=$obj->theme;$c->export=$obj->export;$c->series=$obj->series;$c->bgcolor=$obj->bgcolor;$c->margin=$obj->margin;$c->xrange=$obj->xrange;$c->yrange=$obj->yrange;$c->xtype=$obj->xtype;$c->ytype=$obj->ytype;if($obj->chart_type == base64_decode(chr(97).chr(71).base64_decode(chr(98).base64_decode('Q'.chr(81).'='.chr(61)).base64_decode('P'."Q".chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(90)."Q"."=".chr(61)).base64_decode(chr(90).chr(119)."=".chr(61)).base64_decode("P".chr(81).chr(61)."=").chr(61)).chr(100).chr(71).chr(57).base64_decode(base64_decode(chr(89).'g'."=".'=').chr(103).base64_decode(chr(80)."Q".'='.chr(61)).base64_decode("P"."Q"."=".chr(61))).chr(99).base64_decode(base64_decode(chr(89).chr(103).chr(61).chr(61)).chr(81).base64_decode("P".chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).chr(70).chr(116))){$c->xaxis[]=$obj->data;$c->yaxis=null;}elseif($obj->chart_type == base64_decode(chr(97).base64_decode(chr(82).chr(119).chr(61).base64_decode(chr(80).'Q'.'='.'=')).chr(86).base64_decode(chr(97).base64_decode("Q".chr(81).chr(61).chr(61)).base64_decode(chr(80)."Q".chr(61)."=").chr(61)).base64_decode(base64_decode("W".chr(103).'='.chr(61)).base64_decode("Q".chr(81).'='.'=').base64_decode(chr(80).chr(81).'='.chr(61)).chr(61)).chr(71).base64_decode(chr(77).chr(81).base64_decode('P'.'Q'.'='.chr(61)).base64_decode('P'.chr(81)."=".chr(61))).chr(104).chr(99).chr(65).base64_decode(base64_decode('U'.chr(65).chr(61).chr(61)).base64_decode('U'."Q".chr(61).chr(61)).base64_decode("P".chr(81)."=".chr(61)).chr(61)).chr(61))){$c->zaxis[]=$obj->data;}elseif($obj->chart_type == base64_decode(chr(89).chr(50).base64_decode(chr(82).base64_decode("Z".'w'.chr(61).'=').chr(61).chr(61)).chr(117).base64_decode(base64_decode(chr(86).chr(119).chr(61).chr(61)).chr(103).chr(61).chr(61)).base64_decode(chr(82).chr(119).base64_decode("P".chr(81).'='."=").base64_decode("P".'Q'.'='.chr(61))).base64_decode(chr(101).chr(65).base64_decode(chr(80).chr(81)."=".'=').base64_decode('P'.chr(81).chr(61).'=')).base64_decode(base64_decode('Y'.chr(103)."=".chr(61)).base64_decode('Q'.'Q'.'='."=").base64_decode(chr(80).'Q'."=".'=').base64_decode("P".'Q'.chr(61).chr(61))).chr(99).base64_decode(base64_decode("T".chr(81).chr(61).'=').base64_decode(chr(100).chr(119).'='.'=').base64_decode('P'.'Q'.'='.'=').base64_decode('P'.'Q'.'='.chr(61))).base64_decode(base64_decode(chr(86).chr(81).'='.chr(61)).base64_decode(chr(90).chr(119).'='.'=').chr(61).chr(61)).chr(112).base64_decode(chr(87).chr(81).base64_decode(chr(80).'Q'."=".chr(61)).chr(61)).base64_decode(base64_decode('T'.chr(81).'='.'=').chr(103).chr(61).base64_decode("P".'Q'.'='."=")).base64_decode(chr(99).base64_decode(chr(100).chr(119).chr(61)."=").chr(61).base64_decode(chr(80).chr(81)."="."=")).base64_decode(base64_decode("U"."A".'='.chr(61)).chr(81).base64_decode("P".'Q'.'='.chr(61)).base64_decode('P'.chr(81).chr(61)."=")))){$data=format_candlestickdata($obj);$c->xaxis=$data[base64_decode(chr(101).chr(65).base64_decode(chr(80).chr(81).base64_decode(chr(80).'Q'.'='."=").chr(61)).chr(61))];$c->close=$data[base64_decode(base64_decode(chr(87).base64_decode(chr(85)."Q"."=".chr(61)).base64_decode("P".chr(81).chr(61).'=').chr(61)).chr(50).base64_decode(chr(100).base64_decode('d'."w".'='.'=').chr(61).base64_decode("P"."Q".'='.chr(61))).base64_decode(chr(80).base64_decode(chr(85).chr(81)."=".chr(61)).base64_decode('P'.chr(81)."=".chr(61)).chr(61)))];$c->high=$data[base64_decode(chr(97).chr(71).chr(107).base64_decode(chr(80).chr(81).base64_decode('P'.chr(81).'='."=").base64_decode(chr(80)."Q".'='.'=')))];$c->low=$data[base64_decode(base64_decode(base64_decode(chr(87).chr(81).chr(61)."=").chr(103).chr(61).chr(61)).chr(71).chr(56).chr(61))];$c->open=$data[base64_decode(chr(98).chr(51).base64_decode(chr(81).base64_decode("U"."Q"."="."=").base64_decode("P".'Q'.'='.chr(61)).chr(61)).base64_decode(chr(80).chr(81).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)))];$c->rangestart=$obj->rangestart;$c->increasing_line_color=$obj->increasing_line_color;$c->decreasing_line_color=$obj->decreasing_line_color;$c->rangeend=$obj->rangeend;$c->rangesliderstart=$obj->rangesliderstart;$c->rangesliderend=$obj->rangesliderend;$c->rangetitle=$obj->rangetitle;$c->rangetype=$obj->rangetype;$c->yrangestart=$obj->yrangestart;$c->yrangeend=$obj->yrangeend;}else{$data=format_data($obj);$c->xaxis=$data[base64_decode(base64_decode(chr(90).base64_decode("U".chr(81).chr(61).chr(61)).chr(61).base64_decode("P".'Q'."=".chr(61))).base64_decode(base64_decode(chr(85)."Q".chr(61).chr(61)).base64_decode("U".chr(81)."=".'=').base64_decode(chr(80)."Q".chr(61)."=").base64_decode(chr(80).chr(81)."=".'=')).chr(61).chr(61))];$c->yaxis=$data[base64_decode(base64_decode(chr(90).chr(81).chr(61).chr(61)).chr(81).chr(61).base64_decode(chr(80).chr(81).base64_decode("P".'Q'.chr(61).chr(61)).chr(61)))];}if($obj->chart_type == base64_decode(base64_decode(base64_decode("W".chr(81)."=".chr(61)).base64_decode('Z'.chr(119).'='."=").base64_decode("P".chr(81).chr(61).'=').base64_decode(chr(80)."Q".chr(61).'=')).base64_decode(base64_decode(chr(85).chr(103)."=".'=').chr(119).base64_decode(chr(80).chr(81).chr(61)."=").base64_decode(chr(80)."Q"."="."=")).chr(108).base64_decode(chr(100).chr(81).base64_decode('P'.chr(81)."=".chr(61)).base64_decode("P".chr(81).chr(61)."=")).base64_decode(base64_decode(chr(86).chr(119).chr(61).'=').chr(103).base64_decode('P'.'Q'.'='.chr(61)).base64_decode('P'."Q"."="."=")).chr(83).chr(49).chr(105).base64_decode(base64_decode('V'.'w'.'='.chr(61)).base64_decode(chr(85)."Q"."="."=").chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).chr(88).base64_decode(chr(83).chr(81).chr(61).base64_decode(chr(80)."Q".chr(61)."=")).base64_decode(chr(80).chr(81).base64_decode('P'."Q"."=".chr(61)).base64_decode('P'.chr(81).chr(61)."=")))){$data=format_linebardata($obj);$c->type=base64_decode(base64_decode(base64_decode(chr(87).chr(81).'='.chr(61)).base64_decode("Z".chr(119)."=".'=').base64_decode('P'."Q".chr(61).chr(61)).base64_decode('P'.chr(81).chr(61)."=")).base64_decode(chr(82).base64_decode('d'.chr(119)."=".'=').chr(61).chr(61)).chr(108).base64_decode(chr(100).chr(81).chr(61).base64_decode(chr(80)."Q".chr(61).'=')).base64_decode(chr(87).base64_decode('Z'.chr(119).chr(61).'=').base64_decode("P".chr(81).'='.chr(61)).base64_decode('P'."Q".chr(61).'=')).chr(83).base64_decode(chr(77).chr(81).base64_decode('P'."Q".chr(61).'=').base64_decode("P".chr(81).'='."=")).chr(105).chr(89).base64_decode(base64_decode("V".'w'.'='."=").chr(65).chr(61).chr(61)).chr(73).chr(61));$c->xaxis=$data[base64_decode(base64_decode(chr(90).base64_decode('U'.'Q'.chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(81).base64_decode(chr(85).'Q'."=".'=').chr(61).chr(61)).chr(61).chr(61))];$c->yaxis=$data[base64_decode(chr(101).chr(81).chr(61).base64_decode(base64_decode(chr(85).chr(65).'='.chr(61)).base64_decode('U'.chr(81)."=".chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)))];$c->xaxis2=$data[base64_decode(base64_decode(chr(90).base64_decode('U'.chr(81).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(chr(82).base64_decode(chr(81)."Q".'='."=").chr(61).base64_decode(chr(80).'Q'.'='.chr(61))).base64_decode(chr(83).chr(81).chr(61).base64_decode('P'.'Q'.chr(61)."=")).chr(61))];$c->yaxis2=$data[base64_decode(base64_decode(base64_decode('W'.chr(103).'='.'=').chr(81).base64_decode("P"."Q".'='."=").base64_decode(chr(80).'Q'.chr(61).chr(61))).base64_decode(chr(86).chr(65).base64_decode("P".chr(81).chr(61).'=').base64_decode(chr(80).'Q'.'='.chr(61))).base64_decode(chr(83).chr(81).chr(61).chr(61)).base64_decode(chr(80).base64_decode('U'.chr(81).'='.chr(61)).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))))];}if($obj->chart_type == base64_decode(base64_decode(base64_decode(chr(86).'w'."=".chr(61)).base64_decode("U".'Q'.chr(61).'=').chr(61).base64_decode('P'.chr(81).'='.'=')).chr(87).base64_decode(base64_decode(chr(84).chr(103).chr(61).'=').base64_decode('U'.'Q'.chr(61)."=").chr(61).base64_decode('P'."Q".chr(61).chr(61))).base64_decode(chr(99).base64_decode(chr(81)."Q"."=".'=').chr(61).base64_decode("P".chr(81)."=".chr(61))).chr(98).chr(87).chr(70).chr(48).chr(90).base64_decode(base64_decode('V'.'g'.chr(61).chr(61)).chr(119).chr(61).chr(61)).chr(81).base64_decode(chr(100).chr(65).base64_decode('P'.'Q'.chr(61).'=').chr(61)).base64_decode(chr(87).base64_decode(chr(85)."Q".'='.chr(61)).base64_decode(chr(80).'Q'.'='.chr(61)).base64_decode('P'.chr(81)."=".chr(61))).base64_decode(chr(87).base64_decode(chr(81)."Q".'='.chr(61)).base64_decode('P'."Q".chr(61).'=').base64_decode(chr(80)."Q".chr(61).chr(61))).chr(74).base64_decode(chr(98).chr(65).chr(61).base64_decode("P".chr(81).chr(61).'=')).chr(89).chr(81).base64_decode(chr(80).chr(81).chr(61).base64_decode(chr(80)."Q".'='."=")).chr(61))){$c->type=base64_decode(base64_decode(chr(87).chr(81).base64_decode(chr(80)."Q".chr(61).chr(61)).base64_decode(chr(80)."Q".chr(61)."=")).base64_decode(base64_decode(chr(86)."g"."=".chr(61)).base64_decode(chr(100).'w'.'='.chr(61)).chr(61).chr(61)).base64_decode(chr(78).chr(81).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(112).chr(98).chr(87).chr(70).chr(48).chr(90).chr(87).base64_decode(chr(85).base64_decode(chr(85).'Q'.'='."=").base64_decode(chr(80).'Q'.'='.chr(61)).chr(61)).chr(116).chr(89).chr(88).base64_decode(chr(83).base64_decode(chr(90).chr(119).chr(61).chr(61)).base64_decode(chr(80)."Q"."=".'=').chr(61)).base64_decode(chr(98).chr(65).chr(61).chr(61)).base64_decode(chr(87).chr(81).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).base64_decode(base64_decode("V".chr(81).chr(61)."=").base64_decode(chr(85)."Q".chr(61).chr(61)).chr(61).base64_decode("P".chr(81)."="."=")).base64_decode(base64_decode(chr(85).chr(65).chr(61).chr(61)).chr(81).chr(61).chr(61)).base64_decode(base64_decode(chr(85)."A".'='."=").base64_decode("U".'Q'.chr(61).chr(61)).base64_decode(chr(80).chr(81).'='.chr(61)).chr(61)));}if($obj->chart_type == base64_decode(base64_decode(chr(89).chr(81).base64_decode("P".chr(81).'='."=").chr(61)).base64_decode(base64_decode("U".chr(103).chr(61)."=").base64_decode(chr(100)."w".chr(61)."=").chr(61).base64_decode(chr(80).chr(81)."=".chr(61))).chr(86).chr(104).chr(100).base64_decode(base64_decode(chr(85).chr(103).chr(61).chr(61)).base64_decode(chr(100).chr(119)."=".'=').base64_decode(chr(80).chr(81)."=".'=').base64_decode(chr(80).chr(81)."="."=")).chr(49).base64_decode(base64_decode("Y".'Q'.'='.'=').base64_decode(chr(81).chr(81)."=".'=').base64_decode('P'.'Q'.'='.'=').chr(61)).base64_decode(chr(89).base64_decode('d'."w".chr(61)."=").chr(61).base64_decode("P".'Q'."="."=")).base64_decode(base64_decode('U'."Q".'='.chr(61)).chr(81).chr(61).base64_decode("P".'Q'.chr(61).'=')).base64_decode(base64_decode(chr(85).chr(65).'='."=").chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61)))){$c->type=base64_decode(chr(97).base64_decode(base64_decode("U"."g".'='."=").base64_decode(chr(100).'w'.chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).'=').chr(61)).chr(86).base64_decode(base64_decode(chr(89).chr(81).chr(61).'=').chr(65).base64_decode('P'.chr(81)."="."=").chr(61)).base64_decode(base64_decode('W'."g".chr(61)."=").base64_decode(chr(81).chr(81).'='.'=').chr(61).base64_decode('P'."Q".'='.chr(61))).chr(71).base64_decode(chr(77).base64_decode(chr(85).chr(81).chr(61).'=').base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(104).chr(99).base64_decode(base64_decode("U"."Q".'='.chr(61)).base64_decode(chr(85)."Q"."=".'=').chr(61).chr(61)).chr(61).base64_decode(base64_decode("U"."A".chr(61).chr(61)).base64_decode('U'.chr(81).chr(61).'=').base64_decode("P"."Q".chr(61).chr(61)).chr(61)));$c->hmapcolorseries=$obj->heatmap_color;}if($obj->chart_type == base64_decode(base64_decode(chr(89).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(61).chr(61)).chr(71).base64_decode(chr(98).chr(65).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).'=')).base64_decode(base64_decode(chr(90).chr(65).'='.chr(61)).chr(81).chr(61).chr(61)).chr(90).base64_decode(chr(85).chr(81).base64_decode("P".chr(81).chr(61).'=').chr(61)).chr(61).base64_decode(chr(80).chr(81).base64_decode('P'.'Q'.chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).'=')))){$c->type=base64_decode(chr(98).base64_decode(base64_decode(chr(85).chr(103).'='."=").chr(119).base64_decode('P'.chr(81)."=".chr(61)).base64_decode("P".'Q'.'='.chr(61))).base64_decode(chr(98).chr(65).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(90).chr(65).chr(61).chr(61)).base64_decode("U".chr(81).'='.chr(61)).base64_decode("P".'Q'.chr(61).'=').chr(61)).chr(90).chr(81).chr(61).chr(61));$c->shape=$obj->shape;$c->show_point_label=$obj->show_point_label;}elseif($obj->chart_type == base64_decode(base64_decode(base64_decode('V'.'w'."=".chr(61)).chr(81).base64_decode('P'.chr(81)."=".'=').base64_decode("P".chr(81).chr(61).chr(61))).chr(50).chr(70).base64_decode(chr(100).chr(81).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(87).base64_decode(chr(90)."w".'='.'=').base64_decode('P'."Q".'='.'=').base64_decode('P'.chr(81)."="."=")).base64_decode(base64_decode(chr(85).chr(103).'='.'=').chr(119).base64_decode(chr(80)."Q"."=".'=').chr(61)).base64_decode(base64_decode(chr(90).chr(81).'='.chr(61)).chr(65).chr(61).chr(61)).base64_decode(base64_decode(chr(89).chr(103).chr(61).chr(61)).chr(65).chr(61).base64_decode(chr(80).'Q'.chr(61).chr(61))).chr(99).chr(51).base64_decode(chr(85).chr(103).chr(61).chr(61)).base64_decode(chr(99).chr(65).base64_decode(chr(80).'Q'.'='."=").chr(61)).base64_decode(chr(87).chr(81).base64_decode("P".chr(81).chr(61).'=').base64_decode(chr(80)."Q".'='.'=')).chr(50).chr(115).base64_decode(base64_decode("U"."A".chr(61)."=").chr(81).chr(61).base64_decode(chr(80)."Q"."="."=")))){$c->type=base64_decode(chr(89).chr(50).base64_decode(base64_decode("U".chr(103).'='.chr(61)).chr(103).base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)).chr(117).chr(90).chr(71).chr(120).chr(108).chr(99).chr(51).base64_decode(base64_decode(chr(86).chr(81).chr(61)."=").chr(103).chr(61).chr(61)).base64_decode(chr(99).base64_decode("Q"."Q".chr(61).chr(61)).base64_decode('P'.'Q'.chr(61)."=").chr(61)).base64_decode(chr(87).chr(81).base64_decode('P'.chr(81)."=".chr(61)).chr(61)).base64_decode(base64_decode('T'.chr(81).chr(61).'=').base64_decode("Z"."w".'='."=").base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode('P'.'Q'."="."=")).base64_decode(base64_decode(chr(89).chr(119).chr(61)."=").base64_decode('d'.'w'.chr(61)."=").base64_decode('P'.chr(81)."=".chr(61)).chr(61)).chr(61));$c->barmode=base64_decode(chr(99).chr(51).chr(82).base64_decode(chr(97).base64_decode(chr(81)."Q".chr(61)."=").base64_decode('P'.'Q'.chr(61).chr(61)).chr(61)).chr(89).base64_decode(base64_decode('T'.chr(81).chr(61)."=").chr(103).chr(61).chr(61)).chr(115).base64_decode(base64_decode(chr(85).chr(65).'='.chr(61)).chr(81).chr(61).chr(61)));}elseif($obj->chart_type == base64_decode(base64_decode(base64_decode(chr(86)."w"."="."=").chr(81).chr(61).base64_decode(chr(80)."Q".chr(61).chr(61))).chr(109).chr(70).chr(121).chr(76).chr(88).base64_decode(base64_decode("V".chr(65)."=".'=').chr(103).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(48).base64_decode(base64_decode('V'."w"."=".chr(61)).chr(81).chr(61).chr(61)).chr(87).base64_decode(chr(84).base64_decode("Z".chr(119)."="."=").base64_decode(chr(80).'Q'."=".chr(61)).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(99).base64_decode(chr(90)."w".chr(61).'=').chr(61).base64_decode("P"."Q".chr(61).chr(61))).chr(90).base64_decode(chr(86).base64_decode(chr(100).chr(119).'='."=").base64_decode("P".'Q'."=".chr(61)).chr(61)).chr(81).chr(61)) || $obj->chart_type == base64_decode(chr(89).chr(109).base64_decode(chr(82).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(61).chr(61)).chr(121).chr(76).base64_decode(chr(86).chr(119).chr(61).base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(base64_decode(chr(87).chr(103).'='.'=').base64_decode(chr(81).'Q'.chr(61)."=").base64_decode(chr(80).chr(81).chr(61)."=").base64_decode(chr(80).chr(81)."="."=")).chr(121).base64_decode(base64_decode(chr(87).'Q'.chr(61).chr(61)).chr(103).chr(61).chr(61)).base64_decode(base64_decode('T'."Q".chr(61).chr(61)).chr(119).chr(61).base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(base64_decode('V'.'g'.'='.'=').chr(103).chr(61).chr(61)).base64_decode(base64_decode('Z'.chr(65)."=".'=').base64_decode(chr(100).'w'."=".'=').chr(61).chr(61)).base64_decode(chr(87).chr(103).base64_decode("P".chr(81).chr(61)."=").base64_decode('P'.chr(81)."="."=")).base64_decode(base64_decode('V'."g".chr(61).chr(61)).base64_decode('d'.'w'.'='.chr(61)).chr(61).base64_decode(chr(80)."Q"."="."=")).chr(81).chr(61))){$c->type=base64_decode(chr(89).base64_decode(base64_decode(chr(89).'g'.chr(61).chr(61)).base64_decode(chr(85).'Q'."=".'=').base64_decode(chr(80).chr(81).'='.chr(61)).chr(61)).chr(70).chr(121));$c->barmode=base64_decode(base64_decode(chr(89).base64_decode(chr(100)."w".chr(61).chr(61)).base64_decode("P".chr(81).chr(61)."=").chr(61)).chr(109).base64_decode(chr(86).base64_decode("Z".'w'.'='.chr(61)).chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).chr(115).chr(89).base64_decode(base64_decode(chr(86)."w".'='."=").chr(65).chr(61).chr(61)).chr(82).chr(112).chr(100).chr(109).chr(85).base64_decode(base64_decode(chr(85).chr(65).chr(61)."=").chr(81).base64_decode(chr(80).chr(81)."=".chr(61)).chr(61)));$c->show_xticks=$obj->show_xticks;$c->show_yticks=$obj->show_yticks;$c->shape=$obj->shape;$c->show_point_label=$obj->show_point_label;$c->targetx_start=$obj->targetx_start;$c->targetx_end=$obj->targetx_end;$c->targety_start=$obj->targety_start;$c->targety_end=$obj->targety_end;$c->targetline_color=$obj->targetline_color;$c->targetline_width=$obj->targetline_width;$c->targetline_style=$obj->targetline_style;if($obj->chart_type == base64_decode(chr(89).chr(109).chr(70).chr(121).base64_decode(chr(84).base64_decode("Q".chr(81).'='.chr(61)).base64_decode(chr(80).'Q'.chr(61).'=').chr(61)).chr(87).base64_decode(base64_decode(chr(87)."g".chr(61).chr(61)).chr(65).base64_decode('P'.chr(81)."="."=").base64_decode("P".chr(81).'='.'=')).chr(121).base64_decode(base64_decode('W'.chr(81).chr(61).chr(61)).chr(103).base64_decode(chr(80).chr(81).chr(61).'=').base64_decode(chr(80).chr(81).'='.chr(61))).chr(51).base64_decode(chr(86).chr(103).base64_decode("P".chr(81).chr(61).'=').chr(61)).chr(119).base64_decode(chr(87).base64_decode("Z".chr(119).chr(61).chr(61)).chr(61).chr(61)).chr(87).base64_decode(chr(85).base64_decode("U".chr(81).chr(61).chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).base64_decode(chr(80).chr(81).base64_decode("P"."Q"."="."=").base64_decode('P'.chr(81)."=".'='))))$c->barmode=base64_decode(base64_decode(base64_decode(chr(86).'w'.chr(61)."=").chr(103).base64_decode(chr(80).'Q'.chr(61).'=').base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(base64_decode(chr(84).chr(81).chr(61).chr(61)).base64_decode(chr(100).'w'.chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).chr(74).chr(118).base64_decode(chr(90).chr(65).chr(61).base64_decode(chr(80).'Q'."=".chr(61))).base64_decode(base64_decode(chr(86)."w".'='.chr(61)).base64_decode('Q'.chr(81).chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(base64_decode(chr(85).chr(81).chr(61).chr(61)).chr(81).chr(61).base64_decode("P".'Q'.'='.'=')).base64_decode(base64_decode('U'.'A'.'='."=").chr(81).chr(61).chr(61)));if($obj->direction == base64_decode(base64_decode(base64_decode(chr(87)."Q".chr(61).chr(61)).base64_decode("U".chr(81).chr(61).chr(61)).chr(61).base64_decode("P".'Q'.chr(61).chr(61))).chr(71).base64_decode(chr(79).base64_decode('U'.'Q'.chr(61).chr(61)).base64_decode("P"."Q".chr(61).'=').base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(chr(101).chr(81).base64_decode("P".chr(81)."=".'=').base64_decode('P'."Q".'='.chr(61))).base64_decode(base64_decode(chr(87)."Q".chr(61)."=").chr(81).base64_decode('P'."Q"."="."=").base64_decode("P".chr(81).'='.chr(61))).chr(88).base64_decode(base64_decode('Y'.chr(119).'='.chr(61)).chr(65).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode(chr(80)."Q".'='."=")).base64_decode(chr(100).chr(103).chr(61).base64_decode(chr(80)."Q".chr(61).'=')).base64_decode(base64_decode(chr(87).chr(81).chr(61).'=').base64_decode("Z".chr(119)."=".'=').base64_decode(chr(80).chr(81).'='.chr(61)).chr(61)).chr(110).chr(82).base64_decode(base64_decode(chr(89)."Q"."=".chr(61)).base64_decode(chr(81).chr(81).chr(61).chr(61)).chr(61).base64_decode(chr(80).'Q'."=".'=')).base64_decode(base64_decode("W".chr(81).chr(61)."=").chr(103).chr(61).chr(61)).chr(65).chr(61).chr(61))){$c->orientation=base64_decode(base64_decode(chr(89).base64_decode('U'.'Q'.'='.chr(61)).chr(61).chr(61)).base64_decode(chr(81).chr(81).chr(61).base64_decode(chr(80)."Q".'='.chr(61))).base64_decode(chr(80).base64_decode(chr(85)."Q".chr(61).chr(61)).base64_decode('P'."Q".chr(61).chr(61)).base64_decode(chr(80).'Q'.'='."=")).chr(61));$tmp=$c->xaxis;$c->xaxis=$c->yaxis;$c->yaxis=$tmp;}else{}}elseif($obj->chart_type == base64_decode(chr(89).chr(88).chr(74).chr(108).base64_decode(base64_decode('V'.'w'."=".chr(61)).base64_decode(chr(85).'Q'.chr(61).chr(61)).base64_decode("P"."Q"."="."=").base64_decode(chr(80)."Q".chr(61)."=")).base64_decode(chr(85).base64_decode(chr(85)."Q".chr(61).'=').chr(61).chr(61)).chr(61).chr(61)) || $obj->chart_type == base64_decode(chr(89).base64_decode(chr(87).base64_decode('Q'.'Q'.chr(61).chr(61)).base64_decode(chr(80)."Q"."="."=").chr(61)).base64_decode(chr(83).base64_decode("Z".chr(119).chr(61).chr(61)).base64_decode(chr(80)."Q".chr(61).'=').chr(61)).chr(108).chr(89).chr(83).base64_decode(base64_decode(chr(84).chr(81).chr(61)."=").chr(81).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(101).base64_decode(chr(90)."w".chr(61).chr(61)).chr(61).chr(61)).chr(100).base64_decode(chr(82).base64_decode(chr(100).'w'.'='."=").base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80)."Q"."=".'=')).chr(70).base64_decode(base64_decode("Y".'Q'."=".'=').chr(103).chr(61).base64_decode('P'."Q".chr(61).chr(61))).base64_decode(chr(89).chr(81).base64_decode(chr(80).chr(81).'='.chr(61)).chr(61)).base64_decode(base64_decode(chr(84).chr(81)."=".chr(61)).base64_decode(chr(90)."w".chr(61)."=").chr(61).base64_decode("P".'Q'.chr(61).'=')).chr(86).base64_decode(chr(97).chr(119).base64_decode('P'."Q"."="."=").base64_decode('P'.chr(81).'='."=")))){if($obj->chart_type == base64_decode(base64_decode(chr(87).base64_decode(chr(85)."Q".chr(61)."=").base64_decode(chr(80).chr(81).chr(61).'=').base64_decode(chr(80).chr(81).'='.'=')).base64_decode(base64_decode(chr(86).chr(119).'='.chr(61)).base64_decode(chr(81)."Q"."=".chr(61)).base64_decode(chr(80).chr(81)."=".'=').chr(61)).chr(74).base64_decode(base64_decode(chr(89).'g'.chr(61).chr(61)).chr(65).base64_decode("P"."Q".'='.chr(61)).chr(61)).base64_decode(base64_decode(chr(86).chr(119).chr(61).chr(61)).chr(81).chr(61).chr(61)).chr(83).chr(49).chr(122).base64_decode(chr(90).base64_decode('Q'.'Q'.chr(61).chr(61)).base64_decode('P'.chr(81).'='.'=').base64_decode('P'."Q"."=".'=')).chr(71).chr(70).chr(106).base64_decode(chr(89).base64_decode(chr(85).chr(81).'='.chr(61)).chr(61).chr(61)).base64_decode(base64_decode(chr(84)."Q".chr(61).chr(61)).base64_decode(chr(90).'w'.'='.'=').base64_decode("P"."Q".chr(61).'=').chr(61)).base64_decode(base64_decode('V'.'g'.chr(61).'=').base64_decode(chr(90)."w".chr(61).chr(61)).base64_decode(chr(80).'Q'.chr(61)."=").base64_decode(chr(80).'Q'.chr(61)."=")).base64_decode(base64_decode(chr(89).chr(81).chr(61).chr(61)).base64_decode(chr(100).chr(119)."="."=").base64_decode(chr(80).chr(81).chr(61).'=').base64_decode(chr(80).chr(81)."="."="))))$c->subtype=base64_decode(base64_decode(chr(89).base64_decode(chr(100)."w".'='.chr(61)).chr(61).chr(61)).base64_decode(chr(77).chr(119).chr(61).base64_decode('P'.'Q'.'='.'=')).base64_decode(chr(85).chr(103).chr(61).base64_decode("P".chr(81).chr(61).'=')).base64_decode(base64_decode("Y".'Q'.'='.'=').base64_decode("Q".chr(81)."=".chr(61)).chr(61).chr(61)).chr(89).chr(50).chr(116).chr(108).chr(90).chr(65).chr(61).chr(61));$c->type=base64_decode(base64_decode(chr(87).base64_decode('U'."Q"."=".chr(61)).chr(61).base64_decode(chr(80).'Q'.chr(61)."=")).chr(88).base64_decode(chr(83).chr(103).chr(61).chr(61)).base64_decode(base64_decode('Y'.'g'."=".chr(61)).base64_decode(chr(81)."Q"."=".'=').chr(61).chr(61)).chr(89).chr(81).base64_decode(chr(80).chr(81).base64_decode(chr(80).'Q'.chr(61)."=").chr(61)).base64_decode(base64_decode(chr(85).'A'.'='.'=').chr(81).base64_decode('P'.'Q'.chr(61).'=').chr(61)));$c->show_xticks=$obj->show_xticks;$c->show_yticks=$obj->show_yticks;$c->shape=$obj->shape;$c->show_point_label=$obj->show_point_label;}elseif($obj->chart_type == base64_decode(chr(97).base64_decode(base64_decode(chr(85).chr(103).chr(61).chr(61)).chr(119).base64_decode("P"."Q".'='.chr(61)).chr(61)).chr(108).chr(122).base64_decode(base64_decode(chr(87).chr(103).'='.chr(61)).chr(65).base64_decode('P'."Q".'='.chr(61)).base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(chr(82).chr(119).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode('P'.'Q'.'='.chr(61))).chr(57).chr(110).chr(99).base64_decode(base64_decode(chr(89).'g'."=".'=').base64_decode('U'."Q".'='.chr(61)).chr(61).base64_decode('P'.'Q'.'='.chr(61))).base64_decode(base64_decode(chr(85).'g'.chr(61)."=").base64_decode("Z".'w'.chr(61)."=").chr(61).base64_decode(chr(80).chr(81)."="."=")).chr(116))){$c->type=base64_decode(base64_decode(base64_decode(chr(87).chr(81).chr(61).chr(61)).chr(81).base64_decode("P".'Q'.chr(61).chr(61)).chr(61)).base64_decode(chr(82).chr(119).chr(61).chr(61)).chr(108).base64_decode(chr(101).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(base64_decode('W'.chr(103)."=".chr(61)).base64_decode(chr(81).chr(81).'='."=").chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).base64_decode(chr(82).base64_decode('d'."w".chr(61).chr(61)).base64_decode(chr(80).chr(81)."=".'=').chr(61)).base64_decode(chr(79).chr(81).chr(61).chr(61)).chr(110).chr(99).base64_decode(base64_decode(chr(89).'g'.chr(61).chr(61)).base64_decode('U'."Q".chr(61).'=').base64_decode('P'.chr(81).chr(61)."=").base64_decode("P".'Q'."=".chr(61))).base64_decode(chr(82).base64_decode("Z".chr(119)."="."=").chr(61).base64_decode(chr(80)."Q"."=".chr(61))).chr(116));$c->shape=$obj->shape;}elseif($obj->chart_type == base64_decode(chr(90).chr(71).chr(57).chr(117).base64_decode(base64_decode('W'."g".chr(61)."=").base64_decode("Q".chr(81).'='.chr(61)).base64_decode("P"."Q"."=".chr(61)).chr(61)).base64_decode(base64_decode(chr(86).'w'."="."=").chr(65).chr(61).base64_decode("P"."Q"."=".'=')).base64_decode(chr(85).chr(81).base64_decode("P".'Q'.chr(61).chr(61)).chr(61)).base64_decode(chr(80).base64_decode(chr(85)."Q".chr(61).chr(61)).chr(61).chr(61)))){$c->type=base64_decode(base64_decode(base64_decode(chr(87).'Q'."=".chr(61)).base64_decode('d'.chr(119).chr(61).'=').chr(61).chr(61)).base64_decode(base64_decode("U"."g".'='.chr(61)).base64_decode(chr(100)."w"."=".chr(61)).base64_decode("P".chr(81).'='.chr(61)).base64_decode(chr(80).'Q'."=".chr(61))).base64_decode(base64_decode("Y"."g"."="."=").base64_decode(chr(81).chr(81)."="."=").chr(61).chr(61)).base64_decode(base64_decode(chr(89).chr(103).chr(61).chr(61)).chr(65).chr(61).chr(61)));$c->hole=.4;$c->name=base64_decode(chr(90).chr(71).chr(57).chr(117).chr(100).base64_decode(chr(87).base64_decode("Q".'Q'.'='."=").base64_decode(chr(80)."Q".'='.'=').chr(61)).chr(81).chr(61));}elseif($obj->chart_type == base64_decode(chr(89).chr(110).base64_decode(base64_decode(chr(86).chr(103).chr(61)."=").base64_decode('Z'."w".'='.'=').chr(61).chr(61)).base64_decode(base64_decode('Y'.chr(81).'='.'=').chr(81).base64_decode('P'."Q".chr(61).'=').chr(61)).chr(89).base64_decode(chr(98).chr(81).base64_decode(chr(80)."Q"."="."=").base64_decode("P"."Q".'='.chr(61))).chr(120).chr(108))){$c->type=base64_decode(base64_decode(base64_decode("V".'w'.'='."=").base64_decode(chr(85)."Q"."=".chr(61)).base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).chr(110).base64_decode(base64_decode(chr(86).chr(103).chr(61).chr(61)).base64_decode('Z'.'w'.'='.'=').chr(61).base64_decode('P'.chr(81).'='.chr(61))).base64_decode(chr(97).base64_decode(chr(85)."Q".chr(61).'=').chr(61).chr(61)).chr(89).base64_decode(chr(98).chr(81).base64_decode("P".chr(81).chr(61)."=").base64_decode('P'.chr(81)."="."=")).base64_decode(base64_decode('Z'.chr(81).'='.chr(61)).base64_decode(chr(81).'Q'."=".chr(61)).base64_decode(chr(80).chr(81).chr(61)."=").base64_decode("P".'Q'."="."=")).chr(108));$c->bubblesize=$data[base64_decode(base64_decode(chr(87).base64_decode('U'."Q".'='.chr(61)).base64_decode(chr(80).'Q'.'='.'=').base64_decode('P'."Q".chr(61).'=')).base64_decode(base64_decode(chr(87).chr(103).chr(61).chr(61)).base64_decode('d'.chr(119)."=".chr(61)).chr(61).chr(61)).chr(61).chr(61))];$c->bubbletext=$data[base64_decode(base64_decode(base64_decode('W'."g".chr(61).chr(61)).base64_decode('Q'."Q"."=".chr(61)).base64_decode('P'."Q"."=".chr(61)).base64_decode('P'.chr(81)."=".chr(61))).base64_decode(base64_decode(chr(85).chr(81)."=".chr(61)).chr(81).base64_decode(chr(80).chr(81).'='.chr(61)).base64_decode(chr(80).chr(81)."="."=")).chr(61).chr(61))];$c->shape=$obj->shape;}elseif($obj->chart_type == base64_decode(chr(99).chr(71).base64_decode(base64_decode(chr(89).chr(103).chr(61).chr(61)).base64_decode(chr(81).chr(81).chr(61).'=').base64_decode(chr(80).chr(81).chr(61)."=").chr(61)).chr(108))){$c->type=base64_decode(chr(99).base64_decode(chr(82).base64_decode("d".'w'.chr(61).chr(61)).chr(61).chr(61)).chr(108).chr(108));}elseif($obj->chart_type == base64_decode(base64_decode(base64_decode("V"."w".chr(61).chr(61)).base64_decode(chr(90)."w".chr(61).'=').base64_decode("P"."Q".chr(61).'=').chr(61)).base64_decode(base64_decode("V".'w'.'='.chr(61)).chr(65).chr(61).chr(61)).base64_decode(base64_decode(chr(85)."w"."=".chr(61)).base64_decode("Z".chr(119)."=".chr(61)).base64_decode(chr(80).chr(81)."="."=").base64_decode("P".'Q'.chr(61)."=")).chr(121).base64_decode(base64_decode(chr(87).chr(81)."=".chr(61)).base64_decode("Z".chr(119)."=".chr(61)).chr(61).chr(61)).chr(51).base64_decode(chr(83).chr(81).base64_decode(chr(80).'Q'.chr(61).'=').base64_decode(chr(80).'Q'."=".'=')).base64_decode(base64_decode('Z'.chr(65)."=".chr(61)).chr(65).base64_decode(chr(80)."Q".'='.chr(61)).chr(61)).base64_decode(chr(87).base64_decode('U'.chr(81).chr(61)."=").base64_decode(chr(80).'Q'.chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(98).chr(81).chr(61).base64_decode('P'.chr(81)."=".chr(61))).chr(70).base64_decode(chr(101).base64_decode(chr(85).chr(81).chr(61).chr(61)).chr(61).chr(61)))){$c->type=base64_decode(chr(90).chr(88).base64_decode(chr(83).chr(103).chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).base64_decode(base64_decode(chr(90)."Q".chr(61)."=").chr(81).base64_decode("P"."Q".chr(61).'=').base64_decode('P'.chr(81).'='."=")).base64_decode(base64_decode(chr(87).'Q'.chr(61).'=').chr(103).base64_decode(chr(80)."Q".chr(61)."=").chr(61)).chr(51).chr(73).base64_decode(base64_decode(chr(90).'A'.'='.chr(61)).base64_decode(chr(81).chr(81).chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).chr(89).chr(109).chr(70).base64_decode(chr(101).chr(81).chr(61).chr(61)));$c->barmode=base64_decode(base64_decode(chr(87).chr(103).base64_decode(chr(80).chr(81).'='.chr(61)).chr(61)).base64_decode(chr(77).base64_decode('d'.chr(119).'='.chr(61)).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(74).base64_decode(chr(100).base64_decode(chr(90).'w'.chr(61).'=').chr(61).chr(61)).base64_decode(base64_decode("W".chr(103)."=".chr(61)).chr(65).base64_decode("P"."Q".'='.chr(61)).chr(61)).chr(88).base64_decode(base64_decode(chr(85).chr(81).'='.chr(61)).chr(81).base64_decode(chr(80)."Q".chr(61).'=').chr(61)).chr(61));$c->errarr=$data[base64_decode(chr(90).base64_decode(base64_decode(chr(86).'w'."=".chr(61)).chr(65).base64_decode('P'.'Q'.chr(61).chr(61)).base64_decode("P".'Q'.chr(61).'=')).base64_decode(base64_decode(chr(85)."w"."=".chr(61)).chr(103).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(90).'Q'."=".chr(61)).chr(81).chr(61).chr(61)))];$c->show_xticks=$obj->show_xticks;$c->show_yticks=$obj->show_yticks;$c->shape=$obj->shape;$c->show_point_label=$obj->show_point_label;if($obj->direction == base64_decode(chr(97).base64_decode(base64_decode(chr(85).chr(103).'='.chr(61)).base64_decode(chr(100)."w"."=".chr(61)).base64_decode("P".'Q'.chr(61).'=').base64_decode(chr(80).'Q'.chr(61).chr(61))).chr(57).chr(121).chr(97).base64_decode(chr(87).base64_decode(chr(81).chr(81).'='.chr(61)).chr(61).chr(61)).chr(112).base64_decode(chr(100).chr(103).chr(61).chr(61)).base64_decode(base64_decode("W".chr(81).chr(61).chr(61)).base64_decode("Z".'w'."=".chr(61)).base64_decode(chr(80)."Q".'='.chr(61)).chr(61)).base64_decode(chr(98).base64_decode("Z".'w'.chr(61).'=').chr(61).base64_decode(chr(80).chr(81)."=".'=')).base64_decode(base64_decode(chr(86).chr(81)."=".chr(61)).base64_decode(chr(90)."w".'='.chr(61)).base64_decode("P".'Q'.chr(61).chr(61)).chr(61)).chr(104).base64_decode(base64_decode("W".chr(81).chr(61).chr(61)).chr(103).chr(61).chr(61)).chr(65).chr(61).base64_decode(chr(80).base64_decode(chr(85).chr(81).'='."=").chr(61).chr(61)))){$c->orientation=base64_decode(chr(97).base64_decode(chr(81).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).base64_decode(chr(80).base64_decode("U".'Q'.chr(61).chr(61)).chr(61).base64_decode("P".chr(81).chr(61)."=")));$tmp=$c->xaxis;$c->xaxis=$c->yaxis;$c->yaxis=$tmp;}}elseif($obj->chart_type == base64_decode(chr(89).chr(109).base64_decode(chr(82).chr(103).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(101).base64_decode(chr(85).chr(81)."=".chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))))){$c->type=base64_decode(base64_decode(chr(87).chr(81).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).chr(109).base64_decode(chr(82).base64_decode("Z".'w'.chr(61).'=').base64_decode("P".chr(81).chr(61).chr(61)).chr(61)).chr(121));$c->barmode=base64_decode(base64_decode(chr(87).base64_decode('Z'.chr(119)."=".'=').chr(61).chr(61)).chr(51).base64_decode(chr(83).base64_decode(chr(90).chr(119).'='.chr(61)).chr(61).chr(61)).chr(118).chr(100).base64_decode(base64_decode("V".chr(119)."=".chr(61)).base64_decode(chr(81)."Q".chr(61).'=').chr(61).chr(61)).base64_decode(base64_decode('U'.chr(81).chr(61).chr(61)).base64_decode('U'."Q".chr(61).chr(61)).chr(61).base64_decode(chr(80).chr(81).'='.'=')).chr(61));$c->show_xticks=$obj->show_xticks;$c->show_yticks=$obj->show_yticks;$c->shape=$obj->shape;$c->show_point_label=$obj->show_point_label;$c->targetx_start=$obj->targetx_start;$c->targetx_end=$obj->targetx_end;$c->targety_start=$obj->targety_start;$c->targety_end=$obj->targety_end;$c->targetline_color=$obj->targetline_color;$c->targetline_width=$obj->targetline_width;$c->targetline_style=$obj->targetline_style;if($obj->direction == base64_decode(chr(97).base64_decode(chr(82).base64_decode(chr(100).chr(119).chr(61).'=').chr(61).chr(61)).chr(57).base64_decode(base64_decode('Z'.chr(81).'='.chr(61)).base64_decode('U'.chr(81)."=".chr(61)).base64_decode('P'.'Q'."="."=").base64_decode(chr(80).chr(81)."=".chr(61))).base64_decode(chr(89).chr(81).chr(61).chr(61)).chr(88).chr(112).chr(118).chr(98).chr(110).chr(82).chr(104).base64_decode(chr(89).base64_decode("Z"."w".chr(61).chr(61)).chr(61).chr(61)).chr(65).chr(61).chr(61))){$c->orientation=base64_decode(base64_decode(chr(89).base64_decode(chr(85).chr(81).chr(61).'=').base64_decode(chr(80).chr(81).chr(61).'=').base64_decode('P'.'Q'."=".chr(61))).base64_decode(chr(81).base64_decode(chr(85).chr(81)."=".chr(61)).chr(61).chr(61)).base64_decode(base64_decode(chr(85).'A'."=".'=').chr(81).base64_decode('P'.chr(81).'='.chr(61)).base64_decode('P'.'Q'.chr(61).'=')).chr(61));$tmp=$c->xaxis;$c->xaxis=$c->yaxis;$c->yaxis=$tmp;}}elseif($obj->chart_type == base64_decode(base64_decode(base64_decode(chr(87).chr(81).'='.chr(61)).base64_decode("Z".chr(119).'='."=").base64_decode("P".chr(81)."=".chr(61)).base64_decode('P'.chr(81).chr(61)."=")).base64_decode(chr(86).base64_decode(chr(100).chr(119).'='.chr(61)).base64_decode('P'.chr(81).'='.chr(61)).chr(61)).chr(70).base64_decode(base64_decode(chr(90)."A".'='."=").chr(119).base64_decode("P".chr(81).chr(61).'=').base64_decode("P".chr(81).chr(61).'=')))){$c->type=base64_decode(chr(98).chr(87).chr(70).chr(119));$c->csv=base64_decode(chr(76).base64_decode(base64_decode(chr(89)."Q".chr(61).chr(61)).chr(81).base64_decode('P'.chr(81).chr(61)."=").base64_decode('P'."Q".chr(61).chr(61))).base64_decode(base64_decode("T"."g".chr(61).'=').base64_decode(chr(81).chr(81).'='.chr(61)).chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).base64_decode(base64_decode('Z'."A".chr(61)."=").base64_decode('Z'.chr(119).chr(61).'=').base64_decode(chr(80)."Q".chr(61).'=').chr(61)).base64_decode(chr(84).base64_decode(chr(81).'Q'.chr(61)."=").chr(61).chr(61)).base64_decode(base64_decode(chr(89).'Q'."=".chr(61)).chr(81).chr(61).base64_decode(chr(80)."Q"."=".chr(61))).chr(52).chr(118).chr(100).base64_decode(chr(77).chr(103).base64_decode(chr(80).chr(81)."="."=").base64_decode(chr(80)."Q".'='.'=')).chr(57).chr(121).chr(98).base64_decode(chr(82).chr(119).chr(61).base64_decode(chr(80).chr(81)."=".'=')).chr(82).base64_decode(base64_decode(chr(87).'g'.'='.'=').base64_decode('Z'."w"."="."=").base64_decode('P'.chr(81)."=".chr(61)).base64_decode('P'.chr(81)."=".chr(61))).base64_decode(chr(87).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(61).chr(61)).base64_decode(base64_decode("T".chr(81).chr(61).chr(61)).chr(103).base64_decode('P'.'Q'.chr(61)."=").base64_decode('P'.'Q'.chr(61).chr(61))).base64_decode(base64_decode('V'.chr(81).chr(61)."=").base64_decode(chr(90)."w".chr(61).'=').base64_decode(chr(80).chr(81)."=".'=').chr(61)).base64_decode(chr(100).chr(119).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).chr(76).chr(109).base64_decode(chr(84).base64_decode(chr(90).'w'.'='."=").base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61)."=")).chr(122).base64_decode(base64_decode("W".'g'.'='.chr(61)).base64_decode(chr(81).'Q'.chr(61).'=').chr(61).base64_decode('P'."Q"."="."=")).chr(103).base64_decode(base64_decode('U'.chr(65).chr(61).'=').base64_decode('U'.chr(81).chr(61)."=").base64_decode("P"."Q".'='.'=').chr(61)).chr(61));$c->csvdata=base64_decode(chr(82).chr(48).base64_decode(chr(85).chr(103).base64_decode(chr(80).chr(81)."=".'=').chr(61)).chr(81).chr(73).chr(67).chr(104).base64_decode(base64_decode(chr(85).'Q'."="."=").chr(119).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).base64_decode(chr(85).base64_decode('d'.chr(119).chr(61).chr(61)).chr(61).chr(61)).chr(85).base64_decode(chr(101).base64_decode('Q'.chr(81).'='."=").base64_decode('P'.'Q'.chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(86)."A".'='.chr(61)).base64_decode(chr(85).chr(81).'='.chr(61)).base64_decode('P'.chr(81).chr(61).'=').chr(61)).chr(83).chr(85).base64_decode(base64_decode(chr(84).chr(119).'='.'=').base64_decode('U'.chr(81)."="."=").base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).chr(79).base64_decode(base64_decode('V'."g".chr(61).chr(61)).base64_decode("U".chr(81).'='.'=').chr(61).chr(61)).base64_decode(chr(101).chr(81).chr(61).base64_decode("P"."Q".chr(61).'=')).chr(107).chr(61));$c->title=base64_decode(chr(77).base64_decode(chr(97).base64_decode(chr(90).'w'.'='.chr(61)).chr(61).chr(61)).chr(65).chr(120).chr(78).base64_decode(base64_decode("U".'Q'.'='.chr(61)).chr(119).chr(61).chr(61)).chr(66).base64_decode(chr(83).base64_decode(chr(81).'Q'."=".chr(61)).base64_decode(chr(80).chr(81).chr(61)."=").chr(61)).base64_decode(base64_decode(chr(87).chr(81).chr(61).'=').chr(103).base64_decode(chr(80).chr(81).'='."=").base64_decode(chr(80).chr(81).'='.chr(61))).chr(71).chr(57).base64_decode(base64_decode('Y'.chr(81).'='."=").chr(81).chr(61).base64_decode(chr(80)."Q"."=".'=')).chr(89).base64_decode(chr(86).chr(119).chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).chr(119).base64_decode(chr(90).base64_decode(chr(100).'w'."=".chr(61)).base64_decode(chr(80).chr(81).chr(61)."=").chr(61)).base64_decode(chr(85).base64_decode('Z'.'w'.'='.chr(61)).chr(61).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(base64_decode('T'."Q".chr(61).'=').chr(65).base64_decode("P".chr(81).'='.'=').chr(61)).base64_decode(base64_decode(chr(86)."Q".chr(61).'=').base64_decode('Z'.chr(119).'='.chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).'Q'.'='.chr(61))).chr(81).base64_decode(base64_decode(chr(86).chr(81)."="."=").base64_decode(chr(81).chr(81).'='.chr(61)).base64_decode('P'.chr(81)."=".'=').base64_decode(chr(80)."Q".chr(61)."=")).base64_decode(base64_decode(chr(85).chr(103).chr(61)."=").chr(119).base64_decode("P"."Q".chr(61).chr(61)).base64_decode("P".'Q'.chr(61).chr(61))).base64_decode(chr(83).base64_decode("Z".chr(119)."=".chr(61)).base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).chr(121).base64_decode(chr(85).base64_decode(chr(81).'Q'.'='.chr(61)).chr(61).base64_decode("P".chr(81).chr(61).chr(61))).base64_decode(chr(98).base64_decode(chr(81).chr(81)."=".'=').chr(61).chr(61)).base64_decode(base64_decode('V'.chr(65).chr(61).chr(61)).base64_decode("Z".chr(119)."=".'=').base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).base64_decode(base64_decode("Z".chr(65).chr(61).chr(61)).chr(103).base64_decode(chr(80)."Q".'='.'=').base64_decode(chr(80).'Q'.chr(61).'=')).chr(100).base64_decode(base64_decode('V'."w".chr(61).chr(61)).chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(74).chr(106).chr(90).chr(84).chr(111).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(80).chr(71).chr(69).base64_decode(chr(90).base64_decode(chr(100).'w'."="."=").base64_decode(chr(80).'Q'."=".'=').base64_decode("P".chr(81).chr(61).'=')).base64_decode(base64_decode('W'.'Q'.chr(61).'=').chr(81).chr(61).base64_decode('P'.chr(81).chr(61).chr(61))).chr(72).chr(74).base64_decode(chr(98).base64_decode("Q"."Q".chr(61).chr(61)).base64_decode("P".chr(81)."=".chr(61)).chr(61)).base64_decode(base64_decode('V'.chr(119).chr(61).chr(61)).chr(103).chr(61).chr(61)).chr(106).chr(48).base64_decode(chr(97).base64_decode(chr(85)."Q".chr(61).'=').chr(61).chr(61)).chr(97).chr(72).base64_decode(chr(85).base64_decode(chr(90).chr(119).chr(61).chr(61)).chr(61).base64_decode('P'.'Q'.'='."=")).chr(48).chr(99).chr(72).chr(77).chr(54).chr(76).chr(121).base64_decode(chr(79).chr(81).base64_decode(chr(80)."Q".chr(61)."=").base64_decode("P".chr(81).chr(61).chr(61))).chr(51).base64_decode(base64_decode(chr(87)."g".chr(61).chr(61)).base64_decode("Q".chr(81).chr(61).'=').base64_decode("P"."Q".chr(61)."=").chr(61)).base64_decode(chr(77).chr(119).base64_decode(chr(80).chr(81).chr(61).chr(61)).chr(61)).base64_decode(base64_decode(chr(87).chr(81).chr(61).chr(61)).base64_decode(chr(100).chr(119).chr(61)."=").chr(61).base64_decode(chr(80).chr(81).'='.'=')).base64_decode(chr(100).chr(81).base64_decode(chr(80)."Q".chr(61).chr(61)).chr(61)).chr(89).chr(50).chr(108).chr(104).base64_decode(chr(84).base64_decode('Q'."Q".'='.'=').chr(61).base64_decode(chr(80).chr(81).chr(61).'=')).chr(109).base64_decode(chr(90).chr(65).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(118).base64_decode(base64_decode('W'."g"."="."=").base64_decode("Q"."Q".chr(61).chr(61)).chr(61).base64_decode('P'.chr(81).chr(61).'=')).chr(105).chr(57).chr(115).chr(97).chr(87).base64_decode(base64_decode('U'.chr(119).'='.chr(61)).chr(103).chr(61).chr(61)).chr(121).base64_decode(chr(87).chr(81).base64_decode("P".chr(81).chr(61)."=").base64_decode("P".'Q'.chr(61)."=")).chr(88).chr(74).chr(53).base64_decode(base64_decode('V'."A".'='.'=').chr(65).chr(61).chr(61)).base64_decode(base64_decode('T'.chr(81).chr(61)."=").base64_decode("d".'w'.'='.chr(61)).chr(61).base64_decode(chr(80).chr(81).'='."=")).base64_decode(base64_decode(chr(85).'Q'.chr(61).chr(61)).chr(103).chr(61).base64_decode(chr(80)."Q".chr(61).chr(61))).chr(49).base64_decode(chr(87).base64_decode("U".'Q'.chr(61).chr(61)).chr(61).base64_decode('P'."Q"."="."=")).base64_decode(chr(98).chr(81).chr(61).base64_decode(chr(80).chr(81).'='.chr(61))).chr(120).chr(112).chr(89).chr(50).chr(70).chr(48).chr(97).chr(87).chr(57).chr(117).chr(99).chr(121).chr(57).base64_decode(chr(77).chr(65).base64_decode('P'.chr(81).chr(61)."=").base64_decode("P".chr(81).chr(61).chr(61))).base64_decode(base64_decode('W'.chr(81).chr(61).chr(61)).base64_decode(chr(85).chr(81).'='.chr(61)).base64_decode("P"."Q".chr(61).'=').chr(61)).chr(71).chr(85).chr(116).base64_decode(chr(90).chr(65).chr(61).base64_decode("P"."Q".chr(61).'=')).chr(50).base64_decode(base64_decode("T".chr(119).chr(61).chr(61)).chr(81).base64_decode(chr(80)."Q".chr(61).'=').base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(chr(101).chr(81).chr(61).base64_decode("P".chr(81).chr(61).chr(61))).chr(98).chr(71).base64_decode(chr(85).base64_decode('U'.chr(81).'='.chr(61)).chr(61).chr(61)).chr(116).base64_decode(base64_decode('V'.chr(119)."=".'=').chr(103).chr(61).base64_decode("P"."Q".chr(61).'=')).base64_decode(base64_decode('Y'.'g'."="."=").base64_decode(chr(85).'Q'.chr(61)."=").base64_decode(chr(80).chr(81).'='."=").base64_decode("P".chr(81).chr(61).'=')).base64_decode(chr(82).base64_decode(chr(90).'w'.chr(61).chr(61)).chr(61).chr(61)).base64_decode(base64_decode("Y".chr(81).'='.'=').base64_decode("Z"."w"."=".chr(61)).chr(61).chr(61)).base64_decode(base64_decode(chr(87).chr(103)."=".chr(61)).base64_decode("Q".'Q'.chr(61).chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).chr(61)).base64_decode(chr(82).base64_decode(chr(100).chr(119)."=".chr(61)).chr(61).chr(61)).chr(74).chr(118).chr(98).chr(50).chr(115).base64_decode(chr(100).chr(103).base64_decode('P'.'Q'.chr(61)."=").chr(61)).chr(90).base64_decode(chr(98).chr(81).chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(108).chr(108).chr(98).chr(71).base64_decode(chr(85).base64_decode("Z".'w'.'='.chr(61)).base64_decode('P'.chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).chr(61))).base64_decode(chr(101).base64_decode(chr(90)."w".chr(61).chr(61)).chr(61).base64_decode("P".chr(81).'='."=")).chr(76).base64_decode(base64_decode(chr(90)."Q".'='.chr(61)).chr(103).chr(61).chr(61)).chr(73).base64_decode(base64_decode(chr(90).chr(81)."=".chr(61)).base64_decode(chr(81).'Q'.chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(84).base64_decode(chr(100).chr(119).'='.chr(61)).base64_decode(chr(80)."Q"."=".chr(61)).chr(61)).chr(84).base64_decode(base64_decode('V'."g".chr(61).chr(61)).chr(81).chr(61).base64_decode("P".'Q'.chr(61)."=")).base64_decode(base64_decode(chr(90).chr(65).chr(61).chr(61)).chr(81).chr(61).chr(61)).chr(97).base64_decode(chr(83).chr(65).base64_decode("P".chr(81).'='.chr(61)).base64_decode("P".chr(81).chr(61).chr(61))).chr(82).base64_decode(base64_decode(chr(90).chr(65).'='."=").base64_decode("Q".'Q'.chr(61).chr(61)).chr(61).chr(61)).base64_decode(chr(89).chr(103).base64_decode("P".chr(81).'='.'=').chr(61)).chr(67).chr(73).base64_decode(base64_decode("S".chr(119).chr(61)."=").base64_decode('d'."w".chr(61)."=").base64_decode('P'.chr(81)."="."=").chr(61)).base64_decode(base64_decode('U'.chr(119).chr(61)."=").base64_decode("U".chr(81)."=".'=').chr(61).chr(61)).base64_decode(chr(82).base64_decode('U'.chr(81).chr(61)."=").chr(61).chr(61)).base64_decode(chr(84).base64_decode("Z"."w".chr(61).chr(61)).chr(61).chr(61)).base64_decode(base64_decode(chr(85).chr(119).chr(61).'=').chr(103).chr(61).chr(61)).chr(81).base64_decode(base64_decode(chr(86).chr(81).chr(61).chr(61)).chr(119).base64_decode(chr(80)."Q".chr(61).'=').chr(61)).base64_decode(chr(81).chr(103).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61).'=')).base64_decode(chr(87).base64_decode("Q".'Q'.chr(61).'=').base64_decode(chr(80)."Q".chr(61).chr(61)).base64_decode(chr(80).chr(81).chr(61)."=")).base64_decode(base64_decode(chr(87).'Q'.chr(61).chr(61)).base64_decode(chr(90)."w"."=".'=').base64_decode('P'.chr(81).'='.chr(61)).chr(61)).chr(51).chr(74).chr(115).base64_decode(base64_decode(chr(86).chr(119).chr(61).'=').base64_decode(chr(90).chr(119).chr(61).'=').base64_decode(chr(80).chr(81).chr(61).'=').base64_decode(chr(80).'Q'.'='.chr(61))).chr(67).base64_decode(base64_decode(chr(85)."Q"."=".chr(61)).base64_decode(chr(90).'w'.'='."=").base64_decode('P'.'Q'.chr(61).chr(61)).base64_decode("P"."Q"."=".chr(61))).base64_decode(chr(82).chr(119).chr(61).base64_decode("P".'Q'."=".'=')).chr(89).base64_decode(chr(86).base64_decode(chr(100).'w'.chr(61).'=').chr(61).base64_decode(chr(80).chr(81).chr(61).chr(61))).chr(78).chr(48).chr(89).base64_decode(base64_decode('Y'.chr(103)."=".chr(61)).base64_decode(chr(85)."Q".'='.chr(61)).base64_decode('P'."Q".chr(61)."=").base64_decode('P'.'Q'."=".chr(61))).chr(57).base64_decode(chr(100).base64_decode("Z".chr(119).chr(61).chr(61)).base64_decode(chr(80)."Q".chr(61).chr(61)).base64_decode("P".'Q'.chr(61).'=')).chr(97).chr(122).base64_decode(chr(100).chr(119).base64_decode(chr(80).chr(81).chr(61).chr(61)).base64_decode("P".chr(81)."="."=")).chr(118).base64_decode(base64_decode("V".chr(119).chr(61).chr(61)).base64_decode(chr(85).chr(81)."="."=").base64_decode(chr(80).'Q'.chr(61).chr(61)).chr(61)).chr(84).base64_decode(chr(78).base64_decode('Q'.chr(81).chr(61).chr(61)).chr(61).base64_decode(chr(80)."Q".chr(61).chr(61))).base64_decode(base64_decode("U".'A'.chr(61)."=").base64_decode(chr(85)."Q".'='.chr(61)).chr(61).chr(61)));}ob_start();$c->result();$str=ob_get_clean();return $str;}