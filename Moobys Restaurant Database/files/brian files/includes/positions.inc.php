<div id="formAddPosition" name="formAddPosition">
    <form method="POST" action="positions.php">
        <fieldset>
            <legend>Enter New Position:</legend>
            <p>Title: <input type="text" name="title"></p>
            <input type="submit" name="submit" value="Add New Position">
        </fieldset>
    </form>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
        <?php

        function getPositions($mysqli)
        {
            if (!($stmt = $mysqli->prepare("SELECT P.id, P.title FROM mby_position P"))) {
                echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
            }

            if (!$stmt->execute()) {
                echo "Execute failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }

            if (!$stmt->bind_result($id, $title)) {
                echo "Bind failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }

            while ($stmt->fetch()) {
                echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $title . "\n</td>\n</tr>";
            }
            $stmt->close();
        }

        if (isset($_POST['title']) && !empty($_POST['title']))
        {
            if (!($stmt = $mysqli->prepare("INSERT INTO mby_position(title) VALUES (?)")))
            {
                echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
            }

            if (!($stmt->bind_param("s", $_POST['title'])))
            {
                echo "Bind failed: " . $stmt->errno . " " . $stmt->error;
            }

            if (!$stmt->execute())
            {
                echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
            } else
            {
                echo "Added " . $stmt->affected_rows . " rows to mby_position.";
            }
            $stmt->close();
            getPositions($mysqli);
        }
        else {
            getPositions($mysqli);
        }

        ?>
        </tbody>
    </table>
</div>

