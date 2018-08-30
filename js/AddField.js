function add_field(type)
{
	var form_zone = document.getElementById("form_zone");


	var new_html = "";

	switch(type)
	{
		default:
		case "text":
			new_html += "<textarea name='text_field[]'>Please enter data here...</textarea>";
			break;
		case "audio":
		case "video":
			new_html += "<input type='file' name='file_upload[]' id='file_upload'/>";
			break;
	}


	form_zone.innerHTML += new_html;
}

