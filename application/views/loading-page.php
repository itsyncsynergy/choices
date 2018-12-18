<?php $this->load->view('header'); ?>
<body>
	 <?php $this->load->view('navbar'); ?>

	<div class="container-fluid" style="margin-top: 5rem">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 second-page-bg py-5 px-5 d-none d-lg-block">    
                                <h3 class="py-3 text-white" style="margin-bottom: 3rem !important; margin-top: 5rem"> <br> <br> </h3>
                                <h3 class="btn btn-default w-25" style="border-radius: 20px; margin-bottom: 5rem !important"></h3>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                        </div>

                        <div class="col-md-6 px-5 bg-wall">
                            <div class="row text-center">
                                <div class="col-md-4"></div>
                                <div class="col-md-6 text-center">

                                    <div class="google_map">
                                          <div id="timex"></div>
                                    </div>
                                    <div class="paragraph">
                                          <img src="<?php echo base_url() ?>assets/images/fada-xmas.png" width="100%"> 
                                    </div>

                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                                    <h6 class="mx-0 mb-5 mt-5 my-size">CONTACTING FADA CHRISTMAS...</h6>
     
                                </div>

                            </div> 
                        </div>
                    </div>
                </div>
            </div>
    </div>

	    <?php $this->load->view('footer'); ?>
</body>
<script type="text/javascript">

$(document).ready(function() {
    window.setTimeout(function(){
        window.location.href = "result1"
    },
    8000);
});
</script>
</html>