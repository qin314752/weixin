
            {!!App\Http\Controllers\HomeController::head()!!}

        <div class="banner">
            <img src="/home/img/AD0I4oLBBRACGAAg_PuWwAUosMbN4QMwwAc49AM.jpg">
        </div>
        
        <div class="industry">
            <div class="industry_top">
                <img class="fl claerfix" src="/home/img/AD0I4oLBBRACGAAgi-6WwAUol_z8wgIwhgM4-AI.jpg">
                <div class="main_right fr claerfix">
                        @foreach($arr as $k=>$v)
                        @if($k < 3)
                    <div class="main_top">
                                        <h4>{{$v->name}}</h5> <span>{{$v->time}}</span>
                                        <p>{{$v->content}}</p>
                                </div>
                        @endif
                        @endforeach        
                </div>
            </div>
            
            <div class="industry_bottom">
                 @foreach($arr as $k=>$v)
                   @if($k >= 3)
                <div class="main">
                    <span><!-- <i></i> --><br><a style="margin: -39px 0 0 -40px;">{{$v->time}}</a></span>
                    <h4>{{$v->name}}</h5>
                    <p>{{$v->content}}</p>
                </div>
                  @endif
                @endforeach  
                
                
            </div>
        </div>
        
 {!!App\Http\Controllers\BottomController::bottom()!!}
   