<?php
print_r($_FILES); //this will print out the received name, temp name, type, size, etc.
$uploads_dir = 'uploads';
$size = $_FILES['audio_data']['size']; //the size in bytes
$input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = $_FILES['audio_data']['name'].".mp3"; //letting the client control the filename is a rather bad idea
//move the file from temp name to local folder using $output name
move_uploaded_file($input, "$uploads_dir/$output");
?>
