


<?php
$randomValue = random_int(100000000, 999999999);
$currentHost = $_SERVER['HTTP_HOST'] ?? 'localhost';
?>
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
    
    
    
    
    <link rel="stylesheet" href="styles/styles2.css" crossorigin=""/><!--To repro GD-20864, No line break here --><link rel="stylesheet" href="styles/styles9.css" />
    <!-- Tests integrity attribute as well as a 302 redirect -->
    <link rel="stylesheet" href="styles/styles6.css" integrity="sha384-1JVmFxvKv4x0GPIaISiDvNTK/u5OGX6+T5kyiXg+zSA8jxOyN79567a2yzNPXCw6" crossorigin="anonymous"/>
    <link rel="stylesheet" href="styles/styles4.css"/>
    <link rel="stylesheet" href="styles/styles8.css"/>
    <link rel="stylesheet" href="styles/stylesCDN.css" />
    
    <link rel="stylesheet" href="styles/glance-no-fetch.css"/>
    <link rel="stylesheet" href="styles/webserver-200.css" />
    <link rel="stylesheet" href="styles/gd18192.css" />
    <link rel="stylesheet" href="styles/styles3.css"/>
    <link rel="stylesheet" href="proxytest1/ProxyTestCSS-1.css" />
    <link rel="stylesheet" href="proxytest1/ProxyTestCSS-4.css" />
    <link rel="stylesheet" href="styles/ISO-8859-CSS.css"/>
    <link rel="stylesheet" id="blobstylesheet" />
    <link rel="stylesheet" href="data:text/css;charset=utf-8,%23dataurlcss%7Bbackground-color%3A%23dffc03%3B%7D}" />
    <meta id="params"
        data-otherdomain="<?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?>"
        data-relativeimagepath="images/glance.png"
        />
    
    <style>
        h4 {
            margin-bottom: 10px;
        }
        table {
            border: 1px solid black;
            padding: 2px;
        }
        tr {
            border-bottom: 1px solid gray;
            padding: 2px;
        }
        td {
            padding: 2px;
        }
        td div {
            height: 30px;
            width: 200px;
        }
        #random {
            border: 2px solid green
        }
        .inlinestyleroot {
            background-image: url(/cobrowse/test/images/glance7.png);
            border: 2px solid orange;
        }
        .inlinestyleabs {
            background-image: url(https:images/glance3.png);
            border: 2px solid yellowgreen;
        }
        .styleattr {
            border: 2px solid #ff00dc;
        }
        .svgicon {
            width: 40px;
            height: 40px;
            fill: hsl(0, 100%, 80%);
        }
        form table {
            width: 500px;
            display: inline-block;
        }
        form td {
            border-bottom: 1px solid gray;
            vertical-align:top;
        }
    </style>

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
        <li><a href="TestProxyResources.php">insecure, no parameters</a></li>
        <li><a href="TestProxyResources.php">securely</a></li>
        <li><a href="TestProxyResources.php">on subdomain</a></li>
        <li><a href="TestProxyResources.php">on main domain</a></li>
        <li><a href='TestProxyResources.php?visitorid=00000'>as identified visitor with visitorid=00000, visitor guest info set in GLANCE_COBROWSE</a></li>
        <li><a href='TestProxyResources.php?IE9Compat=1'>IE9 compatibility mode (insecure)</a></li>
        <li><a href='TestProxyResources.php?IE9Compat=1'>IE9 compatibility mode (secure)</a></li>
        <li><a href='TestProxyResources.php?IE9Compat=1&FFUserAgent=1'>IE9 compatibility mode with ff12 user agent</a></li>
        </ul>
        <a href="#" onclick="CheckLoadedScript();">Check which cobrowse script is currently loaded</a> <span id="scripts"></span><br />
    </div>

    </div>

        <!-- HeaderContent -->
    

    <div id="content">
        
    <div class="aboxcontent">
    
    <ol>
        <li>Turn on "Cobrowse Asset Management" for the group on the Group Cobrowse Settings page (back end).</li>
        <li>Upload <a href="https:styles/stylesCDN.css">stylesCDN.css</a> under Cobrowse Asset Management on the My Account cobrowse settings page using url <pre>https:styles/stylesCDN.css</pre></li>
        <li>Verify with and without "common cache" turned on.  The common cache can be cleared from the CServer stats page under "Resources" </li>
        <li>There will be a delay on the agent side as the cserver times out waiting for the "no fetch" resources, first page only.  On subsequent "navigate" the agent should update quickly.</li>
        <li>When using the different base tag options there may be scenarios where resources do not show on the visitor side (due to CORS) but do show on the agent side.  Customer websites won't be doing this.</li>
        <li>There may be CORS errors on the visitor side as the visitor attempts to retrieve some resources that it can't get - that's ok as long as the agent is 
            getting all the styles and images that display on the visitor side.</li>
        <li>Test the case of visitor navigates before visitor uploads all resources (need glance-delay-fetch with a few second delay ?)</li>
        <li>Verify that the agent requests <b>all resources</b> via the cserver not directly from this website.</li>
        <li>Verify that a second agent can join and gets the correct resources</li>
    </ol>
    <div>This number changes on navigate:<span id="random"><?= htmlspecialchars((string)$randomValue, ENT_QUOTES, 'UTF-8') ?></span></div> <!-- to indicate navigation took place -->


