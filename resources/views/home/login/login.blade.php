

 @if(session('error'))
        <div class="alert alert-info">
                    {{session('error')}}                      
        </div>
      @endif


<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link type="text/css" rel="stylesheet" href="/home/css/all.css">
		<link type="text/css" rel="stylesheet" href="/home/css/login.css">
		<script src="/home/js/jquery.2.1.1.min.js" type="text/javascript"></script>
		<script>
			$(function() {
				var regBtn = $("#signup");
				$("#agree").change(function() {
					var that = $(this);
					that.prop("checked", that.prop("checked"));
					if(that.prop("checked")) {
						regBtn.prop("disabled", false)
					} else {
						regBtn.prop("disabled", true)
					}
				});
			})
		</script>
			
	

	</head>

	<body>
		<div style="display: block;" class="signup-box form-box">
			<div class="form-close">×</div>
			<div class="title">会员注册</div>
			<form  action="{{url('/home/login/add')}}"  method="post" novalidate="novalidate" autocomplete="off" name="userinfoform"  enctype="multipart/form-data" id="signupform">
				
				<div class="input-wrap clearfix">
					<label for="" class="left">用户名：</label>
					<div class="right">
						<input class="box_input" name="username" id="username" placeholder="用户名" type="text" >
					</div>
				</div>

				<div class="input-wrap clearfix">
					<label for="" class="left">手&nbsp;&nbsp;&nbsp;&nbsp;机：</label>
					<div class="right">
						<input class="box_input" name="phone" id="username" placeholder="请输入手机号" maxlength="11" type="text">
					</div>
				</div>

				<div class="input-wrap clearfix">
					<label for="pass" class="left">密&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
					<div class="right">
						<input class="box_input" name="password" id="password" type="password">
					</div>
				</div>
				<div class="input-wrap clearfix">
					<label for="repassword" class="left">确认密码：</label>
					<div class="right">
						<input class="box_input" name="repassword" id="repassword" type="password">
					</div>
				</div>

				<div class="input-wrap clearfix">
					<label for="Code" class="left">手机验证码：</label>
					<div class="right">
						<input name="Code" id="Code" class="telcode left" placeholder="手机验证码" type="text">
						<input id="sendSmsCode" class="telcode btn btn-medium btn-info right" value="获取验证码" maxlength="6" type="button" onclick="sendCode(this)">
					</div>
				</div>

				<script>
					var clock = '';
					var nums = 60;
					var btn;

					function sendCode(thisBtn) 
					{
						btn = thisBtn;
						btn.disabled = true; //将按钮置为不可点击 
						btn.value = nums + '秒后可重新获取';
						clock = setInterval(doLoop, 1000); //一秒执行一次 
					}

					function doLoop() 
					{
						nums--;
						if(nums > 0) {
							btn.value = nums + '秒后可重新获取';
						} 
						else 
						{
							clearInterval(clock); //清除js定时器  
							btn.disabled = false;
							btn.value = '点击发送验证码';
							nums = 60; //重置时间 
						}
					}
				</script>

				<div class="input-wrap clearfix">
					<div class="submit-wrap">
						<div style="margin-bottom: 10px;">
							<input id="agree" name="agree" value="agree" class="agree_check" type="checkbox">
							<label class="checked" for="agree">我已看过并同意</label>
							<a class="c-default" title="《恒远嘉舜服务协议》">《恒远嘉舜服务协议》</a>
						</div>
						<input id="signup" class="btn btn-medium btn-default submit" disabled value="注册" type="submit">
		
					</div>
				</div>
				
				<script>		
			//声明全局变量
			var CUSER = false;
			var CPASS = false;
			var CREPASS = false;
			var CEMAIL = false;
	
			//绑定表单事件
			$('form').submit(function(){
				//触发丧失焦点事件
				$('input').trigger('blur');
				//检测所有字段是否正确
				if(CUSER && CPASS && CREPASS && CEMAIL){
					//提交
					return true;
				}
				//阻止默认行为
				return false;
			});
	
			//给所有字段绑定获取焦点事件
			$('input').focus(function(){
				//获取属性 提示信息
				var text = $(this).attr('readmin');
				//给span设置文本
				$(this).next().html(text).css('color','green');
				//设置样式
				$(this).css('border','1px solid green');
			});
	
			//绑定用户名丧失焦点事件
			$('input[name=username]').blur(function(){
				//检测用户名格式是否正确
				var reg = /^\w{6,18}$/;
				//获取用户名
				var uname = $(this).val();
				//检测
				var res = reg.test(uname);
				if(!res){
					$(this).next().html('用户名格式不正确').css('color','red');
					$(this).css('border','1px solid red');
					//如果不正确 停止发送ajax
					CUSER = false;
					return false;
				}
			});
		</script>
			</form>
		</div>
	</body>

</html>