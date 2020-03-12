<nav>
    <ul>
        <?php foreach ($nav as $link):?>
            <?php
                if ($_SERVER['REQUEST_URI'] === $link['url']) {
                    $class = 'active';
                } else {
                    $class = 'inactive';
                }
            ?>
        <li>
            <a class="<?php print $class; ?>" href="<?php print $link['url']; ?>"><?php print $link['label']; ?></a>
            <?php
                if () {
                    print
                }
            ?>
        </li>
        <?php endforeach ?>
    </ul>
</nav>
