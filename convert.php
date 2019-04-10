<?php
header( "Content-Type: application/vnd.ms-excel" );
header( "Content-disposition: attachment; filename=veradansohresume.xls" );
$personal = 'xml/personal.xml';
$education = 'xml/education.xml';
$experience = 'xml/experience.xml';
$project = 'xml/projects.xml';
$skill = 'xml/skill.xml';

if (file_exists($personal)) {
	$xmlper = simplexml_load_file($personal);

	echo 'Name'."\t" . 'Phone'."\t" . 'Description'."\t" . 'Linkedin'."\t " . 'Github'."\t\n";
	foreach($xmlper->contact as $personals)
	{
		echo $personals->name."\t" . $personals->phone."\t" . $personals->description."\t" . $personals->linkedin."\t" . $personals->github." \n";
	}
}

if (file_exists($education)) {
	$xmledu = simplexml_load_file($education);

	echo 'Name'."\t" . 'Major'."\t" . 'Minor'."\t" . 'Duration'."\t\n";
	foreach($xmledu->school as $schools)
	{
		echo $schools->name."\t" . $schools->major."\t" . $schools->minor."\t" . $schools->duration."\n";
	}
}

if (file_exists($experience)) {
	$xmlexp = simplexml_load_file($experience);

	echo 'Name'."\t" . 'Duration'."\t" . 'Location'."\t" . 'Task One'."\t" . 'Task Two'."\t" .  'Task Three'."\t\n";
	foreach($xmlexp->company as $experiences)
	{
		echo $experiences->name."\t" . $experiences->duration."\t" . $experiences->location."\t". $experiences->taskone."\t" . $experiences->tasktwo."\t" . $experiences->taskthree."\n";
	}
}

if (file_exists($project)) {
	$xmlpro = simplexml_load_file($project);

	echo 'Name'."\t" . 'Summary'."\t" . 'Skills-Used'."\t\n";
	foreach($xmlpro->project as $projects)
	{
		echo $projects->name."\t"  . $projects->summary."\t" . $projects->skillsused."\n";
	}
}
if (file_exists($skill)) {
	$xmlski = simplexml_load_file($skill);

	echo 'Skills'."\t\n";
	foreach($xmlski->skill as $skills)
	{
		echo $skills->title."\n";
	}
}

?>
