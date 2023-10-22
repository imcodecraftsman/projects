<?php

    include('include/header.php');

?>


  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  id="record_insert_model" >

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'client.php';">Okay</button>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabelDelete" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabelDelete">Are you sure, you want to delete this record ?</h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'client.php';">Cancel</button>
                  <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Perform Test</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
		  <li class="active" ><a>Perform Test</a></li>
		</ol> 
	</div>


	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					<div class="panel-body">
              <div class="table-responsive">
              	<div style="margin-top: 10px;" id="TestPerformDatatable" class="table-responsive"></div>
              </div>

					</div>
				</div>

				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>

	</div>

</div>
<?php

    include('include/footer.php');
    
?>

<script type="text/javascript">
	

$(document).ready(function() {

  TestPerformDatatable();

});



function TestPerformDatatable()
{ 

    $('#TestPerformDatatable').empty().html( '<table  id="main_datatable" class="table table-bordered"  style="width: 100%;"  ></table>' );
    $('#main_datatable').dataTable(
    {       


            // "iDisplayLength":10,
            //"bJQueryUI": true,
            "sAjaxSource": "perform_test_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [

              { 
                "sTitle": "ID", "bVisible":false, "sClass": "left","fnRender": function(obj) 

                   {
                      test_id = obj.aData[ obj.iDataColumn ]; 
                      return test_id;
                    } 


              },


              { 
                "sTitle": "Status", "bVisible":false, "sClass": "left","fnRender": function(obj) 

                   {
                      status = obj.aData[ obj.iDataColumn ]; 
                      return status;
                    } 


              },


              { 
                "sTitle": "ApprovedStatus", "bVisible":false, "sClass": "left","fnRender": function(obj) 

                   {
                      approved_status = obj.aData[ obj.iDataColumn ]; 
                      return approved_status;
                    } 


              },


              { 

                "sTitle": "<span>Action</span>","sClass": "center","sWidth": "14%","bVisible":true,"bSortable":false,"fnRender": function(obj) 
                { 
     
                          Id= obj.aData[ obj.iDataColumn];
                          idl= obj.aData[obj.iDataColumn];   

                        if(approved_status == "" && status == "True")
                        {

                          return  "<td><span style='color:green;' >Test Performed</span><a class='fa fa-pencil-square-o' style='padding-left:10px;font-size:17px;' href='"+idl+"?etid="+test_id+"' ></a></td>";

                        }else if(approved_status == "Approved" && status == "True")
                        {

                          return  "<td><span style='color:green;'>Test Performed & Approved</span></td>";

                        }else
                        {

                          return  "<td><a href='"+idl+"?tid="+test_id+"' class='btn btn-primary btn-sm'>Perform Test</a></td>";

                        } 
 
                       

                }       
              },

              
              { 
                "sTitle": "Client Name", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Test Name", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Template Name", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Due Date", "bVisible":true, "bSortable":true, "sClass": "left"
              },


              { 
                  "sTitle": "Last Updated","sClass": "left", "bSortable":true, "bSearchable": true,"fnRender": function(obj) 

                   {
                      full_date_time = obj.aData[ obj.iDataColumn ]; 
                      full_data = full_date_time.split(" ");
                      full_date = full_data[0].split("-");
                      return full_date[2]+"-"+full_date[1]+"-"+full_date[0]+" "+full_data[1];
                    } 

              }

            ]
       });
}



function PerformTest(page_link) {

  console.log(page_link);
  //window.location.href = page_link;

}


/*



  function select_all(obj)
  {
      if($(obj).is(':checked'))
      {
         $('.sel_log').each(function(){
            this.checked = true;
            $(this).parents('tr').css('background-color','silver');
            $(this).parents('tr').addClass('del');
            delete_selected_id_array.push($(this).attr('id'));
            document.getElementById("DeleteFormDetails").disabled = false;
         });
      }else
      {
        $('.sel_log').each(function(){
            this.checked = false;
            $(this).parents('tr').removeAttr('style');
            $(this).parents('tr').removeClass('del');
            delete_selected_id_array=[];
            document.getElementById("DeleteFormDetails").disabled = true;
         });

      }
  } 



  function select_record_for_delete(obj45)
  {

      if($(obj45).is(':checked'))
      {
          var ind =  delete_selected_id_array.indexOf($(obj45).attr('id'));
          if(ind == -1) {
            delete_selected_id_array.push(($(obj45).attr('id')));
          }
          $(obj45).parents('tr').css('background-color','silver');
          $(obj45).parents('tr').removeClass();
          $(obj45).parents('tr').addClass('del');
          document.getElementById("DeleteFormDetails").disabled = false;
      }
      else
      {
          for(var i = delete_selected_id_array.length - 1; i >= 0; i--) 
          {
              if(delete_selected_id_array[i] === $(obj45).attr('id')) 
              {
                 delete_selected_id_array.splice(i, 1); 
              }
          }
        
          $(obj45).parents('tr').removeAttr('style');
          $(obj45).parents('tr').removeClass('del');
          $(obj45).parents('tr').addClass('biege');

          if(delete_selected_id_array.length == 0)
          {
              document.getElementById("DeleteFormDetails").disabled = true;
          }
      }
  }


  function delete_selected_record()
  {

     //alert(delete_selected_id_array.length);
      for(var i=0;i<delete_selected_id_array.length;i++) 
      {
          var jqxhrn = $.get("client_db_operations.php?Id="+delete_selected_id_array[i]+"&task=delete_selected_records", function() {  
          })  .done(function(data) {
                //alert(data);
                window.location.href = 'client.php';
          }) 
      }
   
    
        
  }



 function update_details(id){

        
        var jqxhrn = $.get("client_db_operations.php?Id="+id+"&task=get_record_for_edit", function() {}).done(function(data) {
            var result = data.split("`");
            ShowForm();
            $('#task').empty().val('UpdateDetails');
            $('#client_first_name').val(result[0].trim());
            $('#client_last_name').val(result[1].trim());
            $('#client_company_name').val(result[2].trim());
            $('#client_email_id').val(result[3].trim());
            $('#client_mobile_number').val(result[4].trim());
            $('#client_password').val(result[5].trim());
            $('#client_id').val(id);
                
      }) 
 }  */


</script>

