<?php
    require_once('include/common.inc.php');
    
    $vars = array
    (
        'title' => "����� �������� �����������"
    );
    $imagesDir = 'upload';
    
    echo GetView('upload_header.tpl', $vars);
    
    $errorCode = ERR_OK;
    if (isset($_POST['uploadFileButton']))
    {
        $filename = 'filename';
        uploadFile($filename, $imagesDir, $errorCode);
        if ($errorCode === ERR_OK) 
        {
            echo '<p>���� ������� ��������.</p>';
        }
        else
        {
            printUploadError($errorCode);
        }
    }
    
    if (loadImages($imagesDir) != false)
    {
        echo '<h2>������ ����������� �����������</h2>';
        showImages($imagesDir);
    }
    
    echo GetView('upload_footer.tpl', $vars);