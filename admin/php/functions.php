<?php
 include_once ('init.php');

  function get_name_of_day ($d)
  {
	switch($d)
	  {
		case 0: return 'یکشنبه';break;
		case 1: return 'دوشنبه';break;
		case 2: return 'سه شنبه';break;
		case 3: return 'چهارشنبه';break;
		case 4: return 'پنج شنبه';break;
		case 5: return 'جمعه';break;
		case 6: return 'شنبه';break;
		default: return '';break;
	  }
  }


  function get_name_of_month ($m)
  {
	switch($m)
	  {
		case 1: return 'فروردین'; break;
		case 2: return 'اردیبهشت'; break;
		case 3: return 'خرداد'; break;
		case 4: return 'تیر'; break;
		case 5: return 'مرداد'; break;
		case 6: return 'شهریور'; break;
		case 7: return 'مهر'; break;
		case 8: return 'آبان'; break;
		case 9: return 'آذر'; break;
		case 10: return 'دی'; break;
		case 11: return 'بهمن'; break;
		case 12: return 'اسفند'; break;
		default: return '';
	  }
  }
  ////////////////////////////////////////

if(isset($_POST['action']))
{
	$action=$_POST['action'];
	if ($action==1)
	{
		$id=$_POST['id'];
		
		$result=mysql_query("delete from notification where nid=$id");
		if($result)
		{
			//delete attached files
				echo 'ok';
				exit();	
		}
	}
	if ($action==2)
	{
		$id=$_POST['id'];
		
		$result=mysql_query("delete from content where cid=$id");
		if($result)
		{
			//delete attached files
				echo 'ok';
				exit();	
		}
	}
	if ($action==3)
	{
		$id=$_POST['id'];
		
		$result=mysql_query("delete from news where eid=$id");
		if($result)
		{
			//delete attached files
				echo 'ok';
				exit();	
		}
	}

}
////////////////////////////////////////////////////////////////////
function cwUpload($field_name = '', $target_folder = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '', $thumb_height = ''){

    //folder path setup
    $target_path = $target_folder;
    $thumb_path = $thumb_folder;
    
    //file name setup
    $filename_err = explode(".",$_FILES[$field_name]['name']);
    $filename_err_count = count($filename_err);
    $file_ext = $filename_err[$filename_err_count-1];
    if($file_name != ''){
        $fileName = $file_name.'.'.$file_ext;
    }else{
        $fileName = $_FILES[$field_name]['name'];
    }
    
    //upload image path
    $upload_image = $target_path.basename($fileName);
    
    //upload image
    if(move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_image))
    {
        //thumbnail creation
        if($thumb == TRUE)
        {
            $thumbnail = $thumb_path.$fileName;
            list($width,$height) = getimagesize($upload_image);
            $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;

                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                    break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }

            imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumbnail,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumbnail,100);
            }

        }

        return $fileName;
    }
    else
    {
        return false;
    }
}
/////////////////////////////////////////////////////////////////////////////

?>