function showResult(str)
{
if (str=="delete")
{
	document.getElementById("livesearch").innerHTML="Come Back!";
	return;
}
if (str.length==0)
  {
  document.getElementById("livesearch").innerHTML="Are you going to type something?";
  document.getElementById("livesearch").style.border="2px solid black";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  request=new XMLHttpRequest();
  }
/*else
  {// code for IE6, IE5
  request=new ActiveXObject("Microsoft.XMLHTTP");
  }*/
request.onreadystatechange=function()
  {
  if (this.readyState==4 && this.status==200)
    {
    if (!this.responseText){
   	 document.getElementById("livesearch").innerHTML="AJAX NOT WORKING";
   	 document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
    else{ 
    	document.getElementById("livesearch").innerHTML=this.responseText;
    	document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
}
params = "searchname=" + str;
request.open("POST", "livesearch.php", true);
request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
request.setRequestHeader("Content-lenth", params.length)
request.setRequestHeader("Connection", "close")
request.send(params);
}