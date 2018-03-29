 @extends('layout.index')

 @section('content')
 <!-- Page Content -->
    <div class="container">

    	@include('layout.slide')

        <div class="space20"></div>


        <div class="row main-left">
            @include('layout.menu')

            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"><span class="glyphicon glyphicon-align-left"></span>Giới thiệu</h2>
                    </div>

	            	<div class="panel-body">
	            		<!-- item -->
                        <h3><img width="820" height="200" src="http://codemienphi.com/wp-content/uploads/2016/05/about-us.jpg"></h3>
					    
                        <div class="break"></div>
					   	<h4><img width="50" height="50" src="http://sv1.upsieutoc.com/2017/12/04/8.png">Giới thiệu : </h4>
                        <p>Kênh Tin Tức là trang chuyên cập nhật những tin tức,sự kiện diễn ra trên thế giới . </p>

                        <h4><img width="50" height="50" src="http://sv1.upsieutoc.com/2017/12/04/9.png">Lý do ra đời : </h4>
                        <p>Kênh Tin Tức ra đời là do nhu cầu học tập và nghiên cứu của chúng tôi .  </p>
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">
                    </div>
                       
                        <center><h4> Rất mong nhận được sự ủng hộ của các bạn.Trân trọng !!!. </h4></center>
                        <center><img width="400" height="200" src="http://sv1.upsieutoc.com/2017/12/04/7.png"></center>
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">
                    </div>
                       
                      
                     



                    

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

  @endsection