{!!App\Http\Controllers\HomeController::head()!!}
<!--
            	作者：446754162@qq.com
            	时间：2016-11-15
            	描述：公司介绍
            -->

		        <div class="banner">
		        	<img src="/home/img/AD0I4oLBBRAEGAAgoaOXwAUo5IXQxgMwwAc49AM.png">
		        </div>
		       
		        <div class="aboutus_content">
		        	<div class="idea">
		        		<div class="idea_left fl claerfix">
		        			<img src="/home/img/AD0I4oLBBRAEGAAgpomXwAUohYSY8AYwJzg0.png">
		        			<font>使命</font>
		        			<p>让财富管理更美好</p>
		        		</div>
		        		
		        		<div class="idea_center fl claerfix">
		        			<img src="/home/img/AD0I4oLBBRAEGAAgiImXwAUoivaYqQIwNjg0.png">
		        			<font>核心价值</font>
		        			<p>高效、快捷的理财服务体系</p>
		        		</div>
		        		
		        		<div class="idea_right fl claerfix">
		        			<img src="/home/img/AD0I4oLBBRAEGAAg_4iXwAUoorXgJzA5ODQ.png">
		        			<font>主张</font>
		        			<p>只为成就更好的你</p>
		        		</div>
		        	</div>
		        	
		        	<div class="about">
		        		<div class="about_left fl claerfix">
		        			<img src="/home/img/AD0I4oLBBRAEGAAgh5GXwAUoxIzJhwIwuAM43QI.png">
		        		</div>
		        		
		        		<div class="about_right fr claerfix">
		        			<font>{{$arr[0]->name}}</font>
							<span>
								<div><br></div>
								<div>{{$arr[0]->content}}</div>
							</span>
		        		</div>
		        	</div>
		        	
		        	<div class="team">
		        		<div class="team_title">
		        			<h3>创始团队</h3>
		        		</div>
		        		<div class="team_bottom">
		        			@foreach($arr[4] as $k=>$v)
		        			<div class="team_cent fl claerfix">
		        				<div class="img_box">
		        					<img src="{{$v->pic}}">
		        				</div>
		        				
		        				<div class="name">
		        					<font>{{$v->name}}</font><br>
		        					<span>创始人</span>
		        					<p>{{$v->content}}</p>
		        				</div>
		        			</div>
		        			@endforeach
		        		</div>
		        	</div>
		        </div>																		
			
 {!!App\Http\Controllers\BottomController::bottom()!!}
			
