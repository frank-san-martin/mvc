<?php

function dd($var)
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
    var_dump($var);
    echo "</pre>";
    die();
}
