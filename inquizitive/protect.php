<?php
$pagecode=   "window.oncontextmenu = function () {
  return false;
}
$(document).keydown(function (event) {
if (event.keyCode == 123) {
  return false;
}
else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
  return false;
}
}); 
\n";

echo "$pagecode";
?>