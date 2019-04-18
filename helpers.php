<?php

if(!function_exists('get_file_mime_type')) {
    function getFileMimeType($file_path) {
        $finfo = new Finfo(FILEINFO_MIME_TYPE);
        $mimetype = $finfo->file($file_path);
        return $mimetype;
    }
}