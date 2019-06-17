<template>
  <div>
    <button
      type="button"
      class="btn btn-default btn-xs bg-navy"
      data-toggle="modal"
      :data-target="`#modal-default${companyDetails.id}`"
    >View More Details</button>
    <div class="modal fade" :id="`modal-default${companyDetails.id}`">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Company Details</h4>
          </div>
          <div class="modal-body">
            <div class="box box-primary">
              <!-- <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
              </div>-->
              <div class="box-body">
                <strong>
                  <i class="fa fa-book margin-r-5"></i> Alias
                </strong>

                <p class="text-muted">{{ companyDetails.company_alias }}</p>

                <hr>

                <strong>
                  <i class="fa fa-book margin-r-5"></i> Contract Type
                </strong>

                <p class="text-muted">{{ companyDetails.contract_type }}</p>

                <hr>

                <strong>
                  <i class="fa fa-map-marker margin-r-5"></i> Location / Address
                </strong>

                <p
                  class="text-muted"
                >{{ `${companyDetails.address}, ${companyDetails.town}, ${companyDetails.lga}, ${companyDetails.state}` }}</p>

                <hr>

                <strong>
                  <i class="fa fa-pencil margin-r-5"></i> Contact Details
                </strong>

                <p>
                  <span class="bg-maroon label-info h5 px-2">{{ companyDetails.mobile_number }}</span>
                  <span
                    class="bg-navy-active label-success h5 px-2 mx-3"
                  >{{ companyDetails.email_address }}</span>
                </p>

                <hr>

                <strong>
                  <i class="fa fa-file-text-o margin-r-5"></i> USER DETAILS
                </strong>

                <p class="mt-5">
                  <strong>User Name</strong>
                  {{ (companyDetails.user || {}).username || 'No marketer attached to this company' }}
                </p>
                <p>
                  <strong>Password</strong>
                  {{ (companyDetails.user || {}).activated ? 'Account already activated' : 'pass' }}.
                </p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "ShowCompanyDetails",
    props: ["details"],
    data() {
      return {};
    },
    computed: {
      companyDetails() {
        return JSON.parse(this.details);
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
