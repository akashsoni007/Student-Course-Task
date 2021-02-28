<?php require_once "web/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=course-subscription"><img src="web/image/icon-add.png" />Add Student In Courses</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>student Name</strong></th>
                    <th><strong>Course Name</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (!empty($result)) {
                        for ($i = 0; $i < sizeof($result[0]); $i++) {
                            ?>
                <tr>
                    <td><?php echo $result[0][$i]; ?></td>
                    <td><?php echo $result[1][$i]; ?></td>
                </tr>
                    <?php
                        }
                    }
                    ?>
            <tbody>
        
        </table>
        <ul class="pagination">
        <?php 
        for ($i = 1; $i <= $total_pages; $i++) {
            if($pageno != $i){
            ?>
            <li><a href="?action=course-subscription-table&&pageno=<?php echo $i ?>"><?php echo $i.' ' ?></a> </li>
        <?php
            }else{
                ?>
                <li><?php echo $i.' ' ?> </li>
            <?php
            }
        }
        ?>
        </ul>
    </div>
</body>
</html>