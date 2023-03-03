<?php 

    function src($fileName, $type='full'){

        $path = './uploads/membership_profile/';

        if($type != 'full')

            $path .= $type.'/';

        return $path . $fileName;
    }
    

    function image_url($fileName, $gender='', $type=''){

        $path = './uploads/membership_profile/';
        
        if (file_exists($path . $fileName.'.jpg'))
                $path = $path . $fileName.'.jpg';
        elseif(! file_exists($path . $fileName.'.jpg') && $gender == 'Male')
            $path = '/uploads/membership_profile/'. $type.'/'.'user_male.jpg';
        elseif(! file_exists($path . $fileName.'.jpg') && $gender == 'Female') 
            $path = '/uploads/membership_profile/'. $type.'/'.'user_female.jpg';
        else
            $path = '/uploads/membership_profile/'. $type.'/'.'user.jpg';

        return $path;
    }

?>