<form name="aspnetForm" method="post" action="/cobrowse/test/TestProxyResources.php" id="aspnetForm">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="MZwHZXtMM3t8oczVWxiOQiQGIFv/tYLL09y/XexfhZox5nANravGk81g0N2TUUaClTMT/3Pf64X5TDtckQ8mAQ9RprnZCkxAPkwHQz4u4hkuBxpiKapm/wkk3E5/Wd+V3iGZBCHmJJKJkFOqJoOmC/+rQthwC759H5co01G7iVhI9bgCghMFAJU+YFOqln77qfXAmhD95NTCDCnonLePrCb9p8V4SKqzLZEL6QZcK12WJvimeCA8WHcITjKbmGCVijpPMyXsyBAt42qMPpEQ67ZrpmwEAASHmFKM9ReRk8YiMZ3YbMl/m0atRDOK20JA/3GVzKg8yPnNbjWleOKSvCLlYy3kC9ZXsKdchC1LiXqv/6MhVEgMV72sW7gd8tub5EQFQlfuL8lz0Pg36wpY7r2WpYEqEiq6cGg51b0z8BiWQJdrN+3NZAkfyzesdwiducI8kftfrO48LqfOz6SopUDu/US8tKH9gTVlUoCZIxjHRKeHWmTnmMDh/47NNd1f31PndWyn4jpD/WYF3zsQs8wDTBaAcUKOQ03o7gVS7bi6wTf47xTbc+J6CV6b48qipuK0goHvIibAcLWaJEjjH4Uo9sqf6dhbiYFaur9TXxt/f918nuMq8wLBEyufF76Omoh3taMIPz2t9mpkrvpTf2yvZx9lijBeeR9C+y1ANtZ7Fdr++co4FQ4UtBZaimQxiOCEv/zCbfSHzsHREBXnoFEti4HaJDwsTmwxbf8hsLU7tjwwdayRsW2v2HpszMdEs0K5kjfoeK+iMtWnJvMG2rARAq3rxrwMxMiwo9hSefEvkzbzfrxV0348rNsMOT+6x6D8gCrWEuH5U5ZB+DFXKiy4NU3mBPARAP8YeQNOBD+URyq7ObKbi4Fh8ixEB06dQYf18aPnXaSJ1lx9j96tvwOIfBA2QWLJ4sBW5YkSbTDvMMRP1LEAwQxvQem5AmyHrUVtnMpS9T9ShMejWLhmf8VZjg5zL5hacQ7WgqklgFW7DIAl0Y7f5d9SuvgKD6a3oOmzVsXZ1caLsgN2eBQ2OQjRI1bmF6fz4F/7WOr1nAL74j6I1iBxGQT3t5BIGsLA2pmVq/bkFICKFvTI5u0a3IGVQCH6saW/oKAnV+B6d810YT5YTJ3gFQL/UouDBOP49UF7NHAIITsyGZkwJWJA+i+s7bM1uWVjpyJRGwYo38z8eAm0xEjNEpnbUXeLw2nAyl0RmjMvrjZiq9nWw34kJlSJjADiHnj67ok70VXmw22npexaDroA2voCnITVvyZvTE9dcao2e8aUcpGnszn41iHd3daGZNPxrd5nZJotA0+uV8YqxCeeB0cmndQnjHPNKCzZ6NrRxxaeifwAC4w+9WXqqVnVuq1/xTZukjPjR6GxtJNCLLcyZJVHKVdsXh1hWB+DrZ9ovq1ReicYgiy0TOV+qEYkD7BRzX8fz4o/vXDtflk8jYhQxfwBs/Zw8ryLL8QU8cmoKq6PMowDKrQbIe9CJeaOLJ8Vg9DiQu2nKxdkyeXBJ6pUX6ouANAkljgjOTMicxlZ5wzTA9+qIiSrQ1oDZX+4Uz1XsW7dkYfwD2hie+XTRtNU4BgIuigdw8o6GJHoyjk4wxvDgiu0QVBX5NbsHhLVN3X34ox83W0isZf1Otjo3P2Wj4/zA+2aTN9JHzymBDkEodKliHObyCrreY4gIVQITkkE7tOrL9Zv5tIUcxC2PH3lRvQo3IuXuKWPvKAgUupasu2mhJ5979BqBoWMjHOSY8hFEjvMdbouPPIhckCjnMnn3sSVCVtW8T5k2hzfdalosKAjmZQwAnBfoCqaM+aqM/9/yDw4ncI+LxpE6jAQDLhyqjQyivJkab0kLlLIufdV32DEXt7RHZ8nbREPvEbvVKn8CL7dc2mYHRq2g2E2wp2wwzd5TukV5DLH" />

