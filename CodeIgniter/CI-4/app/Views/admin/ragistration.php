<?php include_once('AHeader.php'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ragistration</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- Gallary Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="deleteImages">Delete</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i>User Ragistration 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body" id="userRegistrationForm">
                    <form id="ragistration_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your First Name" name="first_name" id="first_name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name" name="last_name" id="last_name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Your Password" name="password" id="password">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>User Role</label>
                                    <select class="form-control" name="user_role" id="user_role">
                                        <option value="">Select User Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Email (Username)</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email Id" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="number" class="form-control" placeholder="Enter Your Mobile Number" name="mobile_number" id="mobile_number">
                                </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control" name="state" id="state" onchange="stateChange()">
                                        <option value="">Select State</option>
                                        <?php 
                                            foreach ($state_data as $key => $value) { ?>
                                              <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="form-control" name="city" id="city">
                                        <option value="">Select City</option>
                                        <?php 
                                            foreach ($city_data as $key => $value) { ?>
                                              <option value="<?php echo $value['id'];?>"><?php echo $value['city'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" placeholder="Enter Your Address" name="address" id="address" style="resize: none;"></textarea>
                                </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Profile Photo</label>
                                    <input type="file" name="profile_photo" id="profile_photo" accept=".jpg,.png">
                                    <input type="hidden" name="profile_photo_name" id="profile_photo_name">
                                    <img src="" id="profile_photo_src" style="width: 160px;margin-top: 32px;">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Resume Upload</label>
                                    <input type="file" name="resume" id="resume" accept=".pdf"><br>
                                    <a href="javascript:void(0)" class="fa fa-file-pdf-o fa-3x text-danger" id="resume_src" style="display:none;" target="_blank"></a><br>
                                    <input type="text" name="resume_name" id="resume_name" style="border: none;width: -webkit-fill-available;">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Gallary Upload</label>
                                    <input type="file" name="gallary[]" id="gallary" accept=".jpg,.png" multiple><br>
                                    <span id="existingImages"><label>Existing Gallary Images</label> : <span id="existing_gallary_photos"></span><br>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">View Photos</button></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-2">
                                <input type="hidden" name="user_id" id="user_id" value="">
                                <input type="submit" name="submit" class="btn btn-success" value="Submit">
                                <a href="javascript:void(0)" class="btn btn-danger" id="closeUserForm">Close</a>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </form>
                </div>
                <!-- /.panel-body -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" id="userRole" name="userRole">
                                    <option value="">Select User Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="javascript:void(0)" class="btn btn-success" id="openUserForm">Add User</a>
                            <a href="javascript:void(0)" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover display" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>User's Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>User Role</th>
                                            <th>Last Updated</th>
                                        </tr>
                                    </thead>    
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once('AFooter.php'); ?>

<script type="text/javascript">
    var images = [];
    var userDatatable;
    $(document).ready(function() {
        var baseUrl = '<?= base_url(); ?>';
        userDatatable = $('#dataTables-example').DataTable({
            'serverMethod': 'post',
            'ajax': {
               'url':'<?= base_url('ragistration/getUsersData'); ?>',
               'data': function(data){
                  data.user_role = $('#userRole').val();
               }
            },
            'columns' : [
                { 
                    "data": null, 
                    render: function (data, type, row) {
                        return "<a href='"+baseUrl+"/printUserData/"+row.id+"' class='btn btn-warning btn-sm' target='_blank'><i class='fa fa-print'></i></a> &nbsp; <a class='btn btn-primary btn-sm' style='width:32%;' onClick='editRecord("+row.id+")'>Edit</a> &nbsp; <a class='btn btn-danger btn-sm' style='width:32%;' onClick='deleteRecord(this)' data-id='"+row.id+"' data-profile-photo='"+row.profile_photo+"' data-resume='"+row.resume+"'>Delete</a>";
                       // <img style='width: 25px;margin-left: 25px;'' src='uploads/profile_images/"+row.profile_photo+"''>
                    }
                },
                { 
                    "data": null, 
                    render: function (data, type, row) {
                        return row.first_name+ " " +row.last_name;
                    }
                },
                { data : 'mobile_number' },
                { data : 'email' },
                { data : 'user_role' },
                { data : 'last_updated' }
            ]
        });

        $('#closeUserForm').click(function () {
           $('#userRegistrationForm').slideUp();
           $('#openUserForm').show();
        });
        
        $('#openUserForm').click(function () {
           $('#userRegistrationForm').slideDown();
           $('#resume_src').hide();
           $('#ragistration_form')[0].reset();
           $('#user_id').val('');
           stateChange();
           $("#profile_photo_src").attr("src","");
           $('#openUserForm').hide();
           $('#existingImages').hide();
        });
    });

    $('#userRole').change(function () {
        userDatatable.ajax.reload();
    });

    function stateChange(id,city_id) {
       var state_id =  (id != '') ? $('#state').val() : id;
        $.ajax({
            url: "<?php echo base_url('ragistration/getAllCityData');?>",
            method: "post",
            data: {state_id:state_id},
            dataType: 'json',
            success: function(data){
                $("#city").empty().append("<option>Select City</option>");
                 var selected;
                for (var i = 0; i < data.length; i++){
                    if (state_id != '') 
                    {
                        selected = city_id == data[i].id ? 'selected' : ''; 
                        $("#city").append("<option "+selected+" value="+data[i].id+">"+data[i].city+"</option>");
                    }else{
                        $("#city").append("<option value="+data[i].id+">"+data[i].city+"</option>");
                    }
                    
                }
            },
            error: function()
            {
                alert("error");
            }
        });
    }


     $("#ragistration_form").submit(function(event) {
        if (confirm("Are you sure, you want to submit this record ?")) {
            event.preventDefault();
            var form = $('#ragistration_form')[0];
            var data = new FormData(form);
             $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "<?php echo base_url('ragistration/save'); ?>",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function(response){
                    if (JSON.parse(response)) 
                    {
                        $('#ragistration_form')[0].reset();
                        alert("Record Added Successfully !!");
                        userDatatable.ajax.reload();
                    }
                  },
               error: function()
               {
                 alert("error");
               }
            });
        }else{
            return false;
        }
    });


    function deleteRecord(e) {
        var id = e.getAttribute('data-id');
        var profile_photo = e.getAttribute('data-profile-photo');
        var resume = e.getAttribute('data-resume');
        if (confirm("Are you sure, you want to delete this record ?")) {
            $.ajax({
                url: "<?php echo base_url('ragistration/delete'); ?>",
                data: {id:id,profile_photo:profile_photo,resume:resume},
                type: "post",
                dataType: 'json',
                success: function(response){
                    if (JSON.parse(response)) 
                    {   
                        alert("Record Deleted Successfully !!");
                        userDatatable.ajax.reload();
                    }
                  },
               error: function()
               {
                 alert("error");
               }
            });
         }
    }

    function editRecord(id) {
        gallary_photos = [];
        $.ajax({
            url: "<?php echo base_url('ragistration/edit');?>",
            method: "post",
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('#openUserForm').hide();
                $('#userRegistrationForm').slideDown();  
                $('#existingImages').show();   
                $('#user_id').val(response.id);
                $('#first_name').val(response.first_name);
                $('#last_name').val(response.last_name);
                $('#email').val(response.email);
                $('#user_role').val(response.user_role);
                $('#password').val(response.password);
                $('#mobile_number').val(response.mobile_number);
                $('#state').val(response.state);
                stateChange(response.state,response.city);
                $('#address').val(response.address);
                $('#profile_photo_name').val(response.profile_photo);
                $("#profile_photo_src").attr("src","uploads/profile_images/"+response.profile_photo);
                $('#resume_name').val(response.resume);
                $('#resume_src').show().attr('href', "uploads/resume/"+response.resume);
                gallary_photos = response.gallary_photos.split(",");
                $('#existing_gallary_photos').text((gallary_photos != '') ? gallary_photos.length : 'No Existing Files');
                var html = "<div class='row'><ul class='multiple-select-ul'>";
                for (var iii = 0; iii < gallary_photos.length; iii++) {
                    if (gallary_photos[iii] != '') 
                    {
                        html += "<div class='col-md-3'><li><input type='checkbox' id='cb"+iii+"' value='"+gallary_photos[iii]+"' class='selectImages'/><label class='label' for='cb"+iii+"'><img src='uploads/gallary/"+gallary_photos[iii]+"'/></label></div>";
                    }else{
                        html += "<h2 class='text-center'> No Images , Sorry !!</h2>";
                    }
                }
                $('.modal-body').html("</ul></div>"+html);
            },
            error: function()
            {
                alert("error");
            }
        });
    }

    $(document).on('click','.selectImages', function(){
        if (this.checked) 
        {   
            images.push({
               'id' : this.id,
               'img' : this.value
            });
        }else{
            var id = this.id;
            for (var jjj = 0;jjj < images.length; jjj++) {
                if(images[jjj].id === id) 
                {   
                    images.splice(jjj, 1); 
                }
            }
        }
    });


    $('#deleteImages').click(function () {
       if (confirm("Are you sure, you want to delete selected images ?")) 
       {
        var id = $('#user_id').val();
        $.ajax({
            url: "<?php echo base_url('ragistration/delete_images'); ?>",
            data: {images:images,id:id},
            type: "post",
            dataType: 'json',
            success: function(response){
                if (JSON.parse(response)) 
                {   
                    alert("Selected Images Deleted Successfully !!");
                    location.reload();
                }
              },
           error: function()
           {
             alert("error");
           }
        });
       }else{
            return false;
       }
    })

</script>
