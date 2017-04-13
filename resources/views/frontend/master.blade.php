<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TechStore</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('description')">
<meta name="author" content="Nguyễn Văn Thành">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{!! url('public/frontend/css/bootstrap.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/bootstrap-responsive.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/style.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/flexslider.css') !!}" type="text/css" media="screen" rel="stylesheet"  />
<link href="{!! url('public/frontend/css/jquery.fancybox.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/cloud-zoom.css') !!}" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="{!! url('public/fontend/assets/ico/favicon.html') !!}">
</head>
<body>
<!-- Header Start -->
<header>
<!-- banner -->

@include('frontend.blocks.header')

<!-- end banner -->
<!-- menu -->

@include('frontend.blocks.nav')

<!-- end menu -->
</header>
<!-- Header End -->



<!-- Featured Product-->
  


@yield('content')



<!-- Featured Product end-->
<!-- Footer -->

@include('frontend.blocks.footer')

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! asset('public/frontend/js/jquery.js') !!}"></script>
<script src="{!! url('public/frontend/js/bootstrap.js') !!}"></script>
<script src="{!! url('public/frontend/js/respond.min.js') !!}"></script>
<script src="{!! url('public/frontend/js/application.js') !!}"></script>
<script src="{!! url('public/frontend/js/bootstrap-tooltip.js') !!}"></script>
<script defer src="{!! url('public/frontend/js/jquery.fancybox.js') !!}"></script>
<script defer src="{!! url('public/frontend/js/jquery.flexslider.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/frontend/js/jquery.tweet.js') !!}"></script>
<script  src="{!! url('public/frontend/js/cloud-zoom.1.0.2.js') !!}"></script>
<script  type="text/javascript" src="{!! url('public/frontend/js/jquery.validate.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.carouFredSel-6.1.0-packed.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.mousewheel.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.touchSwipe.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.ba-throttle-debounce.min.js') !!}"></script>
<script defer src="{!! url('public/frontend/js/custom.js') !!}"></script>
</body>
</html>