<!doctype html>

<?php
$file = file_get_contents('http://www.jobs.ge/rss/jobs/');	
$feed = simplexml_load_string($file);
//printf('<pre>%s</pre>', print_r($feed, TRUE));
?>

<html>
<head>

<head>
<meta charset="UTF-8">
<title><?php echo $feed -> channel -> description ?></title>
<link rel="stylesheet" href="style.css" type="text/css" >
</head>

</head>
<body>


<header>
<h1> <?php echo $feed->channel->title; ?> </h1>
</header>


<?php
foreach ($feed->channel->item as $item):
$pubDate = $item->pubDate;
?>
	
	
<section>
<ul>
<li><b><?php echo $item->title;?></b>
<time id = "time"><?php echo $pubDate;?></time>
</li>
<li><?php echo $item->description;?>
<a href = "<?php echo $item->link;?>">Read more</a>
</li>
</ul>
</section>
<?php endforeach; ?>
</body>

</html>

 
