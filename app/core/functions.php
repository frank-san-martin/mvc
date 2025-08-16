<?php

function dd(...$vars)
{
    echo '<pre style="
                        background-color: #abaeb1ff; 
                        color: #212529; 
                        padding: 20px;
                        margin: 50px; 
                        border-radius: 5px;
                        font-family: monospace;
                        overflow-x: auto;
                        line-height: 1.5;
                        white-space: pre-wrap;
         ">';
    echo '<strong style="color: blue;">Debug Output:</strong> <br>';
    foreach ($vars as $var) {
        echo '<pre style="
                        background-color: #8fc0f1ff; 
                        color: #212529; 
                        padding: 20px;
                        margin: 50px; 
                        border-radius: 5px;
                        font-family: monospace;
                        overflow-x: auto;
                        line-height: 1.5;
                        white-space: pre-wrap;
         ">';
        print_r($var);
        echo "</pre>";
    }
    $backtrace = debug_backtrace()[0];
    //print_r($backtrace);
    echo "<hr><strong>Arquivo de chamada::: </strong>" . $backtrace['file'] . "<br>";
    echo "<strong>Linha:</strong>" . $backtrace['line'] . "<br>";
    echo "</pre>";
    die();
}


function dd1(...$vars)
{
    echo '<pre style="
                        background-color: #abaeb1ff; 
                        color: #212529; 
                        padding: 20px;
                        margin: 50px; 
                        border-radius: 5px;
                        font-family: monospace;
                        overflow-x: auto;
                        line-height: 1.5;
                        white-space: pre-wrap;
         ">';
    echo '<strong style="color: blue;">Debug Output:</strong> <br>';
    foreach ($vars as $var) {
        echo '<pre style="
                        background-color: #8fc0f1ff; 
                        color: #212529; 
                        padding: 20px;
                        margin: 50px; 
                        border-radius: 5px;
                        font-family: monospace;
                        overflow-x: auto;
                        line-height: 1.5;
                        white-space: pre-wrap;
         ">';
        var_dump($var);
        echo "</pre>";
    }
    $backtrace = debug_backtrace()[0];
    //var_dump($backtrace);
    echo "<hr><strong>Arquivo de chamada::: </strong>" . $backtrace['file'] . "<br>";
    echo "<strong>Linha:</strong>" . $backtrace['line'] . "<br>";
    echo "</pre>";
    die();
}
