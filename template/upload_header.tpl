<!DOCTYPE html>
<html>
  <head>    
    <title>{$title}</title>
    <link rel="stylesheet" type ="text/css" href="template/css/upload.css">    
  </head>
  <body>
    <h1>{$title}</h1>
    <p>�������� ����������� ��� ��������</p>
    <div class="grey_form">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
        <input type="file" name="filename" /><br> 
        <input type="submit" value="���������" name="uploadFileButton" class="submit_button"/><br>
      </form>
    </div> 