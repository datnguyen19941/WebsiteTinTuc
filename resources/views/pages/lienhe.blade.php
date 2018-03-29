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
	            		<h2 style="margin-top:0px; margin-bottom:0px;"><span class="glyphicon glyphicon-align-left"></span> Liên hệ</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
                        <h3><img width="820" height="200" src="http://firsthaitiancog.org/FAITHNETWORK_UserFileStore/imagelibraries/ministries/7551a9e4-7204-4325-b828-08377574210c/Ministry's/Contact-US.png"></h3>
					    
                        <div class="break"></div>
					   	<h4><img width="50" height="50" src="http://sv1.upsieutoc.com/2017/12/04/14ea6d39d1333a641.png"> Địa chỉ :  475A Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM </h4>
                        

                        <h4><img width="45" height="45" src="http://sv1.upsieutoc.com/2017/12/04/3d98f115405805040.png"> Email : kenhtintuc@gmail.com </h4>
                      

                        <h4><img width="50" height="50" src="http://sv1.upsieutoc.com/2017/12/04/2.png"> Điện thoại : (028) 5445 7777</h4>
                        
                     



                        <br><br>
                        
                        <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                        <div class="break"></div><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.494677970557!2d106.7148458!3d10.8018391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c3d29d370b52a7e!2zxJDhuqFpIGjhu41jIEPDtG5nIG5naOG7hyBUUC5IQ00gKEhVVEVDSCk!5e0!3m2!1svi!2s!4v1512326391608" width="820" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

  @endsection