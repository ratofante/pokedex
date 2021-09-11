document.getElementById("menu_button").addEventListener("click", showMenu)
var width = window.matchMedia("(max-width: 930px")
showMenu()
function showMenu()
{
	const menu = document.getElementById("menu_nav")
	if (width.matches)
	{
		if(menu_nav.style.width == "0%")
		{
			//menu_nav.style.display = "block"
			menu_nav.style.width = "70%"
			menu_nav.style.left = "0%"
		}
		else
		{
			//menu_nav.style.display = "none"
			menu_nav.style.width = "0%"
			menu_nav.style.left = "-70%"
		}
	}
}