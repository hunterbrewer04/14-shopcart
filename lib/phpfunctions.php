<?php

function echoPost($name)
{
    if (isset($_POST[$name]))
    echo htmlspecialchars($_POST[$name]);
}

function checkcredentials($group="None Specificed")
{
    if ( !isset( $_SESSION['username'] ) )
    {
    header("Location: login.php");
    }
}

function logout_processing()
{
    session_destroy();

}

function showPost($key) 
{
    if ( isset($_POST[$key]) )
    echo htmlspecialchars($_POST[$key]);
}

function getPost($key) 
{
    if ( isset($_POST[$key]) )
    return htmlspecialchars($_POST[$key]);
    return "";
}




?>


