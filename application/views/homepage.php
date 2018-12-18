<?php $this->load->view('header');

echo '<body class="index-page sidebar-collapse" style="background-image: url(\'./assets/img/homepage-background-mobile.jpg\'); background-size: cover;">
    <div class="navigation page-header header-filter clear-filter" data-parallax="true"> 
        <div class="container">
            <div class="homepage-logo left">
				<a href="https://eazy.dstv.com/en/ng/get-dstv/package/details/dstv-compact"><img src="./assets/img/dstv.logo-white.png" alt=""></a>
                
            </div>
            <div class="homepage-logo right">
                <a class="" href="'.base_url().'"><img src="'.base_url('assets/img/refresh.png').'" alt=""></a>
            </div>
        </div>
    </div>

    
    <div class="">
        <div class="" style=" margin-top: 100px;">
            <div class="section section-basic">
                <div class="container" style="padding: 30px 0; padding-bottom: 0px;">
                    <div class="container">
                        <div class="logo" style="width: 200px;">
                            <img style="width: 200px; margin:0 auto;" src="'.base_url('assets/img/logo.png').'" alt="">
                        </div>

                    </div>
                    <div class="start-button">
                        <div class="container">
                            <div class="title">
                                <a href="'.base_url('question/gender').'" class="btn btn-primary btn-lg" style="background-color: #FBFBFC; color: #D83740 !important;">I CHOOSE TO BEGIN</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>

';

$this->load->view('footer') ?>