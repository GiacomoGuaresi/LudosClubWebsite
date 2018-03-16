<?php 
$parametri = $_GET["par"];
include_once("../connection.php");
$sql="SELECT * FROM `giochi` WHERE `nome` LIKE '%$parametri%' OR `descrizione` LIKE '%$parametri%' OR `immagine` LIKE '%$parametri%' OR `giocatori` LIKE '%$parametri%' OR `tempo partita` LIKE '%$parametri%' OR `link-regole` LIKE '%$parametri%'";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query))
{
	?>			
	<div class="col s12 m6">
		<div class="card horizontal" style=" background: url(<?php echo($row["immagine"]);?>)no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
			<div class="card-stacked card_pop">
			<div class="card-content">
				<h4><?php echo($row["nome"]);?></h4>
				<p style="height: 60%;overflow: hidden;"><?php 
					$desc =$row["descrizione"];
					if(strlen($desc) > 600)
					{
						$desc = substr($desc,0,600); 
						$desc = $desc."...";
					}
					
					echo($desc);
				?></p>
				<br>
				<i class="material-icons">person</i><?php echo($row["giocatori"]);?>
				&nbsp;&nbsp;
				<i class="material-icons">timer</i><?php echo($row["tempo partita"]);?>
			</div>
			<div class="card-action">
				<?php if($row["link-regole"] != ""){ ?>
				<a href="<?php echo($row["link-regole"]);?>">Scarica il regolamento</a>
				<?php } else { ?>
				<a style="    color: #797979;">Regole non disponibili</a>
				<?php } ?>
			</div>
			</div>
		</div>
	</div>
<?php 
}
?>