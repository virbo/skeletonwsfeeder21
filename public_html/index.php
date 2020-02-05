<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>WS Feeder 2.1 Skeleton</title>

		<!-- Bootstrap -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	</head>
	<body>
		<h1>Daftar Method Web Service Feeder versi 2.1</h1>
		<table class="table">
			<thead>
				<tr>
					<th width="50px">#</th>
					<th>Nama Method</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require '../lib/WS.php';

					$_ws = new WS();

					//$_ws->url = 'https://feeder.akper-luwuk.ac.id/ws/';

					$_get = file_get_contents($_ws->url.$_ws->mode.'.php');
					//echo $_get;

					$_pecah = explode('<br>', $_get);

					for ($i=1; $i < count($_pecah); $i++) {
						$_pecah_lagi = explode(': ', $_pecah[$i]);
						echo "<tr>";
						echo "<td>".$i."</td>";
						for ($j=0; $j < count($_pecah_lagi) ; $j++) { 
							echo "<td>".$_pecah_lagi[$j]."</td>";
						}
						echo "<td>
							<a href=\"view.php?fungsi=".$_pecah_lagi[0]."\" target=\"_blank\">
								<span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Dictionary
							</a><!-- |
							<a href='#'>
								<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> View
							</a-->
						</td>";
						echo "</t>";;
					}
				?>
			</tbody>
		</table>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>