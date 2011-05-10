<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Real time monitor</title>
        <link rel="stylesheet" href="css.css" type="text/css" media="screen" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
        <script type="text/javascript">
            selectedIp = '';
        </script>
        <script type="text/javascript" src="js.js"></script>
    </head>
    <body onload="">
        <div id="log"></div>
        <div id="toolbar">
            <ul id="status">
                <li>Socket status: <span id="socketStatus">Conecting ...</span></li>
                <li>IP: all</li>
                <li>count: <span id="count">0</span></li>
            </ul>
        </div>
    </body>
</html>

