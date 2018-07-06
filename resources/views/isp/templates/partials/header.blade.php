<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ISP Web App</title>
        <!-- Bootstrap core CSS-->
        <link href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{!! asset('assets/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="{!! asset('assets/datatables/dataTables.bootstrap4.css') !!}" rel="stylesheet">

        <link href="{!! asset('css/sb-admin.css') !!}" rel="stylesheet">
        <script src="{!! asset('js/cliente_crud.js') !!}"></script>
        <script src="{!! asset('js/validarRUT.js') !!}"></script>
        
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
    </head>