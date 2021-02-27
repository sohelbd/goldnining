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
                                    <label class="label">PERIOD NO</label>
                                    <input class="input--style-4" type="number" name="nethod" value="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">METHOD</label>
                                    <input class="input--style-4" type="text" value="" name="p_name">
                                </div>
                            </div>                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">START DATE</label>
                                    <input class="input--style-4" type="date" value="" name="start_date">
                                </div>
                            </div>                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">END DATE</label>
                                    <input class="input--style-4" type="date" value="" name="start_date">
                                </div>
                            </div>
                        </div>                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NO OF DAY</label>
                                    <input class="input--style-4" type="text" name="nethod" value="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NO OF WEEKS</label>
                                    <input class="input--style-4" type="text" value="" name="f_name">
                                </div>
                            </div>                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">START</label>
                                    <input class="input--style-4" type="test" value="" name="status">
                                </div>
                            </div>                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">PREIOD NO YTD</label>
                                    <input class="input--style-4" type="text" value="" name="ytd">
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
        <table class="table" width="100%" style="width:70%" border="1">
                <thead>
                    <tr class="table-warning">
                        <th>SL NO</th> 
                        <th>PREIOD NO</th> 
                        <th>METHOD</th> 
                        <th>START DATE</th> 
                        <th>END DATE</th> 
                        <th>STATUS</th> 
                    </tr>
                </thead>
                    <tbody>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>17/09/23</td>
                            <td>ok</td>
                        </tr>                        
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>17/09/23</td>
                            <td>ok</td>
                        </tr>
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>17/09/23</td>
                            <td>ok</td>
                        </tr>
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>17/09/23</td>
                            <td>ok</td>
                        </tr>
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>17/09/23</td>
                            <td>ok</td>
                        </tr>
                        
                    </tbody>
            </table>
    </div>

    
@endsection

<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
  <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</script>