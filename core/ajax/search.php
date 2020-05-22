<?php
include '../init.php';
if(isset($_POST['search']) && !empty($_POST['search'])){
    $search = $getFromUser->checkInput($_POST['search']);
    $result = $getFromUser->search($search);
    echo '<div class="nav-right-down-wrap"><ul> ';
    foreach ($result as $user){
        if(!empty($result)) {
        echo '
        <li>
            <div class="nav-right-down-inner">
                <div class="nav-right-down-left">
                    <a href="'.BASE_URL.$user->username.'"><img src="'.BASE_URL.$user->profileImage.'"></a>
                </div>
                <div class="nav-right-down-right">
                    <div class="nav-right-down-right-headline">
                        <a href="PROFILE-LINK">'.$user->screenName.'</a><span>@'.$user->username.'</span>
                    </div>
                    <div class="nav-right-down-right-body">
                     
                    </div>
                </div>
            </div> 
	    </li> ';
    }
    echo '</ul></div>';
    }
}