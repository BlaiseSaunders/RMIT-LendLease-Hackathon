function add_field(type)
{
	var form_zone = document.getElementById("form_zone");


	var new_html = "";

	switch(type)
	{
		default:
		case "text":
			new_html += "<textarea name='text_field[]' placeholder='Please enter data here...'></textarea><br>";
			break;
		case "audio":
		case "video":
			new_html += "<input class='center-block' type='file' name='file_upload[]' id='file_upload'/>";
			break;
	}


	form_zone.innerHTML += new_html;
}

