<div id="yourDiv" style="display: none;">
    <!-- ... -->
</div>

$(document).ready(function() {
    $("#yourDiv").appendTo("#targetContainer").show();
});