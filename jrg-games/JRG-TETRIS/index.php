<!DOCTYPE html>
<html>
<head>

  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <title>JRG-TETRIS</title>
  <link rel="stylesheet" type="text/css" href="css/jrg-tetris.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

</head>

<body>

  <div class="header">
      <button class="fa fa-close" style="float: left; margin-left: 5px;"></button>
      <h3 style="display:inline-block;margin-top:10px;margin-left: 8px" id="info">
        TETRIS
      </h3>
      <button class="fa fa-user"></button>
    </div>

  <div id="tetris">
    <div id="menu">
      <p id="start"><a href="javascript:play();">Press Space To Play.</a></p>
      <p><canvas id="upcoming"></canvas></p>
      <p>score <span id="score">00000</span></p>
      <p>rows <span id="rows">0</span></p>
    </div>
    <canvas id="canvas">
      Sorry, this example cannot be run because your browser does not support the &lt;canvas&gt; element
    </canvas>
  </div>

  <script src="js/jrg-stats.js"></script>
  <script src="js/jrg-tetris.js"></script>

</body>
</html>
