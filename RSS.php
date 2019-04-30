<?php
header('Content-Type: application/rss+xml');

include "C:/wamp64/www/core/config3.php";
$pdo = config3::getConnexion();
$articles = $pdo->query('SELECT * FROM produit ORDER BY date_time_post DESC LIMIT 0,25');
$lastBuildDate = $pdo->query('SELECT date_time_post FROM produit ORDER BY date_time_post DESC LIMIT 0,1');
$lastBuildDate = $lastBuildDate->fetch()['date_time_post'];
?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>STMG</title>
        <description>Ceci est un exemple de flux RSS 2.0</description>
        <lastBuildDate><?= date(DATE_RSS, strtotime($lastBuildDate)) ?></lastBuildDate>
        <link>http://www.example.org</link>
        <?php while($a = $articles->fetch()) { ?>
        <item>
            <title><?= $a['nom'] ?></title>
            <description><?= substr($a['prix'], 0, 1000).' DT' ?></description>
            <pubDate><?= date(DATE_RSS, strtotime($a['date_time_post'])) ?></pubDate>
            <link>http://www.example.org/?id=<?= $a['id'] ?></link>
            <image>
               <url>http://www.example.org/miniatures/<?= $a['id'] ?>.jpg</url>
               <link>http://www.example.org/?id=<?= $a['id'] ?></link>
            </image>
        </item>
        <?php } ?>
    </channel>
</rss>