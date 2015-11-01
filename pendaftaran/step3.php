<?php 
	$nama = $_POST["nama"];
	$nama = trim($nama);
	$nama_proc = explode("\n", $nama);
	$cabang = $_POST["cabang"];
	$sekolah = $_POST["sekolah"];
?>
<div class="step-status" align="right">STEP 3 : Konfirmasi</div>
<h1 align="center" size="36px">KONFIRMASI</h1>
<p>Silahkan cek kembali data yang telah dimasukkan disini</p>
<table>
	<tr>
		<td valign="top">Nama</td>
		<td valign="top">:</td>
		<td><?php 
		foreach ($nama_proc as $line) {
			echo $line.'<br>';
		} ?></td>
	</tr>
	<tr>
		<td>Cabang</td>
		<td>:</td>
		<td><?php echo $cabang; ?></td>
	</tr>
	<tr>
		<td>Sekolah</td>
		<td>:</td>
		<td><?php echo $sekolah; ?></td>
	</tr>
</table>
<p>Bila Anda sudah yakin dengan data diatas, silahkan lanjutkan proses. Bila tidak, silahkan ganti data</p>
<div class="butcont" style="margin : auto auto auto auto; width : 100%">
	<form name="backup" method="post">
		<?php
			foreach ($nama_proc as $line) { ?>
		<input type="hidden" name="nama[]" value="<?php echo $line; ?>">
		<?php }	?>	
		<input type="hidden" name="cabang" value="<?php echo $cabang; ?>">
		<input type="hidden" name="sekolah" value="<?php echo $sekolah; ?>">
		<input type="hidden" name="step" value="2">
		<div class="butcont" align="center" style="width : 50%">
		<button type="button" name="enter" class="button" id="enter">Submit Data</button>
		<button type="button" name="re_input" class="button" id="re_input">Kembali / Revisi Data</button>
		</div>
	</form>
	<form name="backup2" method="post" action="register_do.php">
		<input type="hidden" name="nama" value="<?php echo $nama; ?>">
		<input type="hidden" name="cabang" value="<?php echo $cabang; ?>">
		<input type="hidden" name="sekolah" value="<?php echo $sekolah; ?>">
		<input type="hidden" name="step" value="2">
	</form>
</div>
<script>
document.getElementById("enter").addEventListener("click", function(){
	document.backup2.submit();
});
document.getElementById("re_input").addEventListener("click", function(){
	document.backup.submit();
});
</script>