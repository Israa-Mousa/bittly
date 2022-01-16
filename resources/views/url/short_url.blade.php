
test ur url



<?php
// var_dump($url);
// die('test');
?>
<a href="{{url('/short/').'/'.$url->short_url}}" target="_blank" rel="noopener noreferrer">{{$url->short_url}}</a>
