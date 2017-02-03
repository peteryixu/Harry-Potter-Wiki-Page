<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Character Relation</title>
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
            Character Relation<br />
        </div>
        
        <table width="100%" border="1">
            <thead>
                <th scope="col">Character1</th>
                <th scope="col">Character2</th>
                <th scope="col">Relation</th>
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
	    $r_input = $_POST['Relation'];
	    $sql = "SELECT CONCAT(C1.first_name, ' ', C1.last_name) AS ch1, 
                        CONCAT(C2.first_name, ' ', C2.last_name) AS ch2,
                        R.type
                FROM Character_Relation R, Characters C1, Characters C2
                WHERE C1.chid=R.chid1 And C2.chid=R.chid2 AND (
                        C1.first_name = '{$r_input}' OR
                        C1.middle_name = '{$r_input}' OR 
                        C1.last_name = '{$r_input}' OR
                        CONCAT(C1.first_name, ' ', C1.last_name) = '{$r_input}' OR
                        C2.first_name = '{$r_input}' OR
                        C2.middle_name = '{$r_input}' OR 
                        C2.last_name = '{$r_input}' OR
                        CONCAT(C2.first_name, ' ', C2.last_name) = '{$r_input}')
                        ORDER BY ch1";
	    $result = mysqli_query($conn, $sql);

	    if (mysqli_num_rows($result) > 0) {
		    while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row["ch1"] ?></td>
                    <td><?php echo $row["ch2"] ?></td>
                    <td><?php echo $row["type"] ?></td>
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