$(document).ready(function(){
        
        $('li em').hide();
    });


function preview(file)  
 {  
	 var prevDiv = document.getElementById('preview');  
	 if (file.files && file.files[0]){  
		 var reader = new FileReader();  
		 reader.onload = function(evt){  
		 	prevDiv.innerHTML = '<img src="' + evt.target.result + '" />';  
			}    
		 reader.readAsDataURL(file.files[0]);  
	} else{  
	 prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';  
	 }  
 }
 function preview1(file)  
 {  
 var prevDiv1 = document.getElementById('preview1');  
 if (file.files && file.files[0])  
 {  
 var reader = new FileReader();  
 reader.onload = function(evt){  
 prevDiv1.innerHTML = '<img src="' + evt.target.result + '" />';  
}    
 reader.readAsDataURL(file.files[0]);  
}  
 else    
 {  
 prevDiv1.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';  
 }  
 }