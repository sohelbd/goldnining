@extends('layouts.master')


@section('content')
<style type="text/css">
 

   
</style>
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" >

  <div class="row">
    <div class="col-md-12">
      <div class="col-md-4 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">LOACTION</legend>
         <tr>
           <td><label>PREIOD</label></td>
           <td><input type="number" style="width: 100px " id="preiod" name="preiod" required/></td>
           
           <td><label>SHAFT</label></td>
           <td><input type="number" id="shast" style="width: 100px " name="shast" required/></td>
         </tr>
         <tr>
           <td><label>LEVEL</label></td>
           <td><input type="number" id="level" style="width: 100px " name="level" required/></td>
           
           <td><label>LEASE</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
         </tr>


         
        </tr>
          <td><label>HEADING</label></td>
          <td>
             <select id="heading" style="width: 100px " name="heading">
                 <option value="s">Select</option>
                 <option value="a">a</option>
                 <option value="b">b</option>
                 <option value="c">c</option>
             </select>
          </td>
                    <td><label>MINEMETH</label></td>
          <td><input type="text" id="minemeth" style="width: 100px " name="minemeth" /></td>
          
         </tr>
          </table>
        </fieldset>
      </div>
      <div class="col-md-5 postition-right">
      <fieldset class="scheduler-border">
       <table cellspacing="6">
            <legend class="scheduler-border">Servey</legend>
         <tr>
           <td><label> FACE M2 BROKEN</label></td>
           <td><input type="number" style="width: 100px " id="facem2" name="facem2" required/></td>
           
           <td><label>OTHER FACE LENGTH</label></td>
           <td><input type="number" style="width: 100px " id="other_face" name="other_face" required/></td>
         </tr>
         <tr>
           <td><label>STOP WIDTH</label></td>
           <td><input type="number" style="width: 100px " id="shaft_width" name="shaft_width" required/></td>
           
           <td><label>L/W AVE ADV</label></td>
           <td><input type="number" style="width: 100px " id="lw_ave" name="lw_ave" /></td>
         </tr>
         <tr>
          <td><label>L/W FACE LEHGTH</label></td>
          <td><input type="number" style="width: 100px " id="lw_face" name="lw_face" /></td>

          <td><label>SHRINK AVE ADV</label></td>
          <td><input type="text" style="width: 100px " id="shrink_ave" name="shrink_ave" /></td>
        </tr>
         <tr>
          <td><label>SHRINK FACE LENGHT</label></td>
          <td><input type="number" style="width: 100px " id="shrink_face" name="shrink_face" /></td>

          <td><label>OTHER AVE ADV</label></td>
          <td><input type="text" style="width: 100px " id="other_ave" name="other_ave" /></td>
        </tr>
       </table>
            </fieldset>
      </div>
      <div class="col-md-3" style = "display: inline-block; float: left; margin-top: 30px;">
        <button style="margin-top: 10px;" class="btn btn-info">NEW</button>
        <button style="margin-top: 10px;" class="btn btn-success">SAVE</button>
        <button style="margin-top: 10px;" class="btn btn-danger">DELELTE</button>
        <button style="margin-top: 10px;" class="btn btn-info">SEARCH</button>
        <button style="margin-top: 10px;" class="btn btn-warning">CANCLE</button>
        <button style="margin-top: 10px;" class="btn btn-info">CLOSE</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-8 postition-right">
      <fieldset class="scheduler-border">
       <table  cellspacing="10">
            <legend class="scheduler-border">SURVEY GEOLOGY</legend>
         <tr>
           <td><label>ORE REC M3 BROKEN</label></td>
           <td><input type="number" style="width: 100px " id="ore_rec" name="ore_rec" required/></td>
           
           <td><label>TOTAL ORE REC M3 BROKEN</label></td>
           <td><input type="number" id="tolat_orc" style="width: 100px " name="tolat_orc" required/></td>
           <td><label>Waste m3 broken</label></td>
           <td><input type="number" id="waste_ore" style="width: 100px " name="waste_ore" required/></td>
         </tr>
         <tr>
           <td><label>SWEEPING TONNES</label></td>
           <td><input type="number" id="sweeping" style="width: 100px " name="sweeping" required/></td>
           
           <td><label>SWEEPING G/T</label></td>
           <td><input type="number" id="sweeping_gt" style="width: 100px " name="sweeping_gt" /></td>
           <td><label>OREBODY</label></td>
           <td><input type="number" id="orebody" style="width: 100px " name="orebody" /></td>
         </tr>
         <tr>
          <td><label>MG/T</label></td>
          <td><input type="number" id="mgt" style="width: 100px " name="mgt" /></td>

          <td><label>GEOLOGY STOPE WIDING</label></td>
          <td><input type="number" id="geology_stope" style="width: 100px " name="geology_stope" /></td>
          <td><label>SG</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
         
        </tr>
          
          </table>
        </fieldset>
      </div>
      <div class="col-md-4 postition-right">
      <fieldset class="scheduler-border">
       <table  cellspacing="10">
            <legend class="scheduler-border">FIND</legend>
                <tr>
                  <td><label>SHAFT</label></td>
                  <td><input type="number" id="shaft" style="width: 100px " name="shaft" /></td>
                  <td></td>
                   <td style="padding-left: 50px; margin-top: 50px;"><button style="margin-top: 25px;" class="btn btn-info">FIND</button></td>                 
                </tr>
                <tr>
                  <td><label>HEADING</label></td>
                   <td><input type="number" id="hading" style="width: 100px " name="hading" /></td>                 
                </tr> 
                 <tr>
                                   
                </tr>               
                   
              </table>
            </fieldset>    
        
      </div>    
        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-7 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">TONNAGE</legend>
         <tr>
           <td><label>MEASURED TONNAGE BROKEN</label></td>
           <td><input type="number" style="width: 100px " id="Preiod" name="Preiod" required/></td>
           
           <td><label>OVERALL G/T</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
           <td><label>OPEN S/P G/T</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
           <td><label></label></td>
           <td></td>

         </tr>
         <tr>
           <td><label>MEASURE G/T</label></td>
           <td><input type="number" id="shaft" style="width: 100px " name="shaft" required/></td>          
           <td><label>TONNES WASTE</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           <td><label>MVMT S/P TONNES</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           <td></td>
           <td></td>
         </tr>
         <tr>
          <td><label>TONNES ORE</label></td>
          <td><input type="number" id="level" style="width: 100px " name="level" /></td>

          <td><label>OPEN S/P TONNES</label></td>
          <td><input type="text" id="minemeth" style="width: 100px " name="minemeth"/></td>
          <td><label>MVMT S/P G/T</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           <td><label>G/T</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
         
        </tr>
        <tr>
            <td><label>T_TONNES</label></td>
            <td><input type="number" id="level" style="width: 100px " name="level" /></td>
            <td><label>T_G/T</label></td>
             <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
             <td><label>CLOSE S/P TONS</label></td>
             <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
            <td><label>OUNCE</label></td>
            <td><input type="text" id="minemeth" style="width: 100px " name="minemeth" /></td>         
        </tr>
          
          </table>
        </fieldset>
      </div>
      
        <div class="col-md-5 postition-right">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            
         <tr>
           <td><label>RECLAIM TONS BROKEN</label></td>
           <td><input type="number" style="width: 100px " id="Preiod" name="Preiod" required/></td>
           
           <td><label>SHRINK TONNES BROKEN</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
           <td><label>SHATTER G/T</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
           
         </tr>
         <tr>
           <td><label>SHATTER TONNES BROKEN</label></td>
           <td><input type="number" id="shaft" style="width: 100px " name="shaft" required/></td>
           
           <td><label>SUNDAY TONNES</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           <td><label>STOPE G/T</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           
         </tr>
         <tr>
          <td><label>STOPE TONNES BROKEN</label></td>
          <td><input type="number" id="level" style="width: 100px " name="level" /></td>

          <td><label>RECLAIM G/T</label></td>
          <td><input type="text" id="minemeth" style="width: 100px " name="minemeth" /></td>
          <td><label>Shrink g/t</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           
        </tr>
       <tr>
          <td><label>TONNES CLAIMET</label></td>
          <td><input type="number" id="level" style="width: 100px " name="level" /></td>
          <td><label>SUNDAY G/T</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           
        </tr>
          
          </table>
        </fieldset>
      </div>
      </div>
    </div>
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
