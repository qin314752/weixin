@extends('/lang/admin')
@section('position', '添加链接')

@section('content')
<br>
<br>


<br>
<form action="{{url('admin/flink/insert')}}"  method="post" enctype="multipart/form-data"  id="validation-form" class="form-horizontal" novalidate="novalidate">



        <div class="space-2"></div>

        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">网名:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-4"  name="name">
            </div>
          </div>
        </div>

       

        <div class="form-group">
          <label for="url" class="control-label col-xs-12 col-sm-3 no-padding-right">链接:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-6" name="url">
            </div>
          </div>
        </div>
        <div class="form-group" -style="border:1px solid red;">
            <label   for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> LOGO图片: </label>

            <div -style="border:1px solid red;"  class="col-sm-1 " style=" margin-left: 0px; width:104px; height:34px;-border:1px solid red">
            <div  class="pic" style=" width: 100px;height: 34px;text-align: center;line-height: 34px;background: antiquewhite;border-radius: 5px;position: relative;color: brown;">  

                上传<input type="file" name="pic" id="doc" onchange="javascript:setImagePreview();" style=" background: purple; outline: medium; border: none;color: #fff;width: 80px;height: 34px;; background: purple;opacity: 0;overflow: hidden;position: absolute;top: 0;left: 0;" value="上传"/>
            </div>
          
            </div>
            <div id="localImag" class="col-sm-4 " style=" margin-left: 50px; width:130px; height:64px; -border:3px solid #ccc">
            <img id="preview" src="" style=" margin-left: -14px;margin-top: -2px;;display: block; width:130px;height:64px">
            </div>
            
          </div>

        <div class="space-2"></div>

        {{csrf_field()}}
        <div class="form-group">
          <label for="url" class="control-label col-xs-3 no-padding-right"></label>
          
           <div class="col-xs-3">
              <div class="clearfix">                        
            <button data-loading-text="Loading..." class="btn btn-success"  id="loading-btn" > &nbsp;&nbsp;&nbsp;添加&nbsp;&nbsp;&nbsp;   </button>
            </div>
          </div> <div class="col-xs-1">
              <div class="clearfix">                        
           
            </div>
          </div>
        </div>                
   </form>
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

