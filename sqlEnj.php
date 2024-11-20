<?php

function SQLEnj($veri){
  $veri=str_replace(
    array("+","--","@@ ","char ","nchar ","alter ","begin ","cast ","create ","cursor ","declare ","delete ","drop ","exec ","execute ","fetch ","insert ","kill ","open ","select ","Select ","sysobjects ","syscolumns ",
    "update ","table ","delete ","union ","into ","join ","Char ","Nchar ","Alter ","Begin ","Cast ","Create ","Cursor ","Declare ","Delete ","Drop ","Exec ","Execute ","Fetch ","İnsert ","Kill ","Open ","Select ",
    "Select ","Sysobjects ","Syscolumns ","Update ","Table ","Delete ","Union ","İnto ","Join "   ),

    array("","","","","","","","","","","","","","","","","","","","","","","","","","","","",""),$veri
  );
  $mVar=$veri;
  
	
	
	$sonveri=str_replace("+","",$mVar);
	$sonveri=str_replace("--","",$sonveri);
	$sonveri=str_replace("information","",$sonveri);
	$sonveri=str_replace("schema","",$sonveri);
	$sonveri=str_replace("%","",$sonveri);
	$sonveri=str_replace("execute","",$sonveri);
	$sonveri=str_replace("select","",$sonveri);
	$sonveri=str_replace("fetch","",$sonveri);
	$sonveri=str_replace("sysobjects","",$sonveri);
	
  return $sonveri;
	
	
}
function mysql_escape_string2(string $unescaped_string): string{
        $replacementMap = [
            "\0" => "\\0",
            "\n" => "\\n",
            "\r" => "\\r",
            "\t" => "\\t",
            chr(26) => "\\Z",
            chr(8) => "\\b",
            '"' => '\"',
            "'" => "\'",
            
            "%" => "\%",
            '\\' => '\\\\'
        ];

        return \strtr($unescaped_string, $replacementMap);
}

?>