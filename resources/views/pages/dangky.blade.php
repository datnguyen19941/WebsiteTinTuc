@extends('layout.index')

@section('content')

<!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                	<img width="749" height="300" src="http://dodamynghe.net/product_images/uploaded_images/banner-pages229.jpg">
				  	<div class="panel-heading"><center><b><big>Đăng ký tài khoản</big></b></center></div>
				  	<div class="panel-body">
				  		@if(count($errors) > 0)
	                        <div class="alert alert-danger">
	                            @foreach($errors->all() as $err)
	                                {{$err}}<br>
	                            @endforeach
	                        </div>
                   		 @endif
                    	@if(session('thongbao'))
	                        <div class="alert alert-success">
	                            {{session('thongbao')}}
                            
                        </div>
                            
                    @endif
				    	<form action="dangky" method="post">
				    		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Họ tên" name="name" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>	
							<div>
					
				   			<label>Nhập mật khẩu</label>
							  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<center><button type="submit" class="btn btn-default">Đăng ký
							</button></center>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
@endsection