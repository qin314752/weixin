@extends('/lang/admin')
@section('title', '招聘内容修改')

@section('content')
<style type="text/css">

  @media only screen and (max-width: 600px) {
    table[class="table-row"] {
      float: none !important;
      width: 98% !important;
      padding-left: 20px !important;
      padding-right: 20px !important;
    }
    table[class="table-row-fixed"] {
      float: none !important;
      width: 98% !important;
    }
    table[class="table-col"], table[class="table-col-border"] {
      float: none !important;
      width: 100% !important;
      padding-left: 0 !important;
      padding-right: 0 !important;
      table-layout: fixed;
    }
    td[class="table-col-td"] {
      width: 100% !important;
    }
    table[class="table-col-border"] + table[class="table-col-border"] {
      padding-top: 12px;
      margin-top: 12px;
      border-top: 1px solid #E8E8E8;
    }
    table[class="table-col"] + table[class="table-col"] {
      margin-top: 15px;
    }
    td[class="table-row-td"] {
      padding-left: 0 !important;
      padding-right: 0 !important;
    }
    table[class="navbar-row"] , td[class="navbar-row-td"] {
      width: 100% !important;
    }
    img {
      max-width: 100% !important;
      display: inline !important;
    }
    img[class="pull-right"] {
      float: right;
      margin-left: 11px;
            max-width: 125px !important;
      padding-bottom: 0 !important;
    }
    img[class="pull-left"] {
      float: left;
      margin-right: 11px;
      max-width: 125px !important;
      padding-bottom: 0 !important;
    }
    table[class="table-space"], table[class="header-row"] {
      float: none !important;
      width: 98% !important;
    }
    td[class="header-row-td"] {
      width: 100% !important;
    }
  }
  @media only screen and (max-width: 480px) {
    table[class="table-row"] {
      padding-left: 16px !important;
      padding-right: 16px !important;
    }
  }
  @media only screen and (max-width: 320px) {
    table[class="table-row"] {
      padding-left: 12px !important;
      padding-right: 12px !important;
    }
  }
  @media only screen and (max-width: 608px) {
    td[class="table-td-wrap"] {
      width: 100% !important;
    }
  }
  </style>
 
<div style="background-color:#E4E6E9;width: 100%; height:100%;" >

<form action="{{url('/admin/gongsi/upload')}}"  method="post" enctype="multipart/form-data">

                    <button  class="aa" style="color: #428bca;background-color:#E4E6E9;position: absolute;top: 10px;right: 100px;font-size: 15px;"> 保存</button>
                    <a href="/admin/gongsi/index" style="position: absolute;top: 10px;right: 60px;font-size: 15px;">返回</a> 


