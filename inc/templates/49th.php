<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>
		Falconstats - Logbook display tool
	</title>
	<?
		// Änderungsdatum auslesen.
		$changed=$logbook[88];
		$changed.=$logbook[89];
		$changed.=$logbook[90];
	?>

<? /* Stylesheet declaration */ ?>	
	
<style type="text/css" media="screen">
	body {
		background-color:#131313;
		color:#909090;
		font-family:helvetica;
		font-size:10pt;
	}
</style>

</head>

<body>
	
	<h3>Falcon AF Logbook</h3><br />
	<p>Letzte Aenderung: <? echo($changed); ?>  </p>
	<table>
		<tr>
		<? /* Pilot Data */ ?>
			<td>
				<table>
				<?php
					$i=0;
					while($i<10) {
						?><tr><td><?
						//echo($i);
						echo("&nbsp;&nbsp;&nbsp;");
						echo($logbook[$i]);
						?></td><td><?
						$i++;
						echo($logbook[$i]);
						$i++;
						?></td></tr><?
					}
				?>
				</table>
			</td>
			
		<? /* First set of Ribbons */ ?>
			<td>
				<table>
					<? $i = 14;
					while($i<26) {
						?><tr><td><?
						echo("&nbsp;&nbsp;&nbsp;");
						/* Check out ribbon display */
						$ribbon="";
						switch($logbook[$i]) {
							case "Air Force Cross":
								$ribbon="AF";
								break;
							
							case "Silver Star":
								$ribbon="SS";
								break;
							
							case "Distinguished Flying Cross":
								$ribbon="FC";
								break;
								
							case "Air Medal":
								$ribbon="AM";
								break;
							
							case "Longevity Medal":
								$ribbon="LEG";
								break;

							case "Campaign Medals":
								$ribbon="MSM";
								break;
						}
						$i++;
						$ribbon2="";
						if($logbook[$i]<1) {
							$ribbon2="_0";}
						    
						$i--;
						?>
						<img src="inc/templates/img/<? echo($ribbon); ?>_R<? echo($ribbon2); ?>.png" width="50px" alt="<? echo($logbook[$i]); ?> =<? $i++; echo($logbook[$i]);?> "/>&nbsp;<font size="0,5px;">(<? echo($logbook[$i]); ?>x )</font>
						<? 
						$i++;
						?></td></tr><?
					}?>
				</table>
			</td>
		</tr>
	</table>
	<table>
		<tr>
		<? /* Campaign Statistics */ ?>
			<td>
				<table>
				<?php
					while($i<48) {
						?><tr><td><?
						//echo($i);
						echo("&nbsp;&nbsp;&nbsp;");
						echo($logbook[$i]);
						?></td><td><?
						$i++;
						echo($logbook[$i]);
						$i++;
						?></td></tr><?
					}
				?>
				</table>
			</td>
		<? /* Campaign Statistics 2 */ ?>
			<td style="vertical-align:bottom;">
				<table>
					<?php
						while($i<64) {
							?><tr><td><?
							// echo($i);
							echo("&nbsp;&nbsp;&nbsp;");
							echo($logbook[$i]);
							?></td><td><?
							$i++;
							echo($logbook[$i]);
							$i++;
							?></td></tr><?
						}
					?>
				</table>
			</td>
			
		</tr>
	</table>	
	
	
</body>