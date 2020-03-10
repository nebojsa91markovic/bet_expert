<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <div class="centar" style="background-color:white;">
  <h2>Pregled korisnika</h2>
  <form action="?p=sign_up_end" method="POST">
    <div class="form-group">
          <label>Ime:</label>
           <input type="text" class="form-control" name="name">
              </div>
     <div class="form-group">
            <label>Prezime:</label>
            <input type="text" class="form-control" name="surname">
                </div>

    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="email" name="email" onkeyup="showHint(this.value)">
    </div>


    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" id="pwd" name="pswd">
    </div>
    <div id="txtHint"><button type="submit" class="btn btn-primary" disabled>Snimi</button></div>
    <!-- <button type="submit" class="btn btn-primary">Snimi</button> -->
  </form>
</div>

<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = '<button type="submit" class="btn btn-primary" disabled>Snimi</button>';   //default, treba bude prazno
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