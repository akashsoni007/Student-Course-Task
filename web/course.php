<?php require_once "web/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=course-add"><img src="web/image/icon-add.png" />Add Course</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>Course Name</strong></th>
                    <th><strong>Course Detail</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (!empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
          <tr>
                    <td><?php echo $result[$k]["course_name"]; ?></td>
                    <td><?php echo $result[$k]["course_detail"]; ?></td>
                    <td><a class="btnEditAction"
                        href="index.php?action=course-edit&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="web/image/icon-edit.png" />
                        </a>
                        <a class="btnDeleteAction" 
                        href="index.php?action=course-delete&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="web/image/icon-delete.png" />
                        </a>
                    </td>
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
            <li><a href="?action=course&&pageno=<?php echo $i ?>"><?php echo $i.' ' ?></a> </li>
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