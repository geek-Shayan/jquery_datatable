@extends('layout')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
@endsection

@section('content')

    <h1>Jquery Datatable</h1>
    
    {{-- <style>
        table {
          border-collapse: collapse;
          width: 80%;
        }
        
        th, td {
          text-align: center;
          padding: 5px;
        }
        
        tr:nth-child(even) {
          background-color: #D6EEEE;
        }

        tr:nth-child(1) {
          background-color: #35947f;
        }
    </style> --}}

    <table align= "center" id = "datatable" >
        <thead>
            <tr>
                <th>SL NO.</th>

                <th>NAME</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                
    
            </tr>

        </thead>

        <tbody>
            @php
                $sl = 0;
            @endphp

            @foreach ($peoples as $people)
            <tr>
                <td>{{++$sl}}</td>

                <td align= "center">{{$people->name}}</td>
                <td align= "center">{{$people->phone}}</td>
                <td align= "center">{{$people->email}}</td>

            </tr>
            @endforeach
            
        </tbody>
    </table>

    

@endsection

@section('javascripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
        $('#datatable').DataTable();
        } );
    </script>
    
@endsection
