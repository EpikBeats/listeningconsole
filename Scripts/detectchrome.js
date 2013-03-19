var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
//decide if browser is Google Chrome and then diplay the correct message to the user
if (is_chrome == false){
var message = ("<p><img src='Images/ajax-loader.gif'></img><br />If the listening console hasn't opened after 7 seconds, <a href='#' onclick='openconsole()'>click here</a><br />Or check your popup settings</p><p>Or, if you haven't been redirected back, <a href='#' onclick='history.back();'>click here</a></p>");
}
else{
var message = ("<img src='Images/ajax-loader.gif'></img><p>you appear to be on Google Chrome, To access the listening conosle please <br /> check your popup blocker <a id='displayText' href='javascript:toggle();'>show popup-blocker tutorial</a></p><div id='toggleText' style='display: none'><iframe width='560' height='315' src='http://www.youtube.com/embed/GcGLjtvQcic' frameborder='0'></iframe></div><br /><br />");
}