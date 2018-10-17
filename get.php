<html>
<head>
<title>GET X POST</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
    
<body>    

<?PHP
    //header('Content-type: text/html; charset=utf-8');

    $firstname = $_GET['firstname'];
    echo $firstname;
    echo "<BR>";

    $lastname = $_GET['lastname'];
    echo $lastname;
    echo "<BR>";

    $gender = $_GET['gender'];
    echo $gender; 
    echo "<BR>";
    ?>
    <a href="http://localhost/Get_X_Post/getFim.php?
             firstname=<?PHP echo $firstname; ?>&
             lastname= <?PHP echo $lastname;  ?>&
             gender=   <?PHP echo $gender;    ?>"
             > Próx Page</a>

</body>
</html>












