<?php
include_once "classDatabase.php";
include_once "classUserType.php";
include_once "classContent.php";

class Permission
{ 
    public static function viewPermission($Result,$Result2)
    {
        include_once "header.php";
        echo'<br>
        <h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع اذون الاستخدام</h2>
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
                    <th>اذن الاستخدام</th>
                    <th>المهنة</th>
                    </tr>
                </thead>
                <tbody>';
                for ($i=0;$i<count($Result2);$i++)
                {
                   echo "<tr>";
                   echo "<td style='color:#514F4E;'>" .$Result[$i]->FriendlyAddress."</td>";
                   echo "<td style='color:#514F4E;'>" .$Result2[$i]->Type."</td>";
                   echo "</tr>"; 
                }
               echo' </tbody>
            </table>
         </div>
        </div>
        </div>
        </div>
        </div>';


        include_once "footer.php";
    }

 public static function deleteper()
  {
    include_once "header.php";
    echo '<html>
        <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#userType_ID").on("change",function(){
                var userTypeid = $(this).val();
                if(userTypeid){
                    $.ajax({
                        type:"POST",
                        url:"ajaxpro4.php",
                        data:"userTypeid="+userTypeid,
                        success:function(html){
                            $("#permission").html(html);
                        }
                    }); }
            });
        });
        </script>
        </head>
        </html>';
        $Result=UserType::ViewPermDropdown();
     echo'<br>
    <h2 style="text-align:center; color: rgba(45, 65, 21)"> مسح اذن استخدام</h2>
    <div class="form-validation">
    <form class="form-valide" method="post" id="form" name="myForm">
        <div class="form-group">
            <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >المهنة<span class="text-danger">*</label>
            <select class="form-control" name="userType_ID" id="userType_ID" style="direction:RTL;"required>';
      
            for($k=0;$k<count($Result);$k++)
            {
            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Type.'</option> ';
            }  
        echo'</select>
    <br>
            <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >الاذن<span class="text-danger">*</label>
            <select class="form-control" name="permission" id="permission" style="direction:RTL;" required>

</select>
</div>
';                                 
$cont3=Content::Button(14,"Submit");
echo '
        <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
        <div class="register-link m-t-15 text-center">
        </div>
    </form>
</div>


</div>';
    include_once "footer.php";
   }

   public static function addperm()
   {
        include_once "header.php";
        echo '<html>
        <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                $("#userType_ID").on("change",function(){
                var userTypeid = $(this).val();
                if(userTypeid){
                    $.ajax({
                            type:"POST",
                            url:"ajaxpro5.php",
                            data:"userTypeid="+userTypeid,
                            success:function(html){
                            $("#permission").html(html);
                            }
                    }); }
                    });
                    });
                    </script>
        </head>
        </html>';
        $Result=UserType::ViewPermDropdown();
        echo '<br>
        <h2 style="text-align:center; color: rgba(45, 65, 21)"> اضافة اذن استخدام</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
        <div class="form-group">
            <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >المهنة<span class="text-danger">*</label>
            <select class="form-control" name="userType_ID" id="userType_ID" style="direction:RTL;"required>';
      
            for($k=0;$k<count($Result);$k++)
            {
            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Type.'</option> ';
            }  
        echo '</select>
                <br>
                <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >الاذن<span class="text-danger">*</label>
                <select class="form-control" name="permission" id="permission" style="direction:RTL;" required>

            </select>
            </div>
            ';                                 
            $cont3=Content::Button(15,"Submit");
            echo '
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            <div class="register-link m-t-15 text-center">
            </div>
            </form>
            </div>';
         include_once "footer.php";
   }
}
?>