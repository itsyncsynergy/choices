
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
                            <div class="row">
                                <div class="col-md-1"></div>
                                   <div class="col-md-10">
                                        <h5 class="text-center mt-5 mb-3"><?php echo $question; ?></h5>
                                        <?php 

                                             foreach ($options as $option) {
                                                echo form_open($formSubmitLink).
                                                '<input type="hidden" name="answer" value="'.$option['value'].'">
                                                <input type="hidden" name="question" value="'.$question_.'">
                                                 
                                                <div class="text-center mb-4">
                                                    <button type="submit" class="btn btn-secondary btn-sm w-100" style="border-radius: 20px">'.$option['text'].'</button>
                                                </div> '
                                               
                                                .form_close();
                                            }

                                        ?>
			                        
                                  </div>
                            </div> 
                              <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php $this->load->view('footer'); ?>
</body>
</html>