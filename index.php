<?php 
$pm = 0;
$tk = 0;
if (isset($_GET['pemilihan'])) {
	$pm = 1;
}elseif (isset($_GET['tokennya'])) {
	$tk = 1;
}

if (isset($_GET['pin'])) {
	$pn = $_GET['pin'];
	echo "<script>window.onload = function() {
		infPilih1(document.getElementById('infoPemilih{$pn}'),document.getElementById('pilihPasangan{$pn}'),mrd{$pn});
		window.scrollBy(0,pin1);
	};
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pemilihan ketua OSIS dan wakil ketua OSIS</title>
  <link href="http://osis-sman96.rf.gd/logosc.webp" rel="icon" type="image/x-icon">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<style type="text/css">
		#back{
  position: absolute;
  top: 0;
  left: 0;
  height: 2420px;
  width: 100%;
  background: linear-gradient(to bottom left,deepskyblue,rgb(30,30,30),rgb(20,20,20),rgb(10,10,10),black);
  background: #6c0100;
  overflow: hidden;
}
#about{
  background: black;
  background-size: cover;
  width: 100%;
  height: 850px;
  position: absolute;
  bottom: 0;
  left: 0;
  overflow: hidden;
  box-shadow: 0px -5px 10px rgb(0,0,0,0.7);
}
#intif{
  font-size: 100px;
  font-weight: bold;
  position: absolute;
  right: 250px;
  /*top: 0px;*/
  animation: fontMoveUpDown 15s infinite;
  font-family: arial;
}
.f{
  position: relative;
  display: inline-block;
  top: -15px;
  animation: mvUpDown 15s infinite;
  color: #2ea397;
  /*background: -webkit-linear-gradient(#277DE9,#3ED0B2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;*/
}
#f1{
  animation-delay: 2s;
}
#f2{
  animation-delay: 0s;
}
#f3{
  animation-delay: 3s;
}
#f4{
  animation-delay: 1s;
}
#loader #intif1{
  font-size: 100px;
  font-weight: bold;
  position: absolute;
  font-family: arial;
  right: 0;
  left: 0;
  margin: auto;
  text-align: center;
  animation: fontMoveUpDown2 15s infinite;
}
#loader{
  position: fixed;
  background: black;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  overflow: hidden;
}
#loader #f11{
  animation-delay: 2s;
}
#loader #f12{
  animation-delay: 0s;
}
#loader #f13{
  animation-delay: 3s;
}
#loader #f14{
  animation-delay: 1s;
}
#loader #f15{
  animation-delay: 6s;
}
#loader #f16{
  animation-delay: 4s;
}
#loader #f17{
  animation-delay: 5s;
}
#typing{
    color: #cefcfe;
    font-family: monospace;
    font-size: 30px;
    position: relative;
    top: 400px;
}
@keyframes fontMoveUpDown {
  0% {top: -20px;transform: rotate(-5deg);}
  15% {transform: rotate(5deg);}
  30% {top: 80px;transform: rotate(-5deg);}
  60% {transform: rotate(5deg);}
  100% {top: -20px;transform: rotate(-5deg);}
}
@keyframes fontMoveUpDown2 {
  0% {top: 300px;transform: rotate(-5deg);}
  15% {transform: rotate(5deg);}
  30% {top: 400px;transform: rotate(-5deg);}
  60% {transform: rotate(5deg);}
  100% {top: 300px;transform: rotate(-5deg);}
}
@keyframes mvUpDown {
  0% {transform: rotate(0deg);}
  10% {top: -15px;transform: rotate(5deg);}
  20% {transform: rotate(-10deg);}
  30% {top: 25px;transform: rotate(10deg);}
  60% {transform: rotate(-15deg);}
  90% {top: -15px;transform: rotate(5deg);}
  100% {transform: rotate(0deg);}
}
@keyframes muncul{
  0%{opacity: 0;}
  100%{opacity: 1;}
}
@keyframes hilang{
  0%{opacity: 1;}
  100%{opacity: 0;}
}
@keyframes kekiri{
  0%{left: 80px;opacity: 1}
  100%{left: 0px;opacity: 1}
}
@keyframes kekanan{
  0%{width: 0px;/*opacity: 0*/}
  100%{width: 350px;/*opacity: 1*/}
}
@keyframes bsrVsMs{
  0%{height: 0;}
  100%{height: 100%;}
}
@keyframes kclVsMs{
  0%{height: 100%;}
  100%{height: 0;}
}
@keyframes bsrVsMsP{
  0%{height: 0;}
  100%{height: 1100px;}
}
@keyframes kclVsMsP{
  0%{height: 1100px;}
  100%{height: 0;}
}
@keyframes besarkekanan{
  0%{width: 60px;border-radius: none;}
  100%{width: 180px;border-bottom-right-radius: 10px;}
}
@keyframes lingkaran{
  0%{width: 20px;height: 20px;border-radius: 15px;border-bottom-right-radius: 250px;}
  30%{width: 400px;height: 250px;border-radius: 10px;background: #2ea397;}
  70%{width: 400px;height: 250px;border-radius: 10px;background: #2ea397;}
  80%{width: 400px;height: 250px;border-radius: 10px;background: transparent;}
  100%{width: 400px;height: 250px;border-radius: 0px;background: transparent;}
}
@keyframes atas{
  0%{top: 80px;opacity: 0}
  30%{top: 0px;opacity: 1;background: black;}
  98%{background: black;}
  100%{top: 0px;opacity: 1;background: /*#0f2f56*//*#2ea397*/#2a9689;}
}
@keyframes besarcttn{
  0%{width: 0px;}
  100%{width: 280px;}
}

#isiabout{
  width: 0px;
  height: 0px;
  position: absolute;
  left: 80px;
  top: 80px;
  /*background: linear-gradient(to bottom right, deepskyblue,darkblue);*/
  /*border-radius: 10px;*/
  background: #2ea397;
  border-right: 2px solid /*#2ea397*/#2ea397;
  /*box-shadow: 5px 5px 10px rgb(0,0,0,0.7);*/
}
#btncenter{
  position: relative;
  top: 100px;
  margin: auto;
  margin-right: 50px;
  width:350px;
}
#namaAbout{
  font-family:lato,sans-serif;
  font-size: 30px;
  color: white;
  position: relative;
  margin-left: 100px;
  margin-top: 50px;
  font-weight: bold;
  opacity: 0;
}
#deksAbout{
  font-family: sans-serif;
  margin-left: 100px;
  color: /*#2b8aff*/white;

  opacity: 0;
}
#identitasCreator{
  font-size: 16px;
  position: absolute;
  color: white;
  top: 650px;
  right: 20px;
}
#btncenter button{
  opacity: 0;
  position: absolute;
  border: none;
  border-radius: 5px;
  display: inline;
  width: 50px;
  height: 50px;
  background: black;
  box-shadow: 5px 5px 10px rgb(0,0,0,0.7);
}
#btnabout1{
  left: 0;
}
#btnabout2{
  left: 0;
  right: 0;
  margin: auto;
}
#btnabout3{
  right: 0;
}
#btncenter button img{
  height: 30px;
  width: 30px;
  position: absolute;
  left: 10px;
  top: 10px;
}
#btnabout2 img{
  width: 40px;
  height: 40px;
  left: 5px;
  top: 5px;
}*/
#btncenter{
  position: relative;
  margin: auto;
  right: 50px;
  width:240px;
}
#identitasCreator{
  font-size: 16px;
  position: absolute;
  color: white;
  top: 650px;
  right: 20px;
}
#btncenter button{
  opacity: 0;
  position: relative;
  border: none;
  border-radius: 5px;
  display: inline;
  width: 60px;
  height: 60px;
  background: black;
  margin-left: 15px;
  box-shadow: 5px 5px 10px rgb(0,0,0,0.7);
}
#btnabout1{
  left: 0;
}
#btnabout2{
  left: 0;
  right: 0;
  margin: auto;
}
#btnabout3{
  right: 0;
}
#btncenter button img{
  height: 30px;
  width: 30px;
  position: absolute;
  left: 15px;
  top: 15px;
}
#btncenter #btnabout2 img{
  width: 40px;
  height: 40px;
  left: 10px;
  top: 10px;
}
#cttn{
  background: white;
  /*font-weight: bold;*/
  color: black;
  width: 0px;
  height: 140px;
  position: absolute;
  right: 0;
  top: 400px;
  border-bottom-left-radius: 15px;
  border-top-left-radius: 15px;
  box-shadow: -5px 5px 10px rgb(0,0,0,0.7);
}
#cttn p{
  opacity: 0;
  font-family: Lato,sans-serif;
  width: 220px;
  font-weight: bold;
  position: absolute;
  height: 100px;
  left: 30px;
  top: 10px;
  color: black;
}
#isimenu{
  box-shadow: -5px 5px 10px rgb(0,0,0,0.7);
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  border-bottom-left-radius: 20px;
  height: 0px;
  width: 0px;
  background: linear-gradient(to bottom right, #277de9, rgb(40,40,40));
  background: #6c0100;
}
#tblttp{
  border: none;
  border-top-right-radius:20px; 
  height: 80px;
  width: 80px;
  background: white;
  position: absolute;
  left: 0;
  bottom: 0;
}
.sosial{
  display: block;
  border-radius: 10px;
  border: none;
  position: relative;
  width: 250px;
  height: 50px;
  background: white;
  margin: 10px 120px;
  top: 30px;
  box-shadow: 5px 5px 10px rgb(0,0,0,0.7);
}
.sosial:hover{
  background: rgb(40,40,40);
}
.sosial img{
  height: 30px;
  width: 30px;
  left: 10px;
  top: 10px;
  position: absolute;
}
#sosial2 img{
  width: 50px;
  height: 50px;
  top: 0px;
  left: 0px;
}
.sosial p{
  top: 0px;
  position: absolute;
  right: 20px;
  font-weight: bold;
  font-size: 18px;
  font-family: arial;
}
#sosial1 p{
  background: -webkit-linear-gradient(#714094,#be8245);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  color: ;
  right: 40px;
}
#sosial2 p{
  /*background: -webkit-linear-gradient(#13A27A);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;*/
  color: #13A27A;
  right: 60px;
}
#sosial3 p{
  /*background: -webkit-linear-gradient(#13A27A,white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;*/
  color: #ff0002;
  right: 50px;
}
#sosial4 p,#sosial5 p{
  right: none;
  color: black;
  right: 60px;
}
#sosial5 p{
  right: 15px;
}
#sosial4 img,#sosial5 img{
  position: absolute;
  border-radius: 10px;
}
#sosial4 img{
  width: 40px;
  height: 40px;
  top: 5px;
  left: 5px;
}
#sosial5 img{
  width: 50px;
  height: 50px;
  left: 0px;
  top: 0px;
}
@keyframes pembesarbulat{
  0%{width: 0;height: 0;border-bottom-left-radius: 600px;}
  100%{width: 500px;height: 600px;border-bottom-left-radius: 20px;}
}
@keyframes pengecilbulat{
  0%{width: 500px;height: 600px;border-bottom-left-radius: 20px;}
  100%{width: 0;height: 0;border-bottom-left-radius: 600px;}
}
#navbar{
    background: transparent;
    /*border-bottom: 5px solid rgb(0,118,147);*/
    position: absolute;
    width: 100%;
    height: 70px;
    top: 70px;
    left: 0;
}
@keyframes pembesar {
    0%{width: 340px;}
    100%{width: 110%;}
}
@keyframes pengecil {
    0%{width: 110%;}
    100%{width: 340px;}
}
#bg-name{
    position: absolute;
    top: 220px;
    right: 100px;
    width: 500px;
    height: 330px;
    /*background: linear-gradient(transparent, rgb(255,255,255,0.1), rgb(255,255,255,0.2), rgb(255,255,255,0.3), rgb(255,255,255,0.4), rgb(255,255,255,0.5), rgb(255,255,255,0.5), rgb(255,255,255,0.5), rgb(255,255,255,0.4), rgb(255,255,255,0.3), rgb(255,255,255,0.2), rgb(255,255,255,0.1), transparent);*/
    /*background: linear-gradient(rgba(255,255,255,0.0),rgba(255,255,255,0.5),rgba(255,255,255,1),rgba(255,255,255,1),rgba(255,255,255,0.5),rgba(255,255,255,0));*/
    background: /*#e5f2fe*/transparent;
    /*box-shadow: 5px 5px 15px rgb(0,0,0,0.7);
    border-radius: 10px;
    /*border: 5px solid white;*/
}
.perkenalan{
    position: absolute;
}
#perkenalan1{
    display: inline-block;
    opacity: 1;
    font-size: 65px;
    top: 35px;
    /*right: 320px;*/
    left: 30px;
    color:  /*rgb(0,110,144)*/#6c0100;
    font-family: monospace;
    font-weight: bold;
    animation: fontEffect 10s infinite;
    animation-delay: 0s;
}
#perkenalan3{
    opacity: 1;
    font-size: 30px;
    top: 180px;
    /*right: 95px;*/
    left: 30px;
    color: /*#00303e*//*#e5f2fe*/#6c0100;
    font-family: sans-serif;
}

