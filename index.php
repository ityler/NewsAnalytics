<?php 
$rootUrl = "/ts/";    // Development environment
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TechScoopr - Home</title>
  <!-- 
  <link rel="stylesheet" href="http://techscoopr.com/assets/css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="http://techscoopr.com/assets/css/bootstrap-responsive.min.css" type="text/css">
  <link rel="stylesheet" href="http://techscoopr.com/assets/css/font-awesome.css" type="text/css">
  <link rel="stylesheet" href="http://techscoopr.com/assets/css/custom-default.css" type="text/css">
  <link rel="stylesheet" href="http://techscoopr.com/assets/fancybox/source/jquery.fancybox.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="http://techscoopr.com/assets/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="http://techscoopr.com/assets/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen"/>
  -->
  <link rel="stylesheet" href="<?php echo $rootUrl ?>assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $rootUrl ?>assets/css/simple-sidebar.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $rootUrl ?>assets/css/styles.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $rootUrl ?>assets/css/tt.css" type="text/css">
  <script src="<?php echo $rootUrl ?>assets/js/jquery-1.12.2.min.js"></script>
  <script src="<?php echo $rootUrl ?>assets/js/masonry.pkgd.min.js"></script>
  <script src="<?php echo $rootUrl ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo $rootUrl ?>assets/js/typeahead.js"></script>
  
  <!--
  <script src="http://techscoopr.com/assets/js/jquery-ui.min.js"></script>
  <script src="http://techscoopr.com/assets/js/bootstrap.min.js"></script>
  <script src="http://techscoopr.com/assets/js/modernizr-transitions.js"></script>
  <script src="http://techscoopr.com/assets/fancybox/source/jquery.fancybox.pack.js"></script>
  <script src="http://techscoopr.com/assets/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
  <script src="http://techscoopr.com/assets/fancybox/source/helpers/jquery.fancybox-media.js"></script>
  <script src="http://techscoopr.com/assets/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
  <script src="http://platform.twitter.com/widgets.js"></script>
  <script src="http://techscoopr.com/assets/js/hammer.min.js"></script>
  -->
  <script type="text/javascript">
  /*
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-37368569-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    */
  </script> 
</head>
<body>
  <div id="wrapper" class="container-fluid">
    <div id="overlay"></div>
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="hdn">
      <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#">TechScoopr</a></li>
        <li><a href="#">Most Popular</a></li>
        <li><a href="#">Latest News</a></li>
        <li></li>
        <li><a href="#">Amazon</a></li>
        <li><a href="#">Apple</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Google</a></li>
        <li><a href="#">Microsoft</a></li>
        <li><a href="#">Samsung</a></li>
      </ul>
      <!-- 
        # Landing page: Search keyword, return samples of news, add to "queue"
        As latest news available, return news
        # Keyword will be stored in temporary queue as category
      -->
    </div> 
    <!-- /#sidebar-wrapper -->
  </div>
  <!-- /#wrapper -->
  <!-- Search Modal -->
    <div class="modal fade" id="modalLoad" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span><span class="sr-only">Close</span></button>
            <p class="modal-hdr">Technology News</p>
            <p class="modal-title lead" id="myModalLabel">To start, enter a few topics you're interested in</p>
          </div>
          <div class="modal-body">
            <form class="" role="keywords">
              <input type="text" class="form-control typeahead" id="inpSrch" placeholder="Search">
            </form>
          </div>
          <div class="modal-footer">
          <!-- Added tags are displayed here
                or use recommend typeahead tags here
                -> Create typeahead tags as bubble wells listed below search bar 
              - Show list of current popular tags (most popular keyword in 1-3 days)
          --> 
            <button id="btnCont" class="hdn">Continue</button>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo $rootUrl ?>assets/js/tchscpr.js"></script>
</body>
</html>