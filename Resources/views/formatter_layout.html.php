<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta charset="utf-8" />
    <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <title>API documentation</title>
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css" />
    <link href="/bundles/nelmioapi/css/screen.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="container" id="resources_container">
      <ul id="resources">
        <?php echo $content; ?>
      </ul>
    </div>
    <script type="text/javascript">
      $('.toggler').click(function() {
        $(this).next().toggle();
      });
    </script>
  </body>
</html>