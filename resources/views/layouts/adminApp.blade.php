<html>
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
    <title>{{ $generalsetting->name }}</title>
    <link rel="icon" href="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->favicon }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/') }}/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/') }}/css/jquery-ui-git.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Form validation -->
    <script type="text/javascript" src="{{ asset('public/assets/admin/') }}/js/validation.js"></script>
    <!-- ajax request -->
    <script src="{{ asset('public/assets/admin/') }}/js/script.js"></script>
    <script>
        function check_delete_info() {
            var check = confirm('Are You sure to delete this?');
            if (check) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    </head>
    <body class="app sidebar-mini pace-done">
    <!-- header -->
    @include('layouts.admin.header')
    <!-- sidebar -->
    @include('layouts.admin.sidebar')
     <!-- content -->
    @yield('content')	     
    <script src="{{ asset('public/assets/admin/') }}/js/jquery-ui-git.js"></script>
    <script src="{{ asset('public/assets/admin/') }}/js/popper.min.js"></script>
    <script src="{{ asset('public/assets/admin/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/assets/admin/') }}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('public/assets/admin/') }}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('public/assets/admin/') }}/js/plugins/chart.js"></script>
    <!-- data table -->
        <script type="text/javascript" src="{{ asset('public/assets/admin/') }}/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="{{ asset('public/assets/admin/') }}/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        <!-- Google analytics script-->
        <script type="text/javascript">
          if(document.location.hostname == 'pratikborsadiya.in') {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
          }
        </script>
    <!-- end data table -->
    <!-- summernote -->
     <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
 
            $('#desthree').summernote({
                    placeholder: ' Description',
                    tabsize: 2,
                    height: 150
            });
            $('#summernote').summernote({
                  placeholder: 'Hello Bootstrap 4',
                  tabsize: 2,
                  height: 100
            });
            $('#summernote_footer').summernote({
                  placeholder: 'Hello Bootstrap 4',
                  tabsize: 2,
                  height: 100
            });
            $('#summernote_footer_bottom').summernote({
                    placeholder: 'Hello Bootstrap 4',
                    tabsize: 2,
                    height: 100
            });
            $('#emergenctHelpService').summernote({
                    placeholder: 'Hello Bootstrap 4',
                    tabsize: 2,
                    height: 100
            }); 
            $('#forAcBusRent').summernote({
                    placeholder: 'Hello Bootstrap 4',
                    tabsize: 2,
                    height: 100
            }); 
            $('#information').summernote({
                    placeholder: 'Hello Bootstrap 4',
                    tabsize: 2,
                    height: 100
            });
        })
    </script>
    <!-- end summernote -->
    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.message')
    </body>
</html>