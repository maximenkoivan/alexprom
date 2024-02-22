<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';
}


function makeWebp ($src, $rewrite = false) {

    if ($src && function_exists('imagewebp')) {
        $newImgPath = str_ireplace(array('.jpg', '.jpeg', '.gif', '.png'), '.webp', $src);
        if (!file_exists($_SERVER['DOCUMENT_ROOT'].$newImgPath) || $rewrite) {
            $info = getimagesize($_SERVER['DOCUMENT_ROOT'].$src);
            if ($info !== false && ($type = $info[2])) {
                switch ($type) {
                    case IMAGETYPE_JPEG:
                        $newImg = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].$src);
                        break;
                    case IMAGETYPE_GIF:
                        $newImg = imagecreatefromgif($_SERVER['DOCUMENT_ROOT'].$src);
                        break;
                    case IMAGETYPE_PNG:
                        $newImg = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'].$src);
                        imagepalettetotruecolor($newImg);
                        imagealphablending($newImg, true);
                        imagesavealpha($newImg, true);
                        break;
                }
                if ($newImg) {
                    imagewebp($newImg, $_SERVER['DOCUMENT_ROOT'].$newImgPath, 90);
                    imagedestroy($newImg);
                }
            }
        }

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$newImgPath)) { // Файл мог не создаться по каким-либо причинам
            return $newImgPath;
        }
    }

    return false;
}