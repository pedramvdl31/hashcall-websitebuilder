<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>My App</title>
    <!-- <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css"> -->

    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/Framework7-1.6.0/dist/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/Framework7-1.6.0/dist/framework7-icons.css">
    <link rel="stylesheet" href="/Framework7-1.6.0/dist/css/my-app.css">
    <!-- Path to your custom app styles-->
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>
      </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
<div class="page navbar-fixed">
  <div class="navbar">
    <div class="navbar-inner">
      <div class="center">FAB Speed Dial</div>
    </div>
  </div>
  <!-- Speed Dial Wrap -->
  <div class="speed-dial">
    <!-- FAB inside will open Speed Dial actions -->
    <a href="#" class="floating-button">
      <!-- First icon is visible when Speed Dial actions are closed -->
      <i class="icon icon-plus"></i>
      <!-- Second icon is visible when Speed Dial actions are opened -->
      <i class="icon icon-close"></i>
    </a>
    <!-- Speed Dial Actions -->
    <div class="speed-dial-buttons">
      <!-- First Speed Dial button -->
      <a href="#">
        <i class="icon demo-icon-email"></i>
      </a>
      <!-- Second Speed Dial  button -->
      <a href="#">
        <i class="icon demo-icon-calendar"></i>
      </a>
      <!-- Third Speed Dial  button -->
      <a href="#">
        <i class="icon demo-icon-upload"></i>
      </a>
    </div>
  </div>
  <!-- End of Speed Dial -->
  <div class="page-content">...</div>
</div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/Framework7-1.6.0/dist/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="/Framework7-1.6.0/dist/js/my-app.js"></script>
  </body>
</html>