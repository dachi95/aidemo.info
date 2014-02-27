<?php
include ("check.php");
?>


<html>
<head>
<meta charset="utf-8"

</head>
<body background="images/bg.jpg">
<h1>დათვალე GPA</h1>

<script language="javascript">





     function koef(){
	 var koeficienti=0;
     var dzudzu=0;
     var answer=0;
     
	 var jami = 0;
	 var qula = document.getElementById("qul");
	 var bonusi = document.getElementById("bon");
	 for(var x=0;x<6;x++ ){
	     var a = qula.elements[x].value;
		 var b = bonusi.elements[x].value;
	 
	 var procenti = parseInt(a, 10) + parseInt(b, 10);
	
       if( procenti<61 && procenti>50 ) {
          
          koeficienti=0.67;}
                     
   else if (procenti>60 && procenti<71){
        koeficienti=1;}
   else if(procenti==71){
   koeficienti=1.67;}
   else if(procenti>71 && procenti<78){
   koeficienti=2;}
   else if (procenti>77 && procenti<81){
   koeficienti=2.33;}
   else if(procenti==81){
   koeficienti=2.67;}
   else if(procenti>81 && procenti<88){
   koeficienti=3;}
   else if(procenti>87 && procenti<91){
   koeficienti=3.33;}
   else if(procenti>90 && procenti<94){
   koeficienti=3.67;}
   else if(procenti>93 && procenti<103){
   koeficienti=4;}
   else if(procenti<50 && procenti>0){
   koeficienti=0;}
    dzudzu = koeficienti*5;
    jami = jami + dzudzu;
	answer = jami/30;
	    
		  document.getElementById("demo").innerHTML="შენი GPA არის " + " " + answer;
		
    } 
     
	 
}


</script>
<h3 id="demo">შენი GPA არის *</h3>
<form method="POST"  id="qul" >
საგანი 1:<input type="text"  name="sag1" > <br>
საგანი 2:<input type="text"  name="sag2" > <br>
საგანი 3:<input type="text"  name="sag3" > <br>
საგანი 4:<input type="text"  name="sag4" > <br>
საგანი 5:<input type="text"  name="sag5" > <br>
საგანი 6:<input type="text"  name="sag6" > <br>
</form>
<form id="bon" method="post">
 ბონუსი 1:<input type="text"  maxlength="2" size="2" value="0"><br>
  ბონუსი 2:<input type="text"  maxlength="2" size="2" value="0"><br>
   ბონუსი 3:<input type="text"  maxlength="2" size="2" value="0"><br>
    ბონუსი 4:<input type="text"  maxlength="2" size="2" value="0"><br>
     ბონუსი 5:<input type="text"  maxlength="2" size="2" value="0"><br>
      ბონუსი 6:<input type="text"  maxlength="2" size="2" value="0"><br>
</form>
<input type="button" onclick="koef()" value="calc">
</body>

</html>
