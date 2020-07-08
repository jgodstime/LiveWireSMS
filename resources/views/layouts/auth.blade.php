<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.19.0/dist/sweetalert2.css">

    @livewireStyles
  </head>
  <body class="app sidebar-mini">
    <div id="app">
       
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <!-- Navbar-->


            @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.7/dist/sweetalert2.all.min.js"></script> 

<!-- Essential javascripts for application to work-->
<script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }} "></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('template/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('template/js/plugins/chart.js') }}"></script>
    
       <!-- The javascript plugin to display page loading on top-->
       <script src="{{ asset('template/js/plugins/pace.min.js') }}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>

@livewireScripts

<script>

  window.livewire.on('alert', data => {
    // debugger
    const type = data[0];
    const message = data[1]
    var display = '';

    if(type === 'success'){
      display = 'Good!'
    }else if(type === 'error'){
      display = 'Opps!'
    }else{
      display = 'Ok!'
    }

    Swal.fire(
      display,
      message,
      type
      )  
  })
  
</script>
</body>
</html>
