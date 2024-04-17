
<?php

session_start();
if($_SESSION['username_sess']){}
else{
	header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php');
}


$fileid = $_GET['file_id'];
$filepath = 'FileUpload/uploads/'.basename($_GET['file_id']);
$extension = $_GET['extension'];

?>

<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>CKEditor</title>
                <script src="ck/ckeditor.js"></script>
                <style>
                    body {
  width: 100vw;
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #0a0914;;
}

.form-card {
  width: 25rem;
  gap: 1rem;
  background-color: #ffffff;
  border-radius: 0.3rem;
  padding: 1.5rem;
}

h3 {
  font-size: 1.1rem;
  font-weight: 700;
  color: #404656;
  margin-bottom: 1rem;
}

input[type='text'], textarea {
  width: 23rem;
  border: none;
  border-radius: 0.2rem;
  background-color: #e6ebf0;
  padding: 0.8rem 1rem;
  margin-bottom: 1rem;
}

input[type='submit'] {
  width: 100%;
  font-size: 0.9rem;
  font-weight: 600;
  border: none;
  border-radius: 0.2rem;
  color: #ffffff;
  background-color: #062647;
  padding: 0.8rem 1rem;
  cursor: pointer;
}

input[type='submit']:hover{
  color: #ffffff;
  background-color: grey;
}
                </style>
        </head>
        <body>
            <?php
            
            if($extension == 'txt'){
            echo "
                <form method='post' >
                <textarea id='text' placeholder='Enter Text' name='editor1'></textarea>
                <input type='text' id='fileName' value='$fileid' />

                <script>
                       
                        CKEDITOR.replace( 'editor1' );
                        
                </script>

                <script>
                let fileid = urlParams.get('file_id');
                let extension = urlParams.get('extension');
                let filepath = 'FolderUpload/' + fileid;

                function fileChosen(input,output){
                    if(input.files && input.files[0] ){
                        readTextFile( 
                            input.files[0],
                            function(str) {
                                output.setData(str);
                                output.updateElement();
                            }
                        );
                    }
                }

                $('').on('change', function () {
                    var result = $('#files').text();
                    fileChosen(this, CKEDITOR.instance.editor1);

                </script>

                
                <br>
                <br>
                <input type='submit' value='submit' id='saveBtn' /> 
            </form> 
            ";

            }
            else{
            echo "
            <p>user has viewing rights only </p>
            <div id='list'><p><iframe src= $filepath  width=1000 height=400 frameborder=0 ></iframe></p></div>
             ";
            }
        ?>

        </body>

</html>



<!-- 

<html>
<head>
                <meta charset="utf-8">
                <title>CKEditor</title>
                <script src="ck/ckeditor.js"></script>
</head>

<body>
 
<table>
    <tr><td>Text to Save:</td></tr>
    <tr>
        <td colspan="3">
            
            <textarea name="inputTextToSave"></textarea>
                <script>
                        CKEDITOR.replace( 'inputTextToSave' );
                </script>
        </td>
    </tr>
    <tr>
        <td>Filename to Save As:</td>
        <td><input id="inputFileNameToSaveAs"></input></td>
        <td><button onclick="saveTextAsFile()">Save Text to File</button></td>
    </tr>
    <tr>
        <td>Select a File to Load:</td>
        <td><input type="file" id="fileToLoad"></td>
        <td><button onclick="loadFileAsText()">Load Selected File</button><td>
    </tr>
</table>
 
<script type="text/javascript">
 
function saveTextAsFile()
{
    var textToSave = document.getElementById("inputTextToSave").value;
    var textToSaveAsBlob = new Blob([textToSave], {type:"text/plain"});
    var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
    var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
 
    var downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.innerHTML = "Download File";
    downloadLink.href = textToSaveAsURL;
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
 
    downloadLink.click();
}
 
function destroyClickedElement(event)
{
    document.body.removeChild(event.target);
}
 
function loadFileAsText()
{
    var fileToLoad = document.getElementById("fileToLoad").files[0];
 
    var fileReader = new FileReader();
    fileReader.onload = function(fileLoadedEvent) 
    {
        var textFromFileLoaded = fileLoadedEvent.target.result;
        document.getElementById("inputTextToSave").value = textFromFileLoaded;
    };
    fileReader.readAsText(fileToLoad, "UTF-8");
}
 
</script>
 
</body>
</html> -->

<?php

$fileid = $_GET['file_id'];
$filepath = 'FileUpload/uploads/'.basename($_GET['file_id']);
$extension = $_GET['extension'];

?>

