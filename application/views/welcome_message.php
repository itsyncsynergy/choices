<?php $this->load->view('header') ?>
<body>
    <?php $this->load->view('navbar') ?>
   
        <div class="container-fluid" style="margin-top: 5rem">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 bgSizeCover py-5 px-5">    
                                <h3 class="py-3 text-white" style="margin-bottom: 3rem !important; margin-top: 5rem">FEELS GOOD TO GIVE <br>GIFTS, BUT YOU SURE SAY <br> DAT PERSON WORTH AM ?</h3>
                                <button class="btn btn-default w-50" style="border-radius: 20px; margin-bottom: 5rem !important">FIND OUT</button>
                                <br>
                            <br>
                            <br>
                            <br>

                        </div>

                        <div class="col-md-6 px-5">
                            <div class="row">
                                <div class="col-md-1"></div>
                                 <div class="col-md-10">
                                      <h5 class="text-center mt-5">WHO IS THIS PERSON ?</h5>
                                      
                                        <div class="form-group text-center">
	                                      	<div class="btn-group btn-group-lg mt-5" role="group" >
												<button type="button" id="btnMe" class="btn btn-secondary mx-2" style="border-radius: 0px !important;">ME</button>

												<button type="button" id="btnFamily" class="btn btn-secondary mx-2">FAMILY</button>

												<button type="button" id="btnFriend" class="btn btn-secondary mx-2" style="border-radius: 0px !important;">FRIEND</button>
											</div>
	                                    </div>

			                            <form class="form-horizontal mt-5 mb-5" id="frmUser">
			                 				<input type="hidden" name="type" id="type">
			                 				

			                                <div class="form-group mt-5">
			                                     <input type="text" name="name" id="name" placeholder="Name" class="form-control bg-secondary text-white" style="border-radius: 20px" required>
			                                </div>

			                                <div class="form-group mt-2">
			                                    <input type="text" name="email" id="email" placeholder="Email" class="form-control bg-secondary" style="color: #030000; border-radius: 20px" required>
			                                </div>
			                                         
			                            </form>

                                 </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $this->load->view('footer') ?>
</body>
</html>