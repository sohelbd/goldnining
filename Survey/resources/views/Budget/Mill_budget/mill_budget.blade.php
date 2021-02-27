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
      <div class="col-md-9 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">Mill Budget</legend>
         <tr>
           <td><label>Preiod</label></td>
           <td><input type="number" id="Preiod" name="Preiod" required/></td>          
           <td><label>Recovery</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>
           <td><label>Recov Gra</label></td>
           <td><input type="number" id="capital" name="capital" required/></td><td><label>Tons Tera</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>


         </tr>
         <tr>
           <td><label>Oz Won Mine/t</label></td>
           <td><input type="number" id="shaft" name="shaft" required/></td> 
           <td><label>Residue Gr</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
           <td><label>Head Grad</label></td>
           <td><input type="number" id="lease" name="lease" /></td>           
           <td><label>T Tonnes Delivered</label></td>
           <td><input type="number" id="lease" name="lease" /></td>

         </tr>
         <tr>
          <td><label>T Tonnes Del Garde</label></td>
          <td><input type="number" id="level" name="level" /></td>
          <td><label>T Tonnes Del Ounce</label></td>
          <td><input type="text" id="minemeth" name="minemeth"/></td>
          <td><label>LGO/Surfacet</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
           <td><label>LGO/Suface Grade</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>
         
        </tr>
        <tr>
            <td><label>LGO/Surface Ounce</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Scatts/Waste Fines</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>Scatts/Weste Grade</label></td>
             <td><input type="number" id="capital" name="capital" required/></td>
            <td><label>Scatts/Weste Ounce </label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>
        <tr>
            <td><label>Open Out Tonnes</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Open Cut Grade/T</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>Open Cut Ounce</label></td>
             <td><input type="number" id="capital" name="capital" /></td>
            <td><label>Heapleach Tonnes</label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>               
         <tr>
            <td><label>Heapleach Grade</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Heapleach Ounce</label></td>
             <td><input type="number" id="lease" name="lease" /></td>         
        </tr>         
          
          </table>
            </fieldset>
      </div>
     
</div>
      <div class="row" style="padding-left: 250px;">
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-info">NEW</button>
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-success">SAVE</button>
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-danger">DELELTE</button>
        <button style="margin-top: 5px;margin-bottom: 5px;" class="btn btn-info">CLOSE</button>
        </div>
     

</body>
<div class="row" style="padding-left: 60px;">
        <table class="table" width="100%" style="width:70%" border="1">
                <thead>
                    <tr class="table-warning">
                        <th>Period No</th>
                        <th>Grade</th>
                        <th>Tonnes</th>
                        <th>DevOre</th>
                        <th>DevOre</th>
                        <th>DevOre</th>
                        <th>Recovery</th>
                        <th>Recovered Grade</th>
                    </tr>

                    </tr>
                </thead>
                    <tbody>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>222</td>                            
                        
                        </tr>                        
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                                                        
                            <td>sfs</td>
                            <td>sfs</td>
                        </tr>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                            <td>22</td>                                                   
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                        </tr>                         
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                            <td>22</td>                                          
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                        </tr>                        
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                            <td>22</td>                                          
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                        </tr>                        
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
                            <td>22</td>                                          
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>sfs</td>
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







