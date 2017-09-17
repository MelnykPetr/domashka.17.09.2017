
<!DOCTYPE html>
<!--30.Сериализация .
Создать форму с полями username, email, message. Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран.-->
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Сериализация</title>
      <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>		
</body>
<form action="index.php" method="POST" name="form"></form>
		
            <form>
			     login:<input type="name" name="name"></br>
			     e-mail:<input type="e-mail" name="e-mail"></br>
				message:<input type="message" name="message"></br>
				username:<textarea type="username" >username</textarea></br>
			   <input type="submit"/>
		    </form>
<?php

$result = mail('test@mail','login:$_POST[name] ,e-mail:$_POST[e-mail], message:$_POST[message], username:$_POST[username]' );
if ($result){
	echo '<p>сообщение отправлено</p>';
}
else {
	echo '<p>сообщение  не отправлено</p>';
}
?>
</body>
</html>