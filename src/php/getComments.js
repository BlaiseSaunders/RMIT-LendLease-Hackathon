function get_comments(id)
{
	var comments = document.getElementById('comments');


	var xhttp = new XMLHttpRequest();
	// Call ourself with seed set, get the images and append them to the big container
	xhttp.open("GET", "getComments.php?documentID="+id, true);
	xhttp.onreadystatechange = function()
	{
		if (xhttp.readyState == 4 && xhttp.status == 200)
			comments.innerHTML = xhttp.responseText;
	}
	xhttp.send();
}


