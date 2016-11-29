 @extends('/lang/Admin')
@section('position', '会员管理')
@section('content')
        @if(session('success'))  
        <div class="alert alert-info">
          <button class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
          </button>

          <i class="ace-icon fa fa-hand-o-right"></i>
         欢迎{{session('success')}}登陆后台
        </div>
        @endif   
     <form action="/admin/user/insert" method="post">
     {{csrf_field()}}
       <div class="tools">
         <div id="panel">
                <div class="panel_title">添加管理员</div>
                <div class="panel_nr fn_cle">
                    <dl class="line">
                      <dt>管理员用户名：</dt>
                      <dd>
                        <input value="" id="managerName" class="input" name="username" size="40" onclick="document.getElementById('namesnone').style.display='none';document.getElementById('namenone').style.display='none';" type="text">
                        <span>管理员登录时的用户中,一经创建，不可更改！</span>
                       <div id="namenone" style="display: none;"><span style="color: red"> *管理员已存在，请换个用户名。</span></div>
                       <div id="namesnone" style="display: none;"><span style="color: red">*管理员用户名不能为空</span></div>
                      </dd>
                    </dl>
                    <dl class="line">
                      <dt>管理员密码：</dt>
                      <dd>
                        <input value="" id="password" class="input" name="password" size="40" onclick="document.getElementById('pwdnone').style.display='none';" type="password">
                        <span>登录员登录时的密码,密码不区分大小写</span>
                       <div id="pwdnone" style="display: none;"><span style="color: red">*密码不能为空。</span></div>
                      </dd>
                    </dl>
                
                    <dl class="line">
                      <dt>真实姓名：</dt>
                      <dd>
                        <input value="" id="realName" class="input" name="name" size="40" onclick="document.getElementById('realNameTip').style.display='none';" type="text">
                        <span>请你如实填写你的真实姓名!</span>
                        <div id="realNameTip" style="display: none;"><span style="color: red">*真实姓名不能为空 </span></div>
                      </dd>
                    </dl>
                    <dl class="line">
                      <dt>QQ：</dt>
                      <dd>
                        <input value="" id="qq" class="input" name="qq" size="40" onclick="document.getElementById('qqTip').style.display='none';" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" type="text">
                        <span>请你如实填写你的QQ号!</span>
                        <div id="qqTip" style="display: none;"><span style="color: red">可以不填 </span></div>
                      </dd>
                    </dl>
                    <dl class="line">
                      <dt>电话：</dt>
                      <dd>
                        <input value="" id="telephone" class="input" name="phone" size="40" onclick="document.getElementById('telephoneTip').style.display='none';" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" type="text">
                        <span>请你如实填写你的手机号!</span>
                        <div id="telephoneTip" style="display: none;"><span style="color: red">*手机号不能为空 </span></div>
                      </dd>
                    </dl>
                    <!-- 添加内容 -->		 
                   <dl class="line">
                      <dt>所属用户组：</dt>
                       <dd>
                	  	<select id="roleId" class="input" name="zhu" style="width:277px;">
                	  		  	
                 		  		<option value="超级管理员"> 
                 		  		超级管理员 
                 		  		</option>
                 		  		
                 		  		<option value="管理员"> 
                 		  		管理员 
                 		  		</option>
                 		  		
                 		  		<option value="超级管理"> 
                 		  		超级管理 
                 		  		</option>
                        </select>
                        <span>不同的用户组对应不同的权限</span>
                      </dd>
                    </dl>
                    <div class="page_btn">
                     <input value="添加管理员" class="btn" id="add" type="Submit">
                    </div>

                </div>
           </div>
        </div>
   </form>
@endsection
