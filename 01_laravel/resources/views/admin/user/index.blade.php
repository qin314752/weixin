@extends('/lang/Admin')
@section('position', '会员管理')
@section('content')
        @if(session('success'))  
        <div class="alert alert-info">
          <button class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
            <a href="/admin/user/add"></a>
          </button>

          <i class="ace-icon fa fa-hand-o-right"></i>
         欢迎{{session('success')}}登陆后台
        </div>
        @endif

<div class="rightinfo">
<!-- <button> -->
	<a href="/admin/user/add"><i class="ace-icon fa fa-pencil align-top bigger-125">添加</i> </a>
<!-- </button> -->
<br>
    <table class="tablelist" id="table" style="width:100%;">
  <thead>
    <tr style="border:1px solid #ccc">
      <th >ID</th>
      <th >用户名</th>
      <th >所属用户组</th>
      <th >密码口令</th>
      <th >真实姓名</th>
      <th >qq</th>
      <th >电话</th>
      <th style="padding-left: 30px">操作</th></tr>
  </thead>
  <tbody>
    @foreach($arr as $v)
    <tr style="border:2px solid #ccc">
      <td style="border:2px solid #ccc" class="id">{{$v->id}}</td>
      <td style="border:2px solid #ccc">{{$v->username}}</td>
      <td style="border:2px solid #ccc">{{$v->zhu}}</td>
      <td style="border:2px solid #ccc">{{$v->password}}</td>
      <td style="border:2px solid #ccc">{{$v->name}}</td>
      <td style="border:2px solid #ccc">{{$v->qq}}</td>
      <td style="border:2px solid #ccc">{{$v->phone}}</td>
      <td style="border:2px solid #ccc">
		  <a href="javascript:void(0)" style="margin-left: 10px">更新</a>
		 |
		  <a href="javascript:void(0)" class="a">删除</a></span>
	  </td>
    </tr>
	@endforeach
  </tbody>
  </table>
    
    </div>
    
</script>
<script type="text/javascript">


// // 删除
$('.a').click(function(){
	var id = $(this).parent().siblings('.id').text();
	$.get("{{url('/admin/user/del')}}",{id:id},function(data){
		if(data == 1){
      location.reload(true);
    }else if(data==2){
      alert('删除失败');

    }
	});
});

</script>      
    

@endsection