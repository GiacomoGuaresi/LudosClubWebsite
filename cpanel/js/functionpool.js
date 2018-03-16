function myMap() {
	var myLatLng = {lat: 45.5733117, lng: 9.283026899999982};

	var map = new google.maps.Map(document.getElementById('googleMap'), {
		zoom: 16,
		center: myLatLng
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Siamo Qui!'
	});		
}


function jsfunction(id) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("content").innerHTML = this.responseText;
			if(document.getElementById("googleMap")){
				myMap();
			}
		}
	};
	xhttp.open("GET", "pages/"+id, true);
	xhttp.send();	  
	document.getElementById("content").innerHTML = '<div id="loading-wrapper"><div id="loading-text">LOADING</div><div id="loading-content"></div></div>';
	$("#sidenav-overlay").trigger("click");
}

function jsdatabasesearch() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("contentII").innerHTML = this.responseText;
			if(document.getElementById("googleMap")){
				myMap();
			}
		}
	};
	xhttp.open("GET", "pages/search.php?par="+document.getElementById("searchbox").value, true);
	xhttp.send();	  
}

function fupdate()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("content").innerHTML = this.responseText;
			if(document.getElementById("googleMap")){
				myMap();
			}
		}
	};
	xhttp.open("GET", "pages/edit_run.php?CMD=update&id=" + document.getElementById("id").value +"&nome=" + document.getElementById("nome").value+"&giocatori=" + document.getElementById("giocatori").value+"&tempo=" + document.getElementById("tempo").value+"&link-regole=" + document.getElementById("link-regole").value+"&descrizione=" + document.getElementById("descrizione").value+"&immagine=" + document.getElementById("immagine").value, true);
	xhttp.send();	  
	document.getElementById("content").innerHTML = '<div id="loading-wrapper"><div id="loading-text">update</div><div id="loading-content"></div></div>';
	$("#sidenav-overlay").trigger("click");
}	

function fdelete()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("content").innerHTML = this.responseText;
			if(document.getElementById("googleMap")){
				myMap();
			}
		}
	};

	xhttp.open("GET", "pages/edit_run.php?CMD=delete&id=" + document.getElementById("id").value , true);
	xhttp.send();	  
	document.getElementById("content").innerHTML = '<div id="loading-wrapper"><div id="loading-text">delete</div><div id="loading-content"></div></div>';
	$("#sidenav-overlay").trigger("click");
}