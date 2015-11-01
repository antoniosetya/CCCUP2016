<form name="input_data" method="POST" action="registration.php">
	<div class="step-status" align="center">STEP 2 : Insert Data</div>
	<h1 align="center" size="36px">REGISTRATION FORM</h1>
	<table width="100%" cellspacing="3">
		<tr>
			<td width="20%">Cabang Lomba</td>
			<td width="2%">:</td>
			<td><?php echo $_SESSION["comp"] ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="button" class="button" id="erase">GANTI CABANG</button></td>
		</tr>
		<tr>
			<td valign="center">Nama</td>
			<td>:</td>
			<td><p>Tulis setiap nama pada baris yang baru.</p>
				<textarea name="nama" rows=5 cols=50></textarea></td> 
		</tr>
		<tr>
			<td>Sekolah</td>
			<td>:</td>
			<td><input type="text" name="sekolah" style="width : 370px"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="button" value="submit" class="button" id="input" style="margin-left : 25%">SUBMIT</button></td>
		</tr>	
	</table>
	<input type="hidden" name="complete" value="0">
</form>
<script>
	document.getElementById("erase").addEventListener("click", function(){
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
			document.input_data.complete.value = 1;
			document.input_data.submit();
		}
	});
</script>