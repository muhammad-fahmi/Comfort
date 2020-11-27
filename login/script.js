function validasiEmail() {
	var rs = document.forms["formInput"]["email"].value;
	var atps = rs.indexOf("@");
	var dots = rs.lastIndexOf(".");
	console.log(atps);
	console.log(dots);
	console.log(rs.length);
	if (atps < 1 || dots < atps + 2 || dots + 2 >= rs.length) {
	// syarat 1: di depan '@' harus ada string
	// syarat 2: setelah '@' tidak boleh langsung titik
	// syarat 3: setelah titik minimal ada 2 huruf yang mengikuti
		alert("Alamat email tidak valid.");
	} else {
		alert("Alamat email valid.");
}
}