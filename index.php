 <!DOCTYPE html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>synchtube</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/synch.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">    
      if (window.parent.frames.length > 0) {
        window.stop();
      }
    </script>
    <link rel="icon" type="image/png" href="favicon.png" />
    </head>
    <body>
    <header>
    <div class="container">
    <?php
    if(!(isset ($_GET['c'])))
            $channelid = "twiforce";
            else
            $channelid = htmlspecialchars($_GET['c']);
    ?>
    <h1><img src="logo.png" align="left"/><div id="channelID">&nbsp;on&nbsp;<?php echo $channelid ?>&nbsp;/&nbsp;</div><div id="synch"><b><a href="http://syn-ch.ru">syn-ch</a></b></div></h1>
    </div>
    </header>
            <div class="container">
                    <div class="video">
						<iframe scrolling="no" frameborder="0" hspace="0" marginheight="0" marginwidth="0" id="stream" src="<?php echo $channelid ?>.html" style="width:700px; height:405px;"></iframe>
                    </div>
                    <div class="chat">
                            <iframe src="lightIRC/index.html" style="width:499px; height:435px;"></iframe>
                    </div>
                    <footer>
                            <p>popular: <a onclick=" $('a').click(function(){ $('#channelID').html('&nbsp;on&nbsp;twiforce&nbsp;/&nbsp;');}); document.getElementById ('stream').src='twiforce.html';">main</a> / 
							<a onclick=" $('a').click(function(){ $('#channelID').html('&nbsp;on&nbsp;synchtube 2&nbsp;/&nbsp;');}); document.getElementById ('stream').src='synchtuberu.html';">extra</a> / 
							<a onclick="$('a').click(function(){ $('#channelID').html('&nbsp;on&nbsp;ekventor&nbsp;/&nbsp;');}); document.getElementById ('stream').src='ekventor.html';">ekventor</a> / 
							<a onclick="$('a').click(function(){ $('#channelID').html('&nbsp;on&nbsp;synch-rock&nbsp;/&nbsp;');}); document.getElementById ('stream').src='synch-rock.html';">synch-rock</a> / 
							<a onclick="$('a').click(function(){ $('#channelID').html('&nbsp;on&nbsp;moron_paratrooper&nbsp;/&nbsp;');}); document.getElementById ('stream').src='moron_paratrooper.html';">moron_paratrooper</a> / 
							<a onclick="$('a').click(function(){ $('#channelID').html('&nbsp;on&nbsp;whystingwhy&nbsp;/&nbsp;');}); document.getElementById ('stream').src='whystingwhy.html';">whystingwhy</a></p>
                    </footer>
            </div>
    </body>
    </html>

