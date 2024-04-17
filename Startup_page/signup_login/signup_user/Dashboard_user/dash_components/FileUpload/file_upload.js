$(document).ready(function(){
  $('form input').change(function () {
    $('form p').text(this.files.length + " file(s) selected");
  });
});

function showname () {
  var name = document.getElementById('fileInput'); 
  var para = document.getElementById("para1");
  para.innerHTML = 'Selected file : ' + name.files.item(0).name +
  '  /  ' + 'File type : ' + name.files.item(0).type ;
};