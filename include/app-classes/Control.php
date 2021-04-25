<?php
    include_once 'jdatetime.php';
     class Control{
        
      
        //Get the page name
            public static function currentPage() {
                return substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
            }
        //for hashing the password
            public static function hash_password($password){
                //using salt encryption in our system
                return md5(md5($password).md5('beyourself'));
            
            }

            public static function EtoP($str){
                                    // echo mds_date("Y/m/d", "now", 1); // ۱۳۸۲/۰۸/۰۵ 

                $western_arabic = array('0','1','2','3','4','5','6','7','8','9');
                $eastern_arabic = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
                $x = str_replace($western_arabic, $eastern_arabic, $str);
                return $x;
            }
            public static function PtoE($str){
                // echo mds_date("Y/m/d", "now", 1); // ۱۳۸۲/۰۸/۰۵ 

                $western_arabic = array('0','1','2','3','4','5','6','7','8','9');
                $eastern_arabic = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
                $x = str_replace($western_arabic, $eastern_arabic, $str);
                return $x;
            }
        ////change shamsi date to miladi   
            public static function ch_to_gregorian($date){
                $res=explode("/",$date);
                $j_y = $res[0];
                $j_m = $res[1];
                $j_d = $res[2];
                $miladi_date = jDateTime::toGregorian($j_y, $j_m, $j_d);
    
                return date("Y-m-d", strtotime($miladi_date));
            }
            ////change miladi date to  shamsi
            public static function ch_to_jalili($date){
                $res=explode("-",$date);
                $g_y = $res[0];
                $g_m = $res[1];
                $g_d = $res[2];
                $shamsi_date = jDateTime::toJalali($g_y, $g_m, $g_d);

                $year=$shamsi_date[0]; 
                $month=$shamsi_date[1]; 
                $day=$shamsi_date[2]; 

                $result = $year."/".$month."/".$day;
    
                return  $result ;
            }

            
            public static function  sub_date($date){
                $interval = 'P6M';
                $datetime = new DateTime($date, new DateTimeZone('Asia/Kabul'));
                $datetime->sub(new DateInterval($interval));

                return $datetime->format('Y-m-d'); 
                } 
            // add a number of mounth from a date 
            public static function  addDate($date){
                $interval = 'P6M';
                $datetime = new DateTime($date, new DateTimeZone('Asia/Kabul'));
                $datetime->add(new DateInterval($interval));

                return $datetime->format('Y-m-d'); 
            }     
            //function that convert string to date format    
            public static function ch_to_date($date){
                $datetime = new DateTime($date);
                return $datetime->format('Y-m-d'); 
            } 

            
                //sidebar class active scripts
            function activeClass($pageUrl){
                if(stripos($_SERVER['REQUEST_URI'], $pageUrl)){
                    echo 'active'; 
                }
            }


           
                   
                   
                   
    }
?>

