
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/frontend/bootstrap/css/bootstrap.css') !!}">
  <link rel="stylesheet" href="{!! asset('public/frontend/font-awesome/css/font-awesome.min.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/frontend/mystyle/style.css') !!}">
  <link href="{!! asset('public/frontend/bootstrap/css/style.css') !!}" rel="stylesheet">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
  <link href="{!! asset('public/frontend/bootstrap/css/megamenu.css') !!}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{!! asset('public/frontend/bootstrap/css/etalage.css') !!}">
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">
  <img src="{!! asset('public/frontend/img/back-to-top.png') !!}" />
</button>
<!-- header -->
@include('frontend.blocks.header')
<!-- end header -->
<!-- wrapper -->
<!-- **** list san phẩm  **** -->
<div id="bimo">


@yield('content')



</div>
<!-- end san phẩm -->
<!-- end wrapper -->
<!-- end content -->

 <!-- **** footer **** -->
@include('frontend.blocks.footer')
<!-- end footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{!! asset('public/frontend/bootstrap/js/jquery-3.1.1.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/frontend/bootstrap/js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/frontend/bootstrap/js/jssor.core.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/frontend/bootstrap/js/jssor.utils.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/frontend/bootstrap/js/jssor.slider.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/frontend/mystyle/myscript.js') !!}"></script>

<script type="text/javascript" src="!! asset('public/frontend/bootstrap/js/megamenu.js') !!}"></script>
<script src="{!! asset('public/frontend/bootstrap/js/jquery.etalage.min.js') !!}"></script>
<script src="{!! asset('public/frontend/bootstrap/js/menu_jquery.js') !!}"></script>
<!-- my script -->
<script>
  
  jQuery(document).ready(function($){

    $('#etalage').etalage({
      thumb_image_width: 300,
      thumb_image_height: 400,
      source_image_width: 900,
      source_image_height: 1200,
      show_hint: true,
      click_callback: function(image_anchor, instance_id){
        alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
      }
    });
    $(".megamenu").megamenu();
    $('div.alert').delay(3000).slideUp();
   
  });
</script>
</body>
</html>