<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-name" content="mono"/>

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset("admin/assets/plugins/material/css/materialdesignicons.min.css")}}" rel="stylesheet" />
  <link href="{{asset("admin/assets/plugins/simplebar/simplebar.css")}}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset("admin/assets/plugins/nprogress/nprogress.css")}}" rel="stylesheet" />
  
  
  
  
  <link href="{{asset("admin/assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css")}}" rel="stylesheet" />
  
  
  
  <link href="{{asset("admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css")}}" rel="stylesheet" />
  
  
  
  <link href="{{asset("admin/assets/plugins/daterangepicker/daterangepicker.css")}}" rel="stylesheet" />
  
  
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="{{asset("admin/assets/plugins/toaster/toastr.min.css")}}" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset("admin/assets/css/style.css")}}" />

  


  <!-- FAVICON -->
  <link href="{{asset("admin/assets/images/favicon.png")}}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset("admin/assets/plugins/nprogress/nprogress.js")}}"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    
    <div id="toaster"></div>
    