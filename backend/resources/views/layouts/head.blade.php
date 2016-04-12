    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tatx | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {{ HTML::style('../resources/assets/bootstrap/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">{{-- These are all css files --}}
	{{ HTML::style('../resources/assets/bootstrap/extras/dist/css/skins/_all-skins.min.css') }}
	{{ HTML::style('../resources/assets/bootstrap/extras/dist/css/AdminLTE.min.css') }}
	{{ HTML::style('../resources/assets/bootstrap/extras/plugins/iCheck/flat/blue.css') }}
	{{ HTML::style('../resources/assets/bootstrap/extras/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}
	{{ HTML::style('../resources/assets/bootstrap/extras/plugins/datepicker/datepicker3.css') }}
	{{ HTML::style('../resources/assets/bootstrap/extras/plugins/daterangepicker/daterangepicker-bs3.css') }}
	{{ HTML::style('../resources/assets/bootstrap/extras/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}

{{-- These are all js files --}}


    <!-- jQuery 2.1.4 -->
	{{ HTML::script('../resources/assets/bootstrap/extras/plugins/jQuery/jQuery-2.1.4.min.js') }}
	<!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    {{ HTML::script('../resources/assets/bootstrap/js/bootstrap.min.js') }}
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/morris/morris.min.js') }}
    <!-- Sparkline -->
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/sparkline/jquery.sparkline.min.js') }}
    <!-- jvectormap -->
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
    <!-- jQuery Knob Chart -->
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/knob/jquery.knob.js') }}
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/daterangepicker/daterangepicker.js') }}
    <!-- datepicker -->
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/datepicker/bootstrap-datepicker.js') }}
    <!-- Bootstrap WYSIHTML5 -->
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
    <!-- Slimscroll -->
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/slimScroll/jquery.slimscroll.min.js') }}
    <!-- FastClick -->
    {{ HTML::script('../resources/assets/bootstrap/extras/plugins/fastclick/fastclick.min.js') }}
    <!-- AdminLTE App -->
    {{ HTML::script('../resources/assets/bootstrap/extras/dist/js/app.min.js') }}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{ HTML::script('../resources/assets/bootstrap/extras/dist/js/pages/dashboard.js') }}
    <!-- AdminLTE for demo purposes -->
    {{ HTML::script('../resources/assets/bootstrap/extras/dist/js/demo.js') }}
