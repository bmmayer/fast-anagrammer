var anagramming = false;

function anagramThis(query,e){
	if(query.length<1){
		return false;
	}
  	if(anagramming === false){
  		if(e){
	    e.preventDefault();
		}
	    anagramming = true;
	    $("#anagram-button").attr("disabled",true).html("Anagramming...");
	    $(".anagram-table tr").remove();
	    $("#old").val($("#q").val());

	    $.ajax({
	    	url: "engine.php",
	    	type: "POST",
	    	dataType: "json",
	    	data: {
	    		q: query
	    	}
	    }).done(function(data){
	    	$(".anagram-table").show();
	    	if(data.error){
	    		$(".anagram-table tbody").prepend("<tr class='error'><td>"+data.error+"</td></tr>");
	    	} else if(data.results.length>0){
	    		var i;
	    		for(i = 0; i<data.results.length; ++i){
	    			var str = data.results[i];
	    			$(".anagram-table tbody").append("<tr><td>"+str+"</td></tr>");
	    		}
	    	}
	    	$(".old-searches").prepend("<li><a class='clickToQ' href='javascript:anagramThis(\""+data.old+"\");'>"+data.old+"</a></li>");
	    	$(".old-searches a").on("click",function(){
	    		$("#q").val($(this).html());
	    		$(this).remove();
	    	});
	    	$("#anagram-button").attr("disabled",false).html("Anagram!");
	    	$("#q").val("").focus();
	    	anagramming = false;
	    });
	}
}

$(document).ready(function(){

  $("#anagram-form").on("submit",function(e){

  	anagramThis($("#q").val(),e);

  });

});