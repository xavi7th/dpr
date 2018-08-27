<template lang="html">
  <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Profile for New Application</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/create_company">
                <!-- {{ csrf_field() }} -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Application Type</label>
                    <select class="form-control select2" name="application_type" style="width: 100%;">
                      <option selected="selected">Select Application Type</option>
                      <option value="JV">JV</option>
                      <option value="PSC">PSC</option>
                      <option value="Marginal">Marginal</option>
                      <option value="Sole Risk">Sole Risk</option>
                      <option value="PLC">PLCs</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sub-Category</label>
                    <select id="dropdown2" class="form-control select2" name="sub_category" style="width: 100%;">
                      <option selected="selected">Select Sub-Category</option>
                      <option ng-repeat="data in states" value=""></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Name of Gas Plant</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
                      <input type="text" name="gas_plant_name" class="form-control" placeholder="Enter Name of Gas Plant">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select id="dropdown3" class="form-control select2" name="lga" style="width: 100%;">
                      <option selected="selected">Select Category</option>
                      <option value="Refilling Plant">Refilling Plant</option>
                      <option value="Industrial Plant">Industrial Plant</option>
                      <option value="Auto Gas Plant">Auto Gas Plant</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>State</label>
                    <select id="dropdown2" class="form-control select2" name="state" style="width: 100%;">
                      <option selected="selected">Select State</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>L.G.A</label>
                    <select id="dropdown3" class="form-control select2" name="lga" style="width: 100%;">
                      <option selected="selected">Select LGA</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Town</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion ion-location"></i></span>
                      <input type="text" name="town" class="form-control" placeholder="Enter Town">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion ion-location"></i></span>
                      <input type="text" name="address" class="form-control" placeholder="Enter Address">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <a type="submit" class="btn btn-primary" style="float: right;">Save & Continue</a>
                </div>
              </form>
            </div>
          </div>
        </div>


      </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component hmm.')
        }
    }


</script>
