<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if (!($stmt = $mysqli->prepare("SELECT M.id, M.name, M.price, M.description FROM mby_menu_items M")))
        {
            echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
        }

        if (!$stmt->execute())
        {
            echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
        }

        if (!$stmt->bind_result($id, $name, $price, $description))
        {
            echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
        }

        while ($stmt->fetch())
        {
            echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $name . "\n</td>\n<td>\n\$" . $price .
                "\n</td>\n<td>\n". $description . "\n</td>\n</tr>";
        }

        $stmt->close();
        $mysqli->close();
        ?>
        </tbody>
    </table>
</div>

