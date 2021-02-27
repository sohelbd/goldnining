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

  <!-- Page content -->
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-4" style="display: inline-block; float: left;">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">Loaction</legend>
         <tr>
           <td><label> Preiod No</label></td>
           <td><input type="number" style="width: 100px " id="Preiod" name="Preiod" required/></td>
           
           <td><label>Capital</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
         </tr>
         <tr>
           <td><label>Shaft</label></td>
           <td><input type="number" id="shaft" style="width: 100px " name="shaft" required/></td>
           
           <td><label>Lease</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
         </tr>
         <tr>
          <td><label>Level</label></td>
          <td><input type="number" id="level" style="width: 100px " name="level" /></td>

          <td><label>Minemeth</label></td>
          <td><input type="text" id="minemeth" style="width: 100px " name="minemeth" placeholder="please select" /></td>
         
        </tr>
          <td><label>Heading</label></td>
          <td>
             <select id="heading" style="width: 100px " name="heading">
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
      <div class="col-md-" style = "display: inline-block; float: left">
      <fieldset class="scheduler-border">
       <table cellspacing="6">
            <legend class="scheduler-border">Servey</legend>
         <tr>
           <td><label> Preiod</label></td>
           <td><input type="number" style="width: 100px " id="Preiod" name="Preiod" required/></td>
           
           <td><label>Capital</label></td>
           <td><input type="number" style="width: 100px " id="capital" name="capital" required/></td>
         </tr>
         <tr>
           <td><label>Shaft</label></td>
           <td><input type="number" style="width: 100px " id="shaft" name="shaft" required/></td>
           
           <td><label>Lease</label></td>
           <td><input type="number" style="width: 100px " id="lease" name="lease" /></td>
         </tr>
         <tr>
          <td><label>Level</label></td>
          <td><input type="number" style="width: 100px " id="level" name="level" /></td>

          <td><label>Minemeth</label></td>
          <td><input type="text" style="width: 100px " id="minemeth" name="minemeth" /></td>
        </tr>
         <tr>
          <td><label>Level</label></td>
          <td><input type="number" style="width: 100px " id="level" name="level" /></td>

          <td><label>Minemeth</label></td>
          <td><input type="text" style="width: 100px " id="minemeth" name="minemeth" /></td>
        </tr>
       </table>
            </fieldset>
      </div>

</div>

    </div>

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
      <div class="col-md-3" style="display: inline-block; float: left;">
         <fieldset class="scheduler-border">
            <legend class="scheduler-border">SURVEY GEOLOGY</legend>
            <div class="control-group">
               
                <div class="controls bootstrap-timepicker">
                      MISC M3 ORE  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      MISC M3 WASTE  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      SURVEY WIDTH  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      SURVEY HEIGHT  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      OREBODY_WIDTH  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                 <div class="controls bootstrap-timepicker">
                      M G/T  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      GEOLOGY HEIGHT  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                       G/T  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                       SG  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                       OUNCE  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>

            </div>
            </fieldset>
      </div>
      <div class="col-md-3" style="display: inline-block; float: left;">
         <fieldset class="scheduler-border">
            <legend class="scheduler-border">TONNAGE</legend>
            <div class="control-group">
               
                <div class="controls bootstrap-timepicker">
                      TONNES ORE  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      TONNES WASTE  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      OPEN SP TONNES  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      OPEN SP GT  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                </div><br/>
                 <div class="controls bootstrap-timepicker">
                      MVMT SP GT  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                      MVMT SP TONNES  <input type="number" style="width: 120px;" name="MISC_ORE">
                <div class="controls bootstrap-timepicker">
                      CLOSE SP TONNES  <input type="number" style="width: 120px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      COLOSE SP G/T  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                       TG/T  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                       T_TONNES  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>
                <div class="controls bootstrap-timepicker">
                       TONNES CLAIMED  <input type="number" style="width: 150px;" name="MISC_ORE">
                </div><br/>

            </div>
            </fieldset>
      </div>
      <div class="col-md-3" style="display: inline-block; float: left;">
         <fieldset class="scheduler-border">
            <legend class="scheduler-border">FIND</legend>
            <div class="control-group">
               
                <div class="controls bootstrap-timepicker">
                      Shaft  <select>
                        <option value="">Select One</option>
                      </select>
                      <span><button class="btn btn-info">Find</button></span>
                </div><br/>
                <div class="controls bootstrap-timepicker">
                      Heading  <input type="number" style="width: 100px;" name="MISC_ORE">
                      <span><button class="btn btn-info">Close</button></span>

                </div><br/>
                

            </div>
            </fieldset>
            <div>
                <table class="table" width="100%" style="width: 100">
                <thead>
                    <tr>
                        <th>Period No</th>
                        <th>Shaft</th>
                        <th>Shaft Level</th>
                        <th>Heading</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr class="table-primary">
                            <td>2002</td>
                            <td>D</td>
                            <td>9</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2002</td>
                            <td>D</td>
                            <td>12</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>2002</td>
                            <td>D</td>
                            <td>9</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>2002</td>
                            <td>D</td>
                            <td>9</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>2002</td>
                            <td>D</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>2002</td>
                            <td>D</td>
                            <td>12</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>2002</td>
                            <td>D</td>
                            <td>13</td>
                            <td>Deactivated</td>
                        </tr>            
                        <tr class="table-light">
                            <td>2002</td>
                            <td>D</td>
                            <td>13</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>2002</td>
                            <td>D</td>
                            <td>15</td>
                            <td>Payment failed</td>
                        </tr>
                    </tbody>
            </table>
            </div>
      </div>
    </div>
    </div>
 </div>
</div>
  
   
@endsection
