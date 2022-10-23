<?php

$conn = mysqli_connect('localhost:3908','root','','stepcone_db');

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}
if(isset($_POST['submit'])){
      //$a = mysqli_real_escape_string($conn, $_POST['name']);
      $_SESSION['event'] = $_POST['name'];
      header('location:admineventtable.php');

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/register.css">
   <script type="text/javascript">
      function change(){
        var name=document.getElementById('type').value;
        if(name==''){
          document.getElementById('eventt').style.display="none";
        document.getElementById('member1').style.display="none";
        document.getElementById('member2').style.display="none";
        document.getElementById('member3').style.display="none";
        document.getElementById('member4').style.display="none";
        document.getElementById('member5').style.display="none";   
        }
        else
          document.getElementById('eventt').style.display="block";
        if(name=="paper"){
          //alert("topic");
          document.getElementById('type_name').innerHTML=" Topic";
          var arr=[];
          var string="";


          for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value='"+arr[i]+"''>";
                }
                string="<datalist id='topics'>"+string+"</datalist>";
                document.getElementById("output").innerHTML=string;
          //var member=2;
            document.getElementById('member1').style.display="block";
          document.getElementById('member2').style.display="none";
          document.getElementById('member3').style.display="none";
          document.getElementById('member4').style.display="none";
          document.getElementById('member5').style.display="none";
        }
        else if(name=="flagship"){   
          document.getElementById('type_name').innerHTML="Flagship";
          var arr=['TECHNICAL PAPER PRESENTATION','PROJECT DESIGN CONTEST','INDUSTRIAL DEFINED PROBLEM','HYDRAULIC PROPULSION','DRONE VOYAGE','GO KART','AUTOMATED BOTS','WEBATHON','ANDROID STAR','CONTRAPTION'];
          var string="";

          for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value='"+arr[i]+"''>";
                }
                string="<datalist id='topics'>"+string+"</datalist>";
                document.getElementById("output").innerHTML=string;
        }
        else if(name=="workshop"){
        //  alert("work");
            document.getElementById('member1').style.display="none";
          document.getElementById('member2').style.display="none";
          document.getElementById('member3').style.display="none";
          document.getElementById('member4').style.display="none";
          document.getElementById('member5').style.display="none";
      
          document.getElementById('type_name').innerHTML=" Workshop";
          var arr=['asddf','hgjgh'];
          var string="";

          for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value='"+arr[i]+"''>";
                }
                string="<datalist id='topics'>"+string+"</datalist>";
                document.getElementById("output").innerHTML=string;
        }
        else if(name=="spotlight"){

          document.getElementById('type_name').innerHTML=" Spotlight";
          var arr=['SQUID GAMES','SARATHY','FOX HUNT','CODE TUNNEL','CHEM-O-ROVER'];
          var string="";

          for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value='"+arr[i]+"''>";
                }
                string="<datalist id='topics'>"+string+"</datalist>";
                document.getElementById("output").innerHTML=string;
        
        }
        else if(name=="technical event"){

          document.getElementById('type_name').innerHTML=" Technical Event";  
          var arr=['ANWESHANA','CADD CRACKERS','CODE-EL','PARI PATH','AEROTHON','LIFE CYCLE ANALYSIS','TINKER CAD','HOVERCRAFT RAC','CODIGO','LEAGUE OF LEGENDS','CODE MANIA','SPAWN THE MACHINE','MR. & MS. TECHNICA','MODEL UN','ELECTRO LIGHT','SNAKE-O-MYSTERY'];
          var string="";
          for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value='"+arr[i]+"''>";
                }
                string="<datalist id='topics' >"+string+"</datalist>";
                document.getElementById("output").innerHTML=string;
        }
      }
      function tech_change(){
    //    alert('hi');
      var name=document.getElementById('event').value;
      //alert(name);
        var mem=0;
        //alert(name);
      if(name=='')
        mem=0;
      else if(name=='HYDRAULIC PROPULSION'||name=='DRONE VOYAGE'||name=='AEROTHON')
        mem=5;
      else if(name=='AUTOMATED BOTS'||name=='GO KART')
        mem=6;
      else if(name=='WEBATHON'||name=='ANDROID STAR'||name=='CONTRAPTION'||name=='ANWESHANA'||name=='LIFE CYCLE ANALYSIS'||name=='HOVERCRAFT RACE'||name=='LEAGUE OF LEGENDS'||name=='MODEL UN'||name=='SQUID GAMES'||name=='FOX HUNT')
        mem=4;
      else if(name=='PROJECT DESIGN CONTEST'||name=='CODE-EL'||name=='CODE MANIA'||name=='TINKER CAD')
        mem=3;
      else if(name=='CADD CRACKERS'||name=='PARI PATH'||name=='CODIGO'||name=='SPAWN THE MACHINE'||name=='ELECTRO LIGHT'||name=='SNAKE -O-MYSTERY'||name=='CODE TUNNEL'||name=='CHEM-O-ROVER')
        mem=2;
      else if(name=='TECHNICAL PAPER PRESENTATION'||name=='INDUSTRIAL DEFINED PROBLEM'||name=='MR. & MS. TECHNICA'||name=='SARATHY')
        mem=1;
      else
        mem=2;
      if(mem==0||mem==1)
      {
        document.getElementById('member1').style.display="none";
        document.getElementById('member2').style.display="none";
        document.getElementById('member3').style.display="none";
        document.getElementById('member4').style.display="none";
        document.getElementById('member5').style.display="none";   
      }
      else if(mem==2){
        document.getElementById('member1').style.display="block";
        document.getElementById('member2').style.display="none";
        document.getElementById('member3').style.display="none";
        document.getElementById('member4').style.display="none";
        document.getElementById('member5').style.display="none";  
      }
      else if(mem==3){
          document.getElementById('member1').style.display="block";
          document.getElementById('member2').style.display="block";
          document.getElementById('member3').style.display="none";
          document.getElementById('member4').style.display="none";
          document.getElementById('member5').style.display="none";
      }
      else if(mem==4)
      {
          document.getElementById('member1').style.display="block";
          document.getElementById('member2').style.display="block";
          document.getElementById('member3').style.display="block";
          document.getElementById('member4').style.display="none";
          document.getElementById('member5').style.display="none";
      }
      else if(mem==5)
      {

        document.getElementById('member1').style.display="block";
        document.getElementById('member2').style.display="block";
        document.getElementById('member3').style.display="block";
        document.getElementById('member4').style.display="block";
        document.getElementById('member5').style.display="none";  
      }
      else if(mem==6)
      {
          document.getElementById('member1').style.display="block";
          document.getElementById('member2').style.display="block";
          document.getElementById('member3').style.display="block";
          document.getElementById('member4').style.display="block";
          document.getElementById('member5').style.display="block";
      }
      }
    </script>
