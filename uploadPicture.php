<?php
    require_once 'core/secure.php';
	
	//var_dump($_FILES);
	
	if($requestMethod == 'POST') {
		$pictureData = $_FILES['picture'];
		//var_dump($pictureData);
		if($pictureData['error'] == 0) {
			if($pictureData['type'] == 'image/jpeg') {
				
				// create a nice filename so it is easy to identify
				// and that there are no collisions on disk
				$filename = $user->id . '_' . date('c') . '.jpg';
				
				// get the tmp file ptr and set the target ptr
				$source = $pictureData['tmp_name'];
				$target = USER_PICS . $filename;
                $thumbTarget = USER_PICS . 'thumb_' . $filename;

// Added Start
                $orig = imagecreatefromjpeg($pictureData['tmp_name']);

                $orig_x = imagesx($orig);
                $orig_y = imagesy($orig);
                $image_x = MAX_PIC_WIDTH;
                $image_y = round(($orig_y * $image_x) / $orig_x);
                $thumb_x = MAX_THUMB_WIDTH;
                $thubm_y = round(($orig_y * $image_x) / $orig_x);

                // resize image
                $image = imagecreatetruecolor($image_x, $image_y);
                imagecopyresampled($image, $orig, 0, 0, 0, 0, $image_x, $image_y, $orig_x, $orig_y);

                // resize thumb
                $thumb = imagecreatetruecolor($image_x, $image_y);
                imagecopyresampled($image, $thumb, 0, 0, 0, 0, $thumb_x, $thumb_y, $orig_x, $orig_y);

                if($orig_x > MAX_PIC_WIDTH) {
                    imagejpeg($image, $target);
                }
                else {
                    imagejpeg($orig, $target);
                }
                imagejpeg($thumb, $thumbTarget);

// Added End
				// copy over the image to the profilePictures directory
				//move_uploaded_file($source, $target);
				
				// save the filename in the db
				$db = new Database();
				
				// set all other pictures as not current
				$sql = 'UPDATE ProfilePictures SET isCurrent = 0 WHERE userID = \'' . $user->id . '\' AND isCurrent = 1';
				$db->query($sql); 
				
				// insert the new record into the database ProfilePictures table
				$sql = 'INSERT INTO ProfilePictures (userID, filename, uploadedOn, isCurrent) VALUES( ' .
						'\'' . $user->id . '\', ' .
						'\'' . $filename . '\', ' .
						' NOW() , ' .
						'\'1\')';
				$db->insert($sql);
				
				$_SESSION['message'] = 'Photo successfully uploaded';
			}
			else {
				$_SESSION['message'] = 'Photo must be of type jpeg';
			}
		}
		else {
			$_SESSION['message'] = 'Must supply a file to upload';
		}
	}
	else {
		$_SESSION['message'] = 'Invalid Operation, Upload Failed';
		header('location: index.php');
	}
	
	header('location: picture.php?uid='.$user->id);
?>