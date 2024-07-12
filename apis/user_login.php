<?php
include ('config.php');

function add_user(){
    global $conn;
    $checkUserQ = "SELECT * FROM tbl_user WHERE username='". $_REQUEST['username']."'";
    echo $checkUserQ;
    $checkUserQResult = mysqli_query($conn, $checkUserQ);
    if (mysqli_num_rows($checkUserQResult) == 0) {
        $query = "INSERT INTO tbl_user(username,password) values('" . $_REQUEST['username'] . "','" . md5($_REQUEST['password']) . "')";
        mysqli_query($conn, $query);
        header('location:login.php?msg=1');
    }else{
        header('location:login.php?err_msg=username_exists');
    }
}

function save_contact(){
    global $conn;
    $filename = rand() . '_' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $filename);
    $filename = "'" . $filename . "'";
    $query = "INSERT INTO tbl_contact(name,address, city, image,message) values ('" . $_REQUEST['name'] . "',
    '" . $_REQUEST['address'] . "', 
    '" . $_REQUEST['city'] . "',
    $filename,
    '" . $_REQUEST['message'] . "' )";
    mysqli_query($conn, $query);
    header('location:index.php?msg=2');
}

function user_login(){
    global $conn;
    $q = "SELECT * FROM `tbl_user` WHERE `username`='" . $_REQUEST['username'] . "' and `password`='" . md5($_REQUEST['password']) . "' and role='user'";
    $query = mysqli_query($conn, $q);
    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['username'] = $row['username'];
        header('location:index.php');
    } else {
        header('location:login.php?msg=4');
    }
}


function admin_login(){
    global $conn;
        $q = "SELECT * FROM `tbl_user` WHERE `username`='" . $_REQUEST['username'] . "' and `password`='" . md5($_REQUEST['password']) . "' and role='admin'";
        echo $q;
        $query = mysqli_query($conn, $q);
        if (mysqli_num_rows($query) == 1) {
            $row = mysqli_fetch_assoc($query);
            session_start();
            $_SESSION['username'] = $row['username'];
            header('location:admin_panel.php');
        } else {
            header('location:admin_login.php?msg=4');
        }
}

function my_account(){
    global $conn;
    $filename = rand() . '_' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $filename);

    $filename = "'" . $filename . "'";

    $query = "INSERT INTO tbl_account(name,image) values('" . $_REQUEST['name'] . "',$filename )";
    mysqli_query($conn, $query);
    header('location:account.php?msg=5');
}

function edit_user(){
	echo "Hii";
    global $conn;

    $file_name=$str="";

    if($_FILES['image']['name']!=""){
    $file_name=rand().'_'.$_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$file_name);
    $str=",`image`='".$file_name."'";
    }

    $query = "UPDATE `tbl_account` SET `name`='".$_REQUEST['name']."', `image`='".$file_name."' $str WHERE `id`='".$_REQUEST['id']."'";

    echo $query;

    mysqli_query($conn,$query);

    header('location:account.php?msg=6');	
}

function edit_contact(){
	
    global $conn;

    $file_name=$str="";
    if($_FILES['image']['name']!=""){
    $file_name=rand().'_'.$_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$file_name);
    $str=",`image`='".$file_name."'";
}

    mysqli_query($conn,"UPDATE `tbl_contact` SET 
        `name`='".$_REQUEST['name']."',
        `address`='".$_REQUEST['address']."',
        `city`='".$_REQUEST['city']."',
        `message`='".$_REQUEST['message']."',
        `image`='".$file_name."'
        $str
        WHERE `id`='".$_REQUEST['id']."'
    ");
    header('location:admin_panel.php?msg=7');	
}

function get_contact_details($id){
    global $conn;

    $query=mysqli_query($conn,"SELECT * FROM `tbl_contact` WHERE `id`='".$id."'");
    if(mysqli_num_rows($query)==1){
        return mysqli_fetch_assoc($query);
    }
    return false;
}

function get_user_details($id){
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM `tbl_account` WHERE `id`='" . $id . "'");
    if (mysqli_num_rows($query) == 1) {
        return mysqli_fetch_assoc($query);
    }
    return false;
}

if (isset($_REQUEST['page_action'])) {
    switch ($_REQUEST['page_action']) {
        case 'add_user':
            add_user();
            break;

        case 'edit_user':
            edit_user();
            break;

        case 'user_login':
            user_login();
            break;

        case 'add_contact':
            save_contact();
            break;

        case 'my_account':
            my_account();
            break;

        case 'admin_login':
            admin_login();
            break;

        case 'edit_contact':
            edit_contact();
            break;
    }
}

?>