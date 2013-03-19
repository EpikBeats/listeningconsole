<script type="text/javascript">
function isiPhone(){
    return (
        (navigator.platform.indexOf("iPhone") != -1)
        || (navigator.platform.indexOf("iPod") != -1)
        || (navigator.platform.indexOf("iPad") != -1)
    );
}
if(isiPhone()){
   window.location.replace("http://95.154.254.81:30069/listen.pls");
}
<![CDATA[
 else if ( (navigator.userAgent.indexOf('Android') != -1) ) {
  document.location = "mobile%20website/index.html";
 } // ]]>
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="icon" href="http://admin.epikbeats.co.uk/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="http://admin.epikbeats.co.uk/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="http://admin.epikbeats.co.uk/favicon.ico" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="http://admin.epikbeats.co.uk/favicon.ico" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36089825-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--title start -->

<title>Epik Beats - Listening Console</title>

<!--title end -->

<!--include tabbed panels javascript file -->

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>

<!--end include tabbed panels javascript file -->

<!--include css files -->

<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<link href="styles/main.css" rel="stylesheet" type="text/css" />

<!--end include css files -->

</head>



<body class="body">

<!-- div containing status bar -->

<div style="background-image:url(Images/background.png); background-repeat:no-repeat; height:600px; width:400px"><div id="header" style="background-image:url(Images/Status%20Bar.png); height:600px;">

<!-- end div containing status bar -->

<!-- div containing semi-transparent content area -->

<div style="background-image:url(Images/content.png); height:600px">

<!-- end div containing semi-transparent content area -->

<!-- div containing curently no images avalible message -->

<div style="background-image:url(Images/currently%20no%20images%20avalible.png); height:600px">

<!-- div containing curently no images avalible message -->

<!-- div containing status bar content-->

    <div width="100%" style="padding-top:100px; padding-left:40px">

<!-- current song displayed in status bar -->	

<script type="text/javascript" src="http://shoutcast.mixstream.net/js/song/uk7-free:25874">
You appear to have javascript turned off.
</script><br />

<!-- start of the online offline messages -->
<?php
// Change these to your online/offline messages //
$online = "Online"; // Displays when stream is online
$offline = ""; // Displays when stream is offline
// don't edit below //
$ip = "s7.myradiostream.com";
$port = "25874";
$fp = @fsockopen($ip,$port,$errno,$errstr,1);
if (!$fp) { 
	$status = $offline;
} else { 
	fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
	while (!feof($fp)) {
		$info = fgets($fp);
	}
	$split = explode(',', $info);
	if ($split[1] == "0") {
		$status = $offline;
	} else {
		$status = $online;
	}
}
print $status;
?>
<!-- end of the online offline messages -->

<!-- end the div containing status bar content -->
<p></p>
    </div>

<!-- start of the div containing the main content -->

    <div width="100%" style="padding-top:20px; padding-left:40px"><!-- main tabbed panels containing div -->      

    <div id="listening_tabs" class="TabbedPanels" width="100px">

      <!-- start of the unorderd list of tabbed panels tabs -->

      <ul class="TabbedPanelsTabGroup">

       <!-- flash player tab -->

          <li class="TabbedPanelsTab" tabindex="0">Flash<br />

            Player</li>

          <li class="TabbedPanelsTab" tabindex="0">Windows<br />

            Media Player </li>

          <li class="TabbedPanelsTab" tabindex="0">Alternate Listen<br />

            Link

          </li>

          <!-- windows media player tab -->

          <!-- epik beats chat tab -->

      </ul>

        <!-- end of the unorderd list of tabbed panels tabs -->

        <div class="TabbedPanelsContentGroup">

        <!-- start of main tabbed panels content -->

          <div class="TabbedPanelsContent">

            <!-- flash player tab content -->

            <!--Wavestreaming.com SHOUTcast Flash Player-->

            <!--Flash Player-->

            <!--Flash Player-->

 <!--Flash Player-->

	<p id='preview'></p><script id='myscript' language='javascript' src='http://flashplayer1.listen2myradio.com/getInfo.js?id=353bcefd362ea0e07ab51618d717a9f1e56'></script>

 <!--End Player-->            <!--End Player-->

            <!--End Player-->

            <!--End Player-->

            <!-- end of flash player tab content -->

          </div>

          <div class="TabbedPanelsContent">


<param name="url" value="http://epikbeats.listen2myradio.com/media/playradio1245888.asx">
<param name="autostart" value="1">
<param name="showcontrols" value="1">
<param name="stretchtofit" value="0">
<param name="enablecontextmenu" value="0">
<param name="ShowStatusBar" value="1">
<embed src="http://epikbeats.listen2myradio.com/media/playradio1245888.asx" autostart="1" type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" transparentatstart="0" animationatstart="0" showcontrols="1" autosize="0" displaysize="0" showtracker="0" showstatusbar="1" height="95" width="336">
            <!-- end of windows media player tab content -->

          </div>

          <div class="TabbedPanelsContent"><div style="text-align:center"><a href="http://87.117.228.65:11728/listen.pls"><img src="Images/ios button.png" width="200" height="40" /></a></div></div>
          <script type="text/javascript"> // <![CDATA[
 if ( (navigator.userAgent.indexOf('Android') != -1) ) {
  document.location = "mobile%20website/index.html";
 } // ]]>
</script>

<script type="text/javascript">
function isiPhone(){
    return (
        (navigator.platform.indexOf("iPhone") != -1)
        || (navigator.platform.indexOf("iPod") != -1)
        || (navigator.platform.indexOf("iPad") != -1)
    );
}
if(isiPhone()){
   window.location.replace("http://95.154.254.81:30069/listen.pls");
}
</script>

          <!-- start of windows media player tab content -->

          </div>

      <div id="bottom_tabs" class="TabbedPanels">

        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Chat</li>
          <li class="TabbedPanelsTab" tabindex="0">Contact</li>
          <li class="TabbedPanelsTab" tabindex="0">Share</li>
        </ul>

        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
            <iframe width="312" height="200" src="http://cdn.livestream.com/embed/epikbeats?layout=6&showTimestamp=true&height=242&width=312" style="border:0;outline:0" frameborder="0" scrolling="no" bgcolor="#ffffff"></iframe>
          </div>
          <div class="TabbedPanelsContent"><!--
Skype 'My status' button
http://www.skype.com/go/skypebuttons
-->
<!--
Skype 'Skype Me™!' button
http://www.skype.com/go/skypebuttons
-->
<!--
Skype 'Skype Me™!' button
http://www.skype.com/go/skypebuttons
--><div style="text-align:center">
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<a href="skype:epikbeats?call">

<img src="http://download.skype.com/share/skypebuttons/buttons/call_green_transparent_70x23.png" style="border: none;" width="70" height="23" alt="Skype Me™!" /></a>
</div>
<p> Skype:epikbeats </p>
<p> Phone:08455089067 </p>
<p> Email: (PresenterName)@epikbeats.co.uk </p>

</div>
          <div class="TabbedPanelsContent">
<!--**Like Buttons Footer!**-->
<!-- AddThis Follow BEGIN -->
<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
<a title="Follow on Facebook" target="_blank" href="http://www.facebook.com/EpikBeats" class="addthis_button_facebook_follow at300b" addthis:userid="EpikBeats"><span class=" at300bs at15nc at15t_facebook"><span class="at_a11y">Share on facebook</span></span><span class="addthis_follow_label">Facebook</span></a>
<a href="#" title="Follow on Twitter" target="_blank" class="addthis_button_twitter_follow at300b" addthis:userid="theepikbeats"><span class=" at300bs at15nc at15t_twitter"><span class="at_a11y">Share on twitter</span></span><span class="addthis_follow_label">Twitter</span></a>
<a title="Follow on YouTube" target="_blank" href="http://www.youtube.com/user/theepikbeats" class="addthis_button_youtube_follow at300b" addthis:userid="theepikbeats"><span class=" at300bs at15nc at15t_youtube"><span class="at_a11y">Share on youtube</span></span><span class="addthis_follow_label">YouTube</span></a>
<a title="Follow on Flickr" target="_blank" href="http://www.flickr.com/photos/epikbeats" class="addthis_button_flickr_follow at300b" addthis:userid="epikbeats"><span class=" at300bs at15nc at15t_flickr"><span class="at_a11y">Share on flickr</span></span><span class="addthis_follow_label">Flickr</span></a>
<a title="Subscribe via RSS" target="_blank" href="http://epikbeats.podomatic.com/rss2.xml" class="addthis_button_rss_follow at300b" addthis:url="http://epikbeats.podomatic.com/rss2.xml"><span class=" at300bs at15nc at15t_rss"><span class="at_a11y">Share on rss</span></span><span class="addthis_follow_label">RSS</span></a>
<div class="atclear"></div></div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f7605a143f0298b"></script>

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a href="#" title="Facebook" class="addthis_button_preferred_1 addthis_button_facebook at300b"><span class=" at300bs at15nc at15t_facebook"><span class="at_a11y">Share on facebook</span></span></a>
<a href="#" title="Tweet This" class="addthis_button_preferred_2 addthis_button_twitter at300b"><span class=" at300bs at15nc at15t_twitter"><span class="at_a11y">Share on twitter</span></span></a>
<a href="#" title="Email" class="addthis_button_preferred_3 addthis_button_email at300b"><span class=" at300bs at15nc at15t_email"><span class="at_a11y">Share on email</span></span></a>
<a href="#" title="Print" class="addthis_button_preferred_4 addthis_button_print at300b"><span class=" at300bs at15nc at15t_print"><span class="at_a11y">Share on print</span></span></a>
<a href="#" class="addthis_button_compact at300m"><span class=" at300bs at15nc at15t_compact"><span class="at_a11y">More Sharing Services</span></span></a>
<a href="#" style="display: block;" class="addthis_counter addthis_bubble_style"><a href="#" title="View more services" class="addthis_button_expanded">14</a><a class="atc_s addthis_button_compact"><span></span></a></a>
<div class="atclear"></div></div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f7605a143f0298b"></script>
<!-- AddThis Button END -->
<!--**Facebook Like Button**!-->
<span style="height: 20px; width: 450px;"><iframe src="http://www.facebook.com/plugins/like.php?api_key=&amp;locale=en_GB&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D12%23cb%3Df16ccd862860ace%26origin%3Dhttp%253A%252F%252Fadmin.epikbeats.co.uk%252Ff3453c40043bb1e%26domain%3Dadmin.epikbeats.co.uk%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fepikbeats.co.uk&amp;node_type=link&amp;width=450&amp;layout=standard&amp;colorscheme=light&amp;show_faces=true&amp;send=true&amp;extended_social_context=false" class="fb_ltr" title="Like this content on Facebook." style="border: medium none; overflow: hidden; height: 20px; width: 450px;" name="f3ba6a8996dafea" id="f23ab9d99b3ac9e" scrolling="no"></iframe></span>
<!--**Twiter Tweet Button**!-->
<iframe data-twttr-rendered="true" title="Twitter Tweet Button" style="width: 109px; height: 20px;" class="twitter-share-button twitter-count-horizontal" src="http://platform.twitter.com/widgets/tweet_button.1351848862.html#_=1352034945926&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fwww.epikbeats.co.uk%2F&amp;size=m&amp;text=Epik%20Beats%20-%20The%20World's%20Greatest%20Online%20Radio%20Station%20by%20the%20Young%20People%20of%20Stroud%20-%20Home&amp;url=http%3A%2F%2Fepikbeats.co.uk" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!--**Google +1 Button**!-->
</div>
        </div>

      </div>

      <script type="text/javascript">

function open_win()

{

window.open("webcams.php", "webcams", "width=640, height=385, resizable=no, status=0,toolbar=0, resizable=0, locaction=0, directories=0")

}

</script>

      <div style="text-align:center">

      <img src="Images/webcams button.png" onClick="open_win()" />    </div>

    </div></div></div>

</div></div></div></div>

<script type="text/javascript">

var TabbedPanels1 = new Spry.Widget.TabbedPanels("listening_tabs");

var TabbedPanels2 = new Spry.Widget.TabbedPanels("bottom_tabs");

</script>

</body>

</html>