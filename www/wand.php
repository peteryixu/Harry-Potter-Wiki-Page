<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Wand(s) Information</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<style type="text/css">
        <!--
        body,table{
            font-size: 20px;
        }
        table{
            table-layout:fixed;
            empty-cells:show; 
            border-collapse: collapse;
            margin: 0 auto;
            border: 1px solid #cad9ea;
        }
        th{
            height: 40px;
            font-size: 30px;
            font-weight: bold;
            background-color: #CCCCCC;
            text-align: center;
        }
        td{
            height: 30px;
	    font-size: 20px;
	    text-align: center;
        }
        .tableTitle{
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div style="margin:0 auto;width:1000px; border:1px #006600 solid; line-height:30px;">
        <div style="width:100%;height:40px; font-size:30px; font-weight:bold; text-align:center;">
            Wand(s) Information<br />
        </div>
        
        <table width="100%" border="1">
            <thead>
                <th scope="col">User's Full Name</th>
                <th scope="col">Wood</th>
                <th scope="col">Core</th>
                <th scope="col">Manufacturer</th>
                <th scope="col">Made Time</th>
                <th scope="col">Length</th> 
            </thead>>

	    <?php
	    $servername = "localhost";
	    $username = "root";
	    $password = "Fmy930407!";
	    $dbname = "HarryPotter";

	    $conn = mysqli_connect($servername, $username, $password, $dbname);
	    if (!conn) {
		echo "Connection failed: " . mysqli_connect_error();
	    }
	    $w_input = $_POST['Wand'];
	    $sql = "SELECT CONCAT(C.first_name, ' ', C.last_name) AS full_name, W.texture, W.core, W.manufacturer, W.made_time, W.length
                FROM Characters C LEFT JOIN Owned O ON C.chid = O.chid, Wands W
                WHERE W.wid = O.wid AND (
                        C.first_name = '{$w_input}' OR
                        C.middle_name = '{$w_input}' OR 
                        C.last_name = '{$w_input}' OR
                        CONCAT(C.first_name, ' ', C.last_name) = '{$w_input}' OR
                        W.texture = '{$w_input}' OR
                        W.core = '{$w_input}' OR
                        W.manufacturer = '{$w_input}')";
	    $result = mysqli_query($conn, $sql);

	    if (mysqli_num_rows($result) > 0) {
		    while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row["full_name"] ?></td>
                    <td><?php echo $row["texture"] ?></td>
                    <td><?php echo $row["core"] ?></td>
                    <td><?php echo $row["manufacturer"] ?></td>
                    <td><?php echo $row["made_time"] ?></td>
                    <td><?php echo $row["length"] ?></td>
                </tr>
                <?php
            }
	    }
        mysqli_close($conn);
	    ?> 
        </table>
    </div>

</body>
</html>
