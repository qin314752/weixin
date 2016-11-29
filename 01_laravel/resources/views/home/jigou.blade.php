
{!!App\Http\Controllers\HomeController::head()!!}
        
                <div>

                    <div class="banner">
                        <img src="/home/img/AD0I4oLBBRACGAAgjYiXwAUorIeVmgIwwAc49AM.jpg">
                    </div>
                    
                    <div class="bank_title">
                        <h3>
                            他们和您一样，都选择中皇
                            <p>They , like you , have chosen zhonghuang</p>
                        </h3>
                    </div>
                    


                    <div class="bank_box">
                        @foreach($arr as $v)

                        <span><img src="{{$v->lpic}}"></span>
                        
                            @endforeach
                    </div>
                </div>
            </div>


                
  
 {!!App\Http\Controllers\BottomController::bottom()!!}
