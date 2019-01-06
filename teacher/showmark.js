var sub = document.getElementById('subject').value;

		var req = new XMLHttprequest;
		req.open('GET',"View_attendance.php?s="+sub,true);
		req.onload = function(){
			var a = request.responseText;
			panel.style.display = "block";
			pan.innerHTML = a;
		}
		req.send();
