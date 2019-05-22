<?php
include_once "classDatabase.php";
include_once "classUserType.php";
include_once "classContent.php";
class ViewUsertype
{
    public static function userTypeview($Result)
	{
        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع المهن</h2>
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">تنزيل البيانات</h4>
                        <h6 class="card-subtitle">Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                <th>اسم الصفحه</th>
                                </tr>
                                </thead>
                            <tbody>';
                            for ($i=0;$i<count($Result);$i++)
                            {
                                echo "<tr>";
                                echo "<td style='color:#514F4E;'>" . $Result[$i]->Type."</td>";
                                echo "</tr>"; 
                            }
                                echo '
                            </tbody>
                        </table>
                        </div>
                    
                </div>
            </div>
            </div>
        </div>';

        include_once "footer.php";
    }

    public static function addUserType()
    {
        include_once "header.php";
        
      echo'  <h2 style="text-align:center; color: rgba(45, 65, 21)"> اضافة مهنة</h2>
                                
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            
      <div class="form-group">
                <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >المهنة<span class="text-danger">*</label>
                <input id="user" type="text" name="usertype" class="form-control" style="direction:RTL;"  required  >
            
       <br>';                                     
       $cont3=Content::Button(8,"Submit");
       echo'
       
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            <div class="register-link m-t-15 text-center">
            </div>
        </form>
        </div>
    

       </div>';
        include_once "footer.php";
    }
    public static function deleteUsertype()
    {
        $Result=UserType::ViewPermDropdown();
        include_once "header.php";
        echo'<div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            
     <div class="form-group">
                <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >المهنة<span class="text-danger">*</label>
                <select class="form-control" name="Type" id="Type" style="direction:RTL;"required>';

 
                for($k=0;$k<count($Result);$k++)
                {
                echo '<option  Selected value="'.$Result[$k]->ID.'">'.$Result[$k]->Type.'</option> ';
                }  
    echo'</select>
        <br>';                                     
        $cont3=Content::Button(9,"Submit");
        echo'
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            <div class="register-link m-t-15 text-center">
            </div>
        </form>
     </div>
     </div>';
    

        include_once "footer.php";
    }
}
?>