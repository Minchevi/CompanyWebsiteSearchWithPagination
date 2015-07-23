<?php
$json = json_decode($json);
?>
<table class="table table-hover" class="table-data">
    <?php
    if(count($json)!==0){
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
    } else {
        ?>
        <div class="no-results-div">No results available</div>
        <style type="text/css">
            #pagination-div {
                display: none;
            }
        </style>
        <?php
    }
    ?>
</table>