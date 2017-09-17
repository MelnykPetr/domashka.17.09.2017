

<!DOCTYPE html>
<!--Создать форму, которая содержит поля name, email, phone. Задать скрипт, который выведет на экран отправленные данные - $_POST или $_GET (в зависимости от свойств формы)-->
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>formy</title>
      <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>		
</body>
<div>

<h1 id="header">formy</h1>
	<div>
				<form action="formdata.php" method="POST" name="form1"></form>
            <form>
			     login:<input type="name" name="name"></br>
			     e-mail:<input type="e-mail" name="e-mail"></br>
				Phone:<input type="Phone" name="Phone"></br>
				Message:<textarea type="message" >Message</textarea></br>
			   <input type="submit"/>
		    </form>
		   <form>
		      <p><span>php kurs</span></p>
		           <label>php
		              <input type="radio" name="radio" value="yes" checked>
		           </label>
		          <label>css
		             <input type="radio" name="radio" value="no" >
		          </label>
		     <p><span>Select your?</span></p>	
		          <label><input type="checkbox" name="" checked>Yes</label>
		          <label><input type="checkbox" name="" >NO</label>
		          <label><input type="checkbox" name="">maybe</label>
		    </form>
			  
		    <form><p><span>countries</span></p>
	              <select multiple name="countries">
    	            <option selected value="0">Select your country</option>
		            <option value='za'>Zimbabwe</option>
		            <option value='es'>Spain</option>
		            <option value='en'>England</option>
		            <option value='ua' selected>Ukraine</option>
		            <option value='de'>Germany</option>
		            <option disabled value='ussr'>USSR</option>
                  </select>
              </form>	
            </div>  
</div> 
<div>
<?php
$result = mail('test@mail','login:$_POST[name] e-mail:$_POST[e-mail] Phone:$_POST[Phone] Message:$_POST[Message]' );
if ($result){
	echo '<p>сообщение отправлено</p>';
}
else {
	echo '<p>сообщение  не отправлено</p>'
}
?>
</div> 
<h1 id="header">formy</h1>
	<div>
</body>
</html>