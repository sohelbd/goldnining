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
                <div class="card-body" style="padding-left: 140px;">
                     <form method="POST" action="#">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">PEG NO</label>
                                    <input class="input--style-6" type="text" name="peg_no" value="">
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 15px;">
                            <button class="btn btn-success">New</button><button class="btn btn-success">Save</button><button class="btn btn-danger">Delete</button><button class="btn btn-warning">Close</button>
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
                        <th>SL NO</th> 
                        <th>PEG NO</th> 
                    </tr>
                </thead>
                    <tbody>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>ee2</td>
                        </tr>                        
                        <tr class="table-warning">
                            <td>2</td>
                            <td>ae2</td>
                        </tr>                        
                        <tr class="table-warning">
                            <td>3</td>
                            <td>ee2</td>
                        </tr>
                        
                    </tbody>
            </table>
    </div>

    
@endsection