function setCookie(name, value){
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth();
	var year = date.getFullYear();
	
	month = month + 1;
	year = year + 1;
	
	var string = name + "=" + value + "; expires=" + day + "/" + month + "/" + year + " 00:00:00";
	
	document.cookie = string;
}

function getCookie(name){
	var p = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
	if(p){
		return p[2];
	}else{
		return null;
	}
}