#container {
  text-align: center;
}

#centerTyp{
  font-family: sans-serif;
  position: absolute;
  top: 210px;
  left: 240px;
}
#text {
  font-size: 30px;
  position: relative;
  display: inline-block;
  vertical-align: middle;
  color: #277DE9;
  font-family: arial;
  letter-spacing: 2px;
}

#cursor {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  width: 5px;
  height: 30px;
  background-color: white;
  animation: crc .75s step-end infinite;
}

@keyframes crc {
  from, to { 
    background-color: transparent 
  }
  50% { 
    background-color: white; 
  }
}

@keyframes fontEffect {
    0%{top: -20px;}
    50%{top: 20px;}
    100%{top: -20px;}
}
#perkenalan2{
    opacity: 1;
    font-size: 30px;
    top: 140px;
    /*right: 95px;*/
    left: 30px;
    color: /*#00303e*//*#e5f2fe*/#6c0100;
    font-family: arial;
    font-weight: bold;
    width: 350px;
}

#About-me{
  font-weight: bold;
  color: #6c0100;
    opacity: 1;
    text-align: center;
    border: none;
    font-size: 30px;
    font-family: arial;
    height: 65px;
    width: 190px;
    position: absolute;
    top: 260px;
    /*right: 210px;*/
    left: 30px;
    background: transparent;
    border: 5px solid #6c0100;
    border-radius: 10px;
  /*box-shadow: 2px 2px 10px rgb(34,218,255,0.5);*/
}

