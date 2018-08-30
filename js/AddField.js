function add_field(type)
{
	var form_zone = document.getElementById("form_zone");


	var new_html = "";

	switch(type)
	{
		default:
		case "text":
			new_html += "<input type='text' />";
			break;
		case "audio":
		case "video":
			new_html += "<input type='file' name='fileToUpload' id='fileToUpload' />";
			break;
	}


	form_zone.innerHTML += new_html;
}

