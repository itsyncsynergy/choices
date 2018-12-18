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
                            <br>
                            <br>
                            <br>
                            <br><br><br><br>

                        </div>

                        <div class="col-md-6 px-5 rs-wall">
                            <div class="row">
                            	<div class="col-md-2"></div>
                            	<div class="col-md-8 mt-4">
                            		<div class="card border shadow p-4 mb-5 mt-4">
									  <div class="card-body text-center">
									   <h5> FADA CHRISTMAS SAYS...</h5>

									   <h2><?php echo $_camount; ?></h2>

									  </div>
								    </div>

                    

                                 
                            	</div>
                                
                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        
     <?php $this->load->view('footer'); ?>
</body>
</html>