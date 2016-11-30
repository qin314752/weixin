
 
        <!--
                作者：446754162@qq.com
                时间：2016-10-31
                描述：footer
        -->        
        <div class="footer">
                <div class="footer_top">
                        <div class="msg_box">
                                <img class="Imgb" src="/home/img/AD0I4oLBBRAEGAAguKqWwAUor8TZgQcwVzhX.png">
                                <p>地址：{{$config[0]->address}}</p>
                        </div>
                        <div class="msg_box">
                                <img class="Imgb" src="/home/img/AD0I4oLBBRAEGAAg6KqWwAUou4DGsgUwVzhX.png">
                                <p>热线电话：{{$config[0]->phone}}</p>
                        </div>
                        <div class="msg_box">
                                <img class="Imgb" src="/home/img/AD0I4oLBBRAEGAAgmquWwAUo5qSd1wIwVzhX.png">
                                <p>邮箱：{{$config[0]->email}}</p>
                        </div>
                </div>
                
                <div class="footer_bottom">
                        <div class="copy fl claerfix">
                                <p>2016 网站样板-金融保险 版权所有</p>
                        </div>
                        <div class="weiboxin fr claerfix">
                                <div class="weibo fl claerfix">
                                        <a>微信</a>
                                        <img style="width:150px;height:150px" src="{{$config[0]->weixin_pic}}">
                                </div>
                                <div class="weixin fr claerfix">
                                        <a>微博</a>
                                        <img style="width:150px;height:150px" src="{{$config[0]->weibo_pic}}">
                                </div>
                        </div>
                </div>
                        
        </div>     
        </body>
</html>
