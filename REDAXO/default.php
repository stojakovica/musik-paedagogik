<?php
$path = explode("|",$this->getValue("path").$this->getValue("article_id")."|");

$path1 = $path[1];
$path2 = $path[2];
$path3 = $path[3];

$float = "right";
if($path1%2 == 0) {
    $float = "left";
}
?>
REX_TEMPLATE[3]
    <div id="containerContent">
        <div id="navigationMain">
            <div class="title">
                <a href="/">Musik-P&auml;dagogik</a>
            </div>

            <ul>
            <?php
            foreach (OOCategory::getRootCategories(true) as $c) {
                $class = '';
                if ($c->getId()==$path1) {
                    $class = 'active';
                }
                $colorClass = 'gruen';
                switch($c->getId()) {
                    case 2:
                        $colorClass = 'gruen';
                        break;
                    case 3:
                        $colorClass = 'blau';
                        break;
                    case 4:
                        $colorClass = 'rot';
                        break;
                    case 5:
                        $colorClass = 'gelb';
                        break;
                }
                echo '<li class="'.$class.'"><a href="'.$c->getUrl().'" class="'.$colorClass.'">'.$c->getName().'</a></li>';
            } ?>
            </ul>
        </div>
        <div id="content" class="clearfix">
            <div class="contentImg" style="float:<?php echo $float; ?>;">
                <img src="<?php echo seo42::getImageManagerUrl($headerbild, 'content'); ?>" />
            </div>
            <div class="contentContent" style="float:<?php echo $float; ?>;">
                <img class="logo_soft" src="<?php echo seo42::getImageManagerUrl('logo_soft.png', 'logo_soft'); ?>" />
                <?php echo $this->getArticle(1); ?>
            </div>
        </div>
    </div>
REX_TEMPLATE[4]