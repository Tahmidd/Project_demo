<?php

	session_start();
	
	if(isset($_COOKIE['uname'])){
?>





<html>
<head>
	<title> Messages </title>

	<script>

			function submitChat(){

				if(form1.uname.value == '' || form1.msg.value =='')
				{
					alert('You Need To Fill all Fields');
					return;
				}
				var uname= form1.uname.value;
				var msg = form1.msg.value;

				var xmlhttp = new XMLHttpRequest();

				xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
				xmlhttp.send();
			}

	</script>



</head>
<body>

	<center>
		<form name="form1" >
			<table border="0">
				<tbody>
					<tr>
						<td width="200px"><h2><i><font color="Red">Freelance</font></i></h2></td>
						<td width="90px"><a href = "home.php">Profile</a></td>
						<td width="90px"><a href = "messages.php">Messages</a></td>
						<td width="90px"><a href = "earning.php">Earnings</a></td>
						<td width="100px"><a href ="notifi.php">Notifications</a></td>
						<td width="150px"><a href ="buyer.php">Buyer Request</a></td>
						<td width="90px"><a href = "balance.php">Show Balance</a><br>
						<td><a href="SellerHome.php"><img src="a.jpg" width="40px" height="40px"></a>
						<br>
						<a href = "logout.php"><h3>LogOut</h3></a></td>
					</tr>
					
					 <tr>
                        <td colspan="8" style="border-top:4px solid #888;"></td>
                    <tr>
                    	<td align="center">Enter your chatname: <input type="text" name="uname"/> <br>
                    		Your Message: <br/>
                    		<textarea name="msg"></textarea><br/>
                    		<a href="#" onclick ="submitChat()">Send</a><br/><br />

					</tr>

					<tr>

						<td id="chatlogs">
							Loading Please Wait.......
						</td>

					</tr>
					</table>
	          </tbody>
			</table>
		</form>
	</center>
</body>
</html>


<?php		
	}else{
		header('location: signin.php');
	}

?>
