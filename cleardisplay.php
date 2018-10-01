<?php

$handle = @fopen("COM5", "w+b");
// To write into
$text = "hello world";
fwrite($handle, $text)

fclose($handle);

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