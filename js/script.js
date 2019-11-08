$(function(){
	$.ajax({
		type:"GET",
		// url:"json/food.php",
		url:"GetOpendataToJson_api.php",
		dataType:"json",
		success:show,
		error:function(){
			alert("GetOpendataToJson api error");
		}
	});
});

	function show(data){
		// console.log(data);
		var counter = new Array;  //總列表 A縣市5家C縣市4家
		var cityData = new Array; //縣市餐廳細項簡介列表 ....
		var cityTitle = new Array;//總共多少縣市
		for(i = 0 ; i < data.length; i++){
			getCity = data[i]["City"];
			if(counter[getCity]==undefined){
				counter[getCity] = cityData.length;
				cityData.push(new Array());
				cityTitle[counter[getCity]] = getCity;
			}
			cityData[counter[getCity]].push(data[i]);
		}
			// console.log(counter);
			// console.log(cityData);
			// console.log(cityTitle);

		
		//載入全部資料--------
			
		// $("#Card").empty(); //載入資料之前先清空
		// for(i=0; i<data.length; i++){
		// 	strHTML = '<div class="col-md-4 p-2"><div class="card h-100"><img src="'+data[i].PicURL+'" class="card-img-top h-50" alt="..."><div class="card-body h-50"><h5 class="card-title">'+data[i].Name+'</h5><p class="card-city">'+data[i].City+data[i].Town+'</p><p class="card-text">'+data[i].HostWords.substring(0,30)+'</p><a href="#" class="btn btn-block btn-primary " onclick=getmap("'+data[i].Address+'")>地圖位置</a></div></div></div>';

		// 	$('#Card').append(strHTML);

		// }//載入全部資料--------



			

		$("#listCity").empty();
		$("#listCity_Content").empty();

		for(i=0; i<cityData.length; i++){
    			strHTML = '<li><button type="button" class="btn mb-3 " data-toggle="list" href="#food'+i+'" role="tab">'+cityTitle[i]+'<span class="badge badge-primary badge-pill">'+cityData[i].length+'</span></button></li>';



		$("#listCity").append(strHTML);

		var strHtml_Content = "";
		for(j=0; j<cityData[i].length; j++){
			strHtml_Content+= '<div class="col-lg-3 col-md-4 col-sm-6 my-3"><div class="card h-100"> <img src="'+cityData[i][j].PicURL+'" class="card-img-top h-50" alt="..."> <div class="card-body"><h5 class="card-title">'+cityData[i][j].Name+'</h5><p class="card-city">'+cityData[i][j].City+cityData[i][j].Town+'</p><p class="card-text">'+cityData[i][j]["HostWords"].substring(0,30)+'...</p><a onclick=getmap("'+cityData[i][j].Address+'") href="#" class="btn btn-primary btn-block h-25 ">地圖位置</a></div></div></div>';
		}

		strHTML = '<div class="tab-pane fade" id="food'+i+'" role="tabpanel"><div class="row">'+strHtml_Content+'</div></div>';
		$("#listCity_Content").append(strHTML);
		
		}
	}

	

	function getmap(dataaddr){				
		window.open("https://www.google.com/maps/place/" + dataaddr);
	}