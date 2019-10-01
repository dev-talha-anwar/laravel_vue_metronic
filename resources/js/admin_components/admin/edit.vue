<template>
    <div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered ">
          <div class="portlet-title  tabbable-line">
            <div class="caption caption-md">
              <i class="icon-globe theme-font hide"></i>
              <span class="caption-subject font-purple bold uppercase">Profile Account</span>
            </div>
            <ul class="nav nav-tabs">
              <li class="active border-purple">
                <a href="#tab_1_1" data-toggle="tab" class="font-purple">Personal Info</a>
              </li>
            </ul>
          </div>
          <div class="portlet-body light" ref="formContainer">
            <div class="tab-content">
              <!-- PERSONAL INFO TAB -->
              <div class="tab-pane active" id="tab_1_1">
                <div class="" id="errorsdiv" style="display: none;"></div> 
                <form autocomplete="off" class="ajaxform" role="form" >
                  <div class="form-group form-md-line-input">
                    <div class="input-icon right">
                      <input name="name" :value="data.name"  type="text" class="form-control border-purple">
                      <label for="form_control_1">Name</label>
                      <span class="help-block">Change Your Name</span>
                      <i class="icon-user"></i>
                    </div>
                  </div>
                  <div class="form-group form-md-line-input password-strength">
                    <div class="input-icon right">
                      <label for="control-label">Enter New Password</label>
                      <input name="password" type="text" class="form-control border-purple" id="password_strength">
                    </div>
                  </div>
                  <div class="margiv-top-10">
                    <button id="submitbtn" v-on:click="submitform" type="button" class="btn purple uppercase mt-ladda-btn ladda-button" data-style="zoom-in">
                      <span class="ladda-label">
                        <i class="glyphicon glyphicon-saved"></i> Save</span>
                        <span class="ladda-spinner"></span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
  </div>
  <!-- END CONTENT -->
</template>
<script>
export default {
  props:[
    'id'
  ],
  data(){
    return {
      data:{},
    }
  },
  created(){
    // ajax(route('admin.edit',this.id),'GET','','',this);
    this.$Progress.start();
    let loader = this.$loading.show({ 
      container: this.$refs.formContainer,
    });
    axios.get(route('admin.edit',this.id))
    .then((data) => {
      this.data = data.data.admin;
      this.$Progress.finish();
      loader.hide()
    })
    .catch((error) => {
      this.$Progress.fail();
      loader.hide()
    });
    },
  methods:{
    submitform(){ 
      ajax(route('admin.update',this.id),'PUT',$('.ajaxform').serialize(),document.getElementById("submitbtn"),this);
    }
  } 
}
</script>