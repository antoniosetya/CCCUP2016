<script>
	function step1() {
		document.selection.submit();
	}
</script>
<form name="selection" method="POST">
		<div class="step-status">STEP 1 : Select Competition</div>
		<h1 align="center" size="36px">COMPETITION SELECT</h1>
		<p>Silahkan pilih cabang apa yang Anda akan daftar.</p>
		<div class="sel-left">
		<input type="radio" name="cabang" id="cabang" value="SEPAK BOLA" onclick="step1()">Sepak Bola<br>
		<input type="radio" name="cabang" id="cabang" value="BASKET" onclick="step1()">Basket<br>
		<input type="radio" name="cabang" id="cabang" value="FUTSAL PUTRI" onclick="step1()">Futsal Putri<br>
		<input type="radio" name="cabang" id="cabang" value="TENIS" onclick="step1()">Tenis Meja<br>
		<input type="radio" name="cabang" id="cabang" value="VOLI" onclick="step1()">Voli<br>
		<input type="radio" name="cabang" id="cabang" value="BULU TANGKIS" onclick="step1()">Bulu Tangkis<br>
		<input type="radio" name="cabang" id="cabang" value="CATUR" onclick="step1()">Catur<br>
		<input type="radio" name="cabang" id="cabang" value="TAEKWONDO" onclick="step1()">Taekwondo<br>
		</div>
		<div class="sel-right">
		<input type="radio" name="cabang" id="cabang" value="BILIARD" onclick="step1()">Biliard<br>
		<input type="radio" name="cabang" id="cabang" value="PENCAK SILAT" onclick="step1()">Pencak Silat<br>
		<input type="radio" name="cabang" id="cabang" value="WALL CLIMBING" onclick="step1()">Wall Climbing<br>
		<input type="radio" name="cabang" id="cabang" value="B-BOY" onclick="step1()">B-Boy<br>
		<input type="radio" name="cabang" id="cabang" value="BAND" onclick="step1()">Band<br>
		<input type="radio" name="cabang" id="cabang" value="FOTOGRAFI" onclick="step1()">Fotografi<br>
		<input type="radio" name="cabang" id="cabang" value="MODERN DANCE" onclick="step1()">Modern Dance<br>
		<input type="radio" name="cabang" id="cabang" value="PASKIBRA" onclick="step1()">Paskibra<br>
		</div>
		<div class="butcont" style="margin : auto auto auto auto; width : 100%">
		<p align="center"><a href="./">Cancel Registration</a></p>
		</div>
	</form>