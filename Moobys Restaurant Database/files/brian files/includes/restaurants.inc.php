<div id="formAddRest" name="formAddRest">
    <form class="form-horizontal" method="POST" action="restaurants.php">
        <fieldset>
            <legend>Enter New Location Address</legend>
            <div class="form-group">
                <label class="col-md-1" >Address:</label>
                <input class="col-md-3" type="text" name="address">
            </div>
            <div class="form-group">
                <label class="col-md-1" >City:</label>
                <input class="col-md-3" type="text" name="city">
            </div>
            <div class="form-group">
                <label class="col-md-1" >State:</label>

                <select class="col-md-3" name="state">
                    <option value="">Choose...</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="form-group">
                <label class="col-md-1" >Zip:</label>
                <input class="col-md-3" type="text" name="zip">
            </div>
            <input type="hidden" name="mode" value="add">
            <input name="submit" value="Add Restaurant" class="btn btn-primary" type="submit">
        </fieldset>
    </form>

</div>

<div class="table-responsive">
    <form id="restDataForm">
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>ID</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $valueIsSet = false;
        $modeSet = false;

        if (isset($_GET["id"]) && !empty($_GET["id"]) && isset($_GET["mode"]) && !empty($_GET["mode"])) {
            $getID = $_GET['id'];
            $mode = $_GET['mode'];
            $modeSet = true;
        }
        elseif (isset($_POST["id"]) && !empty($_POST["id"]) && isset($_POST["mode"]) && !empty($_POST["mode"])) {
            $postID = $_POST['id'];
            $mode = $_POST['mode'];
            $modeSet = true;
        }
        elseif (isset($_POST["mode"]) && !empty($_POST["mode"])) {
            $mode = $_POST['mode'];
            $modeSet = true;
        }
        else {
            $modeSet = false;
        }

        if (isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['city']) && !empty($_POST['city']) && isset($_POST['state']) && !empty($_POST['state']) && isset($_POST['zip']) && !empty($_POST['zip'])) {
            $postAddress = $_POST['address'];
            $postCity = $_POST['city'];
            $postState = $_POST['state'];
            $postZip = $_POST['zip'];
            $valueIsSet = true;
        }
        else {
            $valueIsSet = false;
        }


        if ($modeSet) {
            if ($mode === "add") {
                insertRestaurant($postAddress, $postCity, $postState, $postZip, $mysqli);
            }
            elseif ($mode === "delete") {
                deleteRestaurant($getID, $mysqli);
            }
            elseif ($mode === "edit") {
                getRestaurants($mysqli);
            }
            elseif ($mode === "update") {
                updateRestaurant($postID, $postAddress, $postCity, $postState, $postZip, $mysqli);
            }
        }
        else {
            getRestaurants($mysqli);
        }

        /**
         * @param $mysqli
         */
        function getRestaurants($mysqli)
        {
            if (!($stmt = $mysqli->prepare("SELECT id, address, city, state, zip FROM mby_restaurant"))) {
                echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
            }

            if (!$stmt->execute()) {
                echo "Execute failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }

            if (!$stmt->bind_result($id, $address, $city, $state, $zip)) {
                echo "Bind failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
            }

            while ($stmt->fetch()) {
                echo "<tr>\n<td style=\"width:20px;\"><a href=\"restaurants.php?id=".$id."&mode=edit\"  style=\"color:brown\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></button></td>\n<td style=\"width:20px;\"><a href=\"restaurants.php?id=".$id."&mode=delete\" style=\"color:red\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button></td>\n<td>\n" . $id . "\n</td>\n<td>\n" . $address . "\n</td>\n<td>\n" . $city . "\n</td>\n<td>\n" . $state . "\n</td>\n<td>\n" . $zip . "\n</td></tr>";
            }

            $stmt->close();
        }

        /**
         * @param $postAddress
         * @param $postCity
         * @param $postState
         * @param $postZip
         * @param $mysqli
         */
        function insertRestaurant($postAddress, $postCity, $postState, $postZip, $mysqli)
        {
            if (isset($postAddress) && !empty($postAddress)) {

                if (!($stmt = $mysqli->prepare("INSERT INTO mby_restaurant(address, city, state, zip) VALUES (?,?,?,?)"))) {
                    echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
                }

                if (!($stmt->bind_param("ssss", $postAddress, $postCity, $postState, $postZip))) {
                    echo "Bind failed: " . $stmt->errno . " " . $stmt->error;
                }

                if (!$stmt->execute()) {
                    echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
                } else {
                    echo "<p><div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        Added " . $stmt->affected_rows . " rows to mby_restaurant.
                        </div></p>";
                }
                $stmt->close();
                getRestaurants($mysqli);
            }
        }

        /**
         * @param $getID
         * @param $mode
         * @param $mysqli
         */
        function deleteRestaurant($getID, $mysqli) {
            if (!($stmt = $mysqli->prepare("DELETE FROM mby_restaurant WHERE id = ?"))) {
                echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
            }

            if (!($stmt->bind_param('i', $getID))) {
                echo "Bind failed: " . $stmt->errno . " " . $stmt->error;
            }
            if (!$stmt->execute()) {
                echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
            }
            else {
                echo "<p><div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                Removed " . $stmt->affected_rows . " row from mby_restaurant.
                </div></p>";
            }
            $stmt->close();

            getRestaurants($mysqli);
        }

        /**
         * @param $postID
         * @param $postAddress
         * @param $postCity
         * @param $postState
         * @param $postZip
         * @param $mysqli
         */
        function updateRestaurant($postID, $postAddress, $postCity, $postState, $postZip, $mysqli) {
            if (!($stmt = $mysqli->prepare("UPDATE mby_restaurant SET address = ?, city = ?, state = ?, zip = ? WHERE id = ?"))) {
                echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
            }

            if (!($stmt->bind_param('ssssi', $postAddress, $postCity, $postState, $postZip, $postID))) {
                echo "Bind failed: " . $stmt->errno . " " . $stmt->error;
            }
            if (!$stmt->execute()) {
                echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
            }
            else {
                echo "<p><div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                Updated " . $stmt->affected_rows . " row in mby_restaurant.
                </div></p>";
            }
            $stmt->close();

            getRestaurants($mysqli);
        }


        ?>
        </tbody>
    </table>
    </form>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Restaurant Location</h4>
                </div>
                <div class="modal-body">
                    <form id="updateForm" class="form-horizontal" method="POST" action="restaurants.php">
                        <input type="hidden" name="mode" value="update">
                            <?php
                                if (isset($_GET["id"]) && !empty($_GET["id"]) && isset($_GET["mode"]) && !empty($_GET["mode"])) {
                                    $getID = $_GET['id'];
                                    $mode = $_GET['mode'];
                                }
                                if (isset($mode) && !empty($mode)) {
                                    if ($mode === "edit") {
                                        if (!($stmt = $mysqli->prepare("SELECT id, address, city, state, zip FROM mby_restaurant WHERE id = ?"))) {
                                            echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
                                        }
                                        if (!($stmt->bind_param('i', $getID))) {
                                            echo "Bind failed: " . $stmt->errno . " " . $stmt->error;
                                        }
                                        if (!$stmt->execute()) {
                                            echo "Execute failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
                                        }
                                        if (!$stmt->bind_result($id, $address, $city, $state, $zip)) {
                                            echo "Bind failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
                                        }

                                        $stmt->fetch();

                                        echo "<input type=\"hidden\" name=\"id\" value=\"". $id ."\">
                                            <div class=\"form-group\">
                                                <label class=\"col-md-2\" >Address:</label>
                                                <input class=\"col-md-4\" type=\"text\" name=\"address\" value=\"". $address ."\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-2\" >City:</label>
                                                <input class=\"col-md-4\" type=\"text\" name=\"city\" value=\"". $city ."\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-2\" >State:</label>
                                                <select class=\"col-md-4\" name=\"state\">
                                                    <option value=\"\">Choose...</option>";

                                        $statesArr = array(	'AL'=>'ALABAMA', 'AK'=>'ALASKA', 'AS'=>'AMERICAN SAMOA', 'AZ'=>'ARIZONA',
                                            'AR'=>'ARKANSAS', 'CA'=>'CALIFORNIA', 'CO'=>'COLORADO', 'CT'=>'CONNECTICUT', 'DE'=>'DELAWARE',
                                            'DC'=>'DISTRICT OF COLUMBIA', 'FM'=>'FEDERATED STATES OF MICRONESIA', 'FL'=>'FLORIDA', 'GA'=>'GEORGIA',
                                            'HI'=>'HAWAII', 'ID'=>'IDAHO', 'IL'=>'ILLINOIS', 'IN'=>'INDIANA', 'IA'=>'IOWA', 'KS'=>'KANSAS',
                                            'KY'=>'KENTUCKY', 'LA'=>'LOUISIANA', 'ME'=>'MAINE', 'MH'=>'MARSHALL ISLANDS', 'MD'=>'MARYLAND',
                                            'MA'=>'MASSACHUSETTS', 'MI'=>'MICHIGAN', 'MN'=>'MINNESOTA', 'MS'=>'MISSISSIPPI', 'MO'=>'MISSOURI',
                                            'MT'=>'MONTANA', 'NE'=>'NEBRASKA', 'NV'=>'NEVADA', 'NH'=>'NEW HAMPSHIRE', 'NJ'=>'NEW JERSEY',
                                            'NM'=>'NEW MEXICO', 'NY'=>'NEW YORK', 'NC'=>'NORTH CAROLINA', 'ND'=>'NORTH DAKOTA',
                                            'MP'=>'NORTHERN MARIANA ISLANDS', 'OH'=>'OHIO', 'OK'=>'OKLAHOMA', 'OR'=>'OREGON',
                                            'PA'=>'PENNSYLVANIA', 'RI'=>'RHODE ISLAND', 'SC'=>'SOUTH CAROLINA', 'SD'=>'SOUTH DAKOTA',
                                            'TN'=>'TENNESSEE', 'TX'=>'TEXAS', 'UT'=>'UTAH', 'VT'=>'VERMONT', 'VA'=>'VIRGINIA',
                                            'WA'=>'WASHINGTON', 'WV'=>'WEST VIRGINIA', 'WI'=>'WISCONSIN', 'WY'=>'WYOMING');
                                        foreach ($statesArr as $key=>$value) {
                                            if ($state !== $key) {
                                                echo "<option value=\"" . $key . "\">" . $value . "</option>";
                                            }
                                            else {
                                                echo "<option value=\"" . $key . "\" selected>" . $value . "</option>";
                                            }
                                        }


                                           echo "</select>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-2\" >Zip:</label>
                                                <input class=\"col-md-4\" type=\"text\" name=\"zip\" pattern=\"\\d{5}\" value=\"" . $zip . "\">
                                            </div>";
                                        $stmt->close();
                                    }
                                }

                            ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input name="submitEdit" value="Save" class="btn btn-primary" type="submit">
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->