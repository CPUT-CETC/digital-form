<?php

class FileUploader
{
    /**
     * @param string $file_input_name The value of the name attribute for your file upload input from your html form
     * @param string $upload_directory The directory where file wil go
     * @return array 
     */
    public static function upload_file($file_input_name, $upload_directory)
    {
        $allowed_file_types = array('application/pdf'); # set your file type here
        $ErrorMsg = null;
        $new_file_name = null;

        if ($_FILES[$file_input_name]['error'] !== UPLOAD_ERR_OK) {
            $ErrorMsg = "File upload error: " . $_FILES[$file_input_name]['error'];
        }

        $file_type = mime_content_type($_FILES[$file_input_name]['tmp_name']);
        if (!in_array($file_type, $allowed_file_types)) {
            $ErrorMsg = "Invalid file type. Only PDF files are allowed.";
        }

        $new_file_name = uniqid() . ".pdf"; # filename filetype not dynamic
        $upload_path = $upload_directory . "/" . $new_file_name;

        if (!move_uploaded_file($_FILES[$file_input_name]['tmp_name'], $upload_path)) {
            $ErrorMsg = "Error uploading file.";
        }

        return [
            'error_msg' => $ErrorMsg,
            'filename' => $new_file_name,
            'filename_with_path' => $upload_path
        ];
    }
}
