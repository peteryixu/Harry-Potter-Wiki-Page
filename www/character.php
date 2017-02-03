<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Character(s) Profile</title>
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
            Character(s) Profile<br />
        </div>
        
        <table width="100%" border="1">
            <thead>
                <th scope="col">First name</th>
                <th scope="col">Middle name</th>
                <th scope="col">Last name</th>
                <th scope="col">Gender</th>
                <th scope="col">Blood Status</th>
                <th scope="col">House</th>
                <th scope="col">Date of Birth</th> 
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
	    $ch_input = $_POST['Character'];
	    $sql = "SELECT C.first_name, C.middle_name, C.last_name, C.gender, C.blood_status, C.house, C.DOB
                FROM Characters C 
                WHERE C.first_name = '{$ch_input}' OR
                        C.middle_name = '{$ch_input}' OR 
                        C.last_name = '{$ch_input}' OR
                        C.gender = '{$ch_input}' OR
                        C.blood_status = '{$ch_input}' OR
                        C.house = '{$ch_input}' OR 
				        CONCAT(C.first_name, ' ', C.last_name) = '{$ch_input}'";
	    $result = mysqli_query($conn, $sql);

	    if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row["first_name"] ?></td>
                    <td><?php echo $row["middle_name"] ?></td>
                    <td><?php echo $row["last_name"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["blood_status"] ?></td>
                    <td><?php echo $row["house"] ?></td>
                    <td><?php echo $row["DOB"] ?></td>
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
