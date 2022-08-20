<!Doctype hmtl>
<Html>
<Head>
<title> user Registration Form </title>
</Head>
<Style>

Body{
  Background: :-webkit-linear-gradient (left, lightgreen, yellow);
}

Form {
  Border: solid;
  Background: lightyellow;
  Width: 400px;
  Padding: 20px;
}
h1 {
  color: green;

}
</Style>

<Body>
<h1> USER REGISTRATION FORM</h1>

<Form action="createUser.php" method="post" enctype="multipart/form-data">

  <p> Username
  <Input name="name" type="text" placeholder="name" required autofocus></p>

  <p> Password
  <Input name="passwd" type="password" placeholder="password" required></p>



  <p><Input name="submit" type="submit"><p>

</Form>
</Body>
</Html>
