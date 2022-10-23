<?php
$conn = mysqli_connect('localhost:3908','root','','stepcone_db');
session_start();
if(!isset($_SESSION['user_name'])){
  header('location:register_form.php');
}
else{
if(isset($_POST['submit']))
{
  $a=$_POST['email'];
  $b=$_POST['user_password'];
  $c=$_POST['type'];
  $d=$_POST['event'];
  $e=$_POST['member_email1'];
  $f=$_POST['member_email2'];
  $g=$_POST['member_email3'];
  $h=$_POST['member_email4'];
  $i=$_POST['member_email5'];
  $select = " SELECT *FROM eventregisteration WHERE email = '$a' && password = '$d' ";

   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{
  $query="INSERT INTO eventregisteration( email,password,type,event,email1,email2,email3,email4,email5) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
  mysqli_query($conn,$query);
  $_SESSION['even'] = $_POST['event'];
  $_SESSION['email'] = $_POST['email'];
  header('location:usereventsuccess.php');
}
}
};

?>

<!DOCTYPE html>
<html lang="en" >
<head>
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
  <meta charset="UTF-8">
  <title>Event Registration Form</title>
  <!-- <script src="../assets/js/modernizr.min.js" type="text/javascript"></script> -->

<link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
<link rel='stylesheet' href='../assets/css/bootstrap-theme.min.css'>
<link rel="stylesheet" href="../assets/css/register.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<!-- partial:index.partial.html -->
    <div class="container">
    <form class="well form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Event Registration Form</b></h2></center></legend><br>

<!-- Text input-->



  


  
<!-- Text input-->



<!-- Text input-->


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Team Lead Mail Id</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" id="email">

    </div>
  </div>
  <span id="num"></span>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password"  >
    </div>
  </div>
  <button type="button" class="btn btn-warning" onclick="funotp()" id="fp" >Forgot Password ? </button>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Select Type</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <select class="form-control" name="type" id="type" onchange="change()">
        <option value=""></option>
        <option value="paper">Paper Presentation</option>
        <option value="flagship">Flagship Events</option>
        <option value="workshop">Workshops</option>
        <option value="spotlight">Spotlights</option>
        <option value="technical event">Technical Events</option>
      </select>
    </div>
  </div>
</div>

<div class="form-group" id="eventt" style="display: none;">
  <label class="col-md-4 control-label">Select <span id="type_name"></span></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input list="topics" id="event" name="event" class="form-control" onchange="tech_change()">
  <div id="output" >
    </div>
    </div>
  </div>
</div>


       <div class="form-group" id="member1" style="display: none;">
  <label class="col-md-4 control-label">Member 2</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="member_email1" placeholder="E-Mail Address" class="form-control" value="" type="text">
    </div>
  </div>
</div>

       <div class="form-group" id="member2" style="display: none;">
  <label class="col-md-4 control-label">Member 3</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="member_email2" placeholder="E-Mail Address" class="form-control" value="" type="text">
    </div>
  </div>
</div>

       <div class="form-group" id="member3" style="display: none;">
  <label class="col-md-4 control-label">Member 4</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="member_email3" placeholder="E-Mail Address" class="form-control" value="" type="text">
    </div>
  </div>
</div>

       <div class="form-group" id="member4" style="display: none;">
  <label class="col-md-4 control-label">Member 5</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="member_email4" placeholder="E-Mail Address" class="form-control" value="" type="text">
    </div>
  </div>
</div>

       <div class="form-group" id="member5" style="display: none;">
  <label class="col-md-4 control-label">Member 6</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="member_email5" placeholder="E-Mail Address" class="form-control" value="" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->


<!-- Button  -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" class="form-btn" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
    </div>
</div>


</fieldset>
</form>
</div>
</body>
</html>