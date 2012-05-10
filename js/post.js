function ajaxPostFunc(param1, param2){
	$.post("post.php", {input1:param1, input2:param2}, function(json){alert("パラメータを2つPOSTしました");});
}