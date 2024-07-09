    <?php 
    function lang($phrase){
    static $lang= array(
    //dashboeard page 
    'home admin'=>'home',
    'categories'=>'categories',
    'statics of admin'=>'statics ',
    'users of store'=>'users   ',
    'items of admin'=>'items',
    'logs of admin'=>'logs '

    );
    
    return $lang[$phrase];};
    ?>
