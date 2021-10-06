
<html>
<head>
<title>Adicionar Produto</title>
</head>
<body>
<form action="./productAdded.php" method="post">
 
<b>Adicionar novo produto</b>
 
<p>Nome:
<input type="text" name="name" size="100" value="" />
</p>
 
<p>Descrição:
<input type="text" name="description" size="400" value="" />
</p>
 
<p>Imagem:
<input type="text" name="img" size="400" value="" />
</p>

<p>Quantidade:
<input type="number" name="qtd" size="30" value="" />
</p>
 
<p>Preço:
<input type="number" name="price" size="30" value="" />
</p>
 
<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>
</body>
</html>