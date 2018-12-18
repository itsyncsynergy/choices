<?php $this->load->view('header');

echo '<body class="index-page sidebar-collapse" style="background-image: url(\''.base_url('assets/img/homepage-background-mobile.jpg').'\'); background-size: cover;">
    <div class="navigation page-header header-filter clear-filter" data-parallax="true"> 
        <div class="container">
            <div class="homepage-logo left">
				<a href="https://eazy.dstv.com/en/ng/get-dstv/package/details/dstv-compact"><img src="'.base_url('assets/img/dstv.logo-white.png').'" alt=""></a>
                
            </div>
            <div class="homepage-logo right">
                <a class="" href="'.base_url().'"><img src="'.base_url('assets/img/refresh.png').'" alt=""></a>
            </div>
        </div>
    </div>

    
    <div class="main main-raised" style=" margin-top: 10px;">
        <div class="">
            <div class="section section-basic" style="background-image: url(\''.base_url('assets/img/results/'.$result['code'].'.png').'\');background-size: cover; background-repeat: no-repeat; max-width: 480px; align-content: center; margin: auto;">
                <div class="container" style="padding: 30px 0; padding-bottom: 0px; height: 200px;" >
                    
                </div>

            </div>
            <div class="section section-basic" style="padding: 0px;">
                <div class="container" style="padding: 5px 0; padding-bottom: 0px; background-color: #FFFF; box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2)">
                <div class="container">
                    <div class="title">
                        <i><h2>'.$result['message'].'</h2></i>
                    </div>
                
                </div>
                <div class="question-box">
                    <div class="container">
                    <div class="title">
                        <h3>'.$result['body'].'</h3>
                    </div>
                
                    </div>
                </div>
                </div>
                
            </div>

        </div>


    </div>

    <div class="main main-raised main-question">
      <div class="section-basic">
        <div class="container" style="box-shadow: none;">
            <a href="https://www.youtube.com/watch?v=HbtmECxFvVk" class="question resultbtn btn btn-primary btn-lg">Your best choices live here</a>
        </div>
      </div>
    </div>
    <div class="footer">
    <div class="footer-share" style=" width: 100%;">
      <div class="container">
        <div class="col-4 left">
          <a class="" id="shareBtn"><img src="'.base_url('assets/img/facebook-share.png').'" alt="DStv Facebook share" style=" max-width: 100%;"></a>
        </div>
        <div class="col-4 right">
        <div><a href=" https://twitter.com/intent/tweet?text=I+just+played+the+DStv+Choices+game.+Click+here+to+play.&hashtags=DStvCompact&url=http://choosemoreapp.com"><img src="'.base_url('assets/img/twitter-share.png').'" alt="DSTV Twitter Share" style=" max-width: 100%;"></a> </div>
          
          
        </div>
      </div>
    </div>
    
  </div>
  <script>
document.getElementById("shareBtn").onclick = function() {
  FB.ui({
    method: "share",
    display: "popup",
quote: "I just played the DStv Choices game. Click here to play",
hashtag: "#DStvCompact",
    href: "http://choosemoreapp.com",
  }, function(response){});
}
</script>

';

$this->load->view('footer') ?>
