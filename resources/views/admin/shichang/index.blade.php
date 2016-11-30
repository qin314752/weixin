@extends('/lang/admin')
@section('title', '市场分析')

@section('content')
<div class="table-header">市场分析</div>
<div>
  <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
   


    <div class="row">
      <form id="myform" action="/admin/shichang/index" method="get">
        <div class="col-xs-6">
          <div class="dataTables_length" id="dynamic-table_length">
            <label>每页显示
            {{csrf_field()}}
              <select  onchange="submit()" name="num" aria-controls="dynamic-table" class="form-control input-sm">
                <option 
                @if(!empty($num)&&$num == 5 )
                selected  
                @endif
                value="5"> 5 </option>
                <option  
                 @if(!empty($num)&&$num == 10 )
                selected  
                @endif
                value="10"> 10 </option>
                <option  
                 @if(!empty($num)&&$num == 15 )
                selected  
                @endif
                value="15"> 15 </option></select>
                条</label>
            <script type="text/javascript">
                function submit(){
                  document.getElementById('myform').submit();
                }

            </script>
            

          </div>
        </div>
      </form>
      <form  action="/admin/shichang/index" method="get">
      
        <div class="col-xs-6">
          <div id="dynamic-table_filter" class="dataTables_filter">
            <label>
              <input name="find" 
              @if(!empty($find))
              value="{{$find}}"
              @endif
               class="form-control input-sm" placeholder="网站名称"  aria-controls="dynamic-table" type="search"></label>
              <button>查询</button>
              {{csrf_field()}}
          </div>
        </div>
        </form>
    </div>



    <table  class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" role="grid" aria-describedby="dynamic-table_info">
      <thead>
        <tr role="row" style="width: 292px;">
          <td class="  center sorting conter" style="width:60px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" ><label class="pos-rel"><span class="lbl">ID</span></label></th>
          <td class="  center sorting conter" style="width:60px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" ><label class="pos-rel"><span class="lbl">PID</span></label></th>
          <th class="sorting conter" style="width:206px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">路径</th>
          <th class="hidden-480 sorting" style="width:206px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">板块</th>
          <th class="sorting conter" style="width:108px" >添加/修改 时间</th>
          <th class="sorting conter" style="width:80px" >图片</th>
           <th class="sorting center conter" style="width:100px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update: activate to sort column ascending">文本/修改/删除</th>
        </tr>
      </thead>
      <tbody>

      <!-- 替换数据   开始 -->
      @foreach ($arr as $v)
        <tr role="row" class="odd even tr">
	          <td class="center id" style="margin-top: 10px">{{$v->id}}</td>
            <td class="center" style="margin-top: 10px">{{$v->pid}}</td>
	          <td><div style="margin-top: 10px">{{$v->path}}</div></td>
	          <td><div  style="margin-top: 10px">{{$v->name}}</div></td>
	          <td><div style="margin-top: 10px">{{$v->time}}</div></td>
	          <td><div style="margin-top: 10px">

            @if($v->pic)
            <img style="width:80px;height: 20px" src="{{$v->pic}}">
            @else
            未添加图片
            @endif
            </div></td>
	         <td class="center">
		         <div class="hidden-sm hidden-xs action-buttons">
					<a class="blue c" href="/admin/shichang/view?id={{$v->id}}&name={{$v->name}}&content={{$v->content}}&pic={{$v->pic}}&time={{$v->time}}"><i class="ace-icon fa fa-search-plus bigger-130"></i></a>
					<a class="green b" href="/admin/shichang/update?id={{$v->id}}&name={{$v->name}}&content={{$v->content}}&pic={{$v->pic}}&time={{$v->time}}"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
	                <a class="red a" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
	         </td>
        </tr>

    @endforeach


      <!-- 替换数据   结束 -->
      
      </tbody>
    </table>
    <div class="row">
      <div class="col-xs-6">
        <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing 1 to 10 of 23 entries</div></div>
      <div class="col-xs-6">
        <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
          <ul class="pagination">
          {!! $arr->appends(['find' => $find])->render() !!}
 
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>  

<script type="text/javascript" src="/admin/js/jquery.2.1.1.min.js">
</script>
<script type="text/javascript">


// 删除
$('.a').click(function(){
	var id = $(this).parent().parent().siblings('.id').text();
	$.get("{{url('/admin/shichang/del')}}",{id:id},function(data){
		if(data == 1){
      location.reload(true);
    }else if(data==2){
      alert('删除失败');

    }else{
      alert('板块下有子类');
			location.reload(true);

    }
	});
});






</script>
@endsection
