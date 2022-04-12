jQuery.validator.addMethod("letras", function(value, element) {
		  //return this.optional(element) || /^[a-z]+$/i.test(value);
		  return this.optional(element) || /^[A-Za-zÁÉÍÑÓÚáé íñó]*$/.test(value);
		 
		}, "Este campo solo acepta letras"); 


jQuery.validator.addMethod("ultimoJueves", function(value, element) {
		var partes=value.split(" ")
        var fecha=new Date(partes[0]);
        
        var dia=fecha.getDate();
        var mes=fecha.getMonth()+1;
        var anio=fecha.getFullYear();
        var partesHora=partes[1].split(":");
        var hora=partesHora[0];
        var minutos=partesHora[1];
     
        var diasSemana = new Array(7);
        diasSemana[0] = "Domingo";
        diasSemana[1] = "Lunes";
        diasSemana[2] = "Martes";
        diasSemana[3] = "Miercoles";
        diasSemana[4] = "Jueves";
        diasSemana[5] = "Viernes";
        diasSemana[6] = "Sabado";        
        var nombreDia=diasSemana[fecha.getDay()];
        
        

        if(nombreDia=="Jueves"){                        
            var d = new Date();
            if (anio) { d.setFullYear(anio); }
            d.setDate(1); // Roll to the first day of ...
            d.setMonth(mes || d.getMonth() + 1); // ... the next month.
            do { // Roll the days backwards until Monday.
              d.setDate(d.getDate() - 1);
            } while (d.getDay() !== 4);
            var diaAux=d.getDate();
            var mesAux=d.getMonth()+1;
            var anioAux=d.getFullYear();
            if(dia==diaAux && mes==mesAux && anio==anioAux){
                
                // horas * 60 + minutos
                const start = 8 * 60 + 0; 
                const end =  12 * 60 + 0;                 
                const time = parseInt(hora) * 60 + parseInt(minutos);

                if( time >= start && time < end){
                    return false;        
                }else{
                    return true;    
                }                
            }else{
                return true;
            }                                  
        }else{
            return true;
        }      
        
        
		}, "La fecha y hora seleccionadas coinciden con la Sesión del Concejo"); 

jQuery.validator.addMethod("numbersonly", function(value, element) {
	  //return this.optional(element) || /^[a-z]+$/i.test(value);
	  return this.optional(element) || /[0-9]/.test(value);	 
	}, "Este campo solo acepta números"); 


jQuery.validator.addMethod('filesize', function(value, element, param) {
    // param = size (en bytes) 
    // element = element to validate (<input>)
    // value = value of the element (file name)
    return this.optional(element) || (element.files[0].size <= param) 
});



jQuery.validator.addMethod('positivo', function(value, element, param) {
    return value>=0;
},"El valor ingresado no puede ser negativo");



jQuery.validator.addMethod("ruc",function(value,element){
		//1721895181001
	  var digitosFinales=value.substring(10, 13);
	  
	  if(digitosFinales=="001"){
		  
		  var cedula =value.substring(0, 10);
		  //alert(cedula);
		  array = cedula.split( "" );
		  num = array.length;
		  if ( num == 10 )
		  {
		    total = 0;
		    digito = (array[9]*1);
		    for( i=0; i < (num-1); i++ )
		    {
		      mult = 0;
		      if ( ( i%2 ) != 0 ) {
		        total = total + ( array[i] * 1 );
		      }
		      else
		      {
		        mult = array[i] * 2;
		        if ( mult > 9 )
		          total = total + ( mult - 9 );
		        else
		          total = total + mult;
		      }
		    }
		    decena = total / 10;
		    decena = Math.floor( decena );
		    decena = ( decena + 1 ) * 10;
		    final = ( decena - total );
		    if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) {
		     // alert( "La c\xe9dula ES v\xe1lida!!!" );
		      return true;
		    }
		    else{
		    	return false;
		    }
	    }
	    else
	    {
	      //alert( "La c\xe9dula NO es v\xe1lida!!!" );
	      return false;
	    }
	  }
	  else
	  {
	    //alert("La c\xe9dula no puede tener menos de 10 d\xedgitos");
	    return false;
	  }
	
}, "Cedula Incorrecta");


