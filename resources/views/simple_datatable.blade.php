@extends('layout')

@section('content')

    <h1>Simple Datatable</h1>

    <style>
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

        td:nth-child(even) {
          background-color: #bdc0db;
        }

        tr:nth-child(1) {
          background-color: #35947f;
        }
    </style>

    <table align= "center">
        <tr>
            <th>SL NO.</th>

            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            

        </tr>

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
        
    </table>
@endsection