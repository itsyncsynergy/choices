<div class="container-fluid border-top" style="font-size: 12px; padding-left: 0px !important; padding-right: 0px !important;">
      <div class="col-md-12 py-3" style="background: url(<?php echo base_url() ?>assets/images/footer-image.png);">
          <span class="flat-line mx-5"><img src="<?php echo base_url() ?>assets/images/signature.png" width="10%"></span>
      </div> 
           
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?php  echo base_url()?>assets/js/popper.min.js"></script>
<script src="<?php  echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php  echo base_url()?>assets/js/all.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	$(document).ready(function(){
			timex=0;
				$.d('timexInt',setInterval(function() {
					timex++;
					var a = {pathStrokeWidth:5};
					if (timex==721) timex = 1;
					if (timex < 361){
						a.startAng = 0;
						a.endAng = timex;
					} else {
						a.startAng = timex-360;
						a.endAng = 360;
					};
					
					$('#timex').drawCircle(a);
				}, 1));

	});

    $(function () {
      $('[data-toggle="popover"]').popover()
    });

    $(function(){

    	$("#btnMe").click(function (event) {
    		console.log("Me is Clicked");
    		$('#type').val('1');

    		if($.trim($('#name').val()) == '' || $.trim($('#email').val()) == ''){
						swal({
                              title: "Error!!!",
                              text: "Fields cannot be empty",
                              icon: "error",
                      });

					$('#name').focus();
    				$('#email').focus();

			}else {

				  var values = $("#frmUser").serialize();
		            event.preventDefault();
		            console.log(values);
		            $.ajax({
		                    url:'form/submit',
		                    type:'POST',
		                    dataType: "json",
		                    data: values,
		                    success:function(result){

		                        if (result.code == 200 && result.type == 1) {

		                        	window.location.href = "question/supply"

		                        }
		                        else if (result.code == 200 && result.type == 2) {

		                        	window.location.href = "question/relation"
		                        }
		                        else if (result.code == 200 && result.type == 3) {

		                        	window.location.href = "question/long"
		                        }
		                       
		                    },
		                    error: function (data) {
		                        swal({
		                              title: "Notification",
		                              text: "Something Went Wrong",
		                              icon: "warning",
		                              buttons: true,
		                              dangerMode: true,
		                        });
		                        console.log(data);
		                    },
		            });

			}

    	});

    	$("#btnFamily").click(function (event) {
    		console.log("Family is is Clicked");

    		$('#type').val('2');

    		if($.trim($('#name').val()) == '' || $.trim($('#email').val()) == ''){
    				swal({
                              title: "Error!!!",
                              text: "Fields cannot be empty",
                              icon: "error",
                     });

    				$('#name').focus();
    				$('#email').focus();
    		}else {

    			var values = $("#frmUser").serialize();
	            event.preventDefault();
	            console.log(values);
	            		$.ajax({
	                    url:'form/submit',
	                    type:'POST',
	                    dataType: "json",
	                    data: values,
	                    success:function(result){

	                        if (result.code == 200 && result.type == 1) {

	                        	window.location.href = "question/supply"

	                        }
	                        else if (result.code == 200 && result.type == 2) {

	                        	window.location.href = "question/relation"
	                        }
	                        else if (result.code == 200 && result.type == 3) {

	                        	window.location.href = "question/long"
	                        }
	                       
	                    },
	                    error: function (data) {
	                        swal({
	                              title: "Notification",
	                              text: "Something Went Wrong",
	                              icon: "warning",
	                              buttons: true,
	                              dangerMode: true,
	                        });
	                        console.log(data);
	                    },
	            });

    		}
          
            
    	});

    	$("#btnFriend").click(function (event) {
    		console.log("Friend is is Clicked");
    		$('#type').val('3');

    		if($.trim($('#name').val()) == '' || $.trim($('#email').val()) == ''){
    			swal({
                              title: "Error!!!",
                              text: "Fields cannot be empty",
                              icon: "error",
                 });

    			$('#name').focus();
    			$('#email').focus();

    		} else {
    			var values = $("#frmUser").serialize();
            	event.preventDefault();
            	console.log(values);
            	$.ajax({
                    url:'form/submit',
                    type:'POST',
                    dataType: "json",
                    data: values,
                    success:function(result){

                        if (result.code == 200 && result.type == 1) {

                        	window.location.href = "question/supply"

                        }
                        else if (result.code == 200 && result.type == 2) {

                        	window.location.href = "question/relation"
                        }
                        else if (result.code == 200 && result.type == 3) {

                        	window.location.href = "question/long"
                        }
                       
                    },
                    error: function (data) {
                        swal({
                              title: "Notification",
                              text: "Something Went Wrong",
                              icon: "warning",
                              buttons: true,
                              dangerMode: true,
                        });
                        console.log(data);
                    },
            	});

    		}
           
    	});

    });
</script>
<script src="<?php  echo base_url()?>assets/js/fun_with_svg_arcs.js" type="text/javascript"></script>
