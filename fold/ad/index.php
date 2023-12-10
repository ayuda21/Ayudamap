<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/admin.css">
        
    <title>Dashboard</title>
    <style>
        .dashbord-tables{
            animation: transitionIn-Y-over 0.5s;
        }
        .filter-container{
            animation: transitionIn-Y-bottom  0.5s;
        }
        .sub-table{
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
</head>
<body>
    <?php

    session_start();
    
        include("connection.php");

        $list11 = $database->query("SELECT full_name FROM request;");
        $beneficiariesrow = $database->query("SELECT * FROM beneficiaries;");
        $employeerow = $database->query("SELECT * FROM employee;");
    
    ?>
    <div class="container">
        <div class="menu">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                
                                </td>
                               
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="../map/admap.php" ><input type="button" value="Map" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
                            
                        </table>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn" >
                        <a href="index.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text">Dashboard</p></a></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn">
                        <a href="employee.php" class="non-style-link-menu "><div><p class="menu-text">Employee</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-bene">
                        <a href="bene.php" class="non-style-link-menu"><div><p class="menu-text">Beneficiaries</p></a></div>
                    </td>
                </tr>
                <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                
                                </td>
                               
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="logout.php" ><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
            </table>
        </div>
        <div class="dash-body" style="margin-top: 15px">
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;" >
                        
                        <tr >
                            
                            <td colspan="2" class="nav-bar" >
                                
                                <form action="index.php" method="post" class="header-search">
        
                                    <input type="search" name="search" class="input-text header-searchbar" placeholder="Search Name" list="request">&nbsp;&nbsp;
                                    
                                    <?php
                                echo '<datalist id="request">';
                                $list11 = $database->query("select full_name from request;");

                                for ($y=0;$y<$list11->num_rows;$y++){
                                    $row00=$list11->fetch_assoc();
                                    $d=$row00["full_name"];
                                    
                                    echo "<option value='$d'><br/>";
                                   
                                };

                            echo ' </datalist>';
?>
                                    
                               
                                    <input type="Submit" value="Search" class="login-btn btn-primary-soft btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                                
                                </form>
                                
                            </td>
                            <td width="15%">
                              
                         
                                    <?php 
                              


                                $beneficiariesrow = $database->query("SELECT * FROM beneficiaries;");
                                $employeerow = $database->query("SELECT * FROM employee;");
                                $requestrow = $database->query("SELECT * FROM request;");
 


                                ?>
                                </p>
                            </td>
                          
        
        
                        </tr>
                <tr>
                    <td colspan="4">
                        
                        <center>
                        <table class="filter-container" style="border: none;" border="0">
                            <tr>
                                <td colspan="4">
                                    <p style="font-size: 20px;font-weight:600;padding-left: 12px;">Status</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex">
                                        <div>
                                                <div class="h1-dashboard">
                                                    <?php    echo $employeerow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Employees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="background-image: url('../img/icons/employee-hover.svg');"></div>
                                    </div>
                                </td>
                                <td style="width: 25%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex;">
                                        <div>
                                                <div class="h1-dashboard">
                                                    <?php    echo $beneficiariesrow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard">
                                                Beneficiaries &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="background-image: url('../img/icons/bene-hover.svg');"></div>
                                    </div>
                              
                            </tr>
                        </table>
                    </center>
                    <div class="dash-body">
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;margin-top:25px; ">
              
            <tr>
    <td colspan="4" style="padding-top:10px;">
        <p class="heading-main12" style="margin-left: 45px;font-size:18px;color:rgb(49, 49, 49)">
            Unapproved Beneficiaries (<?php echo $list11->num_rows; ?>)
        </p>
    </td>
</tr>
                <?php
                    if($_POST){
                        $keyword=$_POST["search"];
                        
                        $sqlmain= "select * from request where full_name='$keyword' or full_name like '$keyword%' or full_name like '%$keyword' or full_name like '%$keyword%'";
                    }else{
                        $sqlmain= "select * from request order by user_id desc";

                    }



                ?>
                  
                  <tr>
                   <td colspan="4">
                       <center>
                        <div class="abc scroll">
                        <table width="93%" class="sub-table scrolldown" border="0">
                        <thead>
                        <tr>
                                <th class="table-headin">
                                    
                                
                               Name
                                
                                </th>

                                <th class="table-headin">

                                    Gender
                                    </th>


                                <th class="table-headin">

                                   Status
                                    </th>

                                <th class="table-headin">

                                   Date of Birth
                                </th>
                                

                                <th class="table-headin">

                                    Address

                                    </th>

                        </thead>
                        <tbody>
                        
                            <?php

                                
                                $result= $database->query($sqlmain);

                                if ($result === false) {
                                    
                                    die("Query failed: " . $database->error);
                                } else{

                                

                                if($result->num_rows==0){
                                    echo '<tr>
                                    <td colspan="4">
                                    <br><br><br><br>
                                    <center>
                               
                                    
                                    <br>
                                    <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">We  couldnt find anything related to your keywords !</p>
                                    <a class="non-style-link" href="index.php"><button  class="login-btn btn-primary-soft btn"  style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Show all&nbsp;</font></button>
                                    </a>
                                    </center>
                                    <br><br><br><br>
                                    </td>
                                    </tr>';
                                    
                                }
                                else{
                                for ( $x=0; $x<$result->num_rows;$x++){
                                    $row=$result->fetch_assoc();
                                    $id=$row["user_id"];
                                    $name=$row["full_name"];
                                    $status=$row["status"];
                                    $address=$row["address"];
                                    $dob=$row["dob"];
                                    $gender=$row["gender"];
                                    echo '<tr>
                                        <td> &nbsp;'.
                                        substr($name,0,40)
                                        .'</td>
                                        <td>
                                        '.substr($gender,0,12).'
                                        </td>
                                        <td>
                                        '.substr($status,0,20).'
                                        </td>
                                        <td>
                                        '.substr($dob,0,16).'
                                        </td>                                        
                                        <td>
                                        '.substr($address,0,40).'
                                        </td>
                                
                                        <td>
                                        <div style="display:flex;justify-content: center;">
                                        <a href="?action=view&id='.$id.'" class="non-style-link"><button  class="btn-primary-soft btn button-icon btn-view"  style="padding-left: 40px;padding-top: 12px;padding-bottom: 12px;margin-top: 10px;"><font class="tn-in-text">View</font></button></a>
                                       &nbsp;&nbsp;&nbsp;
                                        <a href="?action=approve&id='.$id.'&error=0" class="non-style-link"><button  class="btn-primary-soft btn button-icon btn-add"  style="padding-left: 40px;padding-top: 12px;padding-bottom: 12px;margin-top: 10px;"><font class="tn-in-text">Approve</font></button></a>
                                        &nbsp;&nbsp;&nbsp;
                                        
                                       <a href="?action=drop&id='.$id.'&name='.$name.'" class="non-style-link"><button  class="btn-primary-soft btn button-icon btn-delete"  style="padding-left: 40px;padding-top: 12px;padding-bottom: 12px;margin-top: 10px;"><font class="tn-in-text">Remove</font></button></a>
                                        </div>
                                        </td>
                                    </tr>';
                                    
                                }
                            }
                        }
                            ?>
 
                            </tbody>

                        </table>
                        </div>
                        </center>
                   </td> 
                </tr>
                       
                        
                        
            </table>
        </div>
    </div>
    <?php 
    if($_GET){
        
        $id=$_GET["id"];
        $action=$_GET["action"];
        if($action=='drop'){
            $nameget=$_GET["full_name"];
            echo '
            <div id="popup1" class="overlay">
                    <div class="popup">
                    <center>
                        <h2>Are you sure?</h2>
                        <a class="close" href="index.php">&times;</a>
                        <div class="content">
                            You want to delete this record<br>('.substr($nameget,0,40).').
                            
                        </div>
                        <div style="display: flex;justify-content: center;">
                        <a href="delete-req.php?id='.$id.'" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"<font class="tn-in-text">&nbsp;Yes&nbsp;</font></button></a>&nbsp;&nbsp;&nbsp;
                        <a href="index.php" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"><font class="tn-in-text">&nbsp;&nbsp;No&nbsp;&nbsp;</font></button></a>

                        </div>
                    </center>
            </div>
            </div>
            ';
        }elseif($action=='view'){
            $sqlmain= "select * from request where user_id='$id'";
            $result= $database->query($sqlmain);
            $row=$result->fetch_assoc();
            $name=$row["full_name"];
            $username=$row["username"];
            $address=$row["address"];
            $dob=$row["dob"];
            echo '
            <div id="popup1" class="overlay">
                    <div class="popup">
                    <center>
                        <h2></h2>
                        <a class="close" href="index.php">&times;</a>
                        <div style="display: flex;justify-content: center;">
                        <table width="80%" class="sub-table scrolldown add-doc-form-container" border="0">
                        
                            <tr>
                                <td>
                                    <p style="padding: 0;margin: 0;text-align: left;font-size: 25px;font-weight: 500;"> Details</p><br><br>
                                </td>
                            </tr>

                            <tr>
                                
                                <td class="label-td" colspan="2">
                                    <label for="name" class="form-label">Name: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    '.$name.'<br><br>
                                </td>
                                
                            </tr>
                            <tr>
                                
                            <td class="label-td" colspan="2">
                                <label for="gender" class="form-label">Gender: </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-td" colspan="2">
                                '.$gender.'<br><br>
                            </td>
                            
                        </tr>
                            <tr>
                                
                            <td class="label-td" colspan="2">
                                <label for="status" class="form-label">Status: </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-td" colspan="2">
                                '.$status.'<br><br>
                            </td>
                            
                        </tr>
                        
                        <td class="label-td" colspan="2">
                        <label for="dob" class="form-label">Date of Birth: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                        '.$dob.'<br><br>
                    </td>
                    
                </tr>


                            <tr>
                                
                            <td class="label-td" colspan="2">
                                <label for="address" class="form-label">Address: </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-td" colspan="2">
                                '.$address.'<br><br>
                            </td>
                            
                        </tr>
                       

                            <tr>
                                <td colspan="2">
                                    <a href="index.php"><input type="button" value="OK" class="login-btn btn-primary-soft btn" ></a>
                                
                                    
                                </td>
                
                            </tr>
                           

                        </table>
                        </div>
                    </center>
                    <br><br>
            </div>
            </div>
            ';
        }elseif($action=='add'){
                $error_1=$_GET["error"];
                $errorlist= array(
                    '1'=>'<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Already have an account for this Person.</label>',
                    '2'=>'<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Password Confirmation Error! Reconfirm Password</label>',
                    '3'=>'<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;"></label>',
                    '4'=>"",
                    '0'=>'',

                );
                if($error_1!='4'){
                echo '
            <div id="popup1" class="overlay">
                    <div class="popup">
                    <center>
                    
                        <a class="close" href="index.php">&times;</a> 
                        <div style="display: flex;justify-content: center;">
                        <div class="abc">
                        <table width="80%" class="sub-table scrolldown add-doc-form-container" border="0">
                        <tr>
                                <td class="label-td" colspan="2">'.
                                    $errorlist[$error_1]
                                .'</td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="padding: 0;margin: 0;text-align: left;font-size: 25px;font-weight: 500;">Add Beneficiary</p><br><br>
                                </td>
                            </tr>
                            <tr>
                                <form action="add-bene.php" method="POST" class="add-new-form">
                            <tr>
                        
                                <td class="label-td" colspan="2">
                                    <label for="name" class="form-label">Name: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="text" name="name" class="input-text" placeholder="Name" required><br>
                                </td>
                                
                            </tr>

                            <tr>
                              <td class="label-td" colspan="2">
                                <label>Gender</label>
                                </td>
                                            </tr>
                                            <tr>
                                <td class="label-td" colspan="2">
                <input type="radio" name="gender" value="Female" required> Female
                <input type="radio" name="gender" value="Male" required> Male
           </td></tr> 

                                        <tr>
                                        <td class="label-td" colspan="2">
                                            <label>Status:</label>
                                            </td>
                                                        </tr>
                                                        <tr>
                                            <td class="label-td" colspan="2">
                                <input type="radio" name="status" value="Single Parent" required> Single Parent
                                <input type="radio" name="status" value="Senior Citizen" required> Senior Citizen
                                </td></tr> 
             
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="address" class="form-label">Address: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="address" name="address" class="input-text" placeholder="Address" required><br>
                                </td>
                            </tr><tr>
                                <td class="label-td" colspan="2">
                                    <label for="dob" class="form-label">Date of Birth: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="date" name="dob" class="input-text" placeholder="Date of Birth" required><br>
                                </td>
                            </tr>
                            
                
                            <tr>
                                <td colspan="2">
                                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                    <input type="submit" value="Add" class="login-btn btn-primary btn">
                                </td>
                
                            </tr>
                           
                            </form>
                            </tr>
                        </table>
                        </div>
                        </div>
                    </center>
                    <br><br>
            </div>
            </div>
            ';

            }else{
                echo '
                    <div id="popup1" class="overlay">
                            <div class="popup">
                            <center>
                            <br><br><br><br>
                                <h2>Added Successfully!</h2>
                                <a class="close" href="index.php">&times;</a>
                                <div class="content">
                                    
                                    
                                </div>
                                <div style="display: flex;justify-content: center;">
                                
                                <a href="index.php" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"><font class="tn-in-text">&nbsp;&nbsp;OK&nbsp;&nbsp;</font></button></a>

                                </div>
                                <br><br>
                            </center>
                    </div>
                    </div>
        ';
            }
        }elseif($action=='approve'){
            $nameget=$_GET["full_name"];
            echo '
            <div id="popup1" class="overlay">
                    <div class="popup">
                    <center>
                        <h2>Are you sure?</h2>
                        <a class="close" href="index.php">&times;</a>
                        <div class="content">
                            You want to add this record<br>('.substr($nameget,0,40).').
                            
                        </div>
                        <div style="display: flex;justify-content: center;">
                        <a href="approve.php?id='.$id.'" class="non-style-link"><button name="add"  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"<font class="tn-in-text">&nbsp;Yes&nbsp;</font></button></a>&nbsp;&nbsp;&nbsp;
                        <a href="index.php" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"><font class="tn-in-text">&nbsp;&nbsp;No&nbsp;&nbsp;</font></button></a>

                        </div>
                    </center>
            </div>
            </div>
            ';
        }



        }; 
    

?>
</div>

</body>
</html>