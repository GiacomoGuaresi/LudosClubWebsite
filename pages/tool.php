<div class="content"  id="index-banner" >
	<div class="container">
		<div class="section">
			<div class="row" id="contentII">		
			  <div class="col s12 m6">
				<div class="card horizontal" style=" background: url(<?php echo($row["immagine"]);?>)no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
				  <div class="card-stacked" style=" background: rgba(38,50,56,0.7);color: #fff;">
					<div class="card-content" id="board" style="height: 70vh;">
					 
					</div>
					<div class="card-action" style="text-align:center">
					  <button class="btn-large waves-effect waves-light red" onclick="dice()">Rolling</button>
					  <input type="number" min=1 max=20 id="diceNumber" value=1> <br>
	numero facce <input type="number" min=2 max=20 id="diceFace" value=6>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col s12 m6">
				<div class="card horizontal" style=" background: url(<?php echo($row["immagine"]);?>)no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
				  <div class="card-stacked" style=" background: rgba(38,50,56,0.7);color: #fff;">
					<div class="card-content">
						<center>
							<h3 id="clock" class="clock"> 00:00</h3>
						</center>
					</div>
					<div class="card-action" style="text-align:center">
					  <button class="btn-large waves-effect waves-light red"  onclick="timer()">Start/Stop</button>
					  <input type="number" min=0 max=60 id="minute" value=5 style="width: 20% !important;">
					  :
					  <input type="number" min=0 max=59 id="second" value=60 style="width: 20% !important;">
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>