#About-me:hover{
    background: #6c0100;
    color: white;
}
#bg-navbar{
    background: linear-gradient(to left,#277de9, rgb(40,40,40));
    background: black;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 340px;
    height: 70px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
#judul-navbar{
    position: absolute;
    top: -10px;
    left: 100px;
    /*opacity: 0;*/
    color: /*#c0c3ca*/#e5f2fe;
    font-size: 30px;
    font-family: quicksand;
    font-weight: bold;
}
#judul1,#judul2,#judul3{
  color: #2ea397;
  /*background: -webkit-linear-gradient(#2b8aff,#4cffd8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;*/
  /*
  #162a3f
  #277DE9
  #3ED0B2
  */
}
#buttonCenter{
    position: absolute;
    height: 80px;
    left: 0px;
}
#menu div{
  width: 25px;
  height: 3px;
  background: /*#203C5B*/linear-gradient(to left,#277DE9, #3148BC);
  background: #6c0100;
  margin: 4px 0px;
  border-radius: 2px;
}
#menu{
  border:none;
  border:3px solid /*#203C5B*/#6c0100;
  border-radius: 5px;
  height: 40px;
  width: 43px;
  position: absolute;
  background: transparent;
  right: 30px;
  top: 16px;
}
/*#menu:hover{
  background: #203C5B;
}*/
#logoosis{
  border:none;
  border-radius: 5px;
  position: absolute;
  width: 80px;
  height: 80px;
  top: 0px;
  left: 20px;
  /*background: linear-gradient(to left, #3148BC, #277DE9);*/
  background: #277DE9;
  background: transparent;
  /*box-shadow: 5px 5px 15px rgb(0,0,0,0.7);*/
}
#imgosis{
  width: 50px;
  position: absolute;
  left: 15px;
  top: 10px;
  height: 50px;
}

.pilih{
  position: absolute;
  left: 0;
  top: 850px;
  width: 350px;
  height: 500px;
  border: none;
  border-radius: 10px;
  /*border: 1px solid black;*/
  /*box-shadow: 0px 5px 20px rgb(0,0,0,0.7);*/
  background: white;
  box-shadow: 5px 5px 10px rgb(0,0,0,0.7);
}
#show{
  top: 1380px;
  width: 770px;
  left: 100px;
  background: transparent;
  position: absolute;
}
#showHasil font{
  position: absolute;
  top: 25px;
  left: 60px;
  font-size: 18px;
}
#showHasil{
  height: 60px;
  width: 320px;
  background: black;
  color: white;
  border: none;
  border-radius: 10px;
  box-shadow: 5px 5px 5px rgb(0,0,0,0.7);
}
#showHasil:hover{
  background: gray;
}
#showHasil img{
  position: relative;
  height: 40px;
  width: 40px;
  left: -130px;
  margin-top: 5px;
}
#sideup img{
  height: 400px;
  position: relative;
  margin-top: 200px;
  margin-left: 200px;
}
#pilih1{
  left: 0;
  right: 60%;
  margin: auto;
}
#pilih2{
  left: 0;
  right: 0;
  margin: auto;
}
#pilih3{
  left: 60%;
  right: 0;
  margin: auto;
}
#bgImg{
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 10px;
  background: rgb(0,0,0,0);
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.listPilih{
  width: 60px;
  height: 60px;
  position: absolute;
  left: 0;
  top: -20px;
  background: #2ea397;
  box-shadow: 5px 5px 10px rgb(0,0,0,0.7);
  border-radius: 5px;
  opacity: 0;
}
.listPilih p{
  font-family: arial;
  margin: auto;
  text-align: center;
  margin-top: 15px;
  font-size: 20px;
  color: white;
  font-weight: Normal;
  opacity: 0;
}
#isiNamaPilih font{
  font-family: sans-serif;
  margin-left: 30px;
  font-size: 18px;
  color: /*#277de9*/black;
  /*background: black;*/
  display: block;
  position: relative;
  margin-top: 15px;
}
#isiNamaPilih #jabatanP1,#isiNamaPilih #jabatanP2{
  position: relative;
  font-family: Lato,sans-serif;
  font-size: 20px;
  color: black;
  font-weight: bold;
  /*margin-top: 0px;*/
}
#isiNamaPilih #jabatanP1{
  margin-top: 250px;
}
#isiNamaPilih .namaPilih{
  margin-top: 0px;
}
#bgImg img{
  border-radius: 5px;
  position: absolute;
  width: 120px;
  height: 120px;
  left: 30px;
  top: 100px;
}
/*#bgImg img:hover{
  width: 500px;
  height: 500px;
  transition: all 3s ease 0s;
  transform: scale(1.5) rotate(0deg);
}*/
#sideup{
  position: absolute;
  left: 0;
  top: 0;
  height: 700px;
  width: 100%;
  background: rgb(210,210,210);
  background-size: cover;
  box-shadow: 0px 5px 20px rgb(0,0,0,0.7);
  background: url('http://osis-sman96.rf.gd/back.webp');
  background-size: cover;
  overflow: hidden;
}
.pilihPasangan,.visiMisi{
  position: relative;
  bottom: 30px;
  height: 35px;
  border: none;
  border-radius: 5px;
  background: #2ea397;
  color: white;
  font-size: 14px;
  font-weight: bold;
}
.visiMisi{
  width: 140px;
  margin-left: 25px;
}
.pilihPasangan{
  width: 70px;
  margin-left: 10px;
  text-align: center;
}
#ctrVs{
  position: absolute;
  bottom: 0;
}
.poster-bg{
  background: #2850a8;
  width: 100%;
  height: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  border-radius: 10px;
  overflow: hidden;
  animation: kclVsMs 0s forwards;
}
#poster-bg2{
  background: #fec93d;
}
#poster-bg3{
  background: #02385e;
}
.poster-bg img{
  opacity: 0;
  top: 30px;
  position: absolute;
  width: 88%;
  left: 0;
  right: 0;
  margin: auto;
  border-radius: 5px;
}

