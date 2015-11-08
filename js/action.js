//Variável para controle de menu;
var flag_menu;

$(document).ready(function () {
	flag_menu = false;
		//verifica  se o width é menor que 767
	if ($(document).width() < 767) {
		alert($(document).width());
		$('#button_menu').click(function (){
			if (flag_menu == false) {
				flag_menu = true;
				$('#jumbotron_home').css({"margin-top": "-50px"});
			} else{
				flag_menu = false;
				$('#jumbotron_home').css({"margin-top": "100px"});
			};
		});
	};
});