jQuery.validator.addMethod("rucfinal",function(value,element){
        var numero = value;
        var suma = 0;      
        var residuo = 0;      
        var pri = false;      
        var pub = false;            
        var nat = false;      
        var numeroProvincias = 22;                  
        var modulo = 11;
        var ok=1;
        for (i=0; i<numero.length && ok==1 ; i++){
             var n = parseInt(numero.charAt(i));
        	if (isNaN(n)) ok=0;
        }
        if (ok==0){
        return false;
        }
        if (numero.length < 10 ){              
        return false;
        }
        provincia = numero.substr(0,2);      
        if (provincia < 1 || provincia > numeroProvincias){           
        return false;       
        }
            d1  = numero.substr(0,1);         
            d2  = numero.substr(1,1);         
            d3  = numero.substr(2,1);         
            d4  = numero.substr(3,1);         
            d5  = numero.substr(4,1);         
            d6  = numero.substr(5,1);         
            d7  = numero.substr(6,1);         
            d8  = numero.substr(7,1);         
            d9  = numero.substr(8,1);         
            d10 = numero.substr(9,1);          
			if (d3==7 || d3==8){           
            return false;
            }
            if (d3 < 6){           
            nat = true;            
            p1 = d1 * 2;  if (p1 >= 10) p1 -= 9;
            p2 = d2 * 1;  if (p2 >= 10) p2 -= 9;
            p3 = d3 * 2;  if (p3 >= 10) p3 -= 9;
            p4 = d4 * 1;  if (p4 >= 10) p4 -= 9;
            p5 = d5 * 2;  if (p5 >= 10) p5 -= 9;
            p6 = d6 * 1;  if (p6 >= 10) p6 -= 9; 
            p7 = d7 * 2;  if (p7 >= 10) p7 -= 9;
            p8 = d8 * 1;  if (p8 >= 10) p8 -= 9;
            p9 = d9 * 2;  if (p9 >= 10) p9 -= 9;             
            modulo = 10;
            }else if(d3 == 6){           
            pub = true;             
            p1 = d1 * 3;
            p2 = d2 * 2;
            p3 = d3 * 7;
            p4 = d4 * 6;
            p5 = d5 * 5;
            p6 = d6 * 4;
            p7 = d7 * 3;
            p8 = d8 * 2;            
            p9 = 0;            
            }else if(d3 == 9) {           
			pri = true;                                   
			p1 = d1 * 4;
			p2 = d2 * 3;
			p3 = d3 * 2;
			p4 = d4 * 7;
			p5 = d5 * 6;
			p6 = d6 * 5;
			p7 = d7 * 4;
			p8 = d8 * 3;
			p9 = d9 * 2;            
            }
			suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;                
			residuo = suma % modulo;                         
			digitoVerificador = residuo==0 ? 0: modulo - residuo;                
            if (pub==true){           
            if (digitoVerificador != d9){                          
                return false;
            }                  
            if ( numero.substr(9,4) != '0001' ){                    
            return false;
            }
            }         
            else if(pri == true){         
            if (digitoVerificador != d10){                          
            return false;
            }         
            if ( numero.substr(10,3) != '001' ){                    
            return false;
            }
            }      
            else if(nat == true){         
            if (digitoVerificador != d10){                          
            return false;
            }         
            if (numero.length >10 && numero.substr(10,3) != '001' ){                    
            return false;
            }
            }      
            return true; 			
},"Número de identificación incorrecto");
jQuery.validator.addMethod("cedula1",function(value,element){

	  
	  if(true){
		  
		  var cedula =value;                       
		  //alert(cedula);
		  array = cedula.split( "" );
		  num = array.length;
		  if ( num == 10 )
		  {
		    total = 0;
		    digito = (array[9]*1);
		    for( i=0; i < (num-1); i++ )
		    {
		      mult = 0;
		      if ( ( i%2 ) != 0 ) {
		        total = total + ( array[i] * 1 );
		      }
		      else
		      {
		        mult = array[i] * 2;
		        if ( mult > 9 )
		          total = total + ( mult - 9 );
		        else
		          total = total + mult;
		      }
		    }
		    decena = total / 10;
		    decena = Math.floor( decena );
		    decena = ( decena + 1 ) * 10;
		    final = ( decena - total );
		    if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) {
		     // alert( "La c\xe9dula ES v\xe1lida!!!" );
		      return true;
		    }
		    else{
		    	return false;
		    }
	    }
	    else
	    {
	      //alert( "La c\xe9dula NO es v\xe1lida!!!" );
	      return false;
	    }
	  }
	  else
	  {
	    //alert("La c\xe9dula no puede tener menos de 10 d\xedgitos");
	    return false;
	  }
	
}, "Cédula incorrecta");


