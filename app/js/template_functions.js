document.getElementById("menu_button").addEventListener("click", showMenu)
showMenu();
function showMenu()
{
	const menu = document.getElementById("menu_nav")
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