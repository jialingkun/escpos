<?php


echo shell_exec("mode COM5 96,N,8,1");

echo shell_exec("echo ".$_GET["text"].">COM5");




/*
Note from Benny
Use it on SendMessage() String
I think the following codes will also be useful to you.

\f - clear screen

\n - new line with tab

\r - next line

\t - tab

\v - first row first column
*/
?>