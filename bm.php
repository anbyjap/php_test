<?php
mb_http_output('UTF-8');
mb_internal_encoding('UTF-8');

header('Content-Type: application/json;carset=UTF-8');

$url = 'https://b.hatena.ne.jp/entry/jsonlite/?urol='.$_GET['url'];

print(file_get_contents($url, false, stream_context_create(['https' => ['header' => 'User-Agent: MySample']])));
?>