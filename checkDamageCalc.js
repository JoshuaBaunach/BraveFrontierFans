var dom = document.getElementById("calc");

function checkInput() {
	var baseatk=dom.baseatk.value;
	var percentmod=dom.percentmod.value;
	var flatatk=dom.flatatk.value;
	if (isNaN(baseatk))
	{
		alert("Your Base ATK does not seem to be a number! Check your input!");
		return false;
	}
	else if (isNaN(percentmod))
	{
		alert("Your Percent Modifier does not seem to be a number! Check your input!");
		return false;
	}
	else if (isNaN(flatatk))
	{
		alert("Your Flat ATK does not seem to be a number! Check your input!");
		return false;
	}
	else
		return true;
}