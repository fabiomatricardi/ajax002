<?php
include 'db.php';
if($_REQUEST['req'] != '') {
    if($_REQUEST['req'] == 'add') {
        $name = $_REQUEST['st_name'];
        $surname = $_REQUEST['st_surname'];
        $email = $_REQUEST['st_email'];
        $mobile = $_REQUEST['st_mobile'];
        $address = $_REQUEST['st_address'];
        $department = $_REQUEST['st_department'];
        $ins = "INSERT INTO employee (name,surname,email,mobile,address,department) VALUES ('$name','$surname','$email','$mobile','$address','$department')";
        $ins_run = mysqli_query($conn, $ins);
        
    }
    elseif($_REQUEST['req'] == 'del'){
        $id = $_REQUEST['id'];
        $del = "DELETE FROM employee WHERE id = '$id'";
        $del_run = mysqli_query($conn, $del);
    }
}
$sel = "SElECT * FROM employee";
$sel_run = mysqli_query($conn, $sel);
$count =1;
while($rows = mysqli_fetch_assoc($sel_run)){ ?>

<tr>
    <td><?php echo $count; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['surname']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['mobile']; ?></td>
    <td><?php echo $rows['address']; ?></td>
    <td><?php echo $rows['department']; ?></td>
        <td>
        <a class="btn btn-success btn-xs">Edit</a>
            
        <a class="btn btn-danger btn-xs" onclick="ajax('del', <?php echo $rows['id']; ?>)">Delete</a>
        </td>
    </tr>
    
<?php
    $count++;
}
?>
