<nav>
    <ul>
        <?php foreach ($nav as $link):?>
        <li>
            <a href="<?php print $link['url']; ?>"><?php print $link['label']; ?></a>
        </li>
        <?php endforeach ?>
    </ul>
</nav>