(function ($) {
    "use strict";

    // This set of validators requires the File API, so if we'ere in a browser
    // that isn't sufficiently "HTML5"-y, don't even bother creating them.  It'll
    // do no good, so we just automatically pass those tests.
    var is_supported_browser = !!window.File,
        fileSizeToBytes,
        formatter = $.validator.format;

    /**
     * Converts a measure of data size from a given unit to bytes.
     *
     * @param number size
     *   A measure of data size, in the give unit
     * @param string unit
     *   A unit of data.  Valid inputs are "B", "KB", "MB", "GB", "TB"
     *
     * @return number|bool
     *   The number of bytes in the above size/unit combo.  If an
     *   invalid unit is specified, false is returned
     */
    fileSizeToBytes = (function () {

        var units = ["B", "KB", "MB", "GB", "TB"];

        return function (size, unit) {

            var index_of_unit = units.indexOf(unit),
                coverted_size;

            if (index_of_unit === -1) {

                coverted_size = false;

            } else {

                while (index_of_unit > 0) {
                    size *= 1024;
                    index_of_unit -= 1;
                }

                coverted_size = size;
            }

            return coverted_size;
        };
    }());

    /**
     * Validates that an uploaded file is of a given file type, tested
     * by it's reported mime string.
     *
     * @param obj params
     *   An optional set of configuration parmeters.  Supported options are:
     *    "types" : array (default ["text"])
     *      An array of file types.  This types are loosely checked, so including
     *      "text" in this array of types will cause "text/plain" and "text/css"
     *      to both be excepted.  If the selected file matches any of the strings
     *      in this array, validation passes.
     */
    $.validator.addMethod(
        "fileType",
        function (value, element, params) {

            var files,
                types = params.types || ["text"],
                is_valid = false;

            if (!is_supported_browser || this.optional(element)) {

                is_valid = true;

            } else {

                files = element.files;

                if (files.length < 1) {

                    is_valid = false;

                } else {

                    $.each(types, function (key, value) {
                        is_valid = is_valid || files[0].type.indexOf(value) !== -1;
                    });

                }
            }

            return is_valid;
        },
        function (params, element) {
            return formatter(
                "Formato de archivo incorrecto: {0}.",
                params.types.join(",")
            );
        }
    );

    /**
     * Validates that a file selected for upload is at least a given
     * file size.
     *
     * @param obj params
     *   An optional set of configuration parameters.  Supported options are:
     *     "unit" : string (default "KB")
     *       The unit of measure of the file size limit is in.  Valid inputs
     *       are "B", "KB", "MB" and "GB"
     *     "size" : number (default 100)
     *        The minimum size of the file, in the above units, that the file
     *        must be, to be accepted as "valid"
     */
    $.validator.addMethod(
        "minFileSize",
        function (value, element, params) {

            var files,
                unit = params.unit || "KB",
                size = params.size || 100,
                min_file_size = fileSizeToBytes(size, unit),
                is_valid = false;

            if (!is_supported_browser || this.optional(element)) {

                is_valid = true;

            } else {

                files = element.files;

                if (files.length < 1) {

                    is_valid = false;

                } else {

                    is_valid = files[0].size >= min_file_size;

                }
            }

            return is_valid;
        },
        function (params, element) {
            return formatter(
                "File must be at least {0}{1} large.",
                [params.size || 100, params.unit || "KB"]
            );
        }
    );

    /**
     * Validates that a file selected for upload is no loarger than a given
     * file size.
     *
     * @param obj params
     *   An optional set of configuration parameters.  Supported options are:
     *     "unit" : string (default "KB")
     *       The unit of measure of the file size limit is in.  Valid inputs
     *       are "B", "KB", "MB" and "GB"
     *     "size" : number (default 100)
     *        The maximum size of the file, in the above units, that the file
     *        can be to be accepted as "valid"
     */
    $.validator.addMethod(
        "maxFileSize",
        function (value, element, params) {

            var files,
                unit = params.unit || "KB",
                size = params.size || 100,
                max_file_size = fileSizeToBytes(size, unit),
                is_valid = false;

            if (!is_supported_browser || this.optional(element)) {

                is_valid = true;

            } else {

                files = element.files;

                if (files.length < 1) {

                    is_valid = false;

                } else {

                    is_valid = files[0].size <= max_file_size;

                }
            }

            return is_valid;
        },
        function (params, element) {
            return formatter(
                "El archivo no debe pesar más de {0}{1}.",
                [params.size || 100, params.unit || "KB"]
            );
        }
    );


    //Validacion de fecha David Banda
    $.validator.addMethod('fechaAntes', function (value, element, params) {
        // si la fecha de finalización es válida, validarla también
        var end = $(params);
        if (!end.data('validation.running')) {
            $(element).data('validation.running', true);
            setTimeout($.proxy(

            function () {
                this.element(end);
            }, this), 0);

            setTimeout(function () {
                $(element).data('validation.running', false);
            }, 0);
        }
        //console.log($(params).val());
        return this.optional(element) || this.optional(end[0]) || new Date(value) < new Date(end.val());

    }, 'La fecha debe ser anterior a la fecha de finalización correspondiente');



    $.validator.addMethod('fechaDespues', function (value, element, params) {
        // si la fecha de inicio es válida, validarla también
        var start = $(params);
        if (!start.data('validation.running')) {
            $(element).data('validation.running', true);
            setTimeout($.proxy(

            function () {
                this.element(start);
            }, this), 0);
            setTimeout(function () {
                $(element).data('validation.running', false);
            }, 0);
        }
        //console.log($(params).val());
        return this.optional(element) || this.optional(start[0]) || new Date(value) > new Date($(params).val());
        
    }, 'La fecha debe ser posterior a la fecha de inicio correspondiente');

}(jQuery));

