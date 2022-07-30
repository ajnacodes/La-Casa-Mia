<?php
require_once "db_connect.php";
function file_upload($image) {
    // var_dump_pretty($image_file);
   $result = new stdClass(); //this object will carry the status from file upload
   $result->fileName = 'placeholder.jpeg';
   $result->error = 1;//it could also be a boolean true/false
   //collect data from object $picture
   $fileName = $image["name"];
   $fileType = $image["type"];
   $fileTmpName = $image["tmp_name"];
   $fileError = $image["error"];
   $fileSize = $image["size"];
   $fileExtension = strtolower(pathinfo($fileName,
    PATHINFO_EXTENSION));    
   $filesAllowed = ["png", "jpg", "jpeg"];
   if($fileError == 4){
    $result->ErrorMessage = "No picture was chosen";
    return $result;
   }else{
    if(in_array($fileExtension, $filesAllowed)){
        if($fileError == 0){
            if($fileSize < 500000){
               $fileNewName = uniqid('') . ".".$fileExtension;
               $destination = "../../img/$fileNewName";
               if(move_uploaded_file($fileTmpName, $destination)){
                $result->error = 0;
                $result->fileName = $fileNewName;
                return $result;
               } else{
                $result->ErrorMessage = "There was an error";
                return $result;
               }

            }else{
                $result->ErrorMessage = "Exceeded file size";
                return $result; 
            }
        }else{
            $result->ErrorMessage = "There was a problem uploading the file";
            return $result;
        }
    }else{
        $result->ErrorMessage = "File type not allowed";
        return $result;
    }
   }
}