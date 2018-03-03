<!doctype html>
<?php
header("Content-type: text/html; charset=utf-8"); 


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

$intxt = "555320441014";
if($_GET['searchin']){
	$intxt = $_GET['searchin'];
}

  
/*$url = "https://list.tmall.com/m/search_items.htm?page_size=20&page_no=1&q=EON610&type=p&tmhkh5=&spm=a223j.8443192.a2227oh.d100&from=mallfp..m_1_searchbutton";  */

$url = "https://detail.m.tmall.com/item.htm?spm=a220m.6910245.0.0.1c0bb1cbGTrOZG&id=".$intxt;


// $url = "https://detail.m.tmall.com/item.htm?spm=a220m.6910245.0.0.1c0bb1cbGTrOZG&id=557871926237&skuId=3627079066461&pic=//img.alicdn.com/bao/uploaded/i4/2935923376/TB1BGDCayERMeJjSspiXXbZLFXa_!!0-item_pic.jpg_400x400Q50s50.jpg_.webp&itemTitle=JBL%20eon610%20EON612%20EON615%E6%9C%89%E6%BA%90%E9%9F%B3%E5%93%8D15%E5%AF%B8%20%E6%BC%94%E5%87%BA%E4%BE%BF%E6%90%BA%E5%A4%A7%E5%8A%9F%E7%8E%87%E7%A7%BB%E5%8A%A8%E9%9F%B3%E7%AE%B1&price=10000.00&from=h5";


// $url = "https://detail.m.tmall.com/item.htm?spm=a220m.6910245.0.0.1c0bb1cbst9NDC&id=555320441014&skuId=3426444432298&pic=//img.alicdn.com/bao/uploaded/i1/2175250006/TB2aG6iXgZjyKJjy0FhXXcdlFXa_!!2175250006.jpg_400x400Q50s50.jpg_.webp&itemTitle=JBL%20EON%20610/612/615%E6%9C%89%E6%BA%90%E6%BC%94%E5%87%BA%E9%9F%B3%E7%AE%B1%20%E8%88%9E%E5%8F%B0%E9%9F%B3%E7%AE%B1%20%E7%9B%91%E5%90%AC%E9%9F%B3%E7%AE%B1%20%E6%AD%A3%E5%93%81%E8%A1%8C%E8%B4%A7&price=8560.00&from=h5&decision=sku";


/*if($intxt){
	$url="https://list.tmall.com/search_product.htm?q=+".$intxt."&type=p&vmarket=&spm=875.7931836%2FB.a2227oh.d100&from=mallfp..pc_1_searchbutton";
}*/
// echo '<div id="txtvalue"';
echo getHTTPS($url);
// echo '</div>';



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

<form action="index2.php" method="get">
	<input name="searchin" type="text">
	<input type="submit" value="search">
</form>


<div id="show">
	
</div>

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

<script>




$(function(){

	// console.log($("#txtvalue").html());

	$ (".page").hide();
	$(".app-download-popup").hide();
	$("head").remove();



    var obj = _DATA_Detail;
	var alllist=_DATA_Detail.mock.skuCore.sku2info;
	var alltitle =_DATA_Detail.skuBase.props[0].values;
	var alldy =_DATA_Detail.skuBase.skus;

	

	// console.log(obj);
	// $("<span style='float:left'>"+obj.item.itemId+"</span>").appendTo('#show');

	for (let i in alldy) {
		// var divbox = $("<div>"+alldy[i].skuId+"&nbsp;&nbsp;"+alllist[alldy[i].skuId].price.priceText+"&nbsp;&nbsp;"+alltitle[i].name+"</div>").appendTo($("#show"));

		var divbox = $("<table><tr>"+"<td><strong>"+obj.item.itemId+"</strong></td>"+"<td>"+alldy[i].skuId+"</td><td>"+alllist[alldy[i].skuId].price.priceText*1+"</td><td>"+alltitle[i].name+"</td></tr></table>").appendTo($("#show"));

	}




})
	
</script>