.infoPemilih{
  position: absolute;
  height: 0;
  width: 100%;
  bottom: 0;
  left: 0;
  background: black;
  border-radius: 10px;
  overflow: hidden;
  animation: kclVsMs 1s forwards;
}
/*.infoPemilih label{
  display: block;
  color: white;
  font-family: arial;
  margin-left: 20px;
}*/
#namaLengkap,#namaKelas1,#namaKelas2,#namaKelas3,#namaToken,#namaAbsen{
  position: relative;
  color: white;
  display: block;
  font-family: arial;
  margin-left: 30px;
  margin-top: 10px;
  border: none;
  border-radius: 5px;
}
#namaLengkap{
  margin-top: 70px;
}
.namaPemilih,.tokenPemilih,.absenPemilih{
  position: relative;
  display: block;
  /*left: 30px;*/
  margin-top: 0px;
  color: black;
  font-family: sans-serif;
  font-size: 16px;
  margin-left: 30px;
  font-weight: normal;
  border-radius: 5px;
}
#submit{
  color: black;
  position: relative;
  margin-top: 20px;
  margin-left: 30px;
  border: none;
  border-radius: 5px;
  height: 25px;
  width: 100px;
}
#peringatan{
  color:red;
  margin-left: 50px;
  display: block;
  margin-top: 10px;
  font-size: 18px;
  font-family: sans-serif;
}
#namaKelas1,#namaKelas2,#namaKelas3{
  background: white;
  height: 35px;
  width: 150px;
  color: black;
  margin-top: 20px;
}
#namaKelas1,#namaKelas2,#namaKelas3 *{
  display: inline;
}
#namaKelas1:after{
  content: "KELAS";
}
#namaKelas2:after{
  content: "KELAS";
}
#namaKelas3:after{
  content: "KELAS";
}
#kelas1,#kelas2,#kelas3{
  background: #2ea397;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  color: white;
  position: absolute;
  overflow-y: scroll;
  overflow-x: hidden;
  height: 0px;
  width: 150px;
  top: 170px;
  font-size: 16px;
  left: 30px;
}
.kelas p{
  position: relative;
  margin-top: 5px;
  display: block;
  font-family: sans-serif;
}

.pilihKelas{
  display: inline;
  font-family: sans-serif;
}

#tombolLipat{
  position: absolute;
  overflow: hidden;
  width: 0px;
  top: 2900px;
  left: 0;
  right: 0;
  background: transparent;
  margin: auto;
}
.tblLipat{
  font-size: 20px;
  position: relative;
  margin-left: 50px;
  height: 100px;
  width: 100px;
  color: white;
  border: 0;
  border-radius: 15px;
  background: #2ea397;
  box-shadow: 5px 5px 10px rgb(0,0,0,0.7);
}
#tombolLipat1{
  background: black;
}

#sosial3 img{
  width: 35px;
  height: 35px;
  top: 7px;
  left: 7px;
}
#penutup{
  position: absolute;
  bottom: 0px;
  /*top: 300px;*/
  width: 100%;
  height: 400px;
  background: /*#113763*/#0f2f56;
  left: 0;
  box-shadow: 0px -5px 10px rgb(0,0,0,0.7);
}
#penutup center *{
  display: block;
}
#penutup center *{
  display: block;
}
#penutup center p{
  font-family: Lato,sans-serif;
  font-weight: bold;
  color: white;
  width: 50%;
  margin-top: 0px;
}
#penutup center p *{
  display: inline;
  position: relative;
}
#penutup center p #l{
  width: 14px;
  height: 14px;}
#penutup center p #e{
  width: 16px;
  height: 16px;
  top: 2px;
  display: inline-block;
}
#logoPenutup{
  width: 70px;
  height: 70px;
  margin-top: 20px;
}
#isiPenutup{
  color: white;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 22px;
  margin-top: 10px;
}

