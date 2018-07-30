<html>
<head>
    <title>Inquiry Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Inquiry</h2>
</div>
<form action="FileUpload.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
   <div  class="input-group">
    <label for="UploadFileField">Upload CV</label>
    <input type="file"  name="UploadFileField" id="UploadFileField" />
    <input type="submit" class="btn left-mar" name="UploadButton" id="UploadButton" value="Upload" />
   </div>
</form>
</body>
</html>