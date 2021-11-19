function getId() {
	const input = document.querySelector('input').value;
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) 
		{
			document.getElementById("response").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","app/model/m_pokedex.php?id="+input,true);
	xmlhttp.send();
}