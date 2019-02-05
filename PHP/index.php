<?php

//

//

$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=980da2b4484a86dfcedc38458d4beb1b&tags=fjord&format=json&nojsoncallback=1&';

$data = json_decode(file_get_contents($URL));



$photos = $data->photos->photo;
foreach ($photos as $photo) {

    $url = 'http://farm'.$photo->farm.'.staticflickr.com/'.$photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg';

    echo '<img src="'.$url.'">';

}
?>
