function IOS(){
	//return true or false if device is IOS
	var IOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/i) ? true : false );
	//redirect if device is IOS
	if (IOS == true){
		window.location = "http://87.117.228.65:11728/listen.pls";
	}
}
IOS();
var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
if(isAndroid) {
  window.location = 'mobile%20website/index.html';
}