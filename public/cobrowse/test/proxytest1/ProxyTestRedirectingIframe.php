


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" class="no-js">
<!--<![endif]-->

<head id="ctl00_ctl00_Head"><title>
	  Glance Networks
</title><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><meta name="robots" content="all" /><meta name="copyright" content="Glance Networks, Inc." />
    
<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

        <link href="//fonts.googleapis.com/css?family=Nunito:400,700,300" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="/include/bootstrap/3.4.1/css/bootstrap.min.css"  />
        
        <link rel="stylesheet" href="/site/wp/content/theme/css/style.css?v=6.53.0.2144784633" type="text/css" media="all" />
        <link rel="stylesheet" href="/include/font-awesome/4.7.0/css/font-awesome.css"/>
    <script id='glance-cobrowse' data-ws="www.myglance.net" src='https://staging-cdn.myglance.net/cobrowse/CobrowseJS.ashx?group=8757&site=staging&script=' data-groupid='8757' data-additionalgroupids='' data-site="staging" data-inputevents='{"ctrl-13":"showButton", "alt-13":"showTerms", "shift-13":"startSession"}' data-presence='on' charset='UTF-8' defer></script>
    <script type="text/javascript">
        function Join() {
            var viewer = "/agentjoin/AgentView.php?SessionKey=" + GLANCE.Cobrowse.Visitor.getKey() +
                "&name=" + encodeURIComponent("Madame Marie Curie") + 
                "&email=" + encodeURIComponent("mariecurie@glance.net") + 
                "&phone=" + encodeURIComponent("99 123-456-7890");

            window.open(viewer, "_blank", "location=no,menubar=0,titlebar=0,status=0,toolbar=0");
        }
        
    </script>
    
    <link rel="stylesheet" href="../styles/styles5.css"/>

    <script type="text/javascript">
        function CheckLoadedScript() { 
            if (GLANCE && GLANCE.Cobrowse && GLANCE.Cobrowse.Visitor) {
                document.getElementById("scripts").innerHTML = GLANCE.Cobrowse.Visitor.loaded ? "Visitor" : "Loader";
                if (document.getElementById("glance_cbscript") && !GLANCE.Cobrowse.Visitor.loaded)
                    if (console) console.log("Visitor.loaded flag not set");
                else if (!document.getElementById("glance_cbscript") && GLANCE.Cobrowse.Visitor.loaded)
                    if (console) console.log("Visitor.loaded flag set but script not loaded");
            }
        }

    </script>
    <link rel="stylesheet" type="text/css" href="/cobrowse/test/styles/CobrowseTestMaster.css" />
</head>
<body id="ctl00_ctl00_top" class="home page custom-background">
    
    
        
    <h1>Cobrowse Tests</h1>

<div id="CrossOriginWarning">
	
          WARNING.  You are testing cobrowse "same-origin".  Please test cobrowse "cross-origin" at <a href="https://myglance.glanceqa.net/cobrowse/test">myglance.glanceqa.net</a>
          in order to mirror the scenario for customers, whose website domain will not match the domain of the web and session servers.
</div>

  <div class="headerlinks">

  <a data-toggle="collapse" aria-expanded="false" data-target="#cbsettings">
      Settings
        <i class="fa fa-chevron-right"></i>
        <i class="fa fa-chevron-down"></i>
  </a>
  <div id="cbsettings" class="collapse aboxcontent">
        <h5> <b>[Settings : Share]</b></h5>        
        <div class="cbinfo"><label>CobrowseCDN</label><span>staging-cdn.myglance.net</span></div>
        <div class="cbinfo"><label>CobrowseWebserver</label><span>www.myglance.net</span></div>
        <div class="cbinfo"><label>GroupID</label><span>8757</span></div>        
        <div class="cbinfo"><label>Site</label><span>staging</span></div>                
          <div class="btn btn-info"><a href="TestPageSettings.php">Change</a></div>       
  </div>

    <a href="/cobrowse/test">List of Cobrowse Test Pages</a> |
    <a href="#" data-glancebutton="startSession">Start Cobrowse</a> |
    <a href="#" data-glancebutton="showButton">Show Button</a> |
    <a href="#" glance_button="toggleButton">Toggle Button</a> |
    <a href="#" data-glancebutton="showTerms">Show Terms</a> |
    <a href="#" id="pausesession">Pause Session</a> |
    <a href="#" id="pausemessage">Pause Message</a> |
    <a href="#" id="resumesession">Resume Session</a> |
    <a href="#" glance_button="stopSession">Stop Session</a> | 
    <a href="?changegroup=1">Change Group (during session)</a> |
    <a href="#" data-toggle="collapse" data-target="#testheader">Options</a><br />
    <div id="testheader" class="collapse">
        View this page:
        <ul id="modelinks">
        <li><a href="ProxyTestRedirectingIframe.php">insecure, no parameters</a></li>
        <li><a href="ProxyTestRedirectingIframe.php">securely</a></li>
        <li><a href="ProxyTestRedirectingIframe.php">on subdomain</a></li>
        <li><a href="ProxyTestRedirectingIframe.php">on main domain</a></li>
        <li><a href='ProxyTestRedirectingIframe.php?visitorid=00000'>as identified visitor with visitorid=00000, visitor guest info set in GLANCE_COBROWSE</a></li>
        <li><a href='ProxyTestRedirectingIframe.php?IE9Compat=1'>IE9 compatibility mode (insecure)</a></li>
        <li><a href='ProxyTestRedirectingIframe.php?IE9Compat=1'>IE9 compatibility mode (secure)</a></li>
        <li><a href='ProxyTestRedirectingIframe.php?IE9Compat=1&FFUserAgent=1'>IE9 compatibility mode with ff12 user agent</a></li>
        </ul>
        <a href="#" onclick="CheckLoadedScript();">Check which cobrowse script is currently loaded</a> <span id="scripts"></span><br />
    </div>

    </div>

        <!-- HeaderContent -->
    

    <div id="content">
        
    <div class="aboxcontent">
    
    See bug 13520.  The iframe redirects before uploading secured resource /cobrowse/test/SecureStatic.ashx?resource=styles5.css 
    <div class="cssstyle5">iframe redirects before uploading resources</div>

</div>

    </div>

    <!-- /div#envelope -->
    
        Glance Networks, Inc.
    
    <script src="/site/jquery-3.6.0/jquery-3.6.0.min.js" ></script>
    <script src="/include/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="/include/bootstrap/3.4.1/css/bootstrap.min.css"  />
  <link rel="stylesheet" href="/include/font-awesome/4.7.0/css/font-awesome.css"/>
 
  <script src="/include/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script>
          jQuery(window).ready(() => {
              jQuery("#pausesession").click(() => {
                  GLANCE.Cobrowse.Visitor.pauseSession({ pause: true })
              })
              jQuery("#pausemessage").click(() => {
                  GLANCE.Cobrowse.Visitor.pauseSession({
                      pause: true,
                      message: "The session is paused.  Let the member know you can't see their screen.  Screen Share will resume when they return to a page you have permisison to view."
                  })
              })
              jQuery("#resumesession").click(() => {
                  GLANCE.Cobrowse.Visitor.pauseSession({ pause: false })
              })
          })
      </script>
  
    <script>
        if (window.location.href.indexOf("redirected") <= 0) {
            jQuery(window).ready(function () {
                window.setTimeout(function () {
            window.location.href = "ProxyTestRedirectingIframe.php?redirected";
                }, 200)
            });
        }
    </script>


    <script src="/site/wp/content/theme/js/script.js"></script>
    
</body>
</html>
