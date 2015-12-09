jQuery(function($){
	   $("#cpf").mask("999.999.999-99");
	   $("#fone").mask("99999-9999");
	   $("#CNPJ").mask("99.999.999/9999-99");

	   // change input mask for cel/fixed #
	   $(document).ready(function() {
	    $('input[type=radio][name=fone_radio]').change(function() {
	        if (this.value == 'cel') {
	            $("#fone").mask("99999-9999");
	        }
	        else if (this.value == 'fixo') {
	            $("#fone").mask("9999-9999");
	        }
	    $('#clinic').on('change', function() {
		  alert( this.value ); // or $(this).val()
		});
    });
});
});