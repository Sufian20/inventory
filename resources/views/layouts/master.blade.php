<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="{{ url('/backend') }}//css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ url('/backend') }}//font-awesome/{{ url('/backend') }}//css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{ url('/backend') }}//ionicon/{{ url('/backend') }}//css/ionicons.min.css" rel="stylesheet" />
        <link href="{{ url('/backend') }}//css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ url('/backend') }}//{{ url('/backend') }}//css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ url('/backend') }}//css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ url('/backend') }}//css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/backend') }}//css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.//js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ url('/backend') }}//js/modernizr.min.js"></script>
        
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
                </div> 


                @yield('content')                               
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>
        <script src="{{ url('/backend') }}//js/jquery.min.js"></script>
        <script src="{{ url('/backend') }}//js/bootstrap.min.js"></script>
        <script src="{{ url('/backend') }}//js/waves.js"></script>
        <script src="{{ url('/backend') }}//js/wow.min.js"></script>
        <script src="{{ url('/backend') }}//js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{ url('/backend') }}//js/jquery.scrollTo.min.js"></script>
        <script src="{{ url('/backend') }}//jquery-detectmobile/detect.js"></script>
        <script src="{{ url('/backend') }}//fastclick/fastclick.js"></script>
        <script src="{{ url('/backend') }}//jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{ url('/backend') }}//jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="{{ url('/backend') }}//js/jquery.app.js"></script>
	
	</body>
</html>