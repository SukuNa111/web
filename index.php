<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ajax</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'>
        var xmlhttp = false;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            alert("microsoft internet explorer");
        } catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                alert("microsoft internet explorer");
            } catch (E) {
                xmlhttp = false;
            }
        }
        if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
            xmlhttp = new XMLHttpRequest();
            alert("microsoft internet explorer");
        }
        function makerequest(serverPage, objID) {
            var obj = document.getElementById(objID);
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    obj.innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.send(null);
        }
    </script>
</head><!DOCTYPE html>
<html>
<head>
<style>
h1 {
  color: blue;
  font-family: verdana;
  font-size: 300%;
}
p {
  color: red;
  font-family: courier;
  font-size: 160%;
}
body {
  background-color: powderblue;
}
h1 {
  color: blue;
}
p {
  color: red;
}
</style>
</head>
<body>

</body>
</html>

<body onload="makerequest ('page1.html','hw')">
    <div align="center">
        <h1>welcome ikhzasag university ajax web</h1>
        <a href="page1.html" onclick="makerequest('page1.html', 'hw'); return false;">Оюутан</a> |
        <a href="page2.html" onclick="makerequest('page2.html', 'hw'); return false;">Багш</a> |
        <a href="page3.html" onclick="makerequest('page3.html', 'hw'); return false;">сургалтын алба</a> |
        <a href="page4.html" onclick="makerequest('page4.html', 'hw'); return false;">Холбоо барих</a>
        <div id="hw">
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>lab3</title>
        <meta charset="utf-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="function.js"></script>
    </head>
    <body>
        <div id="createtask" class="formclass"></div>
        <div id="autocompletediv" class="autocompl"></div>
        <div id="taskbox" class="taskboxclass"></div>
        <p>
            <a href="javascript://" onclick="sowHideCalendar()">
            <img id="opencloseimg" src="plus.gif" style="border: none; width: 9px ; height: 9px;">
            </a>
            <a href="javascript://" onclick="showHideCalendar()">My calander</a>
        </p>
        <div id="calander" style="width: 105px; text-align: left;"></div>
    </body>

</html>

<?php
error_reporting(0);
if((!$_GET['month']) && (!$_GET['year']))
{
    $month = date ("n");
    $year = date ("y");
}else{
    $month = $_GET['month'];
    $year = $_GET['year'];
}
$timestamp = mktime(0,0,0,$month,1,$year);
$monthname = date("F",$timestamp);
?>
<table style="width; 105px; border-collapse;" border="1" cellpadding="3" cellspacing="0" bordercolor="#00000">
<tr style="background: #FFBC37;">
<td colspan="8" style="text-align: center;" onmouseover="this.style.background='#FFCE^E'"
onmouseout="this.style.background='#FFBC37'"><span style="font-weight: bold;"><?php echo $monthname." ".$year; ?>
</span></td>
</tr>
<tr style="background: #FFBC37;">
<td style="text-align: center; width: 15px;" onmouseover="this. style.background=' #FFCE6E'" 
onmouseout="this style.background='#FFBC37'"><span style="font-weight: bold;">Su</span></td> 
<td style="text-align: center; width: 15px;" onmouseover="this.style.background='#FFCE6E' " 
onmouseout="this.style.background='#FFBC37'"><span style="font-weight: bold;">M</span</td> 
<td style="text-align: center; width: 15px;" onmouseover="this. style. background= '#FFCE6E' " 
onmouseout="this.style.background='#FFBC37'"><span style="font-weight: bold;">Tu</span></td> 
<td style="text-align: center; width: 15px;" onmouseover="this.style.background='#FFCE6E'" 
onmouseout="this.style.background=*#FFBC37'"><span style="font-weight: bold;">W</span></td> 
<td style="text-align: center; width: 15px;" onmouseover="this.style.background='#FFCE6E '" 
onmouseout="this.style.background='#FFBC37'"><span style="font-weight: bold;">Th</span></td> 
<td style="text-align: center; width: 15px;" onmouseover="this.style.background='#FFCE6E'" 
onmouseout="this.style.background='#FFBC37'"><span style="font-weight: bold;">F</span></td> 
<td style="text-align: center; width: 15px;" onmouseover="this.style.background='#FFCE6E'" 
onmouseout="this style.background='#FFBC37'"><span style="font-weight: bold;">Sa</span></td> 
</tr>

<?php
$monthstart = date ("w", $timestamp) ;
$lastday = date("d", mktime(0,0,0,$month + 1, 0, $year ));
$startdate = -$monthstart;
$numrows = ceil (((date("t", mktime (0,0,0, $month + 1, 0, $year)) + $monthstart)/7));
for ($k=1; $k <= $numrows; $k++) {
echo'<tr>';
for ($i=0; $i < 7; $i++) {
$startdate++;
if (($startdate <= 0) || ($startdate > $lastday)){
    echo '<td style="background: #FFFFFF;">&nbsp;</td>' ;
}
else{
if($startdate == date("j") && $month == date("n") && $year == date("Y"))
{
?>
<td style="text-align: center; background:'#FFBC37';" 
onmouseover="this.style.background='#FFCE6E' " 
onmouseout="this.style.background='#FFBC37'"> 
<?php echo date("j"); ?></td>
<?php
}
else{
    ?>
    <td style="text-align: center; background: #A2BAFA;" 
    onmouseover="this.style.background='#CAD7F9'" 
    onmouseout="this.style.background= '#A2BAFA'">
    <?php echo $startdate; ?> </td>
    <?php
}
}
}
}
echo '</tr>';
?>
</table>
