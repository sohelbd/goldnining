@extends('layouts.master')
@section('content')

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" >

  <!DOCTYPE html>
<html lang="en">
<head>
  
  </head>
<body>

<div class="container">

  <div class="row" style="padding-left: 30px;">
    <div class="col-md-12">
      <div class="col-md-3 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">Time</legend>
         <tr>
           <td><label> PERIOD</label></td>
           <td><input type="number"  id="Preiod" name="Preiod" required/></td>        
         </tr>
         <tr>
           <td><label>SHAFT</label></td>
           <td><input type="number" id="shaft"  name="shaft" required/></td>
                    
         </tr>          
          </table>
        </fieldset>
      </div>
      <div class="col-md-3 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">Addotions</legend>
         <tr>
           <td><label> TONNES</label></td>
           <td><input type="number" style="width:  id="Preiod" name="Preiod" required/></td>
           
           
         </tr>
         <tr>
           <td><label>GRADES</label></td>
           <td><input type="number" id="shaft" style="width:  name="shaft" required/></td>
           
           
         </tr>
         <tr>
          <td><label>OUNCES</label></td>
          <td><input type="number" id="level" style="width:  name="level" /></td>

          
          </table>
        </fieldset>
      </div>
      <div class="col-md-3 postition-right">
      <fieldset class="scheduler-border">
       <table cellspacing="6">
            <legend class="scheduler-border">Closing</legend>
         <tr>
           <td><label> TONNES</label></td>
           <td><input type="number" style="width:  id="Preiod" name="Preiod" required/></td>
           
         </tr>
         <tr>
           <td><label>GRADES</label></td>
           <td><input type="number" style="width:  id="shaft" name="shaft" required/></td>
           
         </tr>
         <tr>
          <td><label>OUNCES</label></td>
          <td><input type="number" style="width:  id="level" name="level" /></td>

         
       </table>
            </fieldset>
      </div>
      
        <div class="col-md-3 postition-right" style = " padding-left: 32px;">
      <fieldset class="scheduler-border">
       <table cellspacing="6">
            <legend class="scheduler-border">Stock pie</legend>
         <tr>
           <td><label> TONNES</label></td>
           <td><input type="number" style="width:  id="Preiod" name="Preiod" value="0" required/></td>
           
           
         </tr>
         <tr>
           <td><label>GRADES</label></td>
           <td><input type="number" style="width:  id="shaft" name="shaft" value="0" required/>
           </td>
           
         </tr>
         <tr>
          <td><label>OUNCE</label></td>
          <td><input type="number" style="width:  id="level" name="level" value="0" /></td>
  </tr>
       </table>
            </fieldset>
      </div>
     
</div>
      <div class="row" style="padding-left: 400px;">
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-info">NEW</button>
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-success">SAVE</button>
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-danger">DELELTE</button>
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-info">CLOSE</button>
        </div>
     

</body>
   <div class="row" style="padding-left: 30px;">
        <table class="table" width="100%" style="width:70%" border="1">
                <thead>
                    <tr class="table-warning">
                        <th>SL NO</th> 
                        <th>PREIOD NO</th> 
                        <th>SHIFT NO</th> 
                        <th>TONNES A</th> 
                        <th>GRADE A</th> 
                        <th>OUNCE A</th>                         
                        <th>TONNES B</th> 
                        <th>GRADE B</th> 
                        <th>OUNCE B</th>                         
                        <th>TONNES C</th> 
                        <th>GRADE C</th> 
                        <th>OUNCE C</th> 

                    </tr>
                </thead>
                    <tbody>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>                            
                            <td>ok</td>
                        </tr>                        
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>                            
                            <td>ok</td>
                        </tr>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>                            
                            <td>ok</td>
                        </tr>                         
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>                            
                            <td>ok</td>
                        </tr> 
                        
                    </tbody>
            </table>
    </div>

</html>

 
@endsection

<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
  <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</script>