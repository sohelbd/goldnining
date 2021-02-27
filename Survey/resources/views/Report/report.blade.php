@extends('layouts.master')


@section('content')
<style type="text/css">
 
  fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
</style>



  <div class="row" style="padding-left: 400px;">
    <div class="col-md-12">
      <div class="col-md-7" style="display: inline-block; float: left;">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">Report</legend>
         <tr>
           <td><label>Report</label></td>
           <td>
             <select id="heading" style="width: 100px " name="heading">
                 <option value="s">Development</option>
                 <option value="a">a</option>
                 <option value="b">b</option>
                 <option value="c">c</option>
             </select>
          </td>  
          <td></td>
          <td></td>       
           <td><label>Shift</label></td>
           <td>
            <select id="heading" style="width: 100px " name="heading">
                 <option value="s"></option>
                 <option value="a">a</option>
                 <option value="b">b</option>
                 <option value="c">c</option>
             </select>

         </td>

         </tr>
         <tr>
           <td><label>Period</label></td>
           <td><input type="date" id="shaft" style="width: 100px " name="shaft" required/></td>          
           <td><label>To</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           <td><label>Year</label></td>
           <td><input type="date" id="lease" style="width: 100px " name="lease" /></td>           

         </tr>        
          </table>
        <div style="padding-left: 70px; margin-top: 10px;">
        <button style="margin-top: 10px;" class="btn btn-info">VIEW</button>
        <button style="margin-top: 10px;" class="btn btn-success">VIEW REPORT</button>
        <button style="margin-top: 10px;" class="btn btn-info">CLOSE</button>
      </div>
        </fieldset>
      </div>
      
        
      </div>
    </div>
  
   
@endsection
