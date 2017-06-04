var anagramming = false;
var email_submitted = false;

function anagramThis(query,e){
	if(query.length<1){
		return false;
	}
  	if(anagramming === false){
  		mixpanel.track("Start Anagramming");
  		if(e){
	    e.preventDefault();
		}
	    anagramming = true;
	    $("#anagram-button").attr("disabled",true).html("Anagramming...");
	    $("#old").val($("#q").val());

	    if(!email_submitted){
	    	mixpanel.track("Modal Launched");
	    	$(".modal,.overlay").show(function(){
	    		$("#email").focus();
	    	});
	    	anagramming = false;
	    	return false;
	    }

	    $.ajax({
	    	url: "engine.php",
	    	type: "POST",
	    	dataType: "json",
	    	data: {
	    		q: query
	    	}
	    }).done(function(data){
	    	$(".anagram-table tr").remove();
	    	$(".anagram-table").show();
	    	if(data.error){
	    		$(".anagram-table tbody").prepend("<tr class='error'><td>"+data.error+"</td></tr>");
	    		mixpanel.track("AJAX Error");
	    	} else if(data.results.length>0){
	    		mixpanel.track("AJAX Success");
	    		var i;
	    		for(i = 0; i<data.results.length; ++i){
	    			var str = data.results[i];
	    			$(".anagram-table tbody").append("<tr><td>"+str+"</td></tr>");
	    		}
	    		$(".old-searches").prepend("<li><a class='clickToQ' href='javascript:anagramThis(\""+data.old+"\");'>"+data.old+"</a></li>");
	    	}
	    	$(".old-searches a").on("click",function(){
	    		mixpanel.track("Click Old Search");
	    		$("#q").val($(this).html());
	    		$(this).remove();
	    	});
	    	$("#anagram-button").attr("disabled",false).html("Anagram!");
	    	$("#q").val("").focus();
	    	anagramming = false;
	    });
	}
}

$(window).load(function(){
	mixpanel.track("Load Page");
	$("#q").focus();
});

$(window).scroll(function(){
	if($(this).scrollTop()>193){
		$(".anagram-oldsearch-row,.anagram-form-row").addClass("fixed-input");
		$(".block-white").show();
		$(".results-table").addClass("active");
	} else {
		$(".anagram-oldsearch-row,.anagram-form-row").removeClass("fixed-input");
		$(".block-white").hide();
		$(".results-table").removeClass("active");
	}
});

$(document).ready(function(){

  $("#anagram-form").on("submit",function(e){

	if($("#q").val()){
	  	mixpanel.track("Submit Search Query");
	  	anagramThis($("#q").val(),e);
	} else {
		e.preventDefault();
	}

  });

  $(".terms-link,.terms").click(function(e){
  	$(".terms").toggle();
  });

  $(".modal button.close").on("click",function(e){
  	mixpanel.track("Close Modal");
  	$(".modal,.overlay").hide();
  	email_submitted = true;
  	anagramThis($("#q").val(),e);
  });

  $("#email-form").on("submit",function(e){
  	mixpanel.track("Submit Form");
  	e.preventDefault();
  	Drillbit.submitLead("email-form");
  	email_submitted = true;
  	$(".modal,.overlay").hide();
  	anagramThis($("#q").val(),e);
  });

});