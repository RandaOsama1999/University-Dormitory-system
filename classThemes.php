<?php
include_once "classDatabase.php";
class themes
{
    public  $ID;
    public  $Theme;
    public  $Themepic;

   
    public static function viewallthemes()
    { 
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM theme WHERE IsDeleted=0 AND statue=0";
		$themesDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
        $Result;
		while ($row = mysqli_fetch_array($themesDataSet))
		{
            $MyObj= new themes();
            $MyObj->ID=$row["ID"];
            $MyObj->Theme=$row["Theme"];
            $MyObj->Themepic=$row["Themepic"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
    public static function addnewthemeview()
    {     
           $conn=DB::getInstance();
           $mysql=$conn->getConnection();
           $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

          $sql = "SELECT * FROM theme WHERE IsDeleted=0 AND statue=1";
          $themesDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
          $i=0;
        $Result;
		while ($row = mysqli_fetch_array($themesDataSet))
		{
            $MyObj= new themes();
            $MyObj->ID=$row["ID"];
            $MyObj->Theme=$row["Theme"];
            $MyObj->Themepic=$row["Themepic"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
   
   
    public static function addtheme(themes $theme)
    {
        $id=$theme->ID;
       // echo $id;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        //$statue=0;
        DB::update("theme","statue=0,LastUpdateDateTime='$today'","ID=$id AND IsDeleted=0");
    }
    public static function delete(themes $theme)
    {
        $id=$theme->ID;
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        
       // DB::delete("theme","ID='$id' AND IsDeleted=0");
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
       

           $email = $_SESSION['email']; 
         $sql4 = "SELECT ID FROM user WHERE Email='$email' AND IsDeleted=0 ";    
             $resultQuery4 = mysqli_query($mysql,$sql4);
             while($row4= $resultQuery4->fetch_assoc())
             {
                 
                     $USERID=$row4['ID'];
                 $sql = "SELECT * FROM usertypethemes WHERE theme_ID='$id'AND IsDeleted=0 ";    
                 $result= mysqli_query($mysql,$sql);
                 while($row= $result->fetch_assoc())
                 {
                      if($row==true)
                    {   
                      $themecnn_ID=$row['ID'];
                     echo  $themecnn_ID;
                    DB::update("usertypethemes","IsDeleted=1,LastUpdateDateTime='$today'","ID= $themecnn_ID");
                    DB::add("usertypethemes","user_ID,theme_ID,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$USERID',1,' $today',' $today',0");
    
                     }
                 }
                }
        
                DB::update("theme","IsDeleted=1,LastUpdateDateTime='$today'","ID=$id");    }

    public static function selectTheme(themes $theme1)
    { 
        $id=$theme1->ID;
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
          
        
        $sql="SELECT * from theme WHERE ID=$id  AND IsDeleted=0 AND statue=0";
		$Result = mysqli_query($mysql,$sql) or die(mysql_error());
        while ($row = $Result->fetch_assoc())
		{
            $theme1->Theme=$row['Theme'];
            //echo $theme1->Theme;
        }

        $email = $_SESSION['email']; 
        $sql4 = "SELECT ID FROM user WHERE Email='$email' AND IsDeleted=0 ";    
            $resultQuery4 = mysqli_query($mysql,$sql4);
            while($row4= $resultQuery4->fetch_assoc())
            {
                
                    $USERID=$row4['ID'];
                    $sql = "SELECT * FROM usertypethemes WHERE user_ID='$USERID' AND IsDeleted=0 ";    
                    $result= mysqli_query($mysql,$sql);
                    while($row= $result->fetch_assoc())
                    {  
                       
                            $userTheme_ID=$row['ID'];
                            $usernafso=$row['user_ID'];
                            $elthemeID=$row['theme_ID'];

                            if( $elthemeID ==  $id)
                            {
                                return $theme1->Theme;
                            }
                            else
                            {

                                date_default_timezone_set("Africa/Cairo");
                                $today = date("Y-m-d H:i:s");
                                DB::update("usertypethemes","IsDeleted=1,LastUpdateDateTime='$today'","ID='$userTheme_ID' ");
                                DB::add("usertypethemes","user_ID,theme_ID,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$USERID','$theme1->ID',' $today',' $today',0");
                             
                            }
                    }
            }

       
    } 
   
    public static function applyAll( )
    {  
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        
       // $id=$themee->ID;
        
        $email = $_SESSION['email']; 
        $sql4 = "SELECT ID FROM user WHERE Email='$email' AND IsDeleted=0 ";    
            $resultQuery4 = mysqli_query($mysql,$sql4);
            while($row4= $resultQuery4->fetch_assoc())
            {
                if($row4==true)
                {
                    $USERID=$row4['ID'];
                }
            }
         //   echo  $USERID;

        $sql="SELECT * from usertypethemes WHERE user_ID=$USERID AND IsDeleted=0";
        $Result = mysqli_query($mysql,$sql) or die(mysql_error());
        while($row4= $Result->fetch_assoc())
        {
            $themeID=$row4['theme_ID'];
            if( $themeID>=1001)
            {
                $sql="SELECT * from themepic WHERE ID=$themeID  AND IsDeleted=0";
                $Result = mysqli_query($mysql,$sql) or die(mysql_error());
                while ($row = $Result->fetch_assoc())
                {
                        $Themepic=$row['Image'];
                        // echo $Theme;
                       // $theme=$_SESSION[$row['Theme']];
                       
                        // echo   $_SESSION['theme'];

                        $Theme="background:url('$Themepic');";
                        $_SESSION['theme'] = $Theme;
                }
            }
            else
            {
                $sql="SELECT * from theme WHERE ID=$themeID  AND IsDeleted=0";
		        $Result = mysqli_query($mysql,$sql) or die(mysql_error());
                 while ($row = $Result->fetch_assoc())
		           {
                      if($row==true)
                     {
                        $Theme=$row['Theme'];
                         // echo $Theme;
                         // $theme=$_SESSION[$row['Theme']];
                          $_SESSION['theme'] = $Theme;
                         // echo   $_SESSION['theme'];
                     }
                    }
                         // echo   $_SESSION['Theme'];
                     //echo  $theme;
             }
            

        }
       // echo $themeID;
        
        return   $Theme;
    }

 
 

   public static function setdefaulttheme()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");

       

        $sql = "SELECT ID FROM theme WHERE ID=1 AND IsDeleted=0 ";    
        $result = mysqli_query($mysql,$sql);
        while($row= $result->fetch_assoc())
        {
            if($row==true)
            {
                $defaultThemeID=$row['ID'];
            }
        }

        $sql = "SELECT user_ID FROM usertypethemes WHERE IsDeleted=0 ORDER BY user_ID ASC ";    
        $result = mysqli_query($mysql,$sql);
        while($row= $result->fetch_assoc())
        {
               $user_ID=$row['user_ID'];
                //DB::add("usertypethemes","user_ID,theme_ID,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$user->ID','$defaultThemeID',' $today',' $today',0");
        }
        $sql2 = "SELECT ID FROM user WHERE IsDeleted=0 ";    
        $result = mysqli_query($mysql,$sql2);
        while($row= $result->fetch_assoc())
        {
             
               $IDbtaeluser=$row['ID'];
        }

        
        if($IDbtaeluser==$user_ID)
        {
          //echo "el user  mawgood <br>";
          return false;
        }
         else
         {
            /* echo $IDbtaeluser;
             echo"<br>";
             echo $user_ID;
             echo"<br>";
             echo "el user mesh mawgood <br>";*/
            DB::add("usertypethemes","user_ID,theme_ID,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$IDbtaeluser','$defaultThemeID',' $today',' $today',0");

         }

   }
}
?>