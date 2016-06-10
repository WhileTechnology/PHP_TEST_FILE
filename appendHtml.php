<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".add").click(function(index){
		var htmlto = $(".copyMe").html();
		var abc = "";
		$(".copyMe").clone().appendTo(".main-div");
		if(htmlto){
			$(".main-div").append(htmlto);
			$(".copyMe").removeClass('copyMe');
			$(".main-div .row").addClass('copyMeAfter');
			abc = htmlto;
		}else{
			alert(abc);
			$(".copyMeAfter").append(abc)
		}
		
		//$(".copyMe").remove();
        //$(".main-div").append($(".copyMe").html());
    });

    $("p").click(function(){
        $(this).animate({fontSize: "+=1px"});
    });
	
	
	
	});
	
	function Person(){
		this.name = "Peter";
		Person.counter++;
		alert(Person.counter);
	}

	Person.counter = 0;

	var p1 = new Person();
	var p2 = new Person();
	
	
	
</script>
</head>
<body>

<p>Click this paragraph to increase text size.</p>
<div class="row copyMe">
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
</div>
<button name="" class="add" id="add"> addd </button>
<div class="row main-div">
</div> 
<p>This is another paragraph.</p>


</body>
</html>