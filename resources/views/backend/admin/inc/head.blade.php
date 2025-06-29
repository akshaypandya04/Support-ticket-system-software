<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3 color-header headercolor1">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('back-end/assets/images/favicon-32x32.png')}}" type="image/png" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link href="{{asset('back-end/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/assets/css/pace.min.css')}}" rel="stylesheet">
   
    <link href="{{asset('back-end/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/assets/css/app.css')}}" rel="stylesheet">
    
    <link href="{{asset('back-end/assets/css/icons.css')}}" rel="stylesheet">

     <link href="{{asset('back-end/assets/css/dark-theme.css')}}" rel="stylesheet">
     <link href="{{asset('back-end/assets/css/semi-dark.css')}}" rel="stylesheet">
     <link href="{{asset('back-end/assets/css/header-colors.css')}}" rel="stylesheet">
     
     <link href="{{asset('back-end/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
     <link href="{{asset('back-end/assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet">

     <link href="{{asset('back-end/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('styles')
    
    
    <style>
        
        html.color-sidebar .sidebar-wrapper .metismenu a {
    color: rgba(255, 255, 255, 0.85);
    font-size: 14px;
}

.text-white {
    color: #fff!important;
    font-size: 13px;
}

table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
    border-bottom-width: 0;
    font-size: 13px;
}

.text-uppercase {
    text-transform: uppercase!important;
    font-size: 14px;
}

.sidebar-wrapper .metismenu a .menu-title {
    margin-left: 10px;
    font-size: 12px;
}

.badge-success  {

 color: #15ca20;

}

.badge-warning  {

 color: #fd3550;

}
        
    </style>


	<title>Admin Panel</title>
</head>

<body>