<template lang="html">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Inbox</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Name of Company</th>
            <th>Application Type</th>
            <th>Sub-Category</th>
            <th>Date Received</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in feeds">
            <td>{{ item.app_doc_review['name_of_gas_plant'] }}</td>
            <td>{{ item.application_type }}</td>
            <td>{{ item.sub_category }}</td>
            <td>{{ item.created_at }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
</template>

<script>
export default {
  mounted() {
    axios.get('/zopscon_inbox_all').then(response => {
      this.feeds = response.data.inbox;
      console.log(this.feeds);
    });

  },
  data(){
    return{
      feeds: []
    }
  },
  watch: {
    feeds: function (newData) {
      $('#example1').DataTable({
        responsive: true
      })
    }
  }
}
</script>
