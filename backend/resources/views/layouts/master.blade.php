<!doctype html>
<html>
<head>
<!-- my head section goes here -->
@include('layouts.head')
<!-- my css and js goes here -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="contents">
	  @include('layouts.header')
	  @include('layouts.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
		@yield('content')
	</div><!-- /.content-wrapper -->
	</div>
  <footer> @include('layouts.footer') </footer>
  @include('layouts.settingbar')
</div><!-- ./wrapper -->
      <div class="control-sidebar-bg"></div>
</body>
</html>