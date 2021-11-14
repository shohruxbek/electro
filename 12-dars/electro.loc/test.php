<?php

$arr_card = [
["id"=>1, "count"=>1, "name"=>"notebook1", "image"=>'http://electro.loc/img/product01.png',"price"=>"1234560" ],
["id"=>2, "count"=>3, "name"=>"notebook2", "image"=>'http://electro.loc/img/product01.png',"price"=>"1234560" ],
["id"=>3, "count"=>1, "name"=>"notebook3", "image"=>'http://electro.loc/img/product01.png',"price"=>"1234560" ],
];


foreach ($arr_card as $key ) {
	if($key['id']==1){
		$key['count']=2;
	}
}

for($i=0; $i<count($arr_card);$i++){
	if($arr_card[$i]['id']==1){
		$arr_card[$i]['count'] = 5;
	}
}

echo json_encode($arr_card);
?>