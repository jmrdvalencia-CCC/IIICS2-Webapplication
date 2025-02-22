<?php

$loginCredentials = [
                        [
                        "username"=>"admin",
                        "password"=>"1234",
                        "role"=>"admin"
                        ],
                        [
                            "username"=>"user",
                            "password"=>"4321",
                            "role"=>"user"
                        ]
                    ];

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    foreach($loginCredentials as $loginCredential)
    {
        if($loginCredential["username"]==$username)
        {
            if($loginCredential["password"]==$password)
            {
               echo "authenticated";
               header("location:home.php");
            }
            else{
                echo "invalid password";
                header("location:index.php");
            }
        }

    }
    echo "Invalid Usernmer";



}



?>