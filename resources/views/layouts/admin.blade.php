<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

	@include('includes.head')
   
</head>
<body>
    <div id="wrapper">
		@include('includes.header')

        <!-- /. NAV TOP  -->
		@include('includes.nav')

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
			<div id="page-inner">
                <!--/.ROW-->
				@yield('content')

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   
	@include('includes.footer1')
	@include('includes.footer')


</body>
</html>
