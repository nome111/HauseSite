//Variável para controle de menu;
var click_menu;

$(document).ready(function () {
	click_menu = false;
		//verifica  se o width é menor que 767
	if ($(document).width() < 767) {

		$('#button_menu').click(function (){

			if (click_menu == false) {

				click_menu = true;
				$('#jumbotron_home').css({"margin-top": "-50px"});
			}
			else {
				
				click_menu = false;
				$('#jumbotron_home').css({"margin-top": "200px"});
			};

		});
	};
});