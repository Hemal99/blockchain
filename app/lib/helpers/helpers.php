 <?php
 function dnd($data){
     echo '<pre>';
     var_dump($data);
     echo'<pre/>';
     die();
 }

 function santize($unsantizeVal){
   return htmlentities($unsantizeVal,ENT_QUOTES,'UTF-8');
 }

 function posted_values($values){
   $clean_array=[];
   foreach($values as $key=>$val){
       $clean_array[$key]=santize($val);
   }
   return $clean_array;
 }

 function validateSignup($items){
  $error=[];
  $rules=['first_name'=>[
           'display'=>'First name',
           'required'=>true,
           'max'=>100
          ],
          'last_name'=>[
            'display'=>'Last name ',
             'required'=>true,
             'max'=>100
          ],
          'email'=>[
            'display'=> 'Email address',
            'required'=>true,
            'max'=>150,
            'valid_email'=>true
          ] ,
          'password'=>[
            'display'=>'Password',
            'required'=>true,
            'min'=>8
          ],
          'confirm-pw'=>[
            'display'=>'Confirm password',
            'required'=>true,
             'matches'=>'pw'
          ],
    
        ];
        foreach($rules as $item =>$rulez){
           $display = $rulez['display'];
           foreach($rulez as $key =>$val ){
             $input =$items[$item];
            if(empty($input)){
              
              $error[]="{$display} is required";

            }
            else if(!empty($input)){
              switch($key){
                 case 'max':
                  if(strlen($input)>$val){
                    $error[]="{$display} must be {$val} characters.";
                  }
                  break;

                  case 'min':
                    if(strlen($input)<$val){
                    $error[]="{$display} must be {$val} characters.";
                    }
                  break;

                  case 'valid_email':
                  if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
                    $error[] ="{$display} must be a valid email";
                  }
                  break;
                  
              }
            }
           }
        }
        if(empty($error)){
          return true;
        }
        return $error;
 }

 function dueCalculate($date){
   date_default_timezone_set(Users_::currentUser()->timezone);
   $today = time();
   if($date !=''){
     $input_date = strtotime($date);
     $date_diff =$input_date-$today;
       return round($date_diff/(60*60*24));
       return false;
   }
   return false;

 }

