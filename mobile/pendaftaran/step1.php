<script>
	function step1() {
			$(".ui-loader").html("<p style='color : black'>Memproses, harap tunggu...</p>");
			$(".ui-loader").css({"background-color" : "rgba(255,255,255,0.8)","padding" : "10px"});
		$.mobile.loading('show');
		document.selection.submit();
	}
</script>
<form name="selection" method="POST">
		<div class="step-status">STEP 1 : Select Competition</div>
		<h1 align="center" size="36px">COMPETITION SELECT</h1>
		<p>Silahkan pilih cabang apa yang Anda akan daftar.</p>
		<label for="1">Sepak Bola</label>
		<input type="radio" name="cabang" id="1" value="SEPAK BOLA" onclick="step1()">
		<label for="2">Basket</label>
		<input type="radio" name="cabang" id="2" value="BASKET" onclick="step1()">
		<label for="3">Futsal Putri</label>
		<input type="radio" name="cabang" id="3" value="FUTSAL PUTRI" onclick="step1()">
		<label for="4">Tenis Meja</label>
		<input type="radio" name="cabang" id="4" value="TENIS" onclick="step1()">
		<label for="5">Voli</label>
		<input type="radio" name="cabang" id="5" value="VOLI" onclick="step1()">
		<label for="6">Bulu Tangkis</label>
		<input type="radio" name="cabang" id="6" value="BULU TANGKIS" onclick="step1()">
		<label for="7">Catur</label>
		<input type="radio" name="cabang" id="7" value="CATUR" onclick="step1()">
		<label for="8">Taekwondo</label>
		<input type="radio" name="cabang" id="8" value="TAEKWONDO" onclick="step1()">
		<label for="9">Biliard</label>
		<input type="radio" name="cabang" id="9" value="BILIARD" onclick="step1()">
		<label for="10">Pencak Silat</label>
		<input type="radio" name="cabang" id="10" value="PENCAK SILAT" onclick="step1()">
		<label for="11">Wall Climbing</label>
		<input type="radio" name="cabang" id="11" value="WALL CLIMBING" onclick="step1()">
		<label for="12">B-Boy</label>
		<input type="radio" name="cabang" id="12" value="B-BOY" onclick="step1()">
		<label for="13">Band</label>
		<input type="radio" name="cabang" id="13" value="BAND" onclick="step1()">
		<label for="14">Fotografi</label>
		<input type="radio" name="cabang" id="14" value="FOTOGRAFI" onclick="step1()">
		<label for="15">Modern Dance</label>
		<input type="radio" name="cabang" id="15" value="MODERN DANCE" onclick="step1()">
		<label for="16">Paskibra</label>
		<input type="radio" name="cabang" id="16" value="PASKIBRA" onclick="step1()">
		<input type="hidden" name="step" value="1">
		<div class="butcont" style="margin : auto auto auto auto; width : 100%">
		<p align="center"><a href="./">Cancel Registration</a></p>
		</div>
	</form>