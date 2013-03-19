  setTimeout(
    function() {

if (is_chrome == false){
	//If browser isn't Google Chrome, open console & redirect back
	//define function openconsole
	function openconsole(){
		listeningconsole = window.open ("main.php","mywindow","menubar=0,resizable=0,width=400,height=599");
		if (listeningconsole.closed){
		}
		else{
			history.back();
		}
	}
	//call function openconsole
	openconsole();
	//navigate back to previous page
	if (listeningconsole.closed){
		//retry opening console
		function openconsole(){
			listeningconsole = window.open ("http://listen.epikbeats.co.uk/main.php#.UNwphne0OwE","mywindow","menubar=0,resizable=0,width=400,height=599");
		}
		//call function openconsole
		openconsole();
	}
	else{
		history.back();
	}
}
else{
	//if browser is Google Chrome, open console and require users to click button to redirect back
	function openconsole(){
		listeningconsole = window.open ("main.php","mywindow","menubar=0,resizable=0,width=405,height=605,scrollbars=0");
	}
	//call function openconsole
	openconsole();
}
    }, 5000);