// manageTab.js
$(document).ready(function(){
	
  // 导航栏跳转
  $("#nav_jianjie").click(function(){
  	// alert(1);
  	$("._nav_content").css("display","none");
  	// alert($(this.nodeName));
  	$("#content_jianjie").css("display","block");
  });

  $("#nav_lianxi").click(function(){
  	$("._nav_content").css("display","none");
  	$("#content_lianxi").css("display","block");
  });

$("#nav_fabu").click(function(){
  	$("._nav_content").css("display","none");
  	$("#content_fabu").css("display","block");
  });


$("#nav_zhandian").click(function(){
  	$("._nav_content").css("display","none");
  	$("#content_zhandian").css("display","block");
  });
$("#nav_chaxun").click(function(){
    $("._nav_content").css("display","none");
    $("#content_query").css("display","block");
  });

$("#nav_test").click(function(){
  	$("._nav_content").css("display","none");
  	$("#content_test").css("display","block");
  });


$("#nav_form").click(function(){
  // alert(1);
    $("._nav_content").css("display","none");
    $("#content_form").css("display","block");
  });




// 头部按钮跳转
// 更新
$("#refresh").click(
  function refresh(){
  // alert(1);
  // window.location.href=window.location.href;
  window.location.reload(); 
}
);

$("#btn_upload").click(
  function(){
      $("._nav_content").css("display","none");
    $("#content_upload").css("display","block");
  }
);
$("#btn_query").click(
  function(){
      $("._nav_content").css("display","none");
    $("#content_query").css("display","block");
  }
);



});
