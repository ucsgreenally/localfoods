<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="css/listview-grid.css">
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<script>
		$(function(){
			$.ajax({
				type: "GET",
				// url: "json/food.php",
				url:"GetOpendataToJson_api.php",
				dataType: "json",
				success: show,
				error: function(){
					alert("error");
				}
			});
		});

		function show(data){
		
			for(i=0; i<data.length; i++){
				
				strHTML ='<li><a href="#'+data[i].ID+'" data-rel="popup" data-position-to="window"><img src="'+data[i].PicURL+'"  class="ui-li-thumb"><h2>'+data[i].Name+'</h2><p>'+data[i].Address+'</p><p class="ui-li-aside">'+data[i].City+data[i].Town+'</p><div data-role="popup" id="'+data[i].ID+'" data-dismissible="false"><a href="#" data-role="button" data-icon="delete" data-iconpos="notext" class="ui-btn-right" data-rel="back">close</a><img src="'+data[i].PicURL+'" width="100%"><p>店名：'+data[i].Name+'</p><p>電話：'+data[i].Tel+'</p><p>地址：'+data[i].Address+'</p><p>簡介：'+data[i].HostWords+'</p></div></a></li>';

				$("#hotelbody").append(strHTML);
			}
			$("#hotelbody").listview("refresh");
			$("#hotelbody").enhanceWithin().popup("refresh");
		}
		
	</script>
	
</head>
<body>
	<div data-role="page" id="demo-page" class="my-page" data-theme="b">
		<div data-role="header" data-theme="b">
			<h1>頁首</h1>
		</div>
		
	
		<div role="main" class="ui-content" > 
			<ul data-role="listview" data-inset="true" id="hotelbody">
				<!-- <li><a href="#popup_cake01"  data-rel="popup" data-position-to="window" >
	                <img src="images/cake01.jpg" class="ui-li-thumb">
	                <h2>iOS 6.1</h2>
	                <p>Apple released iOS 6.1</p>
	                <p class="ui-li-aside">iOS</p>
					<div data-role="popup" id="popup_cake01" data-dismissible="false">						
						<a href="#" data-role="button" data-icon="delete" data-iconpos="notext" class="ui-btn-right" data-rel="back" data-theme="b">close</a>
						<img src="images/cake01.jpg" width="100%">
						<p>起司蛋糕 /片</p>
						<p>重量：150克/片</p>
						<p>熱量：150卡/片</p>
					</div>
	            </a></li>
				 <li><a href="#popup_cake01"  data-rel="popup" data-position-to="window" >
	                <img src="images/cake01.jpg" class="ui-li-thumb">
	                <h2>iOS 6.1</h2>
	                <p>Apple released iOS 6.1</p>
	                <p class="ui-li-aside">iOS</p>
					<div data-role="popup" id="popup_cake01" data-dismissible="false">						
						<a href="#" data-role="button" data-icon="delete" data-iconpos="notext" class="ui-btn-right" data-rel="back" data-theme="b">close</a>
						<img src="images/cake01.jpg" width="100%">
						<p>起司蛋糕 /片</p>
						<p>重量：150克/片</p>
						<p>熱量：150卡/片</p>
					</div>
	            </a></li> -->
			</ul>			
		</div>

		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>頁尾</h1>
		</div>
	</div>
</body>
</html>	