<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="199DDB02" />
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="9XabUCwn6QjDGjfRmqiPzi9xsDPTUHpypvzGrkUK4nH+ZE/UrFCr5uAXmdWVKNolryE2FYON+ZxouAJdktrqyaWi4tjzb3IZmf10opxTnxJbfMoqayQERsmyM4KCzoNu7BZk7Y2+b+VZ8jRJxvgmQqLSeZFOP89mm3eeSY+l1+H6q3lAoVdpTrxWqh540goRmW+juFd/SFa19QocCcpz3UuMrXLiQ2ctSkmsH30FMav8g83yfz0b+F/dmjggtEi3dqifeAG+OQMhv7qkCLbRFw==" /> 
        <div style="border:2px solid black;margin-top:5px">
            <h4>Error Cases</h4>
            <div>
                <div><input id="ctl00_ctl00_MainContent_CobrowseTestContent_BtnShowErrorCases" type="checkbox" name="ctl00$ctl00$MainContent$CobrowseTestContent$BtnShowErrorCases" /><label for="ctl00_ctl00_MainContent_CobrowseTestContent_BtnShowErrorCases">Show missing image error cases</label></div>
                <div><input id="ctl00_ctl00_MainContent_CobrowseTestContent_BtnShowCSSErrorCases" type="checkbox" name="ctl00$ctl00$MainContent$CobrowseTestContent$BtnShowCSSErrorCases" /><label for="ctl00_ctl00_MainContent_CobrowseTestContent_BtnShowCSSErrorCases">Show inaccessible css error case</label></div>

                
                
            </div>
        </div>
        
        
        <div style="border:2px solid black;margin-top:5px">
            <h4>Base tag type</h4>
            <div>
            <input id="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagNone" type="radio" name="ctl00$ctl00$MainContent$CobrowseTestContent$BaseTagType" value="BtnBaseTagNone" checked="checked" /><label for="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagNone">None</label>
            </div>
            <div>
            <input id="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagNoHref" type="radio" name="ctl00$ctl00$MainContent$CobrowseTestContent$BaseTagType" value="BtnBaseTagNoHref" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ctl00$MainContent$CobrowseTestContent$BtnBaseTagNoHref\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagNoHref">Base tag with no href attribute</label>
            </div>
            <div>
            <input id="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagOtherServer" type="radio" name="ctl00$ctl00$MainContent$CobrowseTestContent$BaseTagType" value="BtnBaseTagOtherServer" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ctl00$MainContent$CobrowseTestContent$BtnBaseTagOtherServer\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagOtherServer">Base tag with absolute href on another domain</label>
            </div>
            <div>
            <input id="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagRelativePath" type="radio" name="ctl00$ctl00$MainContent$CobrowseTestContent$BaseTagType" value="BtnBaseTagRelativePath" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ctl00$MainContent$CobrowseTestContent$BtnBaseTagRelativePath\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="ctl00_ctl00_MainContent_CobrowseTestContent_BtnBaseTagRelativePath">Base tag with relative path href proxytest1/proxytest2</label>
            </div>
            <div>
                <input id="ctl00_ctl00_MainContent_CobrowseTestContent_BtnPathChange" type="checkbox" name="ctl00$ctl00$MainContent$CobrowseTestContent$BtnPathChange" /><label for="ctl00_ctl00_MainContent_CobrowseTestContent_BtnPathChange">Change url (see address bar) with history.pushState()</label>
            </div>
        </div>
        
    <div style="height:20px"></div>

    
    <table>
        <tr><td style="width:250px">div styled by styles/styles2.css</td><td><div class="cssstyle2">orange, Roboto font</div></td></tr>
        <tr><td>div styled by styles/styles6.css with integrity attribute.</td><td><div class="cssstyle6">Sea green</div></td></tr>
        <tr><td>div styled by stylesCDN.css GD-1346.  Upload stylesCDN.css to CDN (see notes above)</td><td><div class="cssstyleCDN">Simulates CSP and cookie protected stylesheet</div></td></tr>
        <tr><td>add link with integrity attribute <button id="add-integrity-style">Add</button></td><td><div class="cssstyle7"></div></td></tr>
        <tr><td>div styled by cross domain styles/styles3.css</td><td><div class="cssstyle3">lightblue, Museo font</div></td></tr>
        <tr><td>div styled by css not fetched by visitor<br/>agent won't get this if using fakedomain</td><td><div class="glance-no-fetch">pink</div></td></tr>
        <tr><td>div styled by styles 9</td><td><div class="cssstyle9">coral</div></td></tr>
        <tr><td>div styled by secured css</td><td><div class="cssstyle4">purple</div></td></tr>
        <tr><td>div styled by webserver-200.css</td><td><div class="cssstyle200">brown</div></td></tr>
        <tr><td>div styled by gd18192.css</td><td><div class="cssstyleGD-18192">orange</div></td></tr>
        <tr><td>div styled by ss allow origin *</td><td><div class="proxytestcss-ashx4">green</div></td></tr><!-- styled by /cobrowse/test/proxytest1/ProxyTestCSS.ashx?whichcss=4 -->
        <tr><td>div styled by stylesheet with data:text/css url GD-21901</td><td><div id="dataurlcss">yellow</div></td></tr>
        <tr><td>img with relative src url</td><td><img src="images/glance.png"/></td></tr>
        <!-- cross origin redirecting request won't be accessible by visitor -->
        <tr><td>img with redirect</td><td><img src="images/glance1.png"/></td></tr>
        <tr><td>img with dots url</td><td><img src="../test/images/glance.png"/></td></tr>
        
            <tr><td>secured image relative url</td><td><img src="images/glance.png"/></td></tr>
            <tr><td>secured image webserver-200 url</td><td><img src="images/webserver-200.png"/></td></tr>
        
        <tr><td>secured cross-protocol image</td><td><img src="images/glance2.png"/></td></tr>
        <tr><td>img with root based src url<button id="change-src">Change image src</button></td><td><img id="image1" src="/cobrowse/test/images/glance.png"/></td></tr>
        <tr><td>css ISO 8859 encoded</td><td><div class="cssstyleISO8859"></div></td></tr>
        <tr><td>css contains absolute src url</td><td><div class="cssabsoluteurl"></div></td></tr>
        <tr><td>css contains url to other server</td><td><div class="cssotherserverurl"></div></td></tr>
        <tr><td>css contains url to other server</td><td><div class="cssotherserverurl2"></div></td></tr>
        <tr><td>stylesheet from other server</td><td><div class="proxytestcss-ashx1"></div></td></tr>
        <tr><td>ss imported by ss from other server</td><td><div class="proxytestcss-ashx2"></div></td></tr>
        <tr><td>ss imported second degree</td><td><div class="proxytestcss-ashx3"></div></td></tr>
        <tr><td>inline css contains root path url</td><td><div class="inlinestyleroot"></div></td></tr>
        <tr><td>inline css contains absolute url</td><td><div class="inlinestyleabs"></div></td></tr>
        <tr><td>css contains relative url</td><td><div class="cssrelativeurl"></div></td></tr>
        <tr><td>style attribute contains relative url</td><td><div class="styleattr" style="background-image:url('images/glance8.png')"></div></td></tr>
        <tr><td>
            style attribute contains root path url
            <button id="modifystyleattr">Change style attribute</button>
            </td>
            <td><div class="styleattr" id="div-with-style-attr" style="background-image:url('/cobrowse/test/images/glance.png')"></div></td></tr>
        <tr><td>style attribute contains absolute url</td><td><div class="styleattr" style="background-image:url('images/glance4.png')"></div></td></tr>
        <tr><td>Zero content length image</td><td><div style ="background-image: url('images/ZeroContentLength.png')" /></td></tr>
    </table>
    <table>
        <tr><td>div uses secured font</td><td><div class="cssstyle-museo">Museo secured font</div></td></tr>
        <tr><td>div styled by blob: style</td><td><div class="blobstyle1">orange</div></td></tr>
        <tr><td>Image with blob url</td><td><img id="blobimage" /></td></tr>
        <tr><td  style="width:250px">&lt;picture&gt; tag (changes with window resize)
            <button id="change-srcset">Change srcset attribute</button>
            </td>
            <td  style="width:250px">
            <picture>
              <source id="source1" media="(min-width: 1200px)" srcset="/cobrowse/test/images/glance2.png">
              <source id="source2" media="(min-width: 600px)" srcset="/cobrowse/test/images/glance3.png">
              <img src="/cobrowse/test/images/glance.png" alt="Flowers" style="width:auto;">
            </picture>
            </td>
        </tr>
        <tr><td>srcset with multiple images GD-19261</td><td><img class="sizedimage" srcset="/cobrowse/test/images/glance5.png 140w, /cobrowse/test/images/glance4.png 70w" 
                src="/cobrowse/test/images/glance.png" /></td></tr>
        <tr><td>img with long query string</td><td><img src="images/glance.png?ci=90010/394&st=1541087876164&vn1=4.2.7.1BOA&ec=utf-8&pi=Ent%3AMkt%3AMulti%3BMultiproduct_RWD&ul=https%3A//promo.bankofamerica.com/multiproduct/%3Fcm_mmc%3DENT-Consumer-_-Google-PS-_-bank%2520of%2520america-_-Control%2520-%2520High%2520Volume%2520-%2520Bank%2520Of%2520America%2520Exact_Bank%2520Of%2520America%2520Exact%26%26device%3Dc%26gclsrc%3Daw.ds&tid=8&ti=1541088721240&nm=BBA_MultiproductRWD_Desktop&hr=https%3A//secure.bankofamerica.com/mycommunications/public/appointments/getTopics.go%3FmarketingCode%3DBRANDMPPAIDSRCH_ECSRC"/></td></tr>
        <tr><td>img with long query string and relative url</td><td><img src="../../../../../../cobrowse/test/images/glance.png?ci=90010/394&st=1541087876164&vn1=4.2.7.1BOA&ec=utf-8&pi=Ent%3AMkt%3AMulti%3BMultiproduct_RWD&ul=https%3A//promo.bankofamerica.com/multiproduct/%3Fcm_mmc%3DENT-Consumer-_-Google-PS-_-bank%2520of%2520america-_-Control%2520-%2520High%2520Volume%2520-%2520Bank%2520Of%2520America%2520Exact_Bank%2520Of%2520America%2520Exact%26%26device%3Dc%26gclsrc%3Daw.ds&tid=8&ti=1541088721240&nm=BBA_MultiproductRWD_Desktop&hr=https%3A//secure.bankofamerica.com/mycommunications/public/appointments/getTopics.go%3FmarketingCode%3DBRANDMPPAIDSRCH_ECSRC"/></td></tr>
        <tr><td>img with absolute src url same domain</td><td><img src="images/glance.png"/></td></tr>
        <tr><td>img with absolute src url no protocol</td><td><img id="absurlimage" src="images/glance3.png"/></td></tr>
        <tr><td>img with absolute src url other domain</td><td><img id="xdomimage" class="sizedimage" src="images/glance4.png"/></td></tr>        
        <tr><td>unnecessary port number (:443) in URL </td><td> <img src="images/glance3.png"></td></tr
        <tr><td>"no fetch" image won't be fetched by visitor</td><td><img src="images/glance-no-fetch.png"/></td></tr>
        <tr><td>img with too many .. in url (supported 6.29 and later)</td><td><img src="../../../cobrowse/test/images/glance9.png"/></td></tr>
        <tr><td>added image with relative url<br/><button id="add-image">with Relative URL</button></td><td id="added-image"></td></tr>
        <tr><td>added image with absolute url<br/><button id="add-image-absoluteurl">with Absolute URL</button></td><td id="added-image-absoluteurl"></td></tr>
        <tr><td>added image with srcset attribute<br/>(not supported on ie11)<br/><button id="add-image-srcset">with srcset attribute</button>   </td><td id="added-image-srcset"></td></tr>
        <tr><td>image with srcset<br/> (not supported on ie11)</td><td><img srcset="/cobrowse/test/images/glance6.png 2x"/></td></tr>
        <tr><td>image with // in the URL<br/></td><td><img srcset="/cobrowse/test//images/glance6.png 2x"/></td></tr>
        <tr><td>svg icon relative url
            <div style="border:2px solid red;background-color:orangered;font-size:11px">
                NOTE xlink:href (left) is <a style="font-size:11px" href="https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/xlink:href">deprecated</a> but should work with 6.29 viewer
            </div>
            </td>
            <td>
                
                <svg viewBox="0 0 18 18" class="svgicon" style="background-color: gray">
                    <use xlink:href="/cobrowse/test/images/externalsvg.svg#svg4619"></use>
                </svg>

                <svg viewBox="0 0 18 18" class="svgicon" style="background-color:cornflowerblue">
                    <use href="images/externalsvg.svg#svg4619"></use>
                </svg>
            </td>
        </tr>

        <tr><td>SVG with use tag href referencing another SVG on the page
            <div style="font-size:11px">

            </div>
            </td>
            <td>
                
                <svg class="sdps-icon sdps-icon--own-your-tomorrow sc-responsive-footer" style="height:50px"><title class="sc-responsive-footer" data-gid="4524">Own your tomorrow ®</title><use xlink:href="#sdps-icon--own-your-tomorrow" class="sc-responsive-footer"></use></svg>

                <svg style="display:none" class="svg__symbol-definitions sc-responsive-svg-def" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs class="sc-responsive-svg-def"><symbol id="sdps-icon--own-your-tomorrow" viewBox="0 0 384.02 55" class="sc-responsive-svg-def"><style class="sc-responsive-svg-def">.own-your-tomorrow-1,
                .own-your-tomorrow-2 {
                  fill: #231f20;
                }</style><path class="own-your-tomorrow-1 sc-responsive-svg-def" d="M298.25,23.87a.42.42,0,0,1-.25-.1,1,1,0,0,0-.67-.22,2.73,2.73,0,0,0-.94.21c-8.2,3.53-9.43,8.32-9.44,8.37a6.87,6.87,0,0,0-.22,1.64,1.74,1.74,0,0,1-.33,1.17,1.68,1.68,0,0,1-.3.29,2,2,0,0,1-1.14.39,1.55,1.55,0,0,1-.78-.21,1.38,1.38,0,0,1-.38-.37,1.84,1.84,0,0,1-.16-.36c-.61-2.48,2.74-9.37,3.91-11.66a12.38,12.38,0,0,1-8,3.45h-.27c-.59,0-1-.06-1.33-.11l-.91-.13-.6-.09a12,12,0,0,1-2.95,4.75,6.89,6.89,0,0,1-3.68,2.2h0a4.72,4.72,0,0,1-3.09-.39,1.41,1.41,0,0,1-.32-.22l-.11-.09,0,0-.06,0,0,0,0,0a3.63,3.63,0,0,1-.79-1.5l-.36.27c-1.35,1-4.55,3.37-8.31,3.28a3.68,3.68,0,0,1-.9-.17,1.35,1.35,0,0,1-.83-.87c-.44-1.35.9-3.52,1-3.61,2.05-3.4,2-4.56,1.77-4.95a.44.44,0,0,0-.34-.23h0a.76.76,0,0,0-.21,0c-2,0-5.21,6-5.23,6.11-.8,2.06-1.79,2.38-2.31,2.38a1,1,0,0,1-.47-.1,1.09,1.09,0,0,1-.52-.82c-.22-2,3.79-6.24,4.23-6.69a1.35,1.35,0,0,0-.21-1,.75.75,0,0,0-.6-.22,4.59,4.59,0,0,0-1.91.66l-.38.22a21.86,21.86,0,0,0-2.31,2h0c-5.17,5.61-7,7-7.6,7.37a.8.8,0,0,1-.4.11h-.14a1,1,0,0,1-.92-.47c-1-1.55,1.18-6.6,1.81-8a8,8,0,0,1-3.55.79,8.93,8.93,0,0,1-1.3-.09c-3.9,7.74-8.15,8.79-9.36,8.92a2.6,2.6,0,0,1-.47,0,3.19,3.19,0,0,1-2.66-1.52c-.87-1.61-.05-4,.35-4.9-.68.45-1.77,1.15-2.24,1.44l0,0c-6.14,4.24-9.76,5.13-11.72,5.13a4.14,4.14,0,0,1-2.07-.45,2.61,2.61,0,0,1-.43-.33,4.31,4.31,0,0,1-.38-.38c-2.64-3-.41-7.8,1.42-10.64-8.43,9-12,10.66-12.17,10.73a12.31,12.31,0,0,1-4.39,1.43l-.46,0a4.55,4.55,0,0,1-.92-.1,2.33,2.33,0,0,1-2-2.67,1,1,0,0,1,.05-.32.75.75,0,0,1,.93-.47c.09,0,.34.12.42.15a4.81,4.81,0,0,0,1.71.27c3.2,0,10.18-2.22,21.07-17-2.83.58-15.22.77-15.77.78-5.27-.11-7.17-1.06-7.84-1.83a1.06,1.06,0,0,1-.32-.76c0-1.66.84-1.91,1.33-1.91a1.94,1.94,0,0,1,.56.1.67.67,0,0,1,.28.21c.65.92,3.91,1.72,3.94,1.73a24.24,24.24,0,0,0,6.1.63,82,82,0,0,0,13.09-1.31c3.36-8.38,6.11-9.5,7.13-9.59h.31l.31,0,.31.06h0a1.51,1.51,0,0,1,1.26,1.05c.55,2.13-4,6.59-5.27,7.75a105.3,105.3,0,0,1,12.41-.79c2.25,0,3.52.1,3.54.1,1.36.12,2.21.52,2.54,1.18a2.15,2.15,0,0,1-.31,2,1,1,0,0,1-.19.23,1.12,1.12,0,0,1-.75.31c-.78,0-1.34-.94-1.49-1.23l-.07-.05a12.17,12.17,0,0,0-5.05-.82,60.7,60.7,0,0,0-12.39,1.75C209.34,25,208,29.25,208,31.15h0v.05a2.48,2.48,0,0,0,0,.29c.07.42.39,1.16,1.73,1.35l.39,0a14.84,14.84,0,0,0,3.45-.51c.5-.14,1-.31,1.62-.52a25.81,25.81,0,0,0,7.67-4.28,5.49,5.49,0,0,0,1.66-2.22c1.31-5.19,4.3-4.92,5-4.77a3.13,3.13,0,0,1,.43.16,1.9,1.9,0,0,1,1.21,1.53c.13,1.89-3.09,4.11-3.23,4.21-3.63,2.74-2.72,5-2.35,5.64a2,2,0,0,0,.15.2,2.23,2.23,0,0,0,1.45.58c2.93,0,6.07-6.11,6.52-7-3.11-1.84-2-4.1-2-4.12a2.28,2.28,0,0,1,2-1.23,3.28,3.28,0,0,1,.46,0,2.7,2.7,0,0,1,.35.12c1.68.87,1.46,3,1.37,3.55a2.62,2.62,0,0,0,.57.06c2,0,5.18-1.71,5.56-1.91,1-2.17,2.38-2.52,2.94-2.57h.38l.34,0c1.31.15,1.33,1,1.33,1,.28,2.38-3.37,3.56-3.8,3.69a9.68,9.68,0,0,0-1.79,5.07c6.58-7,9.69-8.61,11-9a5.65,5.65,0,0,1,.7-.13,2.11,2.11,0,0,1,.51,0,1.49,1.49,0,0,1,.31.06c1.2.31,1.13,2.15,1,3,1.31-1.39,2.52-2.09,3.58-2.09a2.31,2.31,0,0,1,2,1.15c1,1.79-.38,4.53-1.38,6.53-.54,1.09-1.05,2.13-.92,2.52a.21.21,0,0,0,.11.13,2,2,0,0,0,.9.19c1.07,0,2.7-.61,5.11-1.94l.88-.49a8.32,8.32,0,0,1,1.31-3.4l.16-.26.26-.39c.06-.07.1-.14.14-.19s.39-.45.39-.45l.39-.43a3.93,3.93,0,0,1,2.21-1.15h0a1.41,1.41,0,0,1,.25,0,1.08,1.08,0,0,1,.81.32,1.31,1.31,0,0,1,.24,1.06v.06c-.12,1.13-1.23,2.64-3.32,4.51a3.3,3.3,0,0,0,.45.31,3.17,3.17,0,0,0,1.56.42,4.82,4.82,0,0,0,3.37-1.73,14.35,14.35,0,0,0,1.77-2.31,3.69,3.69,0,0,1-2.63-2.49,3,3,0,0,1,0-1.62,2.92,2.92,0,0,1,3-2.39,4.05,4.05,0,0,1,.88.1,2.23,2.23,0,0,1,1.42,1.09,3.63,3.63,0,0,1-.38,2.74l.19.06a7.17,7.17,0,0,0,.7.23,4.4,4.4,0,0,0,.67.14l.44.05c4.23.32,10.16-4.7,10.8-5.26a.56.56,0,0,1,.31-.11.67.67,0,0,1,.62.37c.62,1.24-2,5.64-3.05,7.23,4.92-3.49,8.42-5.33,10.11-5.33.71,0,1,.32,1,.52a1.67,1.67,0,0,1,.08.29,2.29,2.29,0,0,1-.26,1.9,1.23,1.23,0,0,1-.93.41M384,21.61c0-.44-.26-1.48-1.81-1.55h-.37c-.94-.07-5.83-.43-9.59-.43H372l-.79,0c-.78.05-1.9.12-2.35.17-1.51.15-3.73.4-5.71.7l-1,.17-1.42.25a24.82,24.82,0,0,1-2.64.15,16.28,16.28,0,0,1-5.07-.71,1.59,1.59,0,0,0-.35-.08,1.78,1.78,0,0,0-.42,0,2.19,2.19,0,0,0-1.66.88,3.55,3.55,0,0,0,0,3.05,6.37,6.37,0,0,1-.38,4.46,4.72,4.72,0,0,1-3.16,2.16,5,5,0,0,1-1.2.16,2,2,0,0,1-1.75-.74c-.56-.81-.48-2.24.25-4.27.25-.25,2.42-2.51.73-4.47a2.33,2.33,0,0,0-.55-.43,2.69,2.69,0,0,0-1.25-.33c-1.08,0-2.43.8-2.81,4.61a17.57,17.57,0,0,1-5.37,4.44c-2,1-3.48,1.2-4,.5-.33-.49-.26-1.38.22-2.65a15.25,15.25,0,0,1,2.07-4c.16-.13,1.64-1.27,1.56-2.4A1.62,1.62,0,0,0,334,20a2.83,2.83,0,0,0-.41-.17,1.62,1.62,0,0,0-.66-.06c-.95.15-2.33,1.11-3.57,4.84a10.51,10.51,0,0,1-2.48.36,3.83,3.83,0,0,1-3.68-2.06,5.1,5.1,0,0,0-1.48-3.19l0,0a.24.24,0,0,0-.09-.06l-.07,0a1.65,1.65,0,0,0-.59-.2,1.8,1.8,0,0,0-1.74.57,1,1,0,0,0-.18.28,1.68,1.68,0,0,0-.08.25,3.76,3.76,0,0,0,.31,2.07c.05.13.09.26.15.39s.05.1.14.24a4.22,4.22,0,0,0,.48.71A14.66,14.66,0,0,0,321.12,25l.13.12c-.56,1.68-2.26,4.66-4.55,5.82a3.69,3.69,0,0,1-1.31.32,1,1,0,0,1-.85-.34,2.52,2.52,0,0,1-.17-2,12,12,0,0,1,2.36-4.75,4.76,4.76,0,0,1,.68-.17,1.27,1.27,0,0,0,1-.73,1.9,1.9,0,0,0,.11-1.45,1,1,0,0,0-.78-.5l-.28,0h-.05a8.55,8.55,0,0,0-2.6.24l-.29.08-.23.06-1.09.36c-2.41.91-7.9,3.15-10.27,5.43a10,10,0,0,0,.83-3.13v-.1c0-.2,0-.41,0-.62,0,0,0-.2,0-.3s-.12-.55-.72-.55A3.54,3.54,0,0,0,302,23s-1.45.47-.89,2.8A8.8,8.8,0,0,1,298.64,32a2,2,0,0,0-.54,1.65c.16.59.73,1,1.72,1.34a1.51,1.51,0,0,0,.33.06,1.1,1.1,0,0,0,1.1-.88,1.69,1.69,0,0,1,.1-.27l.16-.3a27.15,27.15,0,0,1,7.8-7.35,14.75,14.75,0,0,1,4.11-1.61,22.12,22.12,0,0,0-1.09,2.78l-.11.33c-.05.12-1.3,3.19-.1,5.31a3.9,3.9,0,0,0,3.05,1.82s.19,0,.38,0a3.25,3.25,0,0,0,.46,0c1.09-.19,3.76-1.12,5.48-5.58l.14-.38s0,0,0,0l.26-.78s.06-.21.14-.54l.06-.22c0-.17.07-.34.11-.52l0-.16c.06-.24.11-.48.16-.74a7,7,0,0,0,3.72.9,16.67,16.67,0,0,0,2.47-.21c-.12.37-.21.73-.29,1.07l-.11.46c-.29,1.2-.79,3.22.17,4.45.68.85,1.94,1.17,3.78,1,.05,0,4.77-.66,8.29-6.08a6,6,0,0,0,1.06,4.17A4.34,4.34,0,0,0,345,33l.79,0c.29,0,7.15-.1,8.79-8.92,1.11-.24,12.75-2.69,17.47-2.69h.15c.67,0,6.58.08,10.48,2.6a.77.77,0,0,0,.39.11c.41,0,.9-.34.94-1.92a5,5,0,0,0,0-.55M32.19,11.14c-1.34,13.44-10.13,19.24-12.8,20.69-.48.26-1.27.6-1.46.68a23,23,0,0,1-8.42,2A8.57,8.57,0,0,1,2.9,31.83C-.44,28.2,0,22,.05,21.92,1.51,4.65,13.46,1,17.08.23c.05,0,.34-.07.64-.1l.69-.06C22.16-.11,24.4.44,25,1.7a2.32,2.32,0,0,1-.29,2.21,2.08,2.08,0,0,1-1.83,1,4.08,4.08,0,0,1-1.7-.44,3.35,3.35,0,0,0-.45-.19,9.69,9.69,0,0,0-5.5-.06,18.33,18.33,0,0,0-10.71,9C-.86,25,4.67,29.71,6.49,30.88l.51.26c.29.13.59.24.66.26a15.05,15.05,0,0,0,3.89.53c7.85,0,12.86-6.6,14.65-9.43l.43-.7a2.93,2.93,0,0,1-.51.13,1.77,1.77,0,0,1-.33,0,2.66,2.66,0,0,1-1.43-.44A10.2,10.2,0,0,1,22,19.45a9.82,9.82,0,0,1-1.75-3.17,8.49,8.49,0,0,1-.13-6A8,8,0,0,1,26,4.6,5.12,5.12,0,0,1,30.74,6c1.74,1.92,1.46,5,1.45,5.17M28.27,9.9a2.84,2.84,0,0,0-2.19-1.44l-.47,0a4.17,4.17,0,0,0-2.79.93l-.11.11-.05,0a6,6,0,0,0-.53.84,4.93,4.93,0,0,0-.23,2.69,8.51,8.51,0,0,0,3.48,5.66,2.94,2.94,0,0,0,.47.31,2.72,2.72,0,0,0,.44.18,4.54,4.54,0,0,0,.64.13,1.2,1.2,0,0,1,.78.3l.21-.47c1.46-3.72,1.59-7.28.35-9.27M80.71,24.53a3.32,3.32,0,0,0-2,1.13c-.49.49-1,1-1.46,1.58h0l0,.06-.73.88c-1.49,1.69-2.64,2.51-3,2.07-.14-.17-.28-.6-.12-1.72s1.22-4,1.23-4c.75-2.29.81-3.95.17-4.93a1.61,1.61,0,0,0-1.1-.75c-2.6-.29-7.17,3.39-9.52,5.46,1.92-2.68.93-3.91.88-3.95-.85-1.47-4.84-2.13-5-2.16a5.27,5.27,0,0,0-.68,0,4.17,4.17,0,0,0-3.87,2.68A27.92,27.92,0,0,1,53.05,26c-1.51,2.48-2.93,3.12-3.65,3.28a1.38,1.38,0,0,1-.33,0,3.47,3.47,0,0,1-.38,0,1.83,1.83,0,0,1-1.42-1.09c-.35-1.05.71-2.41.72-2.42,1.88-2.56,1.33-3.74,1-4.13a.92.92,0,0,0-.28-.2,1.19,1.19,0,0,0-.44-.09c-.83,0-1.17,1-1.18,1.09a10,10,0,0,1-3.24,5.41l-.3.25a7.42,7.42,0,0,1-3,1.78l-.38.08a4.57,4.57,0,0,1-.58.06H39.4L39,30a3.73,3.73,0,0,1-.51-.14,1.2,1.2,0,0,1-.58-.68,1.09,1.09,0,0,1-.05-.17c0-.16,0-.41-.06-.51-.14-5.32,4-10,4.06-10.06A3.24,3.24,0,0,0,43,16.3a1.2,1.2,0,0,0-.25-.63,1.4,1.4,0,0,0-1.06-.62,1.37,1.37,0,0,0-.92.44,2.39,2.39,0,0,0-.33.52,47.85,47.85,0,0,1-3.58,5.83c-5.2,7.15-8.82,7.71-9.81,7.71a1.62,1.62,0,0,1-.38,0c-.66-.12-1,.16-1,.83a1.79,1.79,0,0,0,1.54,1.85c2.44.16,5-2.12,6.29-3.44L34,28.3c.42-.42,1.06-1.07,1.33-1.07,0,0,0,0,.06,0a1.6,1.6,0,0,1-.05.92c-1.5,5.37.29,6.15.34,6.17a2.06,2.06,0,0,0,1.08.27,6.61,6.61,0,0,0,2.93-1l.47-.25a15.8,15.8,0,0,0,4.38-3.64l.17-.18a1,1,0,0,1,.52-.23c.37,0,.44.61.44.61.2,3.45,2.18,3.78,2.78,3.8h0l.24,0c6-.9,8.17-11.83,8.26-12.29a1.35,1.35,0,0,1,1.46-1,5.76,5.76,0,0,1,2.24.61l.2.09.24.11a1.63,1.63,0,0,1,1,1.13c.21,1.05-.76,2.33-1.35,3,0,.05-.84,1-.88,1.05-2.31,3.14-2.51,4.64-2.42,5.25a1.08,1.08,0,0,0,.26.51,1.9,1.9,0,0,0,1.37.65,2.7,2.7,0,0,0,1.83-.95,4,4,0,0,0,.33-.44c.07-.12.13-.24.16-.3a21,21,0,0,1,5.82-7l.31-.2c2.09-1.21,3.38-1.75,4.16-1.75a.81.81,0,0,1,.87.67c.44,1.77-1.89,6.51-1.91,6.56s-.92,2.11-.16,3.28a2,2,0,0,0,1.83.8h.11a7,7,0,0,0,1.41-.2,3.09,3.09,0,0,0,.37-.12,30.73,30.73,0,0,0,7.2-4.73h0l.11-.08.25-.23a1.93,1.93,0,0,0,.69-2c-.38-1.11-1-1.67-1.72-1.67m103.63-1.67c0,.25-.24,2.36-1.1,2.36a1,1,0,0,1-.69-.43,1.73,1.73,0,0,0-1.4-.67,1.7,1.7,0,0,0-.6.09,22.76,22.76,0,0,0-3.07,1.6,15.84,15.84,0,0,0-5.91,6.52A9.65,9.65,0,0,0,171,34c0,.12-.05.24-.07.36a9,9,0,0,0-.12.92c-.05.33-.37.52-.85.52a2.28,2.28,0,0,1-1-.25l-.05,0a.35.35,0,0,1-.14-.1.69.69,0,0,1-.11-.13l-.06-.08c-.81-1.31.61-5,2.1-8.1-1.45,1.42-5.49,4.9-9.88,4.9h-.1a3.14,3.14,0,0,1-.44,0l-.44,0h0c-.19,0-.36-.08-.37-.08a2.73,2.73,0,0,1-1.92-2.1c-.74,1.23-3.69,5.71-7.62,5.71a5.47,5.47,0,0,1-.9-.08,3,3,0,0,1-2.2-1.36c-.47-.91-.24-2.16.66-3.69.76-1.29,2.63-4.8,2.21-5.71a.27.27,0,0,0-.2-.17c-.5.29-4.57,2.66-7.67,2.66a5.35,5.35,0,0,1-.58,0c-.37,1-3.57,9.14-9.28,9.14-.23,0-.45,0-.68,0a3.39,3.39,0,0,1-2.46-1.57c-.6-1.14-.38-2.71.66-4.69,0-.05,2.45-3.76,2.32-5.22a2.09,2.09,0,0,0-.09-.41c-.12-.25-.42-.38-.88-.38-1,0-2.71.64-5,1.89-.08.05-8.81,5.52-10.79,7.48-.54,1.08-10.47,20.6-17.55,22.14a3.68,3.68,0,0,1-.58.07h0a2.86,2.86,0,0,1-2.13-1.2c-.76-1.1-.8-2.83-.12-5.14,0-.07.08-.27.16-.49a7.47,7.47,0,0,1,.35-.82c1.11-2.08,5.66-9.38,17.58-16.1.49-1,1.64-3.77,1.2-4.63a.41.41,0,0,0-.32-.23l-.2,0a2.51,2.51,0,0,0-.34,0c-.48.12-2.09.85-6.84,5.15-.11.1-2.69,2.64-4.69,2.64a1.81,1.81,0,0,1-1.64-.95,1.43,1.43,0,0,1-.19-.57,4.24,4.24,0,0,1,1.11-3c.1-.13.34-.44.43-.59.39-.65,1.66-2.91,1.61-4.34a5.66,5.66,0,0,0-.06-.76c-.18-.85-.75-1.06-1.68-.64,0,0-4.7,3.06-8.33,5.74a4,4,0,0,1-2,.6,2.52,2.52,0,0,1-2.32-1.54,1.84,1.84,0,0,1-.16-1.36,1.06,1.06,0,0,1,.68-.6,1.93,1.93,0,0,1,.58,0c1,.15,5.27.45,10.07-4.26.19-.19,4.7-4.65,6.43-4.76h0a1.31,1.31,0,0,1,1.07.59c.57.87.34,2.54-.69,5-.74,1.56-2.61,5.78-2.3,6.63a.2.2,0,0,0,.06.09l.06,0s0,0,.22,0c.57,0,2.54-.56,8.38-5.79,0,0,2.59-2.59,3.78-3.9.06-.08,1.64-2.19,3.33-2.19a2.14,2.14,0,0,1,1.66.86,1.31,1.31,0,0,1,.23.88,3.85,3.85,0,0,1-1.64,2.43l-.26.19-.19.13c-.5.38-2.23,2-3.65,6.64,1.6-1.07,9.22-6,15.46-7.91a6.73,6.73,0,0,1,1.69-.24c2,0,3.09,1.14,3.11,3.22a2.84,2.84,0,0,1,0,.45,2.89,2.89,0,0,1-.7,1.34,3.92,3.92,0,0,1-.32.25l-.06,0-.38.23a6.88,6.88,0,0,0-2.94,4.9,1.68,1.68,0,0,0,.29,1.17c.39.42,1.15.3,2.23-.35,0,0,4.06-3.07,4.19-6.52a2.55,2.55,0,0,1-1.44-1.36,3,3,0,0,1,.45-2.58,3.23,3.23,0,0,1,.18-.28l0-.05a2.38,2.38,0,0,1,.4-.44,2.72,2.72,0,0,1,1.63-.61,3,3,0,0,1,2.26,1.31,3.06,3.06,0,0,1,.34.58,2.89,2.89,0,0,1,.11,1.83c.78,0,4.35-.1,9.12-3.1a2.31,2.31,0,0,1,1.17-.41c.51,0,1.13.3,1.15,1.74a2,2,0,0,1-.07.5,19.13,19.13,0,0,1-1.85,3.78c-.91,1.59-2.17,4.33-1.65,4.85a.83.83,0,0,0,.71.26c.82,0,2.72-.66,6.32-5.09.24-.81,2.14-6.87,3.85-6.87h.09a1,1,0,0,1,.79.47c.51.81.19,2.45-.95,4.87a11.79,11.79,0,0,0-.51,1.31l0,.08c-.13.33-.57,1.58-.1,2.29.37.56,1.27.66,2.61.3a18,18,0,0,0,7.46-4.88,45,45,0,0,0,3-3.61c.83-1.34,1.53-2,2.12-2a.75.75,0,0,1,.47.17.87.87,0,0,1,.15.13c.07.06,1.28,1.24-2.21,5.65l-.19.29,0,.06c-.07.1-.15.22-.23.36,4-2.74,6.89-4.23,8.35-4.33l.18,0h.15a1.67,1.67,0,0,1,1.77,1.82M112.17,34.54c-6.31,4.3-16.46,12.52-15.34,16.59a1.54,1.54,0,0,0,.37.65c.5.55,1.28.52,2.3-.09.06,0,6.85-4.54,12.67-17.15"></path><path class="own-your-tomorrow-2 sc-responsive-svg-def" d="M384,31a2.61,2.61,0,0,1-.35,1.3,2.59,2.59,0,0,1-3.54.94,2.59,2.59,0,0,1-.95-.94,2.59,2.59,0,0,1,3.54-3.54,2.52,2.52,0,0,1,.95.94A2.56,2.56,0,0,1,384,31Zm-4.74,0a2.2,2.2,0,0,0,.29,1.09,2.22,2.22,0,0,0,.8.81,2.09,2.09,0,0,0,1.06.29,2.11,2.11,0,0,0,1.06-.29,2.21,2.21,0,0,0,1.09-1.9,2.11,2.11,0,0,0-.3-1.09,2.19,2.19,0,0,0-.79-.81,2.1,2.1,0,0,0-2.13,0,2.19,2.19,0,0,0-.79.81A2.25,2.25,0,0,0,379.28,31Zm1.15-1.46h1.3a1.09,1.09,0,0,1,.74.22.83.83,0,0,1,.25.63.84.84,0,0,1-.21.58.87.87,0,0,1-.57.29l.78,1.21h-.58l-.73-1.19h-.49v1.19h-.49Zm.49,1.31h.67a.84.84,0,0,0,.47-.1.42.42,0,0,0,.16-.37c0-.29-.21-.43-.61-.43h-.69Z"></path></symbol></defs></svg>
            
                <svg viewBox="0 0 100 10" xmlns="http://www.w3.org/2000/svg">
                  <circle id="myCircle" cx="5" cy="5" r="4" stroke="blue"></circle>
                  <use href="#myCircle" x="10" fill="blue"></use>
                  <use href="#myCircle" x="20" fill="white" stroke="red"></use>
                </svg>
            
            </td>
        </tr>


        <tr><td>Video Relative GD-21875</td><td><video style="height:50px" src="images/video.mov"></video></td></tr>
        <tr><td>Video Absolute GD-21875</td><td><video style="height:50px" src="images/video.mov"></video></td></tr>
        <tr><td>svg icons absolute url
            <div style="border:2px solid red;background-color:orangered;font-size:11px">
                NOTE xlink:href (left) is <a style="font-size:11px" href="https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/xlink:href">deprecated</a> but should work with 6.29 viewer
            </div>
            </td>
            <td>
                <svg viewBox="0 0 18 18" class="svgicon" style="background-color: gray">
                    <use xlink:href="images/externalsvg2.svg#svg4619"></use>
                </svg>
                <svg viewBox="0 0 18 18" class="svgicon" style="background-color:cornflowerblue">
                    <use href="images/externalsvg2.svg#svg4619"></use>
                </svg>
            </td>
        </tr>

        <tr><td>svg file with multiple icons based on :target path
            <div style="font-size: 10px">
                this svg file uses <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:target ">:target </a> css to show the id of the icon in the path.  Note that safari viewer will not render these icons properly
            </div>
            </td>
            <td>
                <svg viewBox="0 0 18 18" class="svgicon" style="background-color: gray">
                    <use href="images/iconlib.svg#android_small"></use>
                </svg>
                <svg viewBox="0 0 18 18" class="svgicon" style="background-color:cornflowerblue">
                    <use href="images/iconlib.svg#plus"></use>
                </svg>
            </td>
        </tr>

        <tr><td>inputs with an image src GD-19634</td>
            <td>
                    <input type="image" 
                        src="/cobrowse/test/images/btn_approveAllChecksNow.gif" 
                        alt="Approve All">
                    
                    <input type="image" 
                        src="images/btn_approveAllChecksNow.gif" 
                        alt="Approve All">
            </td>
        </tr>
    </table>
    <iframe id="iframe1" src="proxytest1/ProxyTestIframe.php" width="500" height="400"></iframe>
    <br />
    <button type="button" id="add-redirecting-iframe">Add redirecting iframe</button>
    
    <br/>
    
    <input type="submit" name="ctl00$ctl00$MainContent$CobrowseTestContent$Navigate" value="Navigate" id="ctl00_ctl00_MainContent_CobrowseTestContent_Navigate" />
    <!--
    <button id="capturexdomimage">Capture cross-domain image data</button>
        -->
    </form>
    



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
  
    <script src="TestProxyResources.js"></script>
    




    <script src="/site/wp/content/theme/js/script.js"></script>
    
</body>
</html>
