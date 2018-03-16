<?php
	include("login.php");
	include_once("../../connection.php");
	$sql="SELECT * FROM `giochi` WHERE `ID` = ".$_GET["id"];
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);
?>
<div class="container">
	<div class="section">
		<div class="row" id="contentII">		
		  <div class="col s12 m6">
			<div class="card horizontal" style=" background: url(<?php echo($row["immagine"]);?>)no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
			  <div class="card-stacked">
				<div class="card-content" style="height: 70vh;">
				 
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col s12 m6">
			<div class="card horizontal">
			  <div class="card-stacked" style=" background: rgba(38,50,56,0.7);color: #fff;">
				<div class="card-content">
					<style>td{padding:0px;} input{width:80% !important;}</style>
					<table width="100%" border=1>
						<tr><td>ID				</td><td> 	<input type="number" id="id" value="<?php echo($row["ID"]);?>" readonly></td></tr>
						<tr><td>nome 			</td><td>	<input type="text" id="nome" value="<?php echo($row["nome"]);?>"></td></tr>
						<tr><td>giocatori 		</td><td>	<input type="text" id="giocatori" value="<?php echo($row["giocatori"]);?>"></td></tr>
						<tr><td>tempo 			</td><td>	<input type="text" id="tempo" value="<?php echo($row["tempo partita"]);?>"></td></tr>
						<tr><td>link-regole		</td><td>	<input type="text" id="link-regole" value="<?php echo($row["link-regole"]);?>"></td></tr>
						<tr><td>descrizione		</td><td>	<textarea id="descrizione" style="border: 4px ridge #F44336 !important;border-radius: 5px !important;background: #eee !important;padding: 0 20px !important;color: #000 !important;width: 90%;height: 300px;"><?php echo($row["descrizione"]);?></textarea></td></tr>
						<tr><td>Immagine		</td><td>	<input type="text" id="immagine" value="<?php echo($row["immagine"]);?>"></td></tr>

					</table>
					<br><br>
					<table><tr>
						<td><button onclick="fupdate()" class="btn-large waves-effect waves-light red" style="width:80% !important;">Aggiorna</button></td>
						<td><button onclick="fdelete()" class="btn-large waves-effect waves-light red" style="width:80% !important;">Elimina</button></td>
					</tr></table>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>