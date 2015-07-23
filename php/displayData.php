<?php
$json = json_decode($json);
?>
<<ul class="list-group" class="company-ul">>
    <?php
    foreach($json as $key=>$object){
        ?>
        <li class="company-li">
            <a href="<?php echo $object->website; ?>" target="_blank">
                <div><?php echo $object->name; ?></div>
            </a>
        </li>
        <?php
    }
    ?>
</ul>