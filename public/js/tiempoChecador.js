


window.onload = function(){

var segundos = 15
const segundosView = document.querySelector(".segundos")

segundosView.innerHTML = segundos

	tiempo = setInterval( function(){

		segundos--;

		if(segundos <= 5){
			segundosView.style.color = "red";
			segundosView.style.fontSize  = "50px";
			segundosView.style.fontWeight  = "bold";
			segundosView.style.marginTop = "-4%";
		}

		if(segundos <= 0){

			window.location.href = '/home';

			clearInterval(tiempo);
		}


		segundosView.innerHTML = segundos;
	
		
		
	},1000);
}