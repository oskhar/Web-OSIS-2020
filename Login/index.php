<?php 
$pin1 = 1;
$kls = ["10 IPA 1","10 IPA 2","10 IPA 3","10 IPS 1","10 IPS 2","10 IPS 3","10 IPS 4","11 IPA 1","11 IPA 2","11 IPA 3","11 IPS 1","11 IPS 2","11 IPS 3","11 IPS 4","12 IPA 1","12 IPA 2","12 IPA 3","12 IPS 1","12 IPS 2","12 IPS 3","12 IPS 4","GURU/STAFF"];

$jumlah = 833;
$jmlhS = 0;
$pilih1 = 0;
$pilih2 = 0;
$pilih3 = 0;

$conn = mysqli_connect("sql308.epizy.com", "epiz_29933399", "Eogi2NxQ6Mt8jt", "epiz_29933399_dataSiswaPemilih");

$result = mysqli_query($conn, "SELECT * FROM dataSiswa");
while ( $dataToken = mysqli_fetch_assoc($result) ) {
	if ($dataToken['Pilihan'] == '1' ){
		$pilih1 += 1;
    }else if ($dataToken['Pilihan'] == '2' ){
		$pilih2 += 1;
    }else if ($dataToken['Pilihan'] == '3' ){
		$pilih3 += 1;
    }
    $jmlhS += 1;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lihat hasil PEMILIHAN</title>
	<link href="logosc.webp" rel="icon" type="image/x-icon">
</head>
<style type="text/css">
	#back{
	  position: absolute;
	  top: 0;
	  left: 0;
	  height: 100%;
	  width: 100%;
	  background: rgb(240,240,240);
	  overflow: hidden;
	  background: url("bg.webp");
	  background-size: cover;
	  background-position: bottom right;
	}
	.cube {
	  width: 550px;
	  height: 250px;
	  position: absolute;
	  top: 30%;
	  right: 0;
	  left: 0;
	  margin: auto;
	  border: 5px solid #e299da;
	  border-radius: 25px;
	}
	#isi{
		background: black;
		position: relative;
		border: 5px solid #4da8d3;
		margin-top: -20px;
		margin-left: -20px;
		width: 550px;
		height: 250px;
		border-radius: 20px;
	}
	label{
		display: block;
		margin-left: 50px;
		margin-top: 10px;
		color: white;
		font-family: arial;
	}
	#lbl1{
		margin-top: 20px;
		margin-left: 0;
		font-size: 20px;
	}
	#lbl2{
		margin-top: 20px;
	}
	input{
		display: block;
		margin-left: 50px;
		background: linear-gradient(to left,#4da8d3,#e299da);
		border: none;
		border-radius: 5px;
		height: 30px;
		width: 300px;
	}
	#submit{
		margin-top: 20px;
		border-radius: 10px;
		width: 150px;
	}
	.f,.f2,.ff{
		font-size: 17px;
		color: white;
		font-family: sans-serif;
		display: block;
		margin-top: 5px;
		margin-left: 20px;
	}
	p{
		margin-top: 30px;
	}
	#f1{
		margin-top: -10px;
	}
	@media (max-width: 1250px){

		
	}
	<?php if ($pin1 == 1): ?>
		.cube {
		  width: 580px;
		  height: 400px;
		  top: 15%;
		  left: -30%;
		  margin: none;
		}
		#isi{
			  width: 580px;
			height: 400px;
		}	
	<?php endif ?>
</style>
<body>
	<div id="back">
		<div class="cube">
			<div id="isi">
				<?php if ($pin1 == 0) : ?>
					<form method="post">
						<center><label id="lbl1">LOGIN UNTUK MELIHAT HASIL PEMILIHAN</label></center>
						<label id="lbl2">Username</label>
						<input type="text" name="username">
						<label>Password</label>
						<input type="Password" name="password">
						<input type="submit" name="submit" value="submit" id="submit">
					</form>
				</div>
			</div>
		<?php else : ?>
				<div id="hasil">
					<p><font class="ff"><font style="color:#4da8d3;">PALSON: Persentase dipili <font style="color:#e299da;">|</font> Jumlah dipilih</font></font></p>
					<p>
					<font class="f" id="f1">PASANGAN 1: <font style="color:#4da8d3;"><?php echo (float)number_format((($pilih1/$jumlah)*100),1); ?>%</font> |<font style="color:#e299da;"> <?php echo $pilih1; ?> Orang</font></font>
					<font class="f">PASANGAN 2: <font style="color:#4da8d3;"><?php echo (float)number_format((($pilih2/$jumlah)*100),1); ?>%</font> |<font style="color:#e299da;"> <?php echo $pilih2; ?> Orang</font></font>
					<font class="f">PASANGAN 3: <font style="color:#4da8d3;"><?php echo (float)number_format((($pilih3/$jumlah)*100),1); ?>%</font> |<font style="color:#e299da;"> <?php echo $pilih3; ?> Orang</font></font>
					<font class="f">GOLPUT: <font style="color:#4da8d3;"><?php echo (float)number_format(((($jumlah-$jmlhS)/$jumlah)*100),1); ?>%</font> |<font style="color:#e299da;"> <?php echo $jumlah-$jmlhS; ?> Orang</font></font>
					</p>
				</div>
		<<?php endif; ?>
	</div>
</body>
</html>