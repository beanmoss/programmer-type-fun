<html>
<head>
  <?php $root_url = 'http://rrluna.com/programmer-type-fun'?>
  <title><?=$this->e($title)?></title>
  <meta property="og:url"         content="<?=$this->e($url).'?type='.$this->e($type)?>" />
  <meta property="fb:app_id"         content="312923542405324" />
  <!-- <meta property="og:type"        content="article" /> -->
  <meta property="og:title"       content="<?=$this->e($title)?>" />
  <meta property="og:description" content="<?=$this->e($description)?>" />
  <meta property="og:image"       content="<?=$root_url . $this->e($image)?>" />
  <meta property="og:image:width"       content="600" />
  <meta property="og:image:height"       content="315" />

</head>
<body>
<h3><?=$this->e($title)?></h3>
<img src="<?=$root_url . $this->e($image)?>" title="<?=$this->e($title)?>" />
<p>Source: <a href="https://www.techinasia.com/11-types-programmers-infographic">https://www.techinasia.com/</a> </p>
</body>
</html>
