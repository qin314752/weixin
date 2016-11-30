{!!App\Http\Controllers\HomeController::head()!!}
        {!!App\Http\Controllers\HomelunboController::headlunbo()!!}


        <div class="Newslj_content">
        @if(!empty($ar))
        	<div class="title">
        		<h4>{{$ar[0]->name}}</h4>
        		<p>{{$ar[0]->content}}</p>
        		<div class="img_box">
        			<img src="{{$ar[0]->pic}}">
        		</div>
        	</div>
                
          @endif

         @if(!empty($arr))
       
        	@foreach($arr as $v)
        	<div class="news_introduct">
        		<h3{{$v->name}}</h3>
        		<p>{{$v->content}}</p>
                        @if(!empty($v->pic))
        		<div class="img_box">
        			<img src="{{$v->pic}}">
        		</div>
                        
                        
                        @endif
        	</div>
        	@endforeach
        	 
        
         @endif

        </div>
        
      
<br>





 {!!App\Http\Controllers\BottomController::bottom()!!}
