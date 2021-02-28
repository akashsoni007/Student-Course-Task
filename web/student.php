<?php require_once "web/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=student-add"><img src="web/image/icon-add.png" />Add Student</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>First Name</strong></th>
                    <th><strong>Last Name</strong></th>
                    <th><strong>DOB</strong></th>
                    <th><strong>Contact No</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
          <tr>
                    <td><?php echo $result[$k]["first_name"]; ?></td>
                    <td><?php echo $result[$k]["last_name"]; ?></td>
                    <td><?php echo $result[$k]["dob"]; ?></td>
                    <td><?php echo $result[$k]["contact_no"]; ?></td>
                    <td><a class="btnEditAction"
                        href="index.php?action=student-edit&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="web/image/icon-edit.png" />
                        </a>
                        <a class="btnDeleteAction" 
                        href="index.php?action=student-delete&id=<?php echo $result[$k]["id"]; ?>">
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
            <li><a href="?pageno=<?php echo $i ?>"><?php echo $i.' ' ?></a> </li>
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