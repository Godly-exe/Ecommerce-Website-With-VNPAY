
$(document).ready(function(){
	var strurl="application/controllers/search.php";
	$("#txtsearch").keyup(function(){
		key=$("#txtsearch").val();
		if(key==""){
			$(".search-quick").css("display","none");
		}else{
			$.ajax({
				url: "strurl",
				type: "get",
				data: "keyword="+key,
				async: true,
				success: function(kq){
					$(".search-quick").html(kq);
					$(".search-quick").css("display","block");
				}
			});
			return false;
		}
	});
});