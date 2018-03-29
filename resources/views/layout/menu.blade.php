<div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                    	Các thể loại
                    </li>

                    @foreach($theloai as $tl)
                    	@if(count($tl->loaitin) > 0)
	                    <li href="#" class="list-group-item menu1">
	                    	{{$tl->Ten}}
	                    </li>

	                    <ul>
	                    	@foreach($tl->loaitin as $lt )
	                		<li class="list-group-item">
	                			<a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a>
	                		</li>
	              
	            			@endforeach
	                    </ul>
                    @endif
                    @endforeach
                   
                </ul>
                <br>
                <a href="https://mcdonalds.vn/" target="_blank"><img width="263" height="250" src="https://static.hotdeal.vn/images/1505/1504594/280x280/343399-mcdonalds-trai-nghiem-vi-ngon-lung-danh-the-gioi-duy-nhat-tai-hotdeal.jpg" " /></a>
                <iframe width="263" height="250" src="https://lap.lazada.com/banner/dynamic.php?banner_id=5a20ed6a94d25&theme=1&p=1" frameborder="0" scrolling="no"></iframe>
                <a href="https://hutech.edu.vn/" target="_blank"><img width="263" height="250" src="http://sv1.upsieutoc.com/2017/12/04/Capture.png" " /></a>
            </div>
