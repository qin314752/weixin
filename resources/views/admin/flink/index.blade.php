@extends('/lang/Admin')
@section('position', '后台首页')
@section('content')
<div class="table-header">用戶信息</div>
<div>
  <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
   


   
    <div class="row">
      <form id="myform" action="/admin/flink/index" method="get">
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
      <form  action="/admin/flink/index" method="get">
      
        <div class="col-xs-6">
          <div id="dynamic-table_filter" class="dataTables_filter">
            <label>
              <input name="find" 
              @if(!empty($find))
              value="{{$find}}"
              @endif
               class="form-control input-sm" placeholder="名称查询"  aria-controls="dynamic-table" type="search"></label>
              <button>查询</button>
              {{csrf_field()}}
          </div>
        </div>
        </form>
    </div>



    <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" role="grid" aria-describedby="dynamic-table_info">
      <thead>
        <tr role="row">
          <!-- <th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="
          ">
           
          </th> -->
          <td class="  center sorting" style="width:60px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" ><label class="pos-rel"><span class="lbl">ID</span></label></th>
          <th class="sorting" style="width:100px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">网站</th>
          <th class="hidden-480 sorting" style="width:200px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">链接</th>
          <th class="sorting" style="width:200px" >描述</th>
         
           <th class="sorting" style="width:150px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update: activate to sort column ascending">logo</th>
            
          <th class="hidden-480 sorting" style="width:60px" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">修改 | 删除</th>
          
        </tr>
      </thead>
      <tbody>

      <!-- 替换数据   开始 -->
      @foreach ($arr as $v)
        <tr role="row" class="odd even">
          <td class="center id"><div style="margin-top: 10px"> {{$v->id}}</div></td>
          <td><div style="margin-top: 10px">{{$v->name}}</div></td>
          <td><div  style="margin-top: 10px">{{$v->url}}</div></td>
          <td><div  style="margin-top: 10px">{{$v->content}}</div></td>
          <td><img src="{{$v->pic}}" style="width:100px;height:40px"> </td>
          <td class="center c">
              <div class="hidden-sm hidden-xs action-buttons ">
                <a class="red a" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
              </div>
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
<script type="text/javascript">
//删除
    $('.a').click(function(){
     var id = $(this).parents('.c').siblings('.id').text();
     $.get('/admin/flink/delete',{id:id},function(date){
      if(date == 1){
        alert('删除成功');
        location.reload(true);
      }else{
        alert('删除失败');
      }
     });
    });



</script>



@endsection