<?php
include_once "classDatabase.php";
include_once "classBuilding.php";
include_once "classContent.php";

class RoomView
{
    public static function AddRoom()
    {
        $Result=Building::ViewDropdown();
        include_once "header.php";

        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> اضافة غرفة</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
        <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 93%;font-size:20px;color:black;">المبني<span class="text-danger">*</span></label>
            <select class="form-control" name="BuildingNo" id="BuildingNo" style="direction:RTL;" required>';
            for($k=0;$k<count($Result);$k++)
            {
            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Building.'</option> ';
            } 
echo '
</select>
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">رقم الدور<span class="text-danger">*</span></label>
                <select class="form-control" name="FloorNo" id="FloorNo" style="direction:RTL;" required>
                </select>
            <script type="text/javascript">
$(document).ready(function(){
$("#BuildingNo").on("change",function(){
    var BuildingNo = $(this).val();
    if(BuildingNo){
        $.ajax({
            type:"POST",
            url:"ajaxpro8.php",
            data:"BuildingNo="+BuildingNo,
            success:function(html){
                $("#FloorNo").html(html);
            }
        }); }
});
});
</script>
            
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">رقم الغرفه<span class="text-danger">*</span></label>
            <input id="pass" type="text" name="room" class="form-control">
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 93%;font-size:20px;color:black;">العدد<span class="text-danger">*</span></label>
                <input id="pass" type="text" name="Capacity" class="form-control">
            </div>';                                 
            $cont3=Content::Button(16,"Submit");
            echo '
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            <div class="register-link m-t-15 text-center">
            </div>
        </form>
</div>
    

</div>';

        include_once "footer.php";
    }
    public static function UpdateRoom()
    {
        $Result=Building::ViewDropdown();
        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> تعديل غرفة</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
        <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 93%;font-size:20px;color:black;">المبني<span class="text-danger">*</span></label>
            <select class="form-control" name="BuildingNo" id="BuildingNo" style="direction:RTL;" required>';
            for($k=0;$k<count($Result);$k++)
            {
            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Building.'</option> ';
            } 
echo '
</select>
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">رقم الدور<span class="text-danger">*</span></label>
                <select class="form-control" name="FloorNo" id="FloorNo" style="direction:RTL;" required>
                </select>
            <script type="text/javascript">
$(document).ready(function(){
$("#BuildingNo").on("change",function(){
    var BuildingNo = $(this).val();
    if(BuildingNo){
        $.ajax({
            type:"POST",
            url:"ajaxpro8.php",
            data:"BuildingNo="+BuildingNo,
            success:function(html){
                $("#FloorNo").html(html);
            }
        }); }
});
});
</script>
            
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">رقم الغرفه<span class="text-danger">*</span></label>
            <select class="form-control" name="room" id="room" style="direction:RTL;" required>

</select>
<script type="text/javascript">
$(document).ready(function(){
$("#FloorNo").on("change",function(){
    var BuildingNo = $("#BuildingNo").val();
    var FloorNo = $(this).val();
    if(BuildingNo){
        $.ajax({
            type:"POST",
            url:"ajaxpro7.php",
            data:"BuildingNo="+BuildingNo+"&FloorNo="+FloorNo,
            success:function(html){
                $("#room").html(html);
            }
        }); }
});
});
</script>
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 93%;font-size:20px;color:black;">العدد<span class="text-danger">*</span></label>
                <input id="pass" type="text" name="Capacity" class="form-control">
            </div>';                                 
            $cont3=Content::Button(22,"Submit");
            echo '
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            <div class="register-link m-t-15 text-center">
            </div>
        </form>
</div>
    

</div>';
        include_once "footer.php";
    }
    public static function DeleteRoom()
    {
        $Result=Building::ViewDropdown();
        include_once "header.php";

        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> مسح غرفة</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
        <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 93%;font-size:20px;color:black;">المبني<span class="text-danger">*</span></label>
            <select class="form-control" name="BuildingNo" id="BuildingNo" style="direction:RTL;" required>';
            for($k=0;$k<count($Result);$k++)
            {
            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Building.'</option> ';
            } 
echo '
</select>
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">رقم الدور<span class="text-danger">*</span></label>
                <select class="form-control" name="FloorNo" id="FloorNo" style="direction:RTL;" required>
                </select>
            <script type="text/javascript">
$(document).ready(function(){
$("#BuildingNo").on("change",function(){
    var BuildingNo = $(this).val();
    if(BuildingNo){
        $.ajax({
            type:"POST",
            url:"ajaxpro8.php",
            data:"BuildingNo="+BuildingNo,
            success:function(html){
                $("#FloorNo").html(html);
            }
        }); }
});
});
</script>
            
            </div>
            <div class="form-group">
            <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">رقم الغرفه<span class="text-danger">*</span></label>
            <select class="form-control" name="room" id="room" style="direction:RTL;" required>

</select>
<script type="text/javascript">
$(document).ready(function(){
$("#FloorNo").on("change",function(){
    var BuildingNo = $("#BuildingNo").val();
    var FloorNo = $(this).val();
    if(BuildingNo){
        $.ajax({
            type:"POST",
            url:"ajaxpro7.php",
            data:"BuildingNo="+BuildingNo+"&FloorNo="+FloorNo,
            success:function(html){
                $("#room").html(html);
            }
        }); }
});
});
</script>';                                 
$cont3=Content::Button(23,"Submit");
echo '
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            <div class="register-link m-t-15 text-center">
            </div>
        </form>
</div>
    

</div>';

        include_once "footer.php";
    }
    public static function ShowAllRooms($Result)
	{
		
            include_once "header.php";
            echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع الغرف</h2>
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
                                    <th>السعة</th>
                                        <th>الدور</th>
                                        <th>المبني</th>
                                        <th>رقم الغرفة</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                for ($i=0;$i<count($Result);$i++)
                                {
                                    echo "<tr>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Capacity . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->FloorNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->BuildingNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->RoomNo . "</td>";
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

}
?>