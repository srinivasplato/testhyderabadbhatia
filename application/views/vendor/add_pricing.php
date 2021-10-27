<div class="my-3 my-md-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
        <form action="<?=base_url();?>vendor/home/submit_pricing" method="post" id="validation" enctype="multipart/form-data" class="card">
            <div class="card-header">
              <h3 class="card-title">Add Pricing</h3>
            </div>
            <?php if($this->session->flashdata('success') != "") : ?>
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span class="sr-only">Close</span></button>
                <?=$this->session->flashdata('success');?>
              </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="col-md-12">
                <h3><label>Enter Details</label></h3> 
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Select Category</label>
                      <select class="select2 form-control" data-placeholder="Venue Type" name="category_id" id="category_id" onchange="get_venues(this.value)" required="">
                        <option value="">Select Category</option>
                        <?php
                        if(!empty($categories))
                        {
                          foreach($categories as $cat)
                          {
                            if($cat->id == 7 || $cat->id == 8)
                            {
                              ?>
                              <option value="<?=$cat->id;?>"><?=$cat->title;?></option>
                              <?php
                            }
                          }
                        }
                        ?>
                      </select>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Select Venues</label>
                      <select class="select2 form-control" data-placeholder="Venue Type" name="venue_id" id="venue_id" onchange="get_pricings(this.value)" required="">
                        <option value="">Select Venue</option>
                      </select>
                    </div>
                    </div>


                  <div class="clearfix"></div>

                  <div class="col-lg-12 row" id="pricing">
                  <div class="col-lg-4" id="">
                    <div class="form-group">
                      <label class="form-label">Enter Title</label>
                      <div class="row">
                        <div class="col-md-12">
                          <input type="text" class="form-control" name="title[]" placeholder="Title" id="title" required="">
                        </div>                       
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4" id="">
                    <div class="form-group">
                      <label class="form-label">Enter Price</label>
                      <div class="row">
                        <div class="col-md-12">
                          <input type="number" class="form-control" name="price[]" placeholder="Price" id="price" required="" min="0">
                        </div>                       
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4" id="">
                    <div class="form-group">
                      <label class="form-label">Enter Quantity</label>
                      <div class="row">
                        <div class="col-md-12">
                          <input type="number" class="form-control" name="quantity[]" placeholder="Quantity" id="quantity" required="" min="0" value="1" readonly="">
                        </div>                       
                      </div>
                    </div>
                  </div>

                  </div>
                  <div class="col-lg-12 mb-2">
                    <a class='btn btn-primary pull-right add_field_button'><i class="fe fe-plus-circle text-white"></i></a>
                    <br /><br />
                  </div>


                </div>
              </div>
            
            </div>
          </div>
          <div class="card-footer text-right">
            <div class="d-flex">
              <!-- <a href="javascript:void(0)" class="btn btn-link">Cancel</a> -->
              <button type="submit" class="btn btn-primary ml-auto">Send data</button>
            </div>
          </div>
        </form>

        <script>           
           
            function get_venues(category_id)
            {              
              $.ajax( {
                  type: 'POST',
                  url: "<?=base_url();?>vendor/home/get_venues",
                  data: {category_id:category_id},
                  beforeSend: function( xhr ) {
                      xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                      $("#wait").css("display", "block");
                  },
                  success: function(data) { //alert(data);exit;
                      //alert(data);
                      $('#venue_id').html(data);   
                      $("#wait").css("display", "none");
                      //location.reload();
                      return false;
                  }
              });
            }

            function get_pricings(venue_id)
            {
              var category_id = $('#category_id').val();//alert(category_id);
              $.ajax( {
                  type: 'POST',
                  url: "<?=base_url();?>vendor/home/get_pricings",
                  data: {venue_id:venue_id, category_id:category_id},
                  beforeSend: function( xhr ) {
                      xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                      $("#wait").css("display", "block");
                  },
                  success: function(data) { //alert(data);exit;
                      //alert(data);
                      $('#pricing').html(data);   
                      $("#wait").css("display", "none");
                      //location.reload();
                      return false;
                  }
              });
            }
        </script>
      </div>
      </div>
      </div>

  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-validate-additional-methods.js"></script>
<script>
  $(document).ready(function() { //alert();
      $("#validation").validate({
          rules: {
            // simple rule, converted to {required:true}
            venue_name: {
                required : true,
            },
            city_id: {
                required : true,
            },
            area_id: {
                required : true,
            },
            category_id: {
                required : true,
            },
            "event_types[]": {
                required : true,
            },
            venue_name: {
                required : true,
            },
            address: {
                required : true,
            },
            from: {
                required : true,
            },
            price: {
                required : true,
            },
            discount_percentage: {
                required : true,
            },
            description: {
                required : true,
            },
            booking_type: {
                required : true,
            },
            venue_type: {
                required : true,
            },
            "amenities[]": {
                required : true,
            },
            "services[]": {
                required : true,
            },
            contact_number: {
                required : true,
                number:true,
                minlength:10,
                maxlength:10,
            },
            email_id: {
                required : true,
                myEmail:true
            }
          },
          messages:{
            email_id: {
              remote : "Email Id already exists",
            }
          },
          submitHandler: function(form) {
              //$("#btnSubmit").prop('disabled', true);
              form.submit();
          }
        });
  });
  jQuery.validator.addMethod("myEmail", function(value, element) {
    return this.optional( element ) || ( /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}$/.test( value ) && /^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/.test( value ) );
  }, 'Please enter valid email address.');


    $(document).ready(function() {
      var max_fields      = 8; //maximum input boxes allowed

      var wrapper         = $("#pricing"); //Fields wrapper
      var add_button      = $(".add_field_button"); //Add button ID
      
      var html = $("#pricing").html();//alert(html);
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
        //alert(html);
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append(html+'<div class="col-lg-12 mb-2"><a class="pull-right remove_field"><i class="fe fe-minus-circle text-red"></i></a><br></div>'); //add input box
          }
      });      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent().prev('div').remove(); $(this).parent().prev('div').remove(); $(this).parent().prev('div').remove(); $(this).parent().remove(); x--;
      });
  });
</script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB-7WHSIR_GHt8IeXZFVFSevq1EO8X4aho&sensor=false&libraries=places&language=en-AU"></script>
<script type="text/javascript">
   $(document).ready(function() {
      var max_fields      = 10; //maximum input boxes allowed

      var wrapper         = $("#row"); //Fields wrapper
      var add_button      = $(".add_field_button"); //Add button ID
      
      var html = $("#row").html();//alert(html);
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
        //alert();
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append(html); //add input box
          }
      });      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      });
  });
</script>