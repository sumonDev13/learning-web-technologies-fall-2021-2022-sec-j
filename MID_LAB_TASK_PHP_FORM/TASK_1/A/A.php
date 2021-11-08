<?php
      mysql_connect("localhost", "root", "");
    mysql_select_db("byp");

    if(isset($_POST['submit'])){
        $region=$_POST['region'];
        $country=$_POST['country'];
        $duration=$_POST['duration'];

        //define the index for the All option
        $optionAllValue = 0; //add here the option index value used for the 'All' option
        //define the where clause for the query
        //in order to avoid many conditions verifications, we start it as 1=1
        $whereClause = "1=1";

        //now we check if the option selected for each field is not the value defined for the option 'All'
        //this is just an example, and the best would be to create a function to avoid the replication of code 
        if($region != $optionAllValue)
        {
            $whereClause = $whereClause." and region='$region'";
        }
        if($country != $optionAllValue)
        {
            $whereClause = $whereClause." and country='$country'";
        }
        if($duration != $optionAllValue)
        {
            $whereClause = $whereClause." and duration='$duration'";
        }

        $query = "select * from byp_tour where ".$whereClause;

        //original query select * from byp_tour where region='$region' and country='$country' and duration='$duration'"
        $tour = mysql_query($query);
        $tourNum = mysql_num_rows($tour);

        if($tourNum >0){

            while($result=mysql_fetch_array($tour)){

                $tour_name = $result['tour_name'];
                $tour_detail = $result['tour_detail'];

                echo "Tour Name: $tour_name";  // HERE IS THE OUTPUT RESULT
                echo "<br />";
                echo "Tour Detail: $tour_detail";
                echo "<br />";
                echo "<br />";
                echo "<br />";
            }
        }
        else{
            echo "No Tour Found";
            echo "<br />";
            echo "<br />";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BYP Test</title>
    </head>
    <body>
        <form action="searchtest.php" method="post">
            <div>
                <label>Region</label>
                <select id="region" name="region">
                    <option value="0">All</option>
                    <option value="1">South East Asia</option>
                    <option value="2">Africa</option>
                    <option value="3">Europe</option>
                    <option value="4">America</option>
                    <option value="5">Australia</option>                               
                </select>
            </div>
            <div>
                <label>Country</label>
                <select id="country" name="country">
                <option value="0">All</option>
                <option value="1">Cambodia</option>
                <option value="2">Thailand</option>
                <option value="3">Vietnam</option>
                <option value="4">Myanmar</option>
                <option value="5">Laos</option>
                <option value="6">Ethiopia</option>
                <option value="7">France</option>
                <option value="8">New York City</option>
                <option value="9">Melbourne</option>
            </select>
        </div>
        <div>
            <label>Duration</label>
            <select id="duration" name="duration">
                <option value="0">All</option>
                <option value="1">5 Days</option>
                <option value="2">10 Days</option>
            </select>
        </div>
        <input type="submit" name="submit" value="submit" />
        </form>
    </body>
</html>