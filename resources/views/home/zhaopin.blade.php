{!!App\Http\Controllers\HomeController::head()!!}

			<!--
            	作者：446754162@qq.com
            	时间：2016-11-15
            	描述：招聘
            -->
			
				<div class="mainContainer">

					<div class="navContent fl claerfix">
						<a class="logo_img" href="#"><img class="logobox" src="/home/images/logo.png"></a>
						<a class="box01" href="#"></a>
						<a class="box" href="#">联系我们</a>
						<!-- <a class="book" href="#">左右微刊</a>
						<a class="contact"href="#">左右福利</a> -->
					</div>
					
					<div class="container">
						<div class="infoBox">
							<P><span class="status">
									「卓玺集团」
								</span>
									本期招聘职位：本期只招
								<span class="greenTest">
									90后
								</span>
									，大叔，大姐，抱歉喽。<br>
								<span class="friend">
									&nbsp;&nbsp;&nbsp;&nbsp;友情提示：我们不是招聘指南的搬运工，一下具体职位技能要求，<br>
								</span>
							</P>
							<div class="message">
							@foreach($arr as $k=>$v)
							
								<p 
								@if($k%2==0)
								class="media"
							@else
							class="devise"
							@endif
								>{{$v->name}}：<br> 
									{{$v->content}}<br>
								</p>
							@endforeach
								<!-- <p class="devise">设计：<br> 爱画画，爱拍照，会P图。 -->
									
								<!-- </p> -->
								<!-- <p class="publicity">宣传：<br> 说话有点，吐槽有点。
									<br> 待人处事也很正点。
									<br> 对时下年轻人常逛得
									<br> 媒体属性都有涉及，
									<br> 不要求你人际宽广，
									<br> 只要求你心里有数。
								</p>
								<p class="media">新媒体运营：<br> WEIBO豆瓣INSTA知乎
									<br> NICE朋友圈LOFT美拍......
									<br> 统统玩转！
									<br> 跟上网友的调子，
									<br> 踩得住火爆的槽点。
									<br> 有审美的技术控。
								</p>
								<p class="plan">活动策划及执行：<br> 社会红人party玩家，
									<br> 执行操盘一把手。
									<br> 能起范儿，还有人服。
									<br> 玩出想法，干得漂亮
								</p>
								<p class="world">以上都是各种形容，<br> 最后三个词：
									<br>
									<span>善良，靠谱，主动。</span></p>
								<p class="job">如果你认为<br> 这个招聘完全就是写给你的，
									<br> 也许你是我们未来的同事，
									<br> 我们可以相约邮箱里见。
								</p> -->
								<a class="joinus" href="#">加入我们</a>
							</div>
						</div>
						
						<div class="secondInfo">
						</div>
						
						<div class="thirdInfo">
							<div class="fontTest">

								<P class="workRoom">卓玺集团</P>
								<p class="address">
									地址：{{$arr[0]->address}}<br><br> 简历及作品发送至：
									<br> zhonghuangtaifa@126.com
									<!-- <br> 如果你方便也请一并告诉我们你的
									<br> 微信、微博、qq等账户。 -->
								</p>
							</div>
							<div class="map">
								<img src="{{$arr[0]->pic}}">
							</div>
						</div>
						
					</div>
					
				</div>			
				<script>
					$(function(){
						$(".container>div").hide();
						$(".container>div:eq(0)").show();	
						
						$(".navContent a").click(function(){
							var n = $(".navContent a").index(this);
							$(".navContent a").index(this);
							$(".container>div").hide();
							$(".container>div:eq("+n+")").show();	
						})	
					})
				</script>
			




{!!App\Http\Controllers\BottomController::bottom()!!}
