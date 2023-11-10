function show() {
			var show = document.getElementsByClassName("show-password");
			[].forEach.call(show, function(dato){
				dato.hidden = !dato.hidden;
			});
			
			var p = document.getElementById('pwd');
			p.setAttribute('type', 'text');
			
			var p = document.getElementById('pwd-conf');
			p.setAttribute('type', 'text');
		}

function hide() {			
	var show = document.getElementsByClassName("show-password");
	[].forEach.call(show, function(dato){
		dato.hidden = !dato.hidden;
	});
	
	var p = document.getElementById('pwd');
	p.setAttribute('type', 'password');
	
		
	var p = document.getElementById('pwd-conf');
	p.setAttribute('type', 'password');
}	