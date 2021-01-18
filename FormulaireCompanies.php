<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="Db.php" method="post">

	<p>Votre nom : <input type="text" name="name" maxlength="100"/></p>
	<p>Votre ville : <input type="text" name="city" maxlength="255"/></p>
	<p>Votre nom de contact : <input type="text" name="namecontact" maxlength="100"/></p>
	<p>Votre email de contact : <input type="text" name="mailcontact" maxlength="100"/></p>
	<p>Votre téléphone de contact : <input type="text" name="phonecontact" maxlength="15"/></p>
	<p>Date 1 : <input type="text" name="dateadd" /></p>
	<p>Date 2 : <input type="text" name="dateupdate" /></p>
	
	<p> Commentaire : <textarea name="comment"></textarea></p>
	
	<input type="submit" value="Envoyer le formulaire">
</form>

</body>
</html>