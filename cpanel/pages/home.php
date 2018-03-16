<div class="container customdarkgray full_width" style="text-align:right">
	<div class="section">
		<h3 class="customlightgray-text">Overview</h3>
		<br><br>
		<h4 class="customlightgray-text">
			
		</h4>
	</div>
	<br><br>
</div>
 
 <div class="container customlightgray full_width">
	<div class="section">
		<h3 class="customdarkgray-text">Elenco Giochi</h3>
		<br><br>
		<style>
		tbody, th, td {
			border-left: 1px dashed #aaa;
			border-right: 1px dashed #aaa;
			border-bottom: 1px solid #aaa;
		}
		</style>
		<table border="1">
		 <thead style="background:#333; color:#aaa">
			<tr>
				<td>ID</td>
				<td>nome</td>
				<td>giocatori</td>
				<td>tempo partita</td>
				<td></td>
			</tr>
		 </thead>
		 <tbody>
			<?php 
				include_once("../../connection.php");
				$sql="SELECT * FROM `giochi`";
				$query = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($query))
				{
					echo("<tr><td>".$row["ID"]."</td><td>".$row["nome"]."</td><td>".$row["giocatori"]."</td><td>".$row["tempo partita"]."</td><td><a href='#' onclick=\"jsfunction('edit.php?id=".$row["ID"]."')\">edit</a></td></tr>");
				}
			?>
		</tbody>
		</table>
		<br><br>
		<center><button onclick="jsfunction('edit.php?id')" class="btn-large waves-effect waves-light red" style="width:50% !important;">Aggiungi</button></center>
	</div>
	<br><br>
</div>

<div class="container customdarkgray full_width" style="text-align:right">
	<div class="section">
		<h3 class="customlightgray-text">File Manager</h3>
		<br><br>
		<font class="customlightgray-text">
			<center>
			<table border="1">
				 <thead style="background:#eeeeee; color:#333">
					<tr>
						<td>nome</td>
						<td></td>
						<td></td>
					</tr>
				 </thead>
				 <tbody>
					<?php 
					   $dir = "../../uploads";
					   $cdir = scandir($dir); 
					   foreach ($cdir as $key => $value) 
					   { 
						  if (!in_array($value,array(".",".."))) 
							 echo("<tr><td>".$value."</td><td><a href=\"pages/upload.php?CMD=delete&name=".$value."\">Elimina</a></td><td><a target=\"_blank\" href='../../uploads/".$value."'>Visualizza</a></td></tr>");
					   } 
					?>
				</tbody>
			</table>
			<br>
			<br>
			<form action="pages/upload.php?CMD=upload" method="post" enctype="multipart/form-data">
				
				<input type="file" name="fileToUpload" id="fileToUpload">
				<br><br>
				<input type="submit" value="Upload Image" name="submit" class="btn-large waves-effect waves-light red" style="border: none !important;border-radius: initial !important; color: #fff !important">
			</form>
			</center>
		</font>
	</div>
	<br><br>
</div>