

<script type="text/javascript">
<!--

	    var ss = 32.99:37.99;
		var ss1 = ss.split(":");
        min = ceil(ss1[0]);
        alert(min);
		max = ceil(ss1[1]);
		alert(max);
		selected = min + to + max; console.log(selected);
        alert(selected);
//-->
</script>

jQuery("#FacetsPrice li a").click(function() {	 
		var ele = jQuery("#FacetsPrice2 li input[data-value='"+jQuery(this).attr('data-value')+"']");
		ele.trigger('click');
		var ss = 32.99:37.99;
		var ss1 = ss.split(":");
             min    = ceil(ss1[0]);
		max = ceil(ss1[1]);  selected = min + to + max; console.log(selected);
        return false;
});







jQuery("#FacetsPrice li a").click(function() {	 
		var ele = jQuery("#FacetsPrice2 li input[data-value='"+jQuery(this).attr('data-value')+"']");
		ele.trigger('click');
		var dataValue = jQuery(this).attr('data-value');
		var dataSplit = dataValue.split(":");          
		var min = dataSplit.slice(0,1);
		var max = dataSplit.slice(1);
		selected = min +" to "+ max;
		console.log(selected);

        return false;
});




jQuery("#FacetsPrice li a").click(function() {	 
		var ele = jQuery("#FacetsPrice2 li input[data-value='"+jQuery(this).attr('data-value')+"']");
		var dataVal = jQuery(this).attr('data-value');
		var dataSplit = dataVal.split(":");          
		var min = parseInt(Math.ceil(parseFloat(dataSplit.slice(0,1))));
		var max = parseInt(Math.ceil(parseFloat(dataSplit.slice(1))));
		var showMinMax = min +" to "+ max;
		console.log(showMinMax);
		document.cookie = "showSelVal="+showMinMax;
		ele.trigger('click');
		
        return false;
});




jQuery("#FacetsPrice li a").click(function() {	 
		var ele = jQuery("#FacetsPrice2 li input[data-value='"+jQuery(this).attr('data-value')+"']");
		var dataValue = jQuery(this).attr('data-value');
		var dataSplit = dataValue.split(":");          
		var min = Math.ceil(dataSplit.slice(0,1));
		var max = Math.ceil(dataSplit.slice(1));
		var showMinMax = min +" to "+ max;
		
		("#facets").append(showMinMax);
		
		//console.log(selected);
		ele.trigger('click');
        return false;
});
