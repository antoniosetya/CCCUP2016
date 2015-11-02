<?php
	if(array_key_exists("nama",$_POST)) {
		$_SESSION["nama"] = $_POST["nama"];
		$_SESSION["cabang"] = $_POST["cabang"];
		$_SESSION["sekolah"] = $_POST["sekolah"];
		$_SESSION["before"] = 1;		
	}
	else {
		$_SESSION["nama"] = "";
		$_SESSION["sekolah"] = "";
		$_SESSION["before"] = 0;
	}
?>
<form name="input_data" method="POST" action="registration.php">
	<div class="step-status" align="center">STEP 2 : Insert Data</div>
	<h1 align="center" size="36px">REGISTRATION FORM</h1>
	<p style="color : red">UNTUK MENGHINDARI HILANGNYA DATA, JANGAN REFRESH/RELOAD BROWSER ANDA!</p>
			<div class="ui-field-contain">
				<label for="cabang">Cabang Lomba : </label>
				<input type="text" name="cabang" id="cabang" value="<?php echo $_SESSION["cabang"] ?>" readonly>
			</div>
			<button type="button" class="button" id="erase">GANTI CABANG</button>
			<div class="ui-field-contain">
				<label for="nama">Nama (Tulis setiap nama pada baris yang baru) : </label>
				<textarea name="nama" id="nama" rows=5 cols=50><?php
					if($_SESSION["before"] == 1) {
						$nama = $_SESSION["nama"];
						$max = count($nama) - 1; 
						for($i = 0;$i <= $max;$i++) {
							echo $nama[$i];
						}
					}
					else if($_SESSION["before"] == 0) {
						echo "";
					}
					?>
					</textarea>
			</div>
			<div class="ui-field-contain">
				<label for="sekolah">Sekolah</label>
				<input type="text" name="sekolah" style="width : 370px" id="sekolah" value="<?php echo $_SESSION["sekolah"]; ?>">
			</div>
			<button type="button" value="submit" class="button" id="input">SUBMIT</button>
	<input type="hidden" name="complete" value="0">
	<input type="hidden" name="cabang" value="<?php echo $_SESSION["cabang"]; ?>">
	<input type="hidden" name="step" value="2">
</form>
<script>
	document.getElementById("erase").addEventListener("click", function(){
			$(".ui-loader").html("<p style='color : black'>Memproses, harap tunggu...</p>");
$(".ui-loader").css({"background-color" : "rgba(255,255,255,0.8)","padding" : "10px"});
		$.mobile.loading('show');
		<?php
			session_destroy();
			session_unset();
		?>
		window.location.href="./registration.php";
	});
	document.getElementById("input").addEventListener("click", function(){
		if(document.input_data.nama.value == "") {
			alert("Nama tidak boleh kosong!");
			return false;
		}
		else if(document.input_data.sekolah.value == "") {
			alert("Nama sekolah tidak boleh kosong!");
			return false;
		}
		else {
			$(".ui-loader").html("<p style='color : black'>Memproses, harap tunggu...</p>");
$(".ui-loader").css({"background-color" : "rgba(255,255,255,0.8)","padding" : "10px"});
			$.mobile.loading('show');
			document.input_data.complete.value = 1;
			document.input_data.submit();
		}
	});
</script>