<!--
                作者：446754162@qq.com
                时间：2016-11-15
                描述：行业资讯
            -->
           <!--  <div class="none">
                <div class="banner">
                    <img src="/home/img/AD0I4oLBBRACGAAg_PuWwAUosMbN4QMwwAc49AM.jpg">
                </div>
                
                <div class="industry">
                    <div class="industry_top">
                        <img class="fl claerfix" src="/home/img/AD0I4oLBBRACGAAgi-6WwAUol_z8wgIwhgM4-AI.jpg">
                        <div class="main_right fr claerfix">
                            <div class="main_top">
                                <h4>外币理财的这四种方式 你看懂了吗？</h5> <span>2016-10-28</span>
                                <p>近年，随着国内很多理财市场的逐渐下调，很多投资者已开始向外币理财市场靠拢。近年，随着国内很多理财市场的逐渐下调</p>
                            </div>
                            
                            <div class="main_middle">
                                <h4>外币理财的这四种方式 你看懂了吗？</h5> <span>2016-10-28</span>
                                <p>近年，随着国内很多理财市场的逐渐下调，很多投资者已开始向外币理财市场靠拢。近年，随着国内很多理财市场的逐渐下调</p>
                            </div>
                            
                            <div class="main_bottom" style="border: none;">
                                <h4>外币理财的这四种方式 你看懂了吗？</h5> <span>2016-10-28</span>
                                <p>近年，随着国内很多理财市场的逐渐下调，很多投资者已开始向外币理财市场靠拢。近年，随着国内很多理财市场的逐渐下调</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="industry_bottom">
                        <div class="main">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                        <div class="main">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                        <div class="main">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                        <div class="main" style="border: none;">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                    </div>
                </div>
            </div> -->
            {!!App\Http\Controllers\HomeController::head()!!}

        
        <!--
            作者：446754162@qq.com
            时间：2016-10-31
            描述：industry
        -->
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
   