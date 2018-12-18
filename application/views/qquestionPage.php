<?php $this->load->view('header');

    echo '<body class="index-page sidebar-collapse">
  
  <div class="navigation" data-parallax="true" style=" width: 90%; top: 0px; position: absolute; z-index: 120;">
      <div class="container">
        <div class="homepage-logo left">
          
        </div>
        <div class="homepage-logo right">
          <a class="" href="'.base_url().'"><img src="'.base_url('assets/img/refresh.png').'" alt=""></a>
          
        </div>
      </div>
      
    </div>
  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url(\''. base_url('assets/img/backgrounds/'.$headerPic).'\');">
    
    
  </div>
  <div class="main main-raised">
      <div class="section section-basic">
        <div class="container" style="padding: 10px 0; padding-bottom: 0px; background-color: #FFFF; box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2)">
          <div class="container">
            <div class="logo">
              <img style="width: 100px; margin:0 auto;" src="'. base_url('assets/img/dstv-logo-blue.png') .'" alt="">
            </div>
          
          </div>
          <div class="question-box">
            <div class="container">
              <div class="title">
                <h3>'.$question.'</h3>
              </div>
          
            </div>
          </div>
        </div>
        
      </div>
    
    </div>
    
    
    <div class="main main-raised main-question">
      <div class="section-basic">
        <div class="container" style="box-shadow: none;">';
            foreach ($options as $option) {
                echo form_open($formSubmitLink).
                '<input type="hidden" name="answer" value="'.$option['value'].'">
                <input type="hidden" name="question" value="'.$question_.'">
                <button class="question btn btn-primary btn-lg btn-qs">'.$option['text'].'</button>' 
                .form_close();
            }

        echo '
        </div>
      </div>
    </div>
  ';
  
  
  $this->load->view('footer')

?>

