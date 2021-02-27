@extends('layouts.master')
@section('content')

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" >

  <!DOCTYPE html>
<html lang="en">
<head>
  
  </head>
<body>



  <div class="row"  style="padding-left:130px;">
    <div class="col-md-12">
      <div class="col-md-10 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">Firm Mill Budget</legend>
         <tr>
           <td><label>Preiod</label></td>
           <td><input type="number" id="Preiod" name="Preiod" required/></td>          
           <td><label>Tonnes Treated</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>
           <td><label>Mill Head Grade</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>           <td><label>UG Ore To Suface Spile</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>


         </tr>
         <tr>
           <td><label>UG To Spile GT/t</label></td>
           <td><input type="number" id="shaft" name="shaft" required/></td>          
           <td><label>OC Suface Spile Mill</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
           <td><label>OCS To Mill GT</label></td>
           <td><input type="number" id="lease" name="lease" /></td>           
           <td><label>Tonnes Sorted</label></td>
           <td><input type="number" id="lease" name="lease" /></td>

         </tr>
         <tr>
          <td><label>Sortod GT</label></td>
          <td><input type="number" id="level" name="level" /></td>
          <td><label>Mill Bin At EOM</label></td>
          <td><input type="text" id="minemeth" name="minemeth"/></td>
          <td><label>Mill Bin EOM GT</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
           <td><label>Tonnes Sorted</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>
         
        </tr>
        <tr>
            <td><label>Mine REcovery</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Gold Input</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>Gold Shipped</label></td>
             <td><input type="number" id="capital" name="capital" required/></td>
            <td><label>SResidue GT</label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>
        <tr>
            <td><label>Est Gic At EOM</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Ore Lost In Shrinkage(T)</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>Ore Lost In Shrinkage(G)</label></td>
             <td><input type="number" id="capital" name="capital" required/></td>
            <td><label>Tonnes Lost In Shnkage(OZ)</label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>               
         <tr>
            <td><label>Tailing Gold Shipped</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Shortfall Excess Grams</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>Residue Grams</label></td>
             <td><input type="number" id="capital" name="capital" required/></td>
            <td><label>Suface Drill Meters</label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>         
        <tr>
            <td><label>UG Drill Meters</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>T Tonnes Delivered</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>T Tonnes Del Grade</label></td>
             <td><input type="number" id="capital" name="capital" required/></td>
            <td><label>T Tonnes Del Ounce</label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>
        <tr>
            <td><label>LGO</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>LGO Grade</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>LGO ounce</label></td>
             <td><input type="number" id="capital" name="capital" required/></td>
            <td><label>Surface/Waste Fines</label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>          
         <tr>
            <td><label>Surface/Waste Grade</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Surface/Waste Ounce/T</label></td>
             <td><input type="number" id="lease" name="lease" /></td>
             <td><label>Open Cut Tonnes</label></td>
             <td><input type="number" id="capital" name="capital" required/></td>
            <td><label>Open Cut Grade</label></td>
            <td><input type="text" id="minemeth" name="minemeth" /></td>         
        </tr>       
         <tr>
            <td><label>Open Cut Ounce</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Heapleach Tonnes</label></td>
             <td><input type="number" id="lease" name="lease" /></td>      
            <td><label>Heapleach Grade</label></td>
            <td><input type="number" id="level" name="level" /></td>
            <td><label>Heapleach Ounce</label></td>
             <td><input type="number" id="lease" name="lease" /></td>       
        </tr>          
          </table>
     <div style="padding-left:280px;">
        <button style="margin-top: 10px;" class="btn btn-info">NEW</button>
        <button style="margin-top: 10px;" class="btn btn-success">SAVE</button>
        <button style="margin-top: 10px;" class="btn btn-danger">DELELTE</button>
        <button style="margin-top: 10px;" class="btn btn-info">CLOSE</button>
      </div>
        </fieldset>
      </div>
      
        
      </div>
    </div>
  </div>


   <div class="row" style="padding-left: 150px;">
        <table class="table" width="100%" style="width:70%" border="1">
                <thead>
                    <tr class="table-warning">
                        <th>Period No</th>
                        <th>Tonnes Treated</th>
                        <th>Mill Head Grade</th>
                        <th>UG Ore To Suface Spile</th>
                        <th>Recovered Grade</th>
                        <th>Residue Grade</th>
                        <th>Ounce Won Mine</th>
                    </tr>

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
                        </tr>                        
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                        </tr>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                        </tr>                         
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>22</td>                            
                            <td>ok</td>                            
                            <td>222</td>                            
                            <td>sfs</td>
                        </tr> 
                        
                    </tbody>
            </table>
    </div>
   
@endsection
