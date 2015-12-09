jQuery(function($){
	   $("#number").mask("99999-9999");

	   // change input mask for cel/fixed #
	   $(document).ready(function() {
	    $('input[type=radio][name=type]').change(function() {
	        if (this.value == '0') {
	            $("#number").mask("99999-9999");
	        }
	        else if (this.value == '1') {
	            $("#number").mask("9999-9999");
	        }
    });
});
});