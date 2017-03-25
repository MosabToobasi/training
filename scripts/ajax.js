function load_data() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sample").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.php", true);//Async
  xhttp.send();
}

/*
readyState:
0: request not initialized 
1: server connection established
2: request received 
3: processing request 
4: request finished and response is ready


status
200: "OK"
403: "Forbidden"
404: "Not Found"

*/



//Debug using chrome 
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 1) {
                document.getElementById("spinner").style.display = 'block'; 
            }
			
			if (this.readyState == 4 && this.status == 200) {
			   document.getElementById("spinner").style.display = 'n'; 
			   document.getElementById("txtHint").innerHTML 
				= this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}

function delete_product(id){
	/*TODO
	show confirmation msg 
	*/
	var data_to_send = {
		id:id
	}
	
	$.get("post.php?action=delete_product_ajax",
		data_to_send, function(response, status){
			if(status == "success" && response == "1"){
				
				
			 $("#tr_"+id).fadeOut('slow',function(){
				 this.remove();
			 });
				
 				
			}
			 
		});
}


jQuery(document).ready(function($){
	$('#add_product_by_ajax').click(function(){
		var name = $( "input[name='name']" ).val();
		var price = $( "input[name='price']" ).val();
		var color = $( "select[name='color']" ).val();
		var data_to_send = {
			name:name,
			price:price,
			color:color,
		}
		if(name == "" || price=="" || color==""){
			$('#product_error').fadeIn();
			if( name == ""){
				$('#product_name_error').show();
			}else{
				$('#product_name_error').hide();
			}
			if( price == ""){
				$('#product_price_error').show();
			}else{
				$('#product_price_error').hide();
			}
			if( color == ""){
				$('#product_color_error').show();
			}else{
				$('#product_color_error').hide();
			}
			return;
		}else{
			$('#product_error').fadeOut();
		}
		
		$.post("post.php?action=add_product_ajax",
		data_to_send, function(response, status){
			if(status == "success" && response == "1"){
				$( "input[name='name']" ).val('');
				$( "input[name='price']" ).val('');
				$( "select[name='color']" ).val('');
				$('#product_success').fadeIn('slow',function(){
					window.location.href= "all_products.php";
				});
				
 				
			}
			 
		});
	});	
	
	
	$('#edit_product_by_ajax').click(function(){
		
		var name = $( "input[name='name']" ).val();
		var price = $( "input[name='price']" ).val();
		var color = $( "select[name='color']" ).val();
		var id = $( "input[name='id']" ).val();
		
		var data_to_send = {
			name:name,
			price:price,
			color:color,
			id:id,
		}
		
		if(name == "" || price=="" || color==""){
			$('#product_error').fadeIn();
			if( name == ""){
				$('#product_name_error').show();
			}else{
				$('#product_name_error').hide();
			}
			
			if( price == ""){
				$('#product_price_error').show();
			}else{
				$('#product_price_error').hide();
			}
			
			if( color == ""){
				$('#product_color_error').show();
			}else{
				$('#product_color_error').hide();
			}
			
			return;
		}else{
			$('#product_error').fadeOut();
		}
		
		$.post("post.php?action=edit_product_ajax",data_to_send, function(result, status){
			if(status == "success" && result == "1"){
				$('#product_success').fadeIn();
			}
			 
		});
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});




