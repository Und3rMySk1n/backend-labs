<?php
    require_once('include/common.inc.php');
    
    $vars = array
    (
        'title' => "Форма загрузки изображений"
    );
    
    echo GetView('upload_header.tpl', $vars);
    
    $errorCode = ERR_OK;
    if (isset($_POST['uploadFileButton']))
    {
        $filename = 'filename';
        uploadFile($filename, $errorCode);
        if ($errorCode === ERR_OK) 
        {
            echo '<p>Файл успешно загружен.</p>';
        }
        else
        {
            printUploadError($errorCode);
        }
    }
    
    $imagesDir = 'upload';
    if (loadImages($imagesDir) != false)
    {
        echo '<h2>Список загруженных изображений</h2>';
        showImages($imagesDir);
    }
    
    echo GetView('upload_footer.tpl', $vars);