<?php
include_once("db/common.php");
if (!array_key_exists("id",$_GET)) {
    $id=100001740;
} else {
    $id=$_GET["id"];
}
$link = "json.php?id=";

if (!array_key_exists("root",$_GET)) {
    //$id=100001740;
} else {
    $root=$_GET["root"];
    $txt = "";
    get_tree($root, "##");
    
    exit();


}

function get_tree($id, $ante) {
	global $link, $txt;
	$sql = 'SELECT *  FROM `semlinks`,synsets WHERE `synset2id` = '.$id.' and linkid=1 and synset1id=synsets.synsetid';


	$results = get_results($sql);

	foreach ($results as $key => $value) {
		# code...
		$sql2 = 'SELECT *  FROM `senses`,words WHERE `synsetid` = '.$value["synset1id"].' and senses.wordid=words.wordid';
		$res2 =get_results($sql2);
		$list = "";
		foreach ($res2 as $key2 => $value2) {
			# code...
			$list = $list.$value2["lemma"].", ";
		}
		$txt  = $txt.$ante." ".$list."\ndef: ".$value["definition"]."\ncode: ".$value["synset1id"]."\n\n";
		echo $value["synset1id"]."<br>";
		file_put_contents("/Applications/XAMPP/xamppfiles/htdocs/SubjectRaw/data.txt", $txt);
		
		get_tree($value["synset1id"], $ante."#");
	}
}

function path($id, $path) {
	global $link;
	$sql0 = 'SELECT *  FROM `senses`,words,synsets WHERE senses.`synsetid` = '.$id.' and senses.wordid=words.wordid and senses.synsetid = synsets.synsetid';
	$res0 =get_results($sql0);
	$list0 = "";
	foreach ($res0 as $key0 => $value0) {
		# code...
		$list0 = $list0."<a href=\"".$link.$id."\">".$value0["lemma"]."</a>, ";
		$def = $value0["definition"];
	}

	$sql4 = 'SELECT *  FROM `semlinks`,synsets WHERE `synset1id` = '.$id.' and linkid=1 and synset2id=synsets.synsetid';

	$res4 =get_results($sql4);
	$list0 =$list0.$def."<br>";
	foreach ($res4 as $key4 => $value4) {
		# code...
		$list0 = path($value4["synsetid"],$list0).$list0;
	}

	return $list0."<br>";
}

echo path($id, "");

$sql = 'SELECT *  FROM `semlinks`,synsets WHERE `synset2id` = '.$id.' and linkid=1 and synset1id=synsets.synsetid';


$results = get_results($sql);

foreach ($results as $key => $value) {
	# code...
	$sql2 = 'SELECT *  FROM `senses`,words WHERE `synsetid` = '.$value["synset1id"].' and senses.wordid=words.wordid';
	$res2 =get_results($sql2);
	$list = "";
	foreach ($res2 as $key2 => $value2) {
		# code...
		$list = $list."<a href=\"".$link.$value["synset1id"]."\">".$value2["lemma"]."</a>, ";
	}
	echo $list.$value["definition"]."<br>";
}


?>