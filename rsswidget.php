<style>
    div {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 100%;
        margin-top: 10px;
        font-family: sans-serif;
        font-size: 14px;
    }

    .date {
        color: darkgray;
        margin: 0 10px 0 10px;
    }

    a:link {
        color: rgba(45, 45, 93, 1.0);
    }
</style>

<?php
$rssurl = $_GET['url'];
$rss = simplexml_load_file($rssurl);

$lines = 3; //Default number of lines to display
$lines = $_GET['lines']; //Number of lines to display

$i = 0;
foreach ($rss->channel->item as $item) {

    $title = $item->title;
    $date = date("m.d", strtotime($item->pubDate));
    $link = $item->link;
    $description = strip_tags($item->description);
    $i++;
?>
    <div>
        <span class="date"><?php echo $date; ?></span>
        <a href="<?php echo $link; ?>" target="_blank">
            <span class="title"><?php echo $title; ?></span>
            <span class="text"><?php echo $description; ?></span>
        </a>
    </div>
<?php
    if ($i === $lines) {
        break;
    }
}
?>