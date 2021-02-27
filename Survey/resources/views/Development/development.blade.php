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



  <div class="row">
    <div class="col-md-12">
      <div class="col-md-10" style="display: inline-block; float: left;">
             <fieldset class="scheduler-border">
      <table  cellspacing="10">
            <legend class="scheduler-border">Development</legend>
         <tr>
           <td><label>Preiod</label></td>
           <td><input type="number" style="width: 100px " id="Preiod" name="Preiod" required/></td>          
           <td><label>Recovery</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>
           <td><label>Recov Gra</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>           <td><label>Tons Tera</label></td>
           <td><input type="number" id="capital" style="width: 100px " name="capital" required/></td>


         </tr>
         <tr>
           <td><label>Oz Won Mine/t</label></td>
           <td><input type="number" id="shaft" style="width: 100px " name="shaft" required/></td>          
           <td><label>Residue Gr</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>
           <td><label>Head Grad</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>           
           <td><label>T Tonnes Delivered</label></td>
           <td><input type="number" id="lease" style="width: 100px " name="lease" /></td>

         </tr>        
          </table>
        <div>
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

      <div class="col-md-10" style="display: inline-block; float: left;">
        <table class="table" width="100%" style="width: 100">
                <thead>
                    <tr>
                        <th>Period No</th>
                        <th>Grade</th>
                        <th>Tonnes</th>
                        <th>DevOre</th>
                        <th>Recovery</th>
                        <th>Recovered Grade</th>
                        
                    </tr>
                </thead>
                    <tbody>
                        <tr class="table-primary">
                            <td>2002</td>
                            <td>D</td>
                            <td>9</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2002</td>
                            <td>D</td>
                            <td>12</td>
                            <td>23</td>
                            <td>23</td>
                            <td>23</td>

                        </tr>
                        <tr class="table-success">
                            <td>2002</td>
                            <td>D</td>
                            <td>9</td>
                            <td>23</td>
                            <td>23</td>
                            <td>23</td>
                        </tr>
                        <tr class="table-info">
                            <td>2002</td>
                            <td>D</td>
                            <td>9</td>
                            <td>23 23</td>
                            <td>23 23</td>
                            <td>23 23</td>
                        </tr>
                        <tr class="table-warning">
                            <td>2002</td>
                            <td>D</td>
                            <td>03</td>
                            <td>65</td>
                            <td>65</td>
                            <td>65</td>
                        </tr>
                        <tr class="table-danger">
                            <td>2002</td>
                            <td>D</td>
                            <td>12</td>
                            <td>28</td>
                            <td>28</td>
                            <td>28</td>
                        </tr>
                        <tr class="table-active">
                            <td>2002</td>
                            <td>D</td>
                            <td>13</td>
                            <td>83</td>
                            <td>83</td>
                            <td>83</td>
                        </tr>            
                        <tr class="table-light">
                            <td>2002</td>
                            <td>D</td>
                            <td>13</td>
                            <td>234</td>
                            <td>234</td>
                            <td>234</td>
                        </tr>
                        <tr class="table-dark">
                            <td>2002</td>
                            <td>D</td>
                            <td>15</td>
                            <td>32</td>
                            <td>32</td>
                            <td>32</td>
                        </tr>
                    </tbody>
            </table>
      </div>
    </div>
  </div>
    
  </div>
   
@endsection