{{csrf_field()}}
<table width="100%" height="100%" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td width="100%" align="center" valign="top" bgcolor="#E4E6E9" style="background-color:#E4E6E9; min-height: 200px;">
      <table>
        <tr>
          <td class="table-td-wrap" align="center" width="708">
           <br>
            <table class="table-row" style="table-layout: auto; padding-right: 24px; padding-left: 24px; width: 600px; background-color: #ffffff;" bgcolor="#FFFFFF" width="600" cellspacing="0" cellpadding="0" border="0">
              <tbody>
              <!-- 标题  开始-->
                <tr class="conter" height="55px" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px;  height: 55px;">
                  <th class="table-row-th conter" style="font-family: Arial, sans-serif; line-height: 19px; color: #777777; font-size: 14px; text-align: center;">
                    <input type="text" name="name" style="color: #428bca; text-decoration: none; padding: 0px; font-size: 18px; line-height: 20px;width:400px;margin-left:10px; height: 30px; background-color: transparent;" value="{{$arr['name']}}">
                      

                    </a>
                  </th>
                  <th style="text-align: right; margin-right: 5px;position: relative;font-size: 12px">
                    <h5 style="position: absolute;top: 0;right: 80px;font-size: 12px;color: darkgray;">发布日期:</h5> 
                    <a href="#"  style="display: inline-block;text-align: right;margin-right: 5px;margin-top: 30px;position: relative;bottom: 0;right: 5px;text-decoration: none;color: darkgray;">
                      {{$arr['time']}}

                    </a>
                  </th>
              <!-- 标题 结束 -->

                </tr>
              </tbody>
            </table>

            <table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr>
              </tbody>
            </table>
            <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr>
              </tbody>
            </table>
            <table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0">
              <tbody>
              @if($arr['pic'])
                <tr>
                  <td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 24px; padding-right: 24px;" valign="top" align="left">
                    <table class="table-col" align="left" width="552" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
                      <tbody>
                        <tr>
                          <td class="table-col-td" width="552" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
                            <div style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; text-align: center;">
                             





                               <div class="logo" style=" margin-bottom: 10px; width: 100px;height: 34px;text-align: center;line-height: 34px;background: antiquewhite;border-radius: 5px;position: relative;color: brown;">      
                                上传<input type="file" name="pic" id="doc" onchange="javascript:setImagePreview();"  style=" background: purple; outline: medium; border: none;color: #fff;width: 80px;height: 34px;; background: purple;opacity: 0;overflow: hidden;position: absolute;top: 0;left: 0;" value="上传"/>
                            </div>
                            <!-- 图片   开始-->
                            <div class="center" style="position: relative;">
                              <img id="preview" src="{{$arr['pic']}}" style="width: 100%;border:1px solid red; border: 0px none #444444; vertical-align: middle; display: block;margin:0 auto; height:280px" hspace="0" vspace="0" border="0">


                            </div>


                            <!-- 图片  结束 -->

                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>

                </tr>
                <!-- 横线 开始-->
                      <tr>
                        <td class="table-space-td" style="height: 24px; width: 600px; padding-left: 18px; padding-right: 18px; background-color: #ffffff;" bgcolor="#FFFFFF" align="center" height="24" width="600" valign="middle">&nbsp;
                          <table cellspacing="0" cellpadding="0" border="0" bgcolor="#E8E8E8" height="0" width="100%">
                            <tbody>
                              <tr>
                                <td style="height: 1px; font-size:0;" bgcolor="#E8E8E8" align="left" height="1" width="100%" valign="top">&nbsp;</td></tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                <!-- 横线 结束-->
                      <!-- 空白 开始 -->
                      <tr>
                          <td class="table-space-td" style="height: 16px; width: 600px; background-color: #ffffff;" bgcolor="#FFFFFF" align="left" height="16" width="600" valign="middle">&nbsp;</td>
                      </tr>
                      <!-- 空白 结束 -->
                @endif
                    
                      <tr>
                          <td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
                            <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
                              <tbody>
                                <tr>
                                  <td class="table-col-td" width="528" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
                                        <!-- 招聘 开始 -->
                                        <input type="hidden" id="input"  name="content" value="">
                                        <input type="hidden" name="id" value="{{$arr['id']}}">


                                        <div id="content" style="width: 100%;min-height:320px;max-height: 300px; height: 120px;margin-left: auto; margin-right: auto;padding: 3px;outline: 0;font-size: 12px;line-height: 24px; padding: 2px;word-wrap: break-word;overflow-x: hidden;overflow-y: auto;border-color: rgba(82, 168, 236, 0.8);box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);" contenteditable="true">  
                                      {{$arr['content']}}
                                        </div>
    
                                        <!-- 招聘 结束 -->

                                      <!-- 空白 开始 -->
                                        <tr>
                                            <td class="table-space-td" style="height: 16px; width: 600px; background-color: #ffffff;" bgcolor="#FFFFFF" align="left" height="16" width="600" valign="middle">&nbsp;</td>
                                        </tr>
                                        <!-- 空白 结束 -->
                                      </td>
                                  </tr>
                                    <tr>
                                        <td class="table-space-td" style="height: 16px; width: 600px; background-color: #ffffff;" bgcolor="#FFFFFF" align="left" height="16" width="600" valign="middle">&nbsp;</td>
                                    </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>






            <table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr>
              </tbody>
            </table>
            <table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
                    <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
                      <tbody>
                        <tr>
                          <td class="table-col-td" width="528" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
                            <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                <tr>
                                  <td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr>
                              </tbody>
                            </table>
                            <div style="font-family: Arial, sans-serif; line-height: 19px; color: #777777; font-size: 14px; text-align: center;">&copy; 2014 by Ace Company</div>
                            <table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                <tr>
                                  <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr>
                              </tbody>
                            </table>
                            <div style="font-family: Arial, sans-serif; line-height: 19px; color: #bbbbbb; font-size: 13px; text-align: center;">
                              <a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">Terms</a>&nbsp;|&nbsp;
                              <a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">Privacy</a>&nbsp;|&nbsp;
                              <a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">Unsubscribe</a></div>
                            <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                <tr>
                                  <td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="table-space" height="8" style="height: 8px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="table-space-td" valign="middle" height="8" style="height: 8px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</form>
<script type="text/javascript">
  $('.aa').click(function(){
      $('#input').val($('#content').text());


  });
</script>
<br>
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
imgObjPreview.style.width = '100%';
imgObjPreview.style.height = '159px';
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
localImagId.style.height = "159px";
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
</div>
@endsection