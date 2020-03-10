<div class="main-w3layouts blue">
		<div class="main-agileinfo">
			<div class="agileits-top">
      <h1>SignUp to Bet Expert</h1>
				<form action="?p=sign_up_end" method="post">
        <input class="text email" type="text" name="name" placeholder="Ime" required>
					<input class="text email" type="text" name="surname" placeholder="Prezime" required>
					<input class="text email" type="email" placeholder="email" id="email" name="email" onkeyup="showHint(this.value)" required>
					<input class="text" type="password" id="pwd" name="pswd" placeholder="Šifra" required>
					<div class="wthree-text">
						<div class="clear"> </div>
          </div>
          <div id="txtHint"><button type="submit" class="button" disabled>Snimi</button></div>
				</form>
				<p>Already have an account<a href="?p=login"> Login Now!</a></p>
			</div>
		</div>
	</div>
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = '<button type="submit" class="button" disabled>Snimi</button>';   //default, treba bude prazno
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "pages/check_email.php?q="+str, true);
        xmlhttp.send();
    }
}
</script>