@media (max-width: 1250px){
  #namaAbout{
    font-size: 30px;
    margin-top: 100px;
  }
  #deksAbout{
    font-size: 25px;
  }
  #penutup{
    height: 550px;
  }
  #isiPenutup{
    font-size: 35px;
  }
  #penutup center p{
    font-size: 22px;
    width: 85%;
  }
  #penutup center p #l{
    width: 20px;
    height: 20px;}
  #penutup center p #e{
    width: 22px;
    height: 22px;
  }
  #logoPenutup{
    margin-top: 70px;
    height: 80px;
    width: 80px;
  }
  #show{
    top: 2980px;
    left: 0;
    right: 0;
    margin: auto;
  }
  #showHasil{
    height: 100px;
    font-size: 24px;
    width: 430px;
  }
  #showHasil img{
    height: 70px;
    width: 70px;
    margin-left: -80px;
  }
  #showHasil font{
    font-size: 24px;
    left: 120px;
    top: 40px;
  }
  #tombolLipat{
    width: 500px;
  }
  #bg-name{
    top: 820px;
    left: 30px;
    width: 500px;
  }
  #sideup{
    height: 1400px;
  }
  #identitasCreator{
    top: 1320px;
    font-size: 25px;
    right: 30px;
  }
  #sideup img{
    margin-top: 400px;
    margin-left: 400px;
  }
  #back{
    height: 4400px;
  }
  #perkenalan1{
    font-size: 75px;
  }
  #perkenalan2,#perkenalan3,#text,#cursor,#centerTyp{
    font-size: 40px;
  }
  #perkenalan3{
    top: 190px;
  }
  #centerTyp{
    top: 228px;
    left: 280px;
  }
  .pilih{
    top: none;
    bottom: 750px;
    width: 770px;
    height: 1100px;
    left: 0;
    right: 0;
    margin: auto;
  }
  #pilih1{
    left: 0;
    right: 0;
    margin: auto;
  }
  #pilih2{
    opacity: 0;
    height: 0;
    overflow: hidden;
  }
  #pilih3{
    left: 0;
    right: 0;
    height: 0;
    opacity: 0;
    margin: auto;
    overflow: hidden;
  }

  .namaPemilih,#noToken,#kelas,#absen{
    height: 50px;
    width: 450px;
  }
  #namaLengkap,#namaToken,#namaKelas1,#namaKelas2,#namaKelas3,#namaKelas,#namaAbsen,#submit{
    margin-top: 40px;
    margin-left: 80px;
    font-size: 26px;
  }
  .namaPemilih,.tokenPemilih,.absenPemilih{
    margin-top: 0px;
    top: 0px;
    margin-left: 80px;
    font-size: 26px;
  }
  #namaKelas1,#namaKelas2,#namaKelas3{
    height: 50px;
    width: 250px;
  }
  #kelas1,#kelas2,#kelas3{
    left: 80px;
    top: 380px;
    width: 250px;
  }
  .pilihKelas{
    width: 30px;
    height: 30px;
  }
  .kelas p{
    font-size: 30px;
  }
  #submit{
    height: 50px;
    width: 180px;
  }

  #namaLengkap{
    margin-top: 200px;
    margin-left: 80px;
  }
  .listPilih{
    top: -40px;
    width: 100px;
    height: 100px;
  }
  .listPilih p{
    margin-top: 25px;
    font-size: 30px;
  }
  #about #intif{
    right: 80px;
    margin-top: 180px;
  }
  #navbar{
    top: 150px;
    height: 120px;
  }
  #bg-navbar{
    height: 120px;
    width: 430px;
  }
  #judul-navbar{
    top: 0px;
    left: 120px;
    font-size: 40px;
  }
  #menu{
    top: 25px;
    height: 60px;
    width: 63px;
  }
  #menu div{
    border-radius: 5px;
    width: 45px;
    height: 8px;
  }
  #logoosis{
    width: 100px;
    height: 100px;
  }
  #imgosis{
    top: 20px;
    width: 70px;
    height: 70px;
  }
  .pilihPasangan,.visiMisi{
    bottom: 70px;
    height: 70px;
    font-size: 18px;
    border-radius: 10px;
  }
  #isiNamaPilih #jabatanP1,#isiNamaPilih #jabatanP2{
    font-size: 45px;
  }
  #isiNamaPilih #jabatanP1{
    margin-top: 500px;
  }
  #isiNamaPilih font{
    font-size: 45px;
    margin-left: 50px;
  }
  .visiMisi{
    width: 180px;
    margin-left: 80px;
  }
  .pilihPasangan{
    width: 100px;
    margin-left: 30px;
  }
  @keyframes pembesarbulat{
    0%{width: 0;height: 0;border-bottom-left-radius: 900px;}
    100%{width: 100%;height: 100%;border-bottom-left-radius: 30px;}
  }
  @keyframes pengecilbulat{
    0%{width: 100%;height: 100%;border-bottom-left-radius: 30px;}
    100%{width: 0;height: 0;border-bottom-left-radius: 900px;}
  }
  .sosial{
    margin: 20px 240px;
    width: 400px;
    height: 100px;
  }
  .sosial img{
    width: 70px;
    height: 70px;
    top: 15px;
    left: 15px;
  }
  #sosial2 img{
    width: 96px;
    height: 96px;
    top: 2px;
    left: 2px;
  }
  #sosial3 img{
    width: 70px;
    height: 70px;
    top: 15px;
    left: 15px;
  }
  #sosial4 img{
    width: 80px;
    height: 80px;
    top: 10px;
    left: 10px;
  }
  #sosial5 img{
    width: 100px;
    height: 100px;
    left: 0px;
    top: 0px;
  }
  #sosial5 p{
    right: 40px;
  }
  .sosial p{
    font-size: 24px;
  }
  #sosial1 p{
    right: 80px;
  }
  #sosial2 p{
    right: 110px;
  }
  #sosial3 p{
    right: 95px;
  }
  #sosial4 p{
    right: 105px;
  }
  #cttn{
    top: 700px;
    height: 180px;

  }
  #cttn p{
    top: 0px;
    left: 40px;
    font-size: 20px;
    font-family: sans-serif;
    font-weight: normal;
  }
  @keyframes besarcttn{
    0%{width: 0px;}
    100%{width: 350px;}
  }
  @keyframes pengecil {
      0%{width: 110%;}
      100%{width: 430px;}
  }
  @keyframes besarkekanan{
    0%{width: 100px;border-radius: none;}
    100%{width: 350px;border-bottom-right-radius: 10px;}
  }
  #bgImg img{
    width: 260px;
    height: 260px;
    top: 170px;
    left: 50px;
    border-radius: 10px;
  }
  #About-me{
    top: 290px;
  }
  @keyframes fontEffect {
      0%{top: -70px;}
      50%{top: 10px;}
      100%{top: -70px;}
  }
  #isiabout{
    top: 140px;
  }
  #tblttp{
    font-size: 25px;
    height: 150px;
    width: 150px;
  }
  #about{
    height: 1100px;
  }
}
	</style>
