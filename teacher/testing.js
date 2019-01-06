var subject = document.getElementById("subject");
var a = document.getElementById('a');
subject.addEventListener("change",testFunc);
	function testFunc(){
	var sub = subject.value;
	console.log(sub);
	
	
	var hide = document.createElement("input");
	hide.type = "hidden";
	hide.setAttribute("value",sub);
	hide.name = "subject";
	a.appendChild(hide);
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","testphp.php?s="+sub, true);
	xmlhttp.onload = function(){
	var ar = xmlhttp.responseText.split("|");
	for (var i = 0; i < ar.length -1; i++) {
		console.log(ar);
    var checkBox = document.createElement("input");
    var label = document.createElement("label");
    checkBox.type = "checkbox";
    checkBox.value = ar[i];
	checkBox.name = "rollno[]";
	a.innerHTML += "<br>";
    a.appendChild(checkBox);
	a.innerHTML += "&emsp;&emsp;";
	a.appendChild(label);
    label.appendChild(document.createTextNode(ar[i]));
}
	};
	xmlhttp.send();
}