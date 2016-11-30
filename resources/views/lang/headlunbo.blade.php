

                    <div class="tab_box">                               
                <!--
                    作者：446754162@qq.com
                    时间：2016-11-15
                    描述：首页
                -->
                <div>
                    <div id="wrapper" style="width: 960px;height: 575px;margin: 0 auto;">
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                            @foreach($arr as $v)
                                <img src="{{$v->lpic}}"/>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <script type="text/javascript">
                        $(window).load(function() {
                            $('#slider').nivoSlider();
                        });
                    </script>