</head>
<body>
	<div id="back">

		<div id="tombolLipat">
			<button class="tblLipat" id="tombolLipat1" onclick="gsrPilih(document.getElementById('pilih1'),document.getElementById('pilih2'),document.getElementById('pilih3'),document.getElementById('tombolLipat1'),document.getElementById('tombolLipat2'),document.getElementById('tombolLipat3'))">1</button>
			<button class="tblLipat" id="tombolLipat2" onclick="gsrPilih(document.getElementById('pilih2'),document.getElementById('pilih1'),document.getElementById('pilih3'),document.getElementById('tombolLipat2'),document.getElementById('tombolLipat1'),document.getElementById('tombolLipat3'))">2</button>
			<button class="tblLipat" id="tombolLipat3" onclick="gsrPilih(document.getElementById('pilih3'),document.getElementById('pilih2'),document.getElementById('pilih1'),document.getElementById('tombolLipat3'),document.getElementById('tombolLipat2'),document.getElementById('tombolLipat1'))">3</button>
		</div>
		<?php 
			$pejabat1 = ["Farrel Agri Firdaus","Sanly Doresga Simanjuntak","Nur Hazizah"];
			$pejabat2 = ["Aprilia Angelica","Aidil Pratama","Laura"];
		 ?>
		<?php for ($i=1; $i < 4; $i++) : ?>
			<div class="pilih" id="pilih<?php echo($i); ?>" >
				<div id="bgImg">
					<img src="http://osis-sman96.rf.gd/pasangan<?php echo($i); ?>.webp">
				</div>
				<div id="isiNamaPilih">
					<font id="jabatanP1">KETUA</font>
					<font class="namaPilih" id="namaPilih"><?php echo $pejabat1[$i-1]; ?></font>

					<font id="jabatanP2">WAKIL</font>
					<font class="namaPilih" id="namaPilih2"><?php echo $pejabat2[$i-1]; ?></font>
				</div>

				<div id="poster-bg<?php echo($i); ?>" class="poster-bg">
					<img id="gbrPoster<?php echo($i); ?>" src="http://osis-sman96.rf.gd/poster<?php echo($i); ?>.webp">
				</div>

				<div class="infoPemilih" id="infoPemilih<?php echo($i); ?>">
					<form method="post" action="kirim.php">
						<label id="namaLengkap">NAMA LENGKAP</label>
						<input type="text" name="username" class="namaPemilih" id="namaPemilih<?php echo($i); ?>" size="20">

						<button type="button" id="namaKelas<?php echo($i); ?>" onclick="pilihKelas<?php echo($i); ?>(kls<?php echo($i); ?>)"></button>

						<label id="namaToken">TOKEN</label>
						<input type="text" name="token" class="tokenPemilih" id="noToken" size="20">

						<button type="submit" name="submit" id="submit" value="<?php echo($i); ?>">Kirim</button>
						<?php if ( $pm == 1 ) : ?>
							<label id="peringatan">!! Data gagal dikirim, harap isi semua tabel dengan benar</label>
						<?php elseif ( $tk == 1 ) : ?>
							<label id="peringatan">!! TOKEN atau KELAS yang anda isi salah</label>
						<?php endif; ?>
						<div class="kelas" id="kelas<?php echo($i); ?>">
							<?php $kls = ["10 IPA 1","10 IPA 2","10 IPA 3","10 IPS 1","10 IPS 2","10 IPS 3","10 IPS 4","11 IPA 1","11 IPA 2","11 IPA 3","11 IPS 1","11 IPS 2","11 IPS 3","11 IPS 4","12 IPA 1","12 IPA 2","12 IPA 3","12 IPS 1","12 IPS 2","12 IPS 3","12 IPS 4","GURU/STAFF"]; ?>
							<?php for ($z=1; $z < 23; $z++) : ?>
								<p><input onclick="pilihKelas<?php echo($i); ?>(kls<?php echo($i); ?>)" type="radio" name="kelas" class="pilihKelas" id="r<?php echo($i); ?><?php echo($z); ?>" value="<?php echo($z); ?>" > <label for="r<?php echo($i); ?><?php echo($z); ?>"><?php echo($kls[$z-1]); ?></label></p>
							<?php endfor; ?>
						</div>
					</form>
				</div>
				<div class="listPilih" id="listPilih1<?php echo($i); ?>"><p id="isiListPilih<?php echo($i); ?>">PASANGAN <?php echo($i); ?></p></div>
				<div id="ctrVs">
					<button class="visiMisi" id="visiMisi<?php echo($i); ?>" onclick="lihatVsMs1(document.getElementById('poster-bg<?php echo($i); ?>'),document.getElementById('gbrPoster<?php echo($i); ?>'),document.getElementById('visiMisi<?php echo($i); ?>'),pstr<?php echo($i); ?>)">LIHAT VISI MISI</button>
					<button class="pilihPasangan" id="pilihPasangan<?php echo($i); ?>" onclick="infPilih1(document.getElementById('infoPemilih<?php echo($i); ?>'),document.getElementById('pilihPasangan<?php echo($i); ?>'),mrd<?php echo($i); ?>)">PILIH</button>
				</div>
			</div>
		<?php endfor; ?>
		<!-- <div id="show">
			<a href="Hasil"><button id="showHasil"><img src="http://osis-sman96.rf.gd/github.webp"> <font>LIHAT HASIL PEMILIHAN</font></button></a>
		</div> -->
		<div id="about">
				<form id="namaAbout">KAMI AKTIF</form>
				<form id="deksAbout">Di beberapa media sosial</form>
			<div id="isiabout">
				<div id="btncenter">
					<a href="https://instagram.com/osis96jkt?utm_medium=copy_link"><button id="btnabout1"><img src="http://osis-sman96.rf.gd/ig.webp"></button></a>
					<a href="https://api.whatsapp.com/send?phone=6281293157548"><button id="btnabout2"><img src="http://osis-sman96.rf.gd/whatsapp.webp"></button></a>
					<a href="https://youtube.com/channel/UCkAcn5qw-hMxu20N6J44OSg"><button id="btnabout3"><img src="http://osis-sman96.rf.gd/yt.webp"></button></a>
					<a href="http://tiktok.com/@osis96jkt"><button id="btnabout4"><img src="http://osis-sman96.rf.gd/logo-tiktok.webp"></button></a>
				</div>
			</div>
			<!-- <div id="shadow"></div> -->
			<p id="intif"><font class="f" id="f1">O</font> <font class="f" id="f2">S</font> <font class="f" id="f3">I</font> <font class="f" id="f4">S</font></p>
		</div>
		<div id="penutup">
			<center>
				<img id="logoPenutup" src="http://osis-sman96.rf.gd/logosc.webp">
				<font id="isiPenutup">OSIS SMAN 96 JAKARTA</font>
				<p>Semoga WEB ini dapat meningkatkan kinerja kami dalam menyelenggarakan kegiatan yang kami selenggarakan</p>
				<p><font style="display: inline;font-family:sans-serif;font-weight: normal;"><img src="http://osis-sman96.rf.gd/location.webp" id="l"> Lokasi:</font> Jl Jati Raya, Cengkareng, Jakarta Barat</p>
				<p style="margin-top: -10px;"><font style="display: inline;font-family:sans-serif;font-weight: normal;"><img src="http://osis-sman96.rf.gd/email.webp" id="e"> Email:</font><font style="color: #2ea397;"> osis96jkt@gmail.com</font></p>
			</center>
			<p style="color: white;font-family: arial; position: absolute;bottom: 20px;left: 20px">&copy; OSIS SMAN 96 JAKARTA 2020-2021</p>
		</div>


		<div id="sideup">
			<!-- <img src="http://osis-sman96.rf.gd/logoosis.webp" style="position: absolute;bottom: 100px;left: 200px"> -->
			<img src="http://osis-sman96.rf.gd/IMG_logoOsis.webp">
		</div>
		<div class="container-opening">
				<div id="bg-name">
					<p class="perkenalan" id="perkenalan1">Hi,</p>
					<p class="perkenalan" id="perkenalan2"><font style='font-family: Lato, arial;font-weight: bold;'>Welcome to</font> <font style="background: none;color: #6c0100;">WEB RESMI OSIS 96</font></p>
					<!-- p class="perkenalan" id="perkenalan3" style="font-weight: normal;">Develop Your <div id="centerTyp"><div id="text"></div><div id="cursor"></div></div></p> -->
					<button class="perkenalan" id="About-me" onclick="aboutScroll()">About</button>
				</div>
		</div>
		<div id="navbar">
			<div id="bg-navbar"></div>
			<p id="judul-navbar" style="font-family: arial"><font id="judul1">O</font>S<font id="judul2">I</font>S SM<font id="judul3">A</font>N 96</p>
			<div id="buttonCenter">
				<button id="logoosis"><img id="imgosis" src="http://osis-sman96.rf.gd/logosc.webp"></button>
			</div>
			<button id="menu" onclick="bukamenu()">
				<div id="line1"></div>
				<div id="line2"></div>
				<div id="line3"></div>
			</button>
		</div>
		<div id="isimenu">
			<button id="tblttp" onclick="tutupmenu()"><h2 style="color: black;font-weight: bold;">></h2></button>
			<button id="sosial1" class="sosial"><img src="http://osis-sman96.rf.gd/ig.webp"> <p>Instagram OSIS</p></button>
			<a href="https://api.whatsapp.com/send?phone=6281293157548"><button id="sosial2" class="sosial"><img src="http://osis-sman96.rf.gd/whatsapp.webp"> <p>Ketua OSIS</p></button></a>
			<a href="https://youtube.com/channel/UCkAcn5qw-hMxu20N6J44OSg"><button id="sosial3" class="sosial"><img src="http://osis-sman96.rf.gd/yt.webp"> <p>Youtube OSIS</p></button></a>
			<a href="http://tiktok.com/@osis96jkt"><button id="sosial4" class="sosial"><img src="http://osis-sman96.rf.gd/logo-tiktok.webp"> <p>Tiktok OSIS</p></button></a>
			<a href="Hasil"><button id="sosial5" class="sosial"><img src="http://osis-sman96.rf.gd/lihat.webp"> <p>Lihat Hasil Pemilihan</p></button></a>
			<div id="cttn"><p id="fcttn">Beberapa kontak yang dapat dihubungi jika ada yang ingin dibicarakan terkait acara, osis, dan sebagainya</p></div>
		</div>
		<div class="loader" id="loader">
			<p id="intif1"><font class="f" id="f11">L</font> <font class="f" id="f12">O</font> <font class="f" id="f13">A</font> <font class="f" id="f14">D</font> <font class="f" id="f15">I</font> <font class="f" id="f16">N</font> <font class="f" id="f17">G</font></p>
			<center>
				<p id="typing"></p>
			</center>
		</div>
	</div>
	<script type="text/javascript">
