<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title><?php bloginfo('name')?> | <?php is_home() ? bloginfo('description') : wp_title('');?></title>
    <link href="/wp-content/themes/kamarouski/style.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head()?>
    <style>
      html {
        margin-top: 0 !important;
      }
    </style>
  </head>
  <body>
    <div class="content">
      <header style="padding: 50px 0; text-align: center; color: #262626; font-size: 14px; line-height: 1.4">
        <div>Front-End engineer from Melbourne, Australia <br /> working as Web Developer at <a style="color: #666; text-decoration:none;" target="_blank" href="https://carsales.com.au">Carsales</a></div>
        <div style="padding-top: 15px">
          <a href="https://twitter.com/kamarouski" class="twitter-follow-button" data-show-count="false">Follow @kamarouski</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
      </header>
      <div style="max-width: 980px; margin: 0 auto; box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.2), 0px 1px 1px 0px rgba(0,0,0,0.14), 0px 2px 1px -1px rgba(0,0,0,0.12)">
        <div class="menu">
          <ul>
            <li><a href="/">Blog</a></li>
          </ul>
        </div>
        <div class="main-wrapper">
