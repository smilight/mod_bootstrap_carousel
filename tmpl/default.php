<?php

defined('_JEXEC') or die;

echo "
<div class=\"carousel slide\" id=\"bootstrap-carousel\">
<div class=\"carousel-inner\">

	 ";

foreach ($imgurl as $key => $value) {
    if (!empty($value['url'])) {
        echo "<div class='item ";

        if ($key == 0) {
            echo "active";
        }

        echo "'>";
        echo "<img src='" . JURI::root() . $value['url'] . "'/>";

        if (!empty($value['title']) || !empty($value['desc']) || !empty($value['btn'])) {
            echo "<div class='carousel-caption'>";
            if (!empty($value['title'])) {
                echo "<h3>" . $value['title'] . "</h3>";
            }

            if (!empty($value['desc'])) {
                echo "<div>" . htmlspecialchars($value['desc']) . "</div>";
            }

            if (!empty($value['btn'])) {
                echo "<a class=\"btn btn-primary\" href='" . JURI::root() . "index.php?option=com_content&view=article&id=" . $value['btnl'] . "'>" . $value['btn'] . "</a>";
            }
            echo "</div>";
        }
        echo "</div>";
    }
}

echo "</div>";

// indicators

if ($pager == 'yes') {
    echo "<ol class=\"carousel-indicators\">";


    foreach ($imgurl as $k => $val) {
        if (!empty($val['url'])) {

            if ($k == 0) {
                echo "<li data-target=\"#bootstrap-carousel\" data-slide-to=\"0\" class=\"active\"></li>";
            } else {
                echo "<li data-target=\"#bootstrap-carousel\" data-slide-to=" . $k . "></li>";
            }

        }
    }

    echo " </ol>";

}

echo "
<a href=\"#bootstrap-carousel\" class=\"left carousel-control\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
<a href=\"#bootstrap-carousel\" class=\"right carousel-control\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
 </div>";

?>
