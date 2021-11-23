
// jQuery para anular el procesamiento normal del Form
(function($){
    function processForm( e ){
        e.preventDefault();
    }

    $('#search_id_form').submit( processForm );
})(jQuery);

//showHint() para mostrar resultados de búsqueda. 
function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "app/model/m_getHint.php?search=" + str, true);
      xmlhttp.send();
    }
}

// getId() para hacer la consulta Ajax
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
