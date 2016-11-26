if( $('#commentForm').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

	});

	$(document).on('submit', '#commentForm', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit.php',
		data : data,
		success :  function(data)
		   {						
				$("#commentForm").fadeOut(500).hide(function()
				{
					$(".result").fadeIn(500).show(function()
					{
						$(".result").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}


// INDEX04
if( $('#commentForm3').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm3").validate();
	});
	$(document).on('submit', '#commentForm3', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit3.php',
		data : data,
		success :  function(data)
		   {						
				$("#commentForm3").fadeOut(500).hide(function()
				{
					$(".result2").fadeIn(500).show(function()
					{
						$(".result2").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}
if( $('#commentForm2').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		// $("#commentForm2").validate();
	});
	$(document).on('submit', '#commentForm2', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit2.php',
		data : data,
		success :  function(data)
		   {						
				$("#commentForm2").fadeOut(500).hide(function()
				{
					$(".result").fadeIn(500).show(function()
					{
						$(".result").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}
//END INDEX4


//INDEX07
if( $('#commentForm4').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm4").validate();
	});
	$(document).on('submit', '#commentForm4', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit4.php',
		data : data,
		success :  function(data)
		   {						
				$("#commentForm4").fadeOut(500).hide(function()
				{
					$(".result").fadeIn(500).show(function()
					{
						$(".result").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}

//INDEX12
if( $('#commentForm5').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm5").validate();
	});
	$(document).on('submit', '#commentForm5', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit5.php',
		data : data,
		success :  function(data)
		   {						
				$("#commentForm5").fadeOut(500).hide(function()
				{
					$(".result").fadeIn(500).show(function()
					{
						$(".result").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}

//INDEX13
if( $('#commentForm6').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm6").validate();
	});
	$(document).on('submit', '#commentForm6', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit6.php',
		data : data,
		success :  function(data)
		   {						
				$("#commentForm6").fadeOut(500).hide(function()
				{
					$(".result").fadeIn(500).show(function()
					{
						$(".result").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}

//INDEX14
if( $('#commentForm7').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm7").validate();
	});
	$(document).on('submit', '#commentForm7', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit7.php',
		data : data,
		success :  function(data)
		   {						
				$("#commentForm7").fadeOut(500).hide(function()
				{
					$(".result").fadeIn(500).show(function()
					{
						$(".result").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}


//INDEX14
if( $('.commentForm8').length ){
	$().ready(function() {
		// validate the comment form when it is submitted
		// $(".commentForm8").validate();
	});
	$(document).on('submit', '.commentForm8', function()
	{
	
		var data = $(this).serialize();
		$.ajax({
		
		type : 'POST',
		url  : 'submit8.php',
		data : data,
		success :  function(data)
		   {						
				$(".commentForm8").fadeOut(500).hide(function()
				{
					$(".result").fadeIn(500).show(function()
					{
						$(".result").html(data);
					});
				});
				
		   }
		});
		return false;
	});
}