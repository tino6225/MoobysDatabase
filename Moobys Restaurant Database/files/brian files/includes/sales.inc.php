<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Quantity Sold</th>
                <th>Price</th>
                <th>Location</th>
                <th>Emp Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php

            if (!($stmt = $mysqli->prepare("SELECT SA.date, M.id, M.name, SA.item_quantity, M.price, R.city, E.fname, E.lname
              FROM mby_sales SA
              INNER JOIN mby_menu_items M ON SA.item_id = M.id
              INNER JOIN mby_restaurant R ON SA.restaurant_id = R.id
              LEFT JOIN mby_employee E ON SA.employee_id = E.id
              ORDER BY SA.date ASC, R.city ASC, E.lname ASC")))
            {
                echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
            }

            if (!$stmt->execute())
            {
                echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }
            if (!$stmt->bind_result($date, $mId, $mName, $quantity, $price, $location, $fname, $lname))
            {
                echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }

            while ($stmt->fetch())
            {
                echo "<tr>\n<td>\n" . $date . "\n</td>\n<td>\n" . $mId . "\n</td>\n<td>\n" . $mName .
                    "\n</td>\n<td>\n". $quantity . "\n</td>\n<td>\n" . $price . "\n</td>\n<td>\n" .
                    $location . "\n</td>\n<td>\n" . $fname . "\n</td>\n<td>\n" . $lname . "</td>\n</tr>";
            }

            $stmt->close();
            $mysqli->close();
        ?>
        </tbody>
    </table>
</div>