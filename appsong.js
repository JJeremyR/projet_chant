function requete(input){

	let demo3 = document.getElementById("demo3");
	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() 
		{
		//console.log(this);
		if (this.readyState == 4 && this.status == 200)
			{

			//demo.innerHTML =JSON.stringify(this.response);
			
			let data = this.response;
			let record = data.recordings;
			
			//let art = data.recordings.0.artist-credit.0.artist.name;
			//let sortie = data.recordings.releases;
			//console.log(record);
			//console.log(art);
			//console.log(sortie);

			for(let i = 0; i< record.length; i++)
				{
				let ms = record[i].length;
				let min = ms / 1000 / 60;
				let r = min % 1;
				let sec = Math.floor(r * 60);
				if (sec < 10) 
					{
    				sec = '0'+sec;
					}
				min = Math.floor(min);
				let tps = min + ":" + sec;

				//demo2.innerHTML += record[i].title + " ("+ record[i].artist-credit[0].artist.name +") " + " ["+ sortie[i].date +"] " + " \""+ sortie[i].country + "\" ";
				demo3.innerHTML += "<option>" + record[i].title + " ("+ record[i]["artist-credit"][0].artist.name +") " +"{ " + tps +"} " + " ["+ record[i]["releases"][0].date +"] " + " \""+ record[i]["releases"][0].country + "\" " + " | " + record[i].score + " % | " + "</br>";
				
				}
			}
			else if (this.readyState == 4 && this.status == 404)
				{
				alert ('erreur 404 :/');
				}
		};
	//let url = "http://217.182.174.155:5000/ws/2/artist/?query=artist:%22" + input1 + "%22&fmt=json";
	//let url = "http://217.182.174.155:5000/ws/2/recording?query=recording:%22" + input2 + "%22%20and%20artist:%22" + input1 + "%22&fmt=json";
	let url = "http://217.182.174.155:5000/ws/2/recording?query="+ input;
	xhr.open("GET", url, true);
	xhr.responseType = "json";
	xhr.send();
}

document.getElementById("formA").addEventListener("submit", function(e)
	{
	e.preventDefault();
	let artist = document.getElementById("artist").value;
	let titre = document.getElementById("titre").value;
	let artitre = "recording:%22" + titre + "%22%20and%20artist:%22" + artist + "%22&fmt=json";
	//console.log(artist);
	//console.log(titre);
	//console.log(artitre);
	document.getElementById("demo3").innerHTML = "";
	requete(artitre);
	return false;
	});


// fonction pour que le bouton Confirmer envoi les données choisies dans la DB Song!
