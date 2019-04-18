<?php

if(!function_exists('get_file_mime_type')) {
    /**
     * 获取文件的MIMETYPE 信息
     *
     * @param string $file_path 文件路径
     * @return string
     */
    function getFileMimeType($file_path) {
        $finfo = new Finfo(FILEINFO_MIME_TYPE);
        $mimetype = $finfo->file($file_path);
        return $mimetype;
    }
}

if(!function_exists('array_only')) {
    /**
     * 获取数组特定几个的键值
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    function array_only($array, $keys)
    {
        return array_intersect_key($array, array_flip((array) $keys));
    }
}