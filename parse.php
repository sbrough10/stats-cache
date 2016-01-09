<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	jQuery.ajax({url: "<? echo dirname($_SERVER['REQUEST_URI']) . '/odds/' . $_GET['file']; ?>"})
		.done(function( data ){
			var $ = jQuery;
			stats = $(data).find("span#tmh, span#tmv, span#pv0, span#ph0, span.c-0");
			var row;
			var line1;
			var line2;
			stats.each(function(i,stat){
				stat = $(stat);
				if(stat.attr("id") == "tmh"){
					row = 2;
					if(line1 !== undefined) document.body.innerHTML += line1 + "<br/>";
					line1 = stat.text();
				}
				else if(stat.attr("id") == "tmv"){
					row = 1;
					if(line2 !== undefined) document.body.innerHTML += line2 + "<br/>";
					line2 = stat.text();
				}
				else if(stat.attr("id") == "ph0"){
					line1 += stat.text();
				}
				else if(stat.attr("id") == "pv0"){
					line2 += stat.text();
				}
				else if(row == 1){
					row = 2;
					line1 += "," + stat.text();
				}
				else if(row == 2){
					row = 1;
					line2 += "," + stat.text();
				}
			})
			document.body.innerHTML += line1 + "<br/>" + line2;

		})
</script>
<body>

</body>