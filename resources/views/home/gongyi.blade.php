{!!App\Http\Controllers\HomeController::head()!!}
<!--
            	作者：446754162@qq.com
            	时间：2016-11-15
            	描述：社会公益
            -->
				<div class="banner">
		        	<img src="/home/img/AD0I4oLBBRACGAAgjYiXwAUorIeVmgIwwAc49AM.jpg">
		        </div>
		        
		   		<div class="public">
		   		@foreach($arr as $v)
		   			<div class="public_box">
		   				<div class="public_left fl claerfix">
			   				<img src="{{$v->pic}}">
			   			</div>
			   			<div class="public_right fr claerfix">
			   				<h3>{{$v->name}}</h3>
			   				<p>{{$v->content}}
			   				</p>
			   				<section>公益组织：{{$v->zuzhi}}</section>
			   				
			   				<div class="checkmore">
			   					<a href="javascript:;">查看详情</a>
			   				</div>
			   			</div>
		   			</div>

		   		@endforeach
			</div>
		
            
        	




{!!App\Http\Controllers\BottomController::bottom()!!}
