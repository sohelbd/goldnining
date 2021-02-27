@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body" style="padding-left: 150px;">
                     <form method="POST" action="{{url('/system/shaft_store')}}">
                      @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Shaft No</label>
                                    <input class="input--style-4" type="text" name="shaft_no" value="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Shaft Name</label>
                                    <input class="input--style-4" type="text" value="" name="shaft_name">
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 15px;">
                          <button class="btn btn-success">Save</button><button class="btn btn-danger">Delete</button><button class="btn btn-warning">Close</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-left: 150px;">
      <table class="table" width="100%" style="width:40%" border="1">
                <thead>
                    <tr class="table-warning">
                        <th>S/L</th>
                        <th>Shaft No</th>
                        <th>Shaft Name</th>
                       
                        
                    </tr>
                </thead>
                    <tbody>
                      @php $i = 1; @endphp
                      @foreach($shaftInfo as $row)

                        <tr class="table-warning">
                            <td>{{$i++}}</td>
                            <td>{{$row->shaft_no}}</td>
                            <td>{{$row->shaft_name}}</td>
                            
                            <!-- <td><a class="btn btn-danger" href="{{ url('/system/shaft_delete',$row->id) }}">Delete</a>
                </td> -->
                        </tr>
                        @endforeach
                        
                    </tbody>
            </table>
    </div>

    
@endsection