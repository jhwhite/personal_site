<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $description; ?>" >
    <meta name="author" content="Jody White">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="css/ability.css" />


    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-30659888-1']);
      _gaq.push(['_trackPageview']);

      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <!-- start Mixpanel -->
    <script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("736a88e89afa1e65a17457e4689c150e");
  </script>
  <!-- end Mixpanel -->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.php">Meet Jody</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<?php if ($section == "home") {echo "active";} ?>"><a href="index.php">Home</a></li>
              <!--<li><a href="/blog">Blog</a></li>-->
              <li class="<?php if ($section == "resume") {echo "active";} ?>"><a href="resume.php">Resume</a></li>
              <li class="<?php if ($section == "contact") {echo "active";} ?>"><a href="contact.php">Contact</a></li>
              <li class="<?php if ($section == "calc") {echo "active";} ?>"><a href="pathfinder-ability-score-calculator.php">Pathfinder Ability Score Calculator</a></li>
              <!--<li class="<?php if ($section == "report") {echo "active";} ?>"><a href="reportcard.php">Report Card</a></li>-->
            </ul>
            <ul id="social-icons" class="nav pull-right">
              <li><a class="social-links" href="http://www.linkedin.com/in/jameshwhite"><img src="img/social-icons/linkedin.png"></a></li>
              <li><a class="social-links" href="http://www.twitter.com/jwjody"><img src="img/social-icons/twitter.png"></a></li>
              <li><a class="social-links" href="http://www.flickr.com/jwjody"><img src="img/social-icons/flickr.png"></a></li>
              <!--<li><a class="social-links" href="http://www.jody-white.com/blog"><img src="img/social-icons/rss.png"></a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>