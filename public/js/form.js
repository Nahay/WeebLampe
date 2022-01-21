function validate() {
	var mes = "";


	var pc = document.getElementById('pc').value;
	if (pc == "" || pc.length < 5 || isNaN(parseInt(pc))) {
		mes += " - Le code postal n'est pas valide \r\n";
	}

	var element = document.getElementById("failedCommand");
	
	if (mes != "") {
		if (!(typeof (element) != 'undefined' && element != null)) {
			document.getElementById("box").insertAdjacentHTML(
				'afterbegin',
				`<div style="height:40px; padding-top:6px; text-align:center; background-color:#F35A5A"
				class="rounded" id="failedCommand">
				<p class="text-white form-text" id="errorMessage">`+ mes + `</p>
				</div>`)
		}
		else {
			document.getElementById("errorMessage").innerHTML = mes;
		}
		return false;
	}
	else {
		return true;
	}
}