<?php


$page = 1;
if($_GET['page']!=''){
	$page = $_GET['page'];
}


$url = "https://search.51job.com/list/030200,000000,0000,00,2,99,%25E5%2589%258D%25E7%25AB%25AF%25E5%25B7%25A5%25E7%25A8%258B%25E5%25B8%2588,2,".$page.".html?lang=c&stype=1&postchannel=0000&workyear=99&cotype=99&degreefrom=99&jobterm=99&companysize=99&lonlat=0%2C0&radius=-1&ord_field=0&confirmdate=9&fromType=21&dibiaoid=0&address=&line=&specialarea=00&from=&welfare=";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
$dxycontent = curl_exec($ch);
echo $dxycontent;
?>


<link rel="stylesheet" href="css/style.css">

<div id="show">

	
</div>

<!-- <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script> -->

<script>

$(function(){

	$(".header,.dw_wp,.footer").hide();
	$(".title").remove();


	$(".el").each(function(index, el) {
		if(index>0){

			var td1 = $(this).find(".t1").text().trim();
			var td2 = $(this).find(".t2").text().trim();
			var td3 = $(this).find(".t3").text().trim();
			var td4 = $(this).find(".t4").text().trim();
			var td5 = $(this).find(".t5").text().trim();

			if(td1 != "") {
				$("<table class='job'><tr><td><strong>"+td1+"</strong></td><td>"+td2+"</td><td>"+td3+"</td><td>"+td4+"</td><td>"+td5+"</td></tr></table>").appendTo($("#show"));
			}

			

		}
		
	});


	



	/*jsontxt.item.forEach( function(element, index) {


		var divbox = $("<table><tr><td><strong>"+element.item_id+"</strong></td><td>"+element.price+"</td><td>"+element.shop_name+"</td></table>").appendTo($("#show"));

		console.log(element.url);
	});*/







})
	
</script>