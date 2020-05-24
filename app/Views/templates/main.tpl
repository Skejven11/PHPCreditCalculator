<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
    <link rel="stylesheet" href="{$conf->app_url}/css/default.css">	
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href="{$conf->app_url}/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" >
    
</head>
<body>
    
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
                    <div id="banner" class="container"><img src="{$conf->app_url}/images/CalcIcon.png" width="64" height="64" alt="" /></div>
			<h1><a href="#">Loan Calculator</a></h1>
		</div>
		<div id="menu">
			<ul>
                                <li><form action="{$conf->action_root}calcHome" method="post" class="pure-form pure-form-stacked">
                                        <a>Homepage</a>
                                        <input type="submit" value="Calculate" class="pure-button pure-button-primary" />
                                </form></li>
				<li class="active">><a href="#" title="">Calculator</a></li>
			</ul>
		</div>
	</div>
</div>
    
<div class="wrapper">
{block name=content} {/block}
</div>

	<div id="copyright">
	<p>&copy; Bartosz Zysk. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>