@extends('/lang/admin')
@section('title', '新闻管理')

@section('content')


    <div class="main-container" id="main-container">

@if(session('error'))
<div class="alert alert-info">
  <i class="ace-icon fa fa-hand-o-right"></i>
  {{session('error')}}
  <button class="close" data-dismiss="alert">
  <i class="ace-icon fa fa-times"></i>
  </button>
</div>
@endif
      <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
      </script>
      <div class="main-content">
        <div class="main-content-inner">
          <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
              

              <div class="ace-settings-box clearfix" id="ace-settings-box">
                <div class="pull-left width-50">
                  <div class="ace-settings-item">
                    <div class="pull-left">
                      <select id="skin-colorpicker" class="hide">
                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                      </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                      Inside
                      <b>.container</b>
                    </label>
                  </div>
                </div><!-- /.pull-left -->

                <div class="pull-left width-50">
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                  </div>
                </div><!-- /.pull-left -->
              </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

          
            <div class="page-header">
                <script>
                function test()
                {
                    document.getElementById("myform").submit();
                }
                </script>
                <form  name="myfrom" id="myform" method="post" action="{{url('/admin/lunbo/add')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                   <input type="file" name="pic" onchange="test()"/> 
                </form>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div>
                  <ul class="ace-thumbnails clearfix">
            
                  @foreach($arr as $v)
                    <li>
                      <a href="{{$v->lpic }}" data-rel="colorbox">
                        <img width="150" height="150" alt="150x150" src="{{$v->lpic }}" />
                      </a>
                        <input type="hidden" name="id" value="{{$v->id}}">
                      <div class="tools tools-bottom">
                        
                        <a href="#" class="b">
                          <i class="ace-icon fa fa-times red"></i>
                        </a>
                      </div>
                    </li>
                  @endforeach
                    
                  </ul>
                </div><!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div>
        </div>
      </div>
    </div>
    
    <script type="text/javascript">
      jQuery(function($) {
  var $overflow = '';
  var colorbox_params = {
    rel: 'colorbox',
    reposition:true,
    scalePhotos:true,
    scrolling:false,
    previous:'<i class="ace-icon fa fa-arrow-left"></i>',
    next:'<i class="ace-icon fa fa-arrow-right"></i>',
    close:'&times;',
    current:'{current} of {total}',
    maxWidth:'100%',
    maxHeight:'100%',
    onOpen:function(){
      $overflow = document.body.style.overflow;
      document.body.style.overflow = 'hidden';
    },
    onClosed:function(){
      document.body.style.overflow = $overflow;
    },
    onComplete:function(){
      $.colorbox.resize();
    }
  };

  $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
  $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
  
  
  $(document).one('ajaxloadstart.page', function(e) {
    $('#colorbox, #cboxOverlay').remove();
   });
})
      //删除
      $('.b').click(function(){
        var id = $(this).parent('div').prev().val();
        $.get('/admin/lunbo/del',{id:id},function(date){
            if(date == 1){
              location.reload(true);
            }else{
              alert('删除失败');
            }
        });




      });
    </script>

@endsection
