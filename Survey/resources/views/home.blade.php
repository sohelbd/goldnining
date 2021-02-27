@extends('layouts.master')


@section('content')

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" >
  <!-- Page content -->
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-4 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">LOACTION</legend>
         <tr>
           <td><label> PREIOD NO</label></td>
           <td><input type="number" id="Preiod" name="Preiod" required/></td>
           
           <td><label>CAPITAL</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>
         </tr>
         <tr>
           <td><label>SHAFT</label></td>
           <td><input type="number" id="shaft" name="shaft" required/></td>
           
           <td><label>LEASE</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
         </tr>
         <tr>
          <td><label>LEVEL</label></td>
          <td><input type="number" id="level" name="level" /></td>

          <td><label>MINEMETH</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>
         
        </tr>
          <td><label>HEADING</label></td>
          <td>
             <select id="heading" name="heading">
                 <option value="s">Select</option>
                 <option value="a">a</option>
                 <option value="b">b</option>
                 <option value="c">c</option>
             </select>
          </td>
          
         </tr>
          </table>
        </fieldset>
      </div>
      <div class="col-md-4 "  style = "display: inline-block; float: left">
      <fieldset class="scheduler-border">
       <table cellspacing="6">
            <legend class="scheduler-border">SERVEY</legend>
         <tr>
           <td><label> PREIOD</label></td>
           <td><input type="number" id="Preiod" name="Preiod" required/></td>
           
           <td><label>CAPITAL</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>
         </tr>
         <tr>
           <td><label>SHAFT</label></td>
           <td><input type="number" id="shaft" name="shaft" required/></td>
           
           <td><label>LEASE</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
         </tr>
         <tr>
          <td><label>LEVEL</label></td>
          <td><input type="number" id="level" name="level" /></td>

          <td><label>MINEMETH</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>
        </tr>
         <tr>
          <td><label>LEVEL</label></td>
          <td><input type="number" id="level" name="level" /></td>

          <td><label>MINEMETH</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>
        </tr>
       </table>
            </fieldset>
      </div>
      <div class="col-md-2 postition-right">
      <fieldset class="scheduler-border">
       <table cellspacing="6">
            <legend class="scheduler-border">FIND</legend>
                 </tr>
          <td><label>SHAFT</label></td>
          <td>
             <select id="heading" name="heading">
                 <option value="s">Select</option>
                 <option value="a">a</option>
                 <option value="b">b</option>
                 <option value="c">c</option>
             </select>
          </td>
          
         </tr>
         <tr>
           <td><label>HEADING</label></td>
           <td><input type="number" id="shaft" name="shaft" required/></td>
           
         </tr>         
       </table>
        <div class="row">
        
        <button style="margin-top: 10px;" class="btn btn-info">NEW</button>
        <button style="margin-top: 10px;" class="btn btn-success">FIND</button>
   
      </div>
      
            </fieldset>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-12">
      <div class="col-md-5 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">SURVEY GEOLOGY</legend>
         <tr>
           <td><label> MISC M3 ORE</label></td>
           <td><input type="number" id="Preiod" name="Preiod" required/></td>
           
           <td><label> MISC M3 WASTE</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>
         </tr>
         <tr>
           <td><label>SURVEY WIDTH</label></td>
           <td><input type="number" id="shaft" name="shaft" required/></td>
           
           <td><label>SURVEY HEIGHT</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
         </tr>
         <tr>
          <td><label>OREBODY_WIDTH</label></td>
          <td><input type="number" id="level" name="level" /></td>

          <td><label> M G/T</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>
        </tr>
        <tr>
          <td><label> S/G</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>
          <td><label> OUNCE</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>
        
         
        </tr>
          <td><label>Heading</label></td>
          <td>
             <select id="heading" name="heading">
                 <option value="s">Select</option>
                 <option value="a">a</option>
                 <option value="b">b</option>
                 <option value="c">c</option>
             </select>
          </td>
          
         </tr>
          </table>
        </fieldset>
      </div>
      <div class="col-md-6 postition-right">
      <fieldset class="scheduler-border">
       <table cellspacing="6">
            <legend class="scheduler-border">TONNAGE</legend>
         <tr>
           <td><label> TONNES ORE</label></td>
           <td><input type="number" id="Preiod" name="Preiod" required/></td>
           
           <td><label>TONNES WASTE</label></td>
           <td><input type="number" id="capital" name="capital" required/></td>

           <td><label>OPEN SP TONNES</label></td>
           <td><input type="number" id="shaft" name="shaft" required/></td>
          </tr>
         <tr>          
           <td><label>OPEN SP GT</label></td>
           <td><input type="number" id="lease" name="lease" /></td>
          <td><label>MVMT SP GT</label></td>
          <td><input type="number" id="level" name="level" /></td>

          <td><label>MVMT SP TONNES</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>
        </tr>
         <tr>
          <td><label>CLOSE SP TONNES</label></td>
          <td><input type="number" id="level" name="level" /></td>

          <td><label> COLOSE SP G/T</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>

          <td><label>TG/T</label></td>
          <td><input type="number" id="level" name="level" /></td>
         </tr>
         <tr>
          <td><label> T_TONNES</label></td>
          <td><input type="text" id="minemeth" name="minemeth" /></td>

          <td><label>TONNES CLAIMED</label></td>
          <td><input type="number" id="level" name="level" /></td>

        </tr>
       </table>
            </fieldset>
      </div>
    </div>
      <div class="row">
        
        <button style="margin-top: 10px;" class="btn btn-info">NEW</button>
        <button style="margin-top: 10px;" class="btn btn-success">SAVE</button>
        <button style="margin-top: 10px;" class="btn btn-danger">DELELTE</button>
        <button style="margin-top: 10px;" class="btn btn-info">SEARCH</button>
        <button style="margin-top: 10px;" class="btn btn-warning">CANCLE</button>
        <button style="margin-top: 10px;" class="btn btn-info">CLOSE</button>
   
      </div>
      

   <div class="row" style="padding-left: 30px;">
        <table class="table" width="100%" style="width:70%" border="1">
                <thead>
                    <tr class="table-warning">
                        <th>SL NO</th> 
                        <th>PREIOD</th> 
                        <th>SHIFT</th> 
                        <th>LEVEL</th> 
                        <th>HEADING</th> 

                    </tr>
                </thead>
                    <tbody>

                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>ok</td>
                        </tr>                        
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>ok</td>
                        </tr>
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>ok</td>
                        </tr>
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>ok</td>
                        </tr>
                        <tr class="table-warning">
                            <td>1</td>
                            <td>222</td>                            
                            <td>sfs</td>
                            <td>12/22/22</td>                            
                            <td>ok</td>
                        </tr>
                        
                    </tbody>
            </table>
    </div>


   
@endsection
