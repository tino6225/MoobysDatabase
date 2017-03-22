<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
                <th>Position</th>
                <th>Location</th>
                <th>Hr Rate</th>
                <th>Ph Num.</th>
            </tr>
        </thead>
        <tbody>
        <?php

        if (!($stmt = $mysqli->prepare("SELECT E.id, E.fname, E.lname, P.title, R.city, E.hourly_rate, E.phone
            FROM mby_employee E INNER JOIN mby_position P
            ON E.position_id = P.id INNER JOIN mby_restaurant R
            ON E.restaurant_id = R.id
            ORDER BY E.id ASC")))
        {
            echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
        }

        if (!$stmt->execute())
        {
            echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
        }

        if (!$stmt->bind_result($id, $fname, $lname, $position, $location, $hourly, $phone))
        {
            echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
        }

        while($stmt->fetch())
        {
            echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $fname . "\n</td>\n<td>\n" . $lname .
                "\n</td>\n<td>\n". $position . "\n</td>\n<td>\n" . $location . "\n</td>\n<td>\n" .
                $hourly . "\n</td>\n<td>\n" . $phone . "\n</td>\n</tr>";
        }
        $stmt->close();
        $mysqli->close();
        ?>
        </tbody>
    </table>
</div>

