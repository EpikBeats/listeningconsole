//------------------------------------------------------------------------------------------------------
// This piece of code detects wether the device is IOS and if it is redirects to the ip address
//------------------------------------------------------------------------------------------------------

function IOS(){
	//return true or false if device is IOS
	var IOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/i) ? true : false );
	//redirect if device is IOS
	if (IOS == true){
		//window.location = "http://87.117.228.65:11728/listen.pls";
		window.location = "ios";
	}
}

// this calls the function IOS

IOS();

//------------------------------------------------------------------------------------------------------
// This piece of code detects wether the device is Android and if it is redirects to the mobile site
//------------------------------------------------------------------------------------------------------

var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
if(isAndroid) {
  // This redirects to the mobile website, to change location change the line below
  window.location = 'mobile%20website/index.html';
}
