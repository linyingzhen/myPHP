
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

$intxt = "548398515379";
if($_GET['searchin']){
	$intxt = $_GET['searchin'];
}

$url = "https://acs.m.taobao.com/h5/mtop.taobao.detail.getdetail/6.0/?appKey=12574478&t=1505437947238&sign=6925067905b77d8b47ad9b5df1cf0a63&api=mtop.taobao.detail.getdetail&v=6.0&ttid=2016%40taobao_h5_2.0.0&isSec=0&ecode=0&AntiFlood=true&AntiCreep=true&H5Request=true&type=jsonp&dataType=jsonp&callback=mtopjsonp1&data=%7B%22exParams%22%3A%22%7B%5C%22id%5C%22%3A%5C%22"+$intxt+"%5C%22%2C%5C%22abtest%5C%22%3A%5C%2230%5C%22%2C%5C%22rn%5C%22%3A%5C%22fb1101a11b1ad77bfcf1b26c8325fe44%5C%22%2C%5C%22sid%5C%22%3A%5C%222a91856710bc6734feda4c3e9a128c12%5C%22%7D%22%2C%22itemNumId%22%3A"+$intxt+"%7D";


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

	var str = $("#txtvalue").html();



	var str_change = str.substring(11,str.length-1);

	// console.log(str_change)

	var obj = JSON.parse(str_change);

	console.log(obj.data);

	// console.log(obj.data.skuBase.skus);
	// console.log(obj.data.skuBase.props[0].values);

	// console.log(obj.data.skuBase.skus[0].skuId);

	var obj_change = obj.data.mockData;

	// console.log(typeof(obj_change))

	var json = JSON.parse(obj_change);

	// console.log(json);

	// console.log(json.skuCore.sku2info);

	var last = json.skuCore.sku2info;



	// var jsontxt=JSON.parse($("#txtvalue").html());

	// console.log(jsontxt);

	var aaindex = 0;

	for(let i in last){
		if(i>0){
		var divbox = $("<table><tr><td><strong>"+obj.data.item.itemId+"</strong></td><td>"+obj.data.skuBase.skus[aaindex].skuId+"</td><td>"+last[i].price.priceText+"</td><td>"+obj.data.skuBase.props[0].values[aaindex].name+"</td></table>").appendTo($("#show"));
		aaindex++;
	}
	}



})
	
</script>