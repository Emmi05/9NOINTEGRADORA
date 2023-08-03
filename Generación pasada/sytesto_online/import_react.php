<?php

include('conexion.php');
$fileContacts = $_FILES['fileContacts'];
$fileContacts = file_get_contents($fileContacts['tmp_name'],'UTF-8'); 

$fileContacts = explode("\n", $fileContacts);
$fileContacts = array_filter($fileContacts); 
// preparar contactos (convertirlos en array)
foreach ($fileContacts as $contact) 
{
	$contactList[] = explode(",", $contact);
}
// insertar contactos
foreach ($contactList as $contactData) 
{
	$conexion->query("INSERT INTO reagents_exam
						(id_exam,
						 question,
						 type_question,
						 option_correct,
						 option_incorrect1,
			             option_incorrect2,
						 option_incorrect3,
						 img_exercise,
						 ruta_exercise)
						 VALUES

						 ('{$_POST['id_exam']}',
						  '{$contactData[0]}', 
						  '{$contactData[1]}',
						  '{$contactData[2]}',
						  '{$contactData[3]}',
						  '{$contactData[4]}',
						  '{$contactData[5]}',
						  '{$contactData[6]}',
						   null)
						 "); 
}


?>