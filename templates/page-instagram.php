<section class="contained">
    <?php
    //The demonstration starts here

    //1 - Settings (please update to math your own)
    $username='yourusername'; //Provide your instagram username
    $access_token='youraccesstoken'; //Provide your instagram access token
    $count='20'; //How many shots do you want?

    //2 - Include the php class
    include('instagram.php');
    //3 - Instanciate
    if(!empty($username) && $username!='yourusername' && !empty($access_token) && $access_token!='youraccesstoken'){
    $isg = new instagramPhp($username,$access_token); //instanciates the class with the parameters
    $shots = $isg->getUserMedia(array('count'=>$count)); //Get the shots from instagram
    } else {
    echo'Please update your settings to provide a valid username and access token';
    }
    //4 - Display
    if(!empty($shots)){ echo $isg->simpleDisplay($shots); }

    ?>
</section>