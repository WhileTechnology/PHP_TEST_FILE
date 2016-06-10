<h1>response code from server</h1>
<?php
// create a new cURL resource
//$ch = curl_init();

// set URL and other appropriate options
//curl_setopt($ch, CURLOPT_URL, "http://attraqt.chetu.local/locayta/feed/generateChunk/store_id/1/chunk_num/4/chunk_size/25/key/f6e7b0a8dfbb94daef53dfb98594edc0/feed_Identifier/-1278977628");

/*
curl_setopt($ch, CURLOPT_URL, "http://www.google.com");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
*/
?>

<?php 

//="item_ids%5B0%5D=26&item_ids%5B1%5D=27&item_ids%5B2%5D=28&item_ids%5B3%5D=29&item_ids%5B4%5D=30&item_ids%5B5%5D=31&item_ids%5B6%5D=32&item_ids%5B7%5D=33&item_ids%5B8%5D=34&item_ids%5B9%5D=35&item_ids%5B10%5D=36&item_ids%5B11%5D=37&item_ids%5B12%5D=38&item_ids%5B13%5D=39&item_ids%5B14%5D=40&item_ids%5B15%5D=41&item_ids%5B16%5D=42&item_ids%5B17%5D=43&item_ids%5B18%5D=44&item_ids%5B19%5D=45&item_ids%5B20%5D=46&item_ids%5B21%5D=47&item_ids%5B22%5D=48&item_ids%5B23%5D=49&item_ids%5B24%5D=50"

function curl($url,$posts = "item_ids%5B0%5D=1&item_ids%5B1%5D=2&item_ids%5B2%5D=3&item_ids%5B3%5D=4&item_ids%5B4%5D=5&item_ids%5B5%5D=6&item_ids%5B6%5D=7&item_ids%5B7%5D=8&item_ids%5B8%5D=9&item_ids%5B9%5D=10&item_ids%5B10%5D=11&item_ids%5B11%5D=12&item_ids%5B12%5D=13&item_ids%5B13%5D=14&item_ids%5B14%5D=15&item_ids%5B15%5D=16&item_ids%5B16%5D=17&item_ids%5B17%5D=18&item_ids%5B18%5D=19&item_ids%5B19%5D=20&item_ids%5B20%5D=21&item_ids%5B21%5D=22&item_ids%5B22%5D=23&item_ids%5B23%5D=24&item_ids%5B24%5D=25&item_ids%5B25%5D=26&item_ids%5B26%5D=27&item_ids%5B27%5D=28&item_ids%5B28%5D=29&item_ids%5B29%5D=30&item_ids%5B30%5D=31&item_ids%5B31%5D=32&item_ids%5B32%5D=33&item_ids%5B33%5D=34&item_ids%5B34%5D=35&item_ids%5B35%5D=36&item_ids%5B36%5D=37&item_ids%5B37%5D=38&item_ids%5B38%5D=39&item_ids%5B39%5D=40&item_ids%5B40%5D=41&item_ids%5B41%5D=42&item_ids%5B42%5D=43&item_ids%5B43%5D=44&item_ids%5B44%5D=45&item_ids%5B45%5D=46&item_ids%5B46%5D=47&item_ids%5B47%5D=48&item_ids%5B48%5D=49&item_ids%5B49%5D=50&item_ids%5B50%5D=51&item_ids%5B51%5D=52"){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS,$posts);
$chk = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
print_r($httpcode);
curl_close($ch);

} 

//$url = "http://attraqt.chetu.local/locayta/feed/generateChunk/store_id/1/chunk_num/4/chunk_size/25/key/f6e7b0a8dfbb94daef53dfb98594edc0/feed_Identifier/-1278977628";
 
//$url = "http://stage.echodesign.com/locayta/feed/generateChunk/store_id/3/chunk_num/1/chunk_size/5/key/5c8582e1f8ae48d8217356c7e583739e/feed_Identifier/14618532032019";
//$url = "http://www.google.com";

$url = "http://jojo-dev.thepixel.com/locayta/feed/generateChunk/store_id/1/chunk_num/1/chunk_size/500/key/3040aca84536482a8ea5bbdde625b514/feed_Identifier/14635668052503";

echo curl($url);


?>