var txt = 'Welcome to OSIS SMAN 96 JAKARTA...';
var speed = 60;
var x = 1;
var navbar = document.getElementById("navbar");
var bgNavbar = document.getElementById("bg-navbar");
var line1 = document.getElementById("line1");
var line2 = document.getElementById("line2");
var line3 = document.getElementById("line3");
var menu = document.getElementById("menu");
var x1 = 0;
var x2 = 0;
var pin1 = 900 - window.innerHeight;
var pin2 = 1900 - window.innerHeight;
var tgNav = 70;
var hkelas = 200;
if (window.innerWidth < 1200) {
	pin1 = 1200 - window.innerHeight;
	pin2 = 3000 - window.innerHeight;
	tgNav = 150;
	hkelas = 400;
}
window.onscroll = function() {myFunction()};
function  bukamenu(){
	document.getElementById("isimenu").style.animation = "pembesarbulat 1.5s forwards";
	setTimeout(function(){
		document.getElementById("cttn").style.animation = "besarcttn 1s forwards";
	},1300);
	setTimeout(function(){
		document.getElementById("fcttn").style.animation = "muncul 1s forwards";
	},2100);
}
function tutupmenu() {
	document.getElementById("isimenu").style.animation = "pengecilbulat 1.5s forwards";
	document.getElementById("fcttn").style.opacity = "0";
	document.getElementById("cttn").style.width = "0px";
		document.getElementById("cttn").style.animation = "none";
		document.getElementById("fcttn").style.animation = "none";
}
function myFunction() {	
	if (window.pageYOffset > tgNav){
		if (x == 1) {
			navbar.style.position = "fixed";
			navbar.style.top = 0;
			menu.style.border = "3px solid white";
			line1.style.background = "white";
			line2.style.background = "white";
			line3.style.background = "white";
			bgNavbar.style.animation = "pembesar 0.5s forwards";
			// document.getElementById("judul1").style.color = "#277de9";
			// document.getElementById("judul2").style.color = "#277de9";
			// document.getElementById("judul3").style.color = "#277de9";
			// anm2()
			// anm3()
			x = 0;
		}
	}else{
		if (x == 0) {
			bgNavbar.style.animation = "pengecil 0.5s forwards";
			line1.style.background = "#6c0100";
			line2.style.background = "#6c0100";
			line3.style.background = "#6c0100";
			menu.style.border = "3px solid #6c0100";
			navbar.style.position = "absolute";
			navbar.style.top = tgNav+"px";
			// document.getElementById("judul1").style.color = "#1b3550";
			// document.getElementById("judul2").style.color = "#1b3550";
			// document.getElementById("judul3").style.color = "#1b3550";
			x = 1;
		}
	}
	if (window.pageYOffset > pin1 && x1 == 0) {
		anm2(document.getElementById("listPilih11"),document.getElementById("isiListPilih1"));
		setTimeout(function(){
		anm2(document.getElementById("listPilih12"),document.getElementById("isiListPilih2"));
		},800);
		setTimeout(function(){
		anm2(document.getElementById("listPilih13"),document.getElementById("isiListPilih3"));
		},1600);
		x1 = 1;
	}
	if (window.pageYOffset > pin2 && x2 == 0) {
		anm3()
		x2 = 1;
	}
}
function opt(args) {
	args.style.animation = "muncul 1s forwards";
}
// function anm1() {
// 	document.getElementById("jdl").style.animation = "kekanan 800ms forwards";
// 	setTimeout(function(){
// 		opt(document.getElementById("jdl1"));
// 		opt(document.getElementById("jdl2"));
// 	},800);
// }
function anm2(idBg,objc1) {
	idBg.style.animation = "kekiri 1s forwards";
	setTimeout(function(){
		idBg.style.left = "0px";
		idBg.style.opacity = "1";
		idBg.style.borderRadius = "0";
		idBg.style.animation = "besarkekanan 600ms forwards";
	},800);
	setTimeout(function(){
		opt(objc1);
	},1200);
}
function anm3() {
	document.getElementById("isiabout").style.animation = "lingkaran 4s forwards";
	setTimeout(function(){
		document.getElementById("btnabout1").style.animation = "atas 2.5s forwards";
	},1000);
	setTimeout(function(){
		document.getElementById("btnabout2").style.animation = "atas 2.5s forwards";
	},1333);
	setTimeout(function(){
		document.getElementById("btnabout3").style.animation = "atas 2.5s forwards";
	},1666);
	setTimeout(function(){
		document.getElementById("btnabout4").style.animation = "atas 2.5s forwards";
	},2000);
	setTimeout(function(){
		opt(document.getElementById("namaAbout"))
		opt(document.getElementById("deksAbout"))
	},4400);
}
function typeWriter(i, txt, speed) {
  if (i < txt.length) {
    document.getElementById("typing").innerHTML += txt.charAt(i);
    i++;
    setTimeout(function(){
        typeWriter(i, txt, speed);
    }, speed);
  }else{
	document.getElementById("loader").parentNode.removeChild(document.getElementById("loader"));
  }
}
window.addEventListener("load", function () {
	document.getElementById("intif1").parentNode.removeChild(document.getElementById("intif1"));
	typeWriter(0, txt, speed);
});
for (var i = Things.length - 1; i >= 0; i--) {
	Things[i]
}
pstr1 = 0;
pstr2 = 0;
pstr3 = 0;
function lihatVsMs1(objc1,objc2,objc3,objc4) {
	if (objc4 == 0) {
		objc1.style.animation = "bsrVsMs 1.5s forwards";
		objc3.innerHTML = "TUTUP POSTER";
		setTimeout(function(){
			opt(objc2)
		},1500);
		if (objc1 == document.getElementById('poster-bg1')) {
			pstr1 = 1;
			infPilih1(document.getElementById('infoPemilih1'),document.getElementById('pilihPasangan1'),1);
		}else if (objc1 == document.getElementById('poster-bg2')) {
			pstr2 = 1;
			infPilih1(document.getElementById('infoPemilih2'),document.getElementById('pilihPasangan2'),1);
		}else if (objc1 == document.getElementById('poster-bg3')) {
			pstr3 = 1;
			infPilih1(document.getElementById('infoPemilih3'),document.getElementById('pilihPasangan3'),1);
		}
	}else{
		objc2.style.animation = "none";
		objc2.style.opacity = 0;
		setTimeout(function(){
			objc1.style.animation = "kclVsMs 1s forwards";
			objc3.innerHTML = "LIHAT VISI MISI";
		},200);
		if (objc1 == document.getElementById('poster-bg1')) {
			pstr1 = 0;
		}else if (objc1 == document.getElementById('poster-bg2')) {
			pstr2 = 0;
		}else if (objc1 == document.getElementById('poster-bg3')) {
			pstr3 = 0;
		}
	}
}