</head>
<body>
   
<div class="container">
<form action="" method="post">
   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name']?></span></h1>
      <p>this is an admin page</p>
      <!-- <input type="name" name="name" required placeholder="enter required event"> 
      <select name="name" class="content" >
      <option selected>FLAGSHIP EVENTS</option>
        <option value=""></option>
        <option value="TECHNICAL PAPER PRESENTATION">TECHNICAL PAPER PRESENTATION</option>
        <option value="PROJECT DESIGN CONTEST">PROJECT DESIGN CONTEST</option>
        <option value="INDUSTRIAL DEFINED PROBLEM">INDUSTRIAL DEFINED PROBLEM</option>
        <option value="DRONE VOYAGE">DRONE VOYAGE</option>
        <option value="HYDRAULIC PROPULSION">HYDRAULIC PROPULSION</option>
        <option value="GO KART">GO KART</option>
        <option value="AUTOMATED BOTS">AUTOMATED BOTS</option>
        <option value="WEBATHON">WEBATHON</option>
        <option value="ANDROID STAR">ANDROID STAR</option>
        <option value="CONTRAPTION">CONTRAPTION</option>
      </select><br><br>--> 
      <div class="btn">
  <label class="kir">Select Type:</label>  
      <select class="btn" name="type" id="type" onchange="change()" required>
        <option value=""></option>
        <option value="paper">Paper Presentation</option>
        <option value="flagship">Flagship Events</option>
        <option value="workshop">Workshops</option>
        <option value="spotlight">Spotlights</option>
        <option value="technical event">Technical Events</option>
      </select>
</div><br><br>

<div class="btn" id="eventt">
  <label class="kir">Select <span id="type_name"></span></label>  
      <input list="topics" name='name'class='btn' id="event" name="event" class="form-control" onchange="tech_change()" required>
  <div id="output" >
  </div>
</div><br><br>
      <input type="submit" name="submit"class="btn"><br>
      <br>
      <a href="logout.php" class="btn">logout</a>
   </div>
</form>
</div>

</body>
</html>