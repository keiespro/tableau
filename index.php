<?php

?>
<script src="tableau-2.js"></script>
<script>
function initViz(keyword) {
    var containerDiv = document.getElementById("vizContainer"),
    url = "https://10ay.online.tableau.com/t/idkltd/views/test1/Dashboard1?:embed=y&Outcode="+keyword;//"https://public.tableau.com/views/test4_30/Dashboard1?:embed=y&:display_count=yes"+keyword;
    containerDiv.
    var viz = new tableau.Viz(containerDiv, url); 
}
//https://10ay.online.tableau.com/t/idkltd/views/test2/Dashboard1?:embed=y&Outcode=BR7
function load_viz()
{
	var keyword = document.getElementById("keyword").value;
	alert(keyword);
	initViz(keyword);
	return false;
}
</script>
<body>
<form method="post" action="">
<input type="text" id="keyword" />
<input type="submit" value="Load Viz" />
</form>
<div id="vizContainer1"></div>
<div id="vizContainer2"></div>

</body>

