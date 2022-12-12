<!DOCTYPE html>
<html>
<head>
    <title> Show Medications</title>
    @extends('layouts.master')
    @section('css')
        <!-- Internal Data table css -->
        <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @endsection
    @section('page-header')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mainStyle.css">
    <style>
        tr a {
            text-decoration: none;
            color: #5433ff;
            font-weight: bold;
        }
        #id{
            margin-right:25rem;
        }

    </style>
</head>
<br><br>
<div class="card-body">
    <div class="table-responsive">
        <table class="table text-md-nowrap" id="example1">
            <thead>
                <th class="wd-15p border-bottom-0">Name</th>
                <th class="wd-15p border-bottom-0">company</th>
                <th class="wd-15p border-bottom-0">price</th>
                <th class="wd-15p border-bottom-0">price</th>
                <th class="wd-15p border-bottom-0">medical_prescription</th>
                <th class="wd-15p border-bottom-0">Count</th>
                <th class="wd-15p border-bottom-0">Tatel</th>
                <th class="wd-10p border-bottom-0">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($medications as $o)

                <tr>
                        <td>{{ $o->medication->name }} </td>
                        <td>{{ $o->medication->company }}</td>
                        <td>{{ $o->medication->price }}</td>
                        <td>{{ $o->medication->medical_prescription }}</td>
                        <td>
                            @if($o->medical_prescription==null)
                            <p>لاتحتاج الى وصفة طبية
                            @endif
                            @if($o->medical_prescription!=null)
                        <img src="{{asset('imgs/' . $o->medical_prescription)}}">
                        @endif
                    </td>
                        <td>{{ $o->count }}</td>
                        <td>{{ $o->medication->price * $o->count }}</td>
                        <td>
                            <form action="{{ route('Buy.destroy', $o->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25" fill="#fff" class="bi bi-trash"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></button></form>
                        </td>
                        <tr>
                @endforeach
            <br><br>
            </form>
        </table>
        @endsection
        <script>
            </script>
        <script src="js/all.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js.map"></script>
