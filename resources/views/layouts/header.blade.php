<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/kvm.css') }}" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--plugins-->
	<link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <style type="text/css">
        .bg {
            background-color: #024e5a;
        }
        .vms-btn {
            background-color: #024e5a;
            color: whitesmoke;
            transition: ease-in 0.4s all;
        }
        .vms-btn:hover {
            background-color: #024e5a;
            color: whitesmoke;
        }

        .vms-btn:focus {
            background-color: #024e5a;
            color: whitesmoke;
        }

        .btn-success {
            background-color: #024e5a;
        }

        .kvm-bg {
            background-color: #024e5a;
        }

        .kvm-color {
            color: #024e5a;
        }

        #search_date, #search_exipendture_type {
            cursor: pointer;
        }
        #search_date, #search_exipendture_type:hover {
            color: #04AA6D;
        }

        .form-control{
            border: none;
            border-radius: 0px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-bottom: 1px solid #024e5a;
        }
        .form-control: focus{
            outline: none;
            box-shadow: none;
            border: none;
            border-radius: 0px;
            margin-top: 13px;
            margin-bottom: 20px;
            border-bottom: 1px solid #024e5a;
        }

        /*checkbox customization*/
             .checkbox input {
            cursor: pointer;
        }

        .checkbox input[type='checkbox'] {
            display: none;
        }
        
        .checkbox span {
            background-color: #fff;
            padding: 10px 30px;
            color: #024e5a;
            border-radius: 30px;
            position: relative;
            display: inline-block;
            font-size: 16px;
            user-select: none;
            overflow: hidden;
            transition: 0.5s all;
            border: 1px solid #024e5a;
        }

        .checkbox span:hover {
            background-color: #024e5a;
            padding: 10px 30px;
            color: #fff;
            border-radius: 30px;
            position: relative;
            display: inline-block;
            font-size: 16px;
            user-select: none;
            overflow: hidden;
        }

        .checkbox input[type='checkbox']:checked ~ span {
            background-color: #024e5a;
            box-shadow: 0 2px 10px #024e5a;
            color: #fff;
        }
        /*end checkbox customization*/

    </style>

    </head>
    <body id="page-top">
