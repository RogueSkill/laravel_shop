/**
 * Created by 小C on 2017/6/26.
 */

$("button[name='login']").on("click", function() {

    $.ajax({

        type:"POST",
        url:"loginAjax",
        data:"username="+$("input[name='username']").val()+"&pass="+$("input[name='pass']").val(),
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data) {

            if(data > 0) {
                alert("登录成功");
                window.location.href='center';
            }else {
                alert("登录失败");
            }
        }
    });

});