mrd1 = 0;
mrd2 = 0;
mrd3 = 0;
function infPilih1(objc1,objc2,objc3) {
	if (objc3 == 0) {
		objc1.style.animation = "bsrVsMs 1.5s forwards";
		objc2.style.width = tgNav+10+"px";
		objc2.innerHTML = "KEMBALI";
		if (objc1 == document.getElementById('infoPemilih1')) {
			mrd1 = 1;
			lihatVsMs1(document.getElementById('poster-bg1'),document.getElementById('gbrPoster1'),document.getElementById('visiMisi1'),1)
			infPilih1(document.getElementById('infoPemilih2'),document.getElementById('pilihPasangan2'),1);
			infPilih1(document.getElementById('infoPemilih3'),document.getElementById('pilihPasangan3'),1);
		}else if (objc1 == document.getElementById('infoPemilih2')) {
			mrd2 = 1;
			lihatVsMs1(document.getElementById('poster-bg2'),document.getElementById('gbrPoster2'),document.getElementById('visiMisi2'),1)
			infPilih1(document.getElementById('infoPemilih1'),document.getElementById('pilihPasangan1'),1);
			infPilih1(document.getElementById('infoPemilih3'),document.getElementById('pilihPasangan3'),1);
		}else if (objc1 == document.getElementById('infoPemilih3')) {
			mrd3 = 1;
			lihatVsMs1(document.getElementById('poster-bg3'),document.getElementById('gbrPoster3'),document.getElementById('visiMisi3'),1)
			infPilih1(document.getElementById('infoPemilih1'),document.getElementById('pilihPasangan1'),1);
			infPilih1(document.getElementById('infoPemilih2'),document.getElementById('pilihPasangan2'),1);
		}
	}else{
		objc1.style.animation = "kclVsMs 1s forwards";
		objc2.innerHTML = "PILIH";
		objc2.style.width = tgNav+"px";
		if (objc1 == document.getElementById('infoPemilih1')) {
			mrd1 = 0;
		}else if (objc1 == document.getElementById('infoPemilih2')) {
			mrd2 = 0;
		}else if (objc1 == document.getElementById('infoPemilih3')) {
			mrd3 = 0;
		}
	}
}
function gsrPilih(objc1,objc2,objc3,objc4,objc5,objc6) {
	objc1.style.overflow = "visible";
	objc1.style.animation = "muncul 1s forwards";
	objc1.style.height= "1100px";
	
	objc2.style.animation = "hilang 0.5s forwards";
	objc2.style.overflow = "hidden";
	objc2.style.height = "0";

	objc3.style.animation = "hilang 0.5s forwards";
	objc3.style.overflow = "hidden";
	objc3.style.height = "0";
	
	objc4.style.background = "black";
	objc5.style.background = "#2ea397";
	objc6.style.background = "#2ea397";
	for (var i = 1; i < 4; i++) {
		document.getElementById("listPilih1"+i.toString()).style.opacity = "0";
		document.getElementById("isiListPilih"+i.toString()).style.animation = "none";
	}
	setTimeout(function(){
		for (var i = 1; i < 4; i++) {
			anm2(document.getElementById("listPilih1"+i.toString()),document.getElementById("isiListPilih"+i.toString()));
		}
	},500);
}

var eks = 0;
function ekskul(objc1,objc2,ske) {
	if (ske == 0) {
		objc1.style.width = "730px";
		objc1.style.animation = "bukaEkskul 1.5s forwards";
		objc2.style.overflow = "visible";
		eks = 1;
	}else{
		objc1.style.width = "3140px";
		objc1.style.animation = "eskulMenu 46s infinite";
		objc2.style.overflow = "hidden";
		eks = 0;
	}
}

var kls1 = 0;
var kls2 = 0;
var kls3 = 0;
var akls = ["10 IPA 1","10 IPA 2","10 IPA 3","10 IPS 1","10 IPS 2","10 IPS 3","10 IPS 4","11 IPA 1","11 IPA 2","11 IPA 3","11 IPS 1","11 IPS 2","11 IPS 3","11 IPS 4","12 IPA 1","12 IPA 2","12 IPA 3","12 IPS 1","12 IPS 2","12 IPS 3","12 IPS 4","GURU/STAFF"];
<?php for ($i=1; $i < 4; $i++) : ?>
	function pilihKelas<?php echo $i; ?>(objc2) {
		if (objc2 == 0) {
			document.getElementById('kelas<?php echo $i; ?>').style.height = hkelas+"px";
			// document.getElementById('kelas2').style.height = "200px";
			// document.getElementById('kelas3').style.height = "200px";
			document.styleSheets[0].addRule('#namaKelas<?php echo $i; ?>:after','content: "PILIH";')
			kls<?php echo $i; ?> = 1;
		}else{
			document.styleSheets[0].addRule('#namaKelas<?php echo $i; ?>:after','content: "KELAS";')
			for (var i = 1; i < 23; i++) {
				if (document.getElementById('r<?php echo $i; ?>'+i).checked) {
					document.styleSheets[0].addRule('#namaKelas<?php echo $i; ?>:after','content: "'+akls[i-1]+'";');
				}
			}
			document.getElementById('kelas<?php echo $i; ?>').style.height = "0px";
			// document.getElementById('kelas2').style.height = "0px";
			// document.getElementById('kelas3').style.height = "0px";
			kls<?php echo $i; ?> = 0;
		}
	}
<?php endfor ?>
$("input[type='radio']").change(function(e){
    e.stopPropagation();
    $('input[type="radio"][name*="' + $(this).attr('name').split('_')[1] + '"][value="' + $(this).val() + '"]').prop('checked', $(this).prop('checked'));
});



var _CONTENT = [ 
	"Talent", 
	"Potential", 
	"Creativity"
];
var _PART = 0;
var _PART_INDEX = 0;
var _INTERVAL_VAL;
var _ELEMENT = document.querySelector("#text");
var _CURSOR = document.querySelector("#cursor");
function Type() { 
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX++;

	if(text === _CONTENT[_PART]) {
		_CURSOR.style.display = 'none';

		clearInterval(_INTERVAL_VAL);
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Delete, 50);
		}, 1000);
	}
}

function Delete() {
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX--;

	if(text === '') {
		clearInterval(_INTERVAL_VAL);

		if(_PART == (_CONTENT.length - 1))
			_PART = 0;
		else
			_PART++;
		
		_PART_INDEX = 0;

		setTimeout(function() {
			_CURSOR.style.display = 'inline-block';
			_INTERVAL_VAL = setInterval(Type, 100);
		}, 200);
	}
}
_INTERVAL_VAL = setInterval(Type, 1000);

</script>
</body>
</html>
