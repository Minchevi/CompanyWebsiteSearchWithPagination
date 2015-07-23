<?php
$json = json_decode($json);
?>
<table class="table table-hover" class="table-data">
    <?php
    foreach($json as $key=>$object){
        ?>
        <tr>
            <td class="company-li">
                    <div><?php echo $object->name; ?></div>
            </td>
            <td>
                <a href="<?php echo $object->website; ?>" target="_blank">
                    <div><?php echo $object->website; ?></div>
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>