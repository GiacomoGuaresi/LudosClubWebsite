<div class="full_height">
<?php 
	include("login.php");
	include_once("../../connection.php");
	
	if(isset($_GET["CMD"]))
	{
		if($_GET["CMD"] == "delete")
		{
			echo("eliminazione dell'oggetto: ".$_GET["id"]);
			$sql="DELETE FROM `giochi` WHERE `ID` = ".$_GET["id"];
			$query = mysqli_query($conn,$sql);
			if (!$query) {
				die('Invalid query: ' . mysql_error());
			}
			else
			{
				header("location: home.php");
			}
		}
		else if ($_GET["CMD"] == "update")
		{
			echo("aggiorno l'oggetto ".$_GET["id"]);
			
			if($_GET["id"] != "")
				$sql="UPDATE `giochi` SET `nome` = '".$_GET["nome"]."',
					`descrizione` = '".$_GET["descrizione"]."',
					`immagine` = '".$_GET["immagine"]."',
					`giocatori` = '".$_GET["giocatori"]."',
					`tempo partita` = '".$_GET["tempo"]."',
					`link-regole` = '".$_GET["link-regole"]."'
					WHERE `giochi`.`ID` = ".$_GET["id"];
			else
				$sql="INSERT INTO `my_testpressjack`.`giochi` (`ID`, `nome`, `descrizione`, `immagine`, `giocatori`, `tempo partita`, `link-regole`) VALUES (NULL, '".$_GET["nome"]."', '".$_GET["descrizione"]."', '".$_GET["immagine"]."', '".$_GET["giocatori"]."', '".$_GET["tempo"]."', '".$_GET["link-regole"]."');";
			echo($sql);
			$query = mysqli_query($conn,$sql);
			if (!$query) {
				die('Invalid query: ' . mysql_error());
			}
			else
			{
				header("location: home.php");
			}
		}
		else
			echo("comando non riconosciuto");
	}
	else
		echo("405");
?>
</div>