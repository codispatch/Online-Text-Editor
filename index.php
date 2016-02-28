<html>
<head>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
  $("#save").click(function() {
  var filename = $("#filename").val();
  var textarea = $("#textarea").val();
  var formdata = 'filename='+ filename + '&textarea=' + textarea;

if(filename=='' || textarea=='')
{
  $('.onfailure').fadeIn("fast").delay(2000).fadeOut("fast");
}
else
{
   $.ajax({
    type: "POST",
    url: "save.php",
    data: formdata,
    success: function(){
    $('.onsuccess').fadeIn("fast").delay(2000).fadeOut("fast");
    }
  });
}
return false;
});
});
function eraseText() {
    document.getElementById("textarea").value = "";
	$('.onclear').fadeIn("fast").delay(2000).fadeOut("fast");
}
    </script>
  </head>
<style>
#outer-wrapper {
  padding:0px 50px;
}
#inner-wrapper {
	padding: 50px 0px 20px 0px;
}
#options {
	padding:20px 0px 20px 0px;
}
#status span{
	padding:20px 0px 20px 50px;
}
</style>
</head>
<body>
<div id="outer-wrapper">
<form id="notepad" >
<div id="inner-wrapper"><input type="text" id="filename" name="filename" placeholder="Enter your Filename ..." value="" >.txt</input></div>
<textarea id="textarea" rows="20" cols="100" name="textarea" placeholder="Type your text here ..." value="" ></textarea>
</form>
<div id="options">
<input type="button" id="save" name="save"  value="Save the file " ></input> | <input type="button" id="clear" onclick="javascript:eraseText();" value="Clear"></input>
</div>
</div>
<div id="status">
<span class="onsuccess" style="display:none"> File has been Saved Successfully. </span>
<span class="onfailure" style="display:none"> Text Area or Filename cannot be left Blank.  </span>
<span class="onclear" style="display:none"> Text Area has been Cleared.  </span>
</div>
</body>
</html>
