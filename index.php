<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chat</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href='style.css' rel='stylesheet'>
    </head>
<body>

<table id=all>
  <div id='top2' style="height:120px;width:63.2%;margin-left:458px;top:9px;right:9px; position:absolute;">
  </div>
<tr><td colspan=3 id='top'>
  <img src="z5.jpg" style="height:120px;position:absolute;left:0%;"/>

<h2 id=title></h2>
<div id='menu'>

<a href='standard.html'>Strona główna</a>
<a href='cennik.php'>Cennik</a>
<a href='opinie.php'>Opinie</a>

</div>

<div id='midtop' style='width:100%;height:50px; position:relative;'>
  <div style="width:33.3%;height:100%; background-color:white;position:absolute;">
    <img src="z1.jpg" style="height:50px; float:left; margin-left:30px;"/>
    <span style="font-weight: bold; margin-top:10px;">tel. 997997997</span></br>
    <span style="">ul. Najkrótsza 1/1</span>
  </div>
  <div style="width:33.3%;height:100%;margin-left:33.6%; background-color:white;position:absolute;">
    <img src="z2.png" style="height:50px; float:left; margin-left:30px;"/>
    <span style="font-weight: bold; margin-top:10px;">Godziny pracy</span></br>
    <span style="">pn-pt:8:00-20:00</span>
  </div>
  <div style="width:33%;height:100%;margin-left:67.1%; background-color:red;position:absolute;">
    <img src="z3.png" style="height:50px; float:left; margin-left:30px;"/>
    <span style="font-weight: bold; margin-top:10px;color:white;">Skontaktuj się z nami</span></br>
    <span style="color:white;">Aby umówić wizytę</span>
  </div>
</div>

</td></tr>
<tr>
<td id='left'></td>
<td id='center'></td>
<td id='right'></td>
</tr>
<tr><td id='bottom' colspan=3>
</td></tr>
</table>
</body>

<script>
$("#title").html("&nbsp");
$('#center').load($('#menu a').attr('href'));
$('#content').load($('#menu a').attr('href'));
    $('#menu a').click(function(){
        var href = $(this).attr('href');
        $('#center').load(href);
        return false;
});

</script>
</html>
