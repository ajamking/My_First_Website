var count = 0;

document.getElementById("my_button").onclick = function () {
	count++;

	if (count % 2 == 0) 
    { 
        document.getElementById("demo_image").innerHTML = "";
	} 
    else 
    {
        var img = document.createElement("img");
        img.src = "https://sun9-33.userapi.com/impf/ylyzggZWngQ2DmLqsChy2oED_XKl3XLtHVzX7A/kNbrjWVKuIM.jpg?size=600x386&quality=96&sign=8df677282fd4eac40ca6cefd67b47271&c_uniq_tag=z6dh4pJHAgc2r-1y-nyy8KamyukX9nJySTee9hdqdes&type=album"
        document.getElementById("demo_image").appendChild(img)
	}
}

