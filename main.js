var request = new XMLHttpRequest();
var nextButton = document.querySelector("#next");
nextButton.addEventListener("click",nextTask);
var loginButton = document.querySelector("#login");
loginButton.addEventListener("click",loginTask);
function nextTask(){
	var rollno = document.getElementById("roll").value;
	request.open('GET',"val.php?r="+rollno,true);
	request.onload = function(){
		var a = request.responseText;
		if(a=='0'){
			document.querySelector("#err").innerHTML = "Invalid Username";
			document.querySelector("#err").style.display = "block";
		}
		else
		{	
			document.querySelector("#roll").style.display = "none";
			document.querySelector("#err").style.display = "none";
			nextButton.style.display = "none";
			loginButton.style.display = 'block';
			document.querySelector('#rollp').style.display = 'block';
			document.querySelector('#upic').style.display = 'block';
			document.querySelector('#pwd').style.display = 'block';
			document.querySelector('#upic').setAttribute('src',a);
			document.querySelector('#rollp').innerHTML = rollno;

		}
	}
	request.send();
}

function loginTask(){
	var rollno = document.getElementById("roll").value;
	var pwd = document.getElementById("pwd").value;
	console.log(rollno);
	console.log(pwd);
	if(!pwd)
	{
		document.querySelector("#err1").innerHTML = "Invalid Password";
		document.querySelector("#err1").style.display = "block";
	}
	request.open('GET',"val1.php?p="+pwd+"&r="+rollno,true);
	request.onload = function(){
		var a = request.responseText;
		if(a =='1'){
			document.querySelector("#err1").style.display = "none";
			window.location = "index.php";
		}
		else
		{
			document.querySelector("#err1").innerHTML = "Invalid Password";
			document.querySelector("#err1").style.display = "block";
		}
	}  
	request.send();
}