@extends('lang/admin')
@section('title','理财产品添加')
@section('content')	
@if(session('error'))
<div class="alert alert-info">
	<i class="ace-icon fa fa-hand-o-right"></i>
	{{session('error')}}
	<button class="close" data-dismiss="alert">
	<i class="ace-icon fa fa-times"></i>
	</button>
</div>
@endif
<br>
<h3 style="margin-left: 500px;margin-bottom: 30px">理财产品添加</h3>
<!-- <div class="center"> -->
<form action="{{url('/admin/licai/insert')}}" method="post"  enctype="multipart/form-data" id="validation-form" class="form-horizontal" novalidate="novalidate">	
	    <div class="space-2"></div>
	    <div class="form-group">
	    {{csrf_field()}}
	        <label for="url" class="control-label col-xs-12 col-sm-3 no-padding-right">分类:</label>
	        <div class="col-xs-12 col-sm-3">
	            <div class="clearfix">
	                <select id="form-field-select-1" name="pid" class="form-control">
	                    <option >顶级分类</option>
	                    @foreach($arr as $v)
	                    <option value="{{$v->id}}">{{$v->path}}</option>
	                    @endforeach
	                   </select></div>
	        </div>
	    </div>
<br>
	    <div class="form-group">
	        <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">标题:</label>
	        <div class="col-xs-12 col-sm-9">
	            <div class="clearfix">
	                <input type="text" class="col-xs-12 col-sm-4" value="{{old('name')}}" name="name"></div>
	        </div>
	    </div>
	    <br>
	<div class="form-group" -style="border:1px solid red;">
            <label   for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> 理财产品图片: </label>

            <div -style="border:1px solid red;"  class="col-sm-1 " style=" margin-left: 0px; width:104px; height:34px;-border:1px solid red">
            <div  class="pic" style=" width: 100px;height: 34px;text-align: center;line-height: 34px;background: antiquewhite;border-radius: 5px;position: relative;color: brown;">  

                上传<input type="file" name="pic" id="doc" onchange="javascript:setImagePreview();" style=" background: purple; outline: medium; border: none;color: #fff;width: 80px;height: 34px;; background: purple;opacity: 0;overflow: hidden;position: absolute;top: 0;left: 0;" value="上传"/>
            </div>
          
            </div>
            <div id="localImag" class="col-sm-4 " style=" margin-left: 50px; width:130px; height:64px; -border:3px solid #ccc">
            <img id="preview" src="" style=" margin-left: -14px;margin-top: -2px;;display: block; width:130px;height:64px">
            </div>
            
          </div>  <br>

	    <div class="form-group"  >
	        <label for="name" style="width:370px;" class=" col-xs-3 control-label  no-padding-right">理财产品:</label>
	        <div >

              <input type="hidden" id="input"  name="content" value="">

	            <div class="clearfix col-xs-4">
	                <div id="content"  style="width: 100%;min-height:200px;max-height: 300px; height: 120px;margin-left: auto; margin-right: auto;padding: 3px;outline: 0;font-size: 12px;line-height: 24px; padding: 2px;word-wrap: break-word;overflow-x: hidden;overflow-y: auto;border-color: rgba(82, 168, 236, 0.8);box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);" contenteditable="true">  
                    </div>

	                </div>
	        </div>
	    </div>
	    
	    <div class="space-2"></div>
	    {{csrf_field()}}
	    <div class="form-group ">
	        <label for="url" style="width:530px; " class="control-label col-xs-4 no-padding-right"></label>
	        <div class="col-xs-3">
	            <div class="clearfix">
	            <button style="width:200px" class="btn btn-lg btn-success aa">
					<i class="ace-icon fa fa-check"></i>
					提交
				</button>
	               
	        </div>
	        <div class="col-xs-1">
	            <div class="clearfix"></div>
	        </div>
	    </div>
	</form>
	</div>
	<script type="text/javascript">
  $('.aa').click(function(){
      $('#input').val($('#content').text());


  });
</script>
<!-- 图片上传 -->
<script type="text/javascript">
//下面用于图片上传预览功能
function setImagePreview(avalue) {
var docObj=document.getElementById("doc");
 
var imgObjPreview=document.getElementById("preview");
if(docObj.files &&docObj.files[0])
{
//火狐下，直接设img属性
imgObjPreview.style.display = 'block';
imgObjPreview.style.width = '130px';
imgObjPreview.style.height = '64px';
//imgObjPreview.src = docObj.files[0].getAsDataURL();
 
//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
}
else
{
//IE下，使用滤镜
docObj.select();
var imgSrc = document.selection.createRange().text;
var localImagId = document.getElementById("localImag");
//必须设置初始大小
localImagId.style.width = "100%";
localImagId.style.height = "100%";
//图片异常的捕捉，防止用户修改后缀来伪造图片
try{
localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
}
catch(e)
{
alert("您上传的图片格式不正确，请重新选择!");
return false;
}
imgObjPreview.style.display = 'none';
document.selection.empty();
}
return true;
}
 
</script>

@endsection
