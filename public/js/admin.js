function validate() {
	var mes = "";

	var price = document.getElementById('price').value;
	var regex = /^[0-9.]+$/;
	if (!regex.test(price)) {
		mes += " - Le prix est incorrect \r\n";
	}

	var cat = document.getElementById('cat').value;
	var regex = /^[1-4]+$/;
	if (!regex.test(cat)) {
		mes += "  - La catégorie est incorrecte \r\n";
	}

	var element = document.getElementById("modifyError");
	
	if (mes != "") {
		if (!(typeof (element) != 'undefined' && element != null)) {
			document.getElementById("box").insertAdjacentHTML(
				'afterbegin',
				`<div style="height:40px; padding-top:6px; text-align:center; background-color:#F35A5A"
				class="rounded" id="modifyError">
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