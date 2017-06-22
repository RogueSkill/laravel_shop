<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="{{asset('style/css/pintuer.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/admin.css')}}">
    <script src="{{asset('style/js/jquery.js')}}"></script>
    <script src="{{asset('style/js/pintuer.js')}}"></script>  
</head>
<body>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>账户</th>
        <th>性别</th>
        <th>电话</th>
          <th>邮编</th>
        <th>邮箱</th>
        <th width="25%">地址</th>
        <th>等级</th>
        <th>状态</th>
         <th width="100">创建时间</th>
        <th>操作</th>       
      </tr>

      @foreach($user as $v)
        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            {{$v['id']}}</td>
          <td>{{$v['username']}}</td>
          <td>{{$v['sex']}}</td>
          <td>{{$v['phone']}}</td>
            <td>{{$v['code']}}</td>
          <td>{{$v['email']}}</td>
           <td>{{$v['address']}}</td>
          <td>{{$v['level']}}</td>
          <td>{{$v['state']}}</td>
          <td>{{$v['created_at']}}</td>
          <td><div class="button-group">
              <a class="button border-red" href="{{url('/admin/user_edit/'.$v['id'])}}"><span class="icon-trash-o"></span> 修改</a>
              {{--<a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a></div></td>--}}
                  <a class="button border-red" href="{{url('/admin/user_del/'.$v['id'])}}"><span class="icon-trash-o"></span> 删除</a>

        </tr>
      @endforeach
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

//function del(id){
//	if(confirm("您确定要删除吗?")){
//
//	}
//}

//$("#checkall").click(function(){
//  $("input[name='id[]']").each(function(){
//	  if (this.checked) {
//		  this.checked = false;
//	  }
//	  else {
//		  this.checked = true;
//	  }
//  });
//})
//
//function DelSelect(){
//	var Checkbox=false;
//	 $("input[name='id[]']").each(function(){
//	  if (this.checked==true) {
//		Checkbox=true;
//	  }
//	});
//	if (Checkbox){
//		var t=confirm("您确认要删除选中的内容吗？");
//		if (t==false) return false;
//	}
//	else{
//		alert("请选择您要删除的内容!");
//		return false;
//	}
//}

</script>
</body></html>
