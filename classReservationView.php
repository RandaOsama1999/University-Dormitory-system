<?php
include_once "classDatabase.php";
include_once "classBuilding.php";
include_once "classReservation.php";
include_once "classContent.php";

include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
class ReservationView
{
    public static function SearchReserves()
    {
        include_once "header.php";
        echo '<html>
        <head>
        <style>
        .result{ 
            box-sizing: border-box;
        }
        .result p{
            width: 100%;
            margin: 0;
            text-align:center;
            font-size:15px;
            color:black;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
        }
        .result p:hover{
            background: #f2f2f2;
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".search-box input").keyup(function(){
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(); //result
                if(inputVal.length){
                    $.get("backend-search2.php", {term: inputVal}).done(function(data){
                        resultDropdown.html(data); //set
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find("input").val($(this).html());
                $(this).parent(".result").empty();
            });
        });
        </script>
        <script type="text/javascript">
               $(document).ready(function(){
                $(".close").click(function(){
                    $("#myModal").hide();
                });
            });
        </script>
        </head>
        </html>';
        echo '<div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            
                <h3 style="text-align:center; color: rgba(45, 65, 21)"> اكتب بريد الطالب الالكتروني الذي تود تعديل حجزه</h3>
                <br>
                <form id="searchform" method="post" name="myForm">
        <div class="search-box" >
                <input id="user" type="text" name="mail" autocomplete="off" class="form-control"  >
                <div class="result"></div>
            </div>
            ';                                 
            $cont3=Content::Button(21,"remove");
            echo '
            <button type="submit" name="remove" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            </form>
            </div>
            
        </form>
        </div> 
        
</div>';
        include_once "footer.php";
    }
    public static function UpdateReserves()
    {
        $Result=Building::ViewDropdown();
        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> تعديل حجز غرفة</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="searchform" name="myForm">
        
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
            </div>';                                 
            $cont3=Content::Button(64,"Submit");
            echo '
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            <div class="register-link m-t-15 text-center">
            </div>
        </form>
</div>
    

</div>';
        include_once "footer.php";
    }
    public static function DeleteReserves()
    {
        include_once "header.php";

        echo '<html>
        <head>
        <style>
        .result{ 
            box-sizing: border-box;
        }
        .result p{
            width: 100%;
            margin: 0;
            text-align:center;
            font-size:15px;
            color:black;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
        }
        .result p:hover{
            background: #f2f2f2;
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".search-box input").keyup(function(){
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(); //result
                if(inputVal.length){
                    $.get("backend-search2.php", {term: inputVal}).done(function(data){
                        resultDropdown.html(data); //set
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find("input").val($(this).html());
                $(this).parent(".result").empty();
            });
        });
        </script>
        <script type="text/javascript">
               $(document).ready(function(){
                $(".close").click(function(){
                    $("#myModal").hide();
                });
            });
        </script>
        </head>
        </html>';
        echo '<div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            <div class="form-group">
                <br>
                <h3 style="text-align:center; color: rgba(45, 65, 21)"> اكتب بريد المستخدم الالكتروني الذي تود مسحه</h3>
                <br>
                <form id="searchform" method="post" name="myForm">
        <div class="search-box" >
                <input id="user" type="text" name="mail" autocomplete="off" class="form-control"  >
                <div class="result"></div>
            </div>';                                 
            $cont3=Content::Button(17,"remove");
            echo '
            <button type="submit" name="remove" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            </form>
            </div>
            
        </form>
        </div> 
        
</div>';

        include_once "footer.php";
    }
    public static function ShowAllReservations($Result)
	{
		
            include_once "header.php";
            echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع الحجوزات</h2>
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
                        <th>تاريخ نهاية الحجز</th>
                            <th>تاريخ بدأ الحجز</th>
                        <th>السعة</th>
                            <th>الدور</th>
                            <th>المبني</th>
                            <th>رقم الغرفة</th>
                            <th>بريد الطالب الالكتروني</th>
                        </tr>
                    </thead>
                    <tbody>';
                                for ($i=0;$i<count($Result);$i++)
                                {
                                    echo "<tr>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->YearTo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->YearFrom . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Capacity . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->FloorNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->BuildingNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->RoomNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Email . "</td>";
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
    public static function ShowAllRoommates($Result){
        include_once "header.php";
            echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع الحجوزات</h2>
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
                        <th>تاريخ نهاية الحجز</th>
                            <th>تاريخ بدأ الحجز</th>
                        <th>السعة</th>
                            <th>الدور</th>
                            <th>المبني</th>
                            <th>رقم الغرفة</th>
                            <th>بريد الطالب الالكتروني</th>
                        </tr>
                    </thead>
                    <tbody>';
                                for ($i=0;$i<count($Result);$i++)
                                {
                                    echo "<tr>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->YearTo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->YearFrom . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Capacity . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->FloorNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->BuildingNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->RoomNo . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Email . "</td>";
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
    public static function viewReport($out)
    {
        include_once "header.php";
        echo '<html>
        <head>
        <style>
        #hidden{
    display:none;
}
</style></head></html>';
        echo '<div>';
            echo $out;
            echo '
        </div>  
        <form class="form-group" method="post" name="hidden" id="hidden">';                                 
        $cont3=Content::Button(29,"Submit");
        echo '
        <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
        </form>';
                if($_SESSION['UserType_ID']==16)
                {
                    echo "<script type='text/javascript'>document.getElementById('hidden').style.display = 'block';</script>";
                }
      
include_once "footer.php";
    }

}
?>