<!-- <form method="GET" action="index.php">
	<input type="text" name="intxt">
	<input type="submit" value="click">
</form> -->
<meta charset="utf-8">

<?php
function getHTTPS($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_REFERER, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

$intxt = "EON610";
if($_GET['searchin']!=""){
	$intxt = $_GET['searchin'];
}

$page = "1";
if($_GET['page']!=""){
	$page = $_GET['page'];
}


/*print($intxt);*/

  
/*$url = "https://list.tmall.com/m/search_items.htm?page_size=20&page_no=1&q=EON610&type=p&tmhkh5=&spm=a223j.8443192.a2227oh.d100&from=mallfp..m_1_searchbutton";  */


// $url = "https://list.tmall.com/m/search_items.htm?page_size=80&page_no=".$page."&q=".$intxt;

// $url = "https://s.m.taobao.com/search?event_submit_do_new_search_auction=1&_input_charset=utf-8&topSearch=1&atype=b&searchfrom=1&action=home%3Aredirect_app_action&from=1&q=".$intxt."&sst=1&n=20&buying=buyitnow&m=api4h5&abtest=10&wlsort=10&page=".$page;


$url = "https://s.m.taobao.com/search?event_submit_do_new_search_auction=1&_input_charset=utf-8&topSearch=1&atype=b&searchfrom=1&action=home%3Aredirect_app_action&from=1&q=".$intxt."&sst=1&n=40&buying=buyitnow&m=api4h5&abtest=8&wlsort=8&style=mid&closeModues=nav%2Cselecthot%2Conesearch&sort=bid&page=".$page;


/*if($intxt){
	$url="https://list.tmall.com/search_product.htm?q=+".$intxt."&type=p&vmarket=&spm=875.7931836%2FB.a2227oh.d100&from=mallfp..pc_1_searchbutton";
}*/
echo '<div id="txtvalue" style="display:none">';
echo getHTTPS($url);
echo '</div>';



?>

<link rel="stylesheet" href="css/style.css">



<ul class="searchList">
	<li>
		<a href="index.php?searchin=eon610&page=1">tmall list</a>
	</li>
	<li>
		<a href="tmallpage.php?searchin=543858094954">tmall page</a>
	</li>
	<li>
		<a href="taobaolist.php?searchin=eon610&page=1">taobao list</a>
	</li>
	<li>
		<a href="taobaopage.php?searchin=548398515379">taobao page</a>
	</li>
</ul>

<div class="clear">&nbsp;</div>

<!-- <form action="index.php" method="get" target="_blank">
	<input name="searchin" type="text" >
	<input name="page" type="text" >
	<input type="submit" value="search">
</form> -->


<div id="show">
	
</div>

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

<script>

$(function(){

	// console.log($("#txtvalue").html());

	var jsontxt=JSON.parse($("#txtvalue").html())

	console.log(jsontxt.listItem);





	jsontxt.listItem.forEach( function(element, index) {


		var divbox = $("<table><tr><td><strong>"+element.item_id+"</strong></td><td>"+element.price+"</td><td>"+element.area+"</td></table>").appendTo($("#show"));

		console.log(element.url);

		// console.log(index);
		// console.log(element)
		/*var tr = $("tr").appendTo(table1);
		var td1 = $("td").html(element.item_id).appendTo(tr);
		var td2 = $("td").html(element.price).appendTo(tr);
		var td3 = $("td").html(element.shop_name).appendTo(tr);*/
	});







})
	
</script>