<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Location</th>
                <th>Emp Id</th>
                <th>Name</th>
                <th></th>
                <th>Position</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            if(!($stmt = $mysqli->prepare("SELECT S.date, R.city, S.employee_id, E.fname, E.lname, P.title, S.start_time, S.end_time
                FROM mby_schedule S INNER JOIN mby_employee E ON S.employee_id = E.id
                INNER JOIN mby_position P ON E.position_id = P.id
                INNER JOIN mby_restaurant R ON E.restaurant_id = R.id
                ORDER BY S.date DESC, R.city ASC, P.title ASC"))){
                echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
            }

            if(!$stmt->execute()){
                echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }
            if(!$stmt->bind_result($date,$location, $id, $fname, $lname, $position, $start, $end)){
                echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }
            while($stmt->fetch()){
                echo "<tr>\n<td>\n" . $date . "\n</td>\n<td>\n" . $location . "\n</td>\n<td>\n" . $id . "\n</td>\n<td>\n" . $fname . "\n</td>\n<td>\n" . $lname .
                    "\n</td>\n<td>\n". $position . "\n</td>\n<td>\n" . $start . "\n</td>\n<td>\n" .
                    $end . "\n</td>\n</tr>";
            }
            $stmt->close();
            $mysqli->close();
        ?>

        </tbody>
    </table>
</div>
