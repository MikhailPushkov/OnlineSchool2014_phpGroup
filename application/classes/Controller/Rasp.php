<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rasp extends Controller_System_Base  {

    public function action_addrasp(){


      if(isset($_POST)){
                                             $day1='понедельник';
                                                    $time1='8-00';
                                                    $time_of_start ='22.22.2012';
                                                    $time_of_end='22.22.2012';


                                                    $cbpn11=$_POST['cbpn11'];
                                                    $cbpn12=$_POST['cbpn12'];
                                                    $ponnum=$_POST['ponnum'];
                                            
                                                    $time2='9-00';
                                                
                                                    $cbpn21=$_POST['cbpn21'];
                                                    $cbpn22=$_POST['cbpn22'];
                                                    $ponnum1=$_POST['ponnum1'];
                                          
                                                    $time3='10-00';
                                                 
                                                    $cbpn31=$_POST['cbpn31'];
                                                    $cbpn32=$_POST['cbpn32'];
                                                     $ponnum2=$_POST['ponnum2'];
                                         
                                                    $time4='11-00';
                                                  
                                                    $cbpn41=$_POST['cbpn41'];
                                                    $cbpn42=$_POST['cbpn42'];
                                                     $ponnum3=$_POST['ponnum3'];
                                        
                                                    $time5='12-00';
                                                  
                                                    $cbpn51=$_POST['cbpn51'];
                                                    $cbpn52=$_POST['cbpn52'];
                                                     $ponnum4=$_POST['ponnum4'];
                                           
                                                    $time6='13-00';
                                                   
                                                    $cbpn61=$_POST['cbpn61'];
                                                    $cbpn62=$_POST['cbpn62'];
                                                     $ponnum5=$_POST['ponnum5'];
                                           
                                                    $time7='14-00';
                                                  
                                                    $cbpn71=$_POST['cbpn71'];
                                                    $cbpn72=$_POST['cbpn72'];
                                                     $ponnum6=$_POST['ponnum6'];
                                            
                                                    $cbvt11=$_POST['cbvt11'];
                                                    $cbvt12=$_POST['cbvt12'];
                                                    $vtornum=$_POST['vtornum'];
                                          
                                                    $cbvt21=$_POST['cbvt21'];
                                                    $cbvt22=$_POST['cbvt22'];
                                                    $vtornum1=$_POST['vtornum1'];
                                      
                                                     $cbvt31=$_POST['cbvt31'];
                                                    $cbvt32=$_POST['cbvt32'];
                                                    $vtornum2=$_POST['vtornum2'];
                                         
                                                    $cbvt41=$_POST['cbvt41'];
                                                    $cbvt42=$_POST['cbvt42'];
                                                    $vtornum3=$_POST['vtornum3'];
                                        
                                                    $cbvt51=$_POST['cbvt51'];
                                                    $cbvt52=$_POST['cbvt52'];
                                                    $vtornum4=$_POST['vtornum4'];
                                          
                                                    $cbvt61=$_POST['cbvt61'];
                                                    $cbvt62=$_POST['cbvt62'];
                                                    $vtornum5=$_POST['vtornum5'];
                                            $day2='Вторник';
                                                
                                                    $cbvt71=$_POST['cbvt71'];
                                                    $cbvt72=$_POST['cbvt72'];
                                                    $vtornum6=$_POST['vtornum6'];
                                            $day3='Среда';
                                              
                                                    $cbsr11=$_POST['cbsr11'];
                                                    $cbsr12=$_POST['cbsr12'];
                                                    $srenum=$_POST['srenum'];
                                        
                                                    $cbsr21=$_POST['cbsr21'];
                                                    $cbsr22=$_POST['cbsr22'];
                                                    $srenum1=$_POST['srenum1'];
                                          
                                                  
                                                    $cbsr31=$_POST['cbsr31'];
                                                    $cbsr32=$_POST['cbsr32'];
                                                    $srenum2=$_POST['srenum2'];
                                         
                                                    $cbsr41=$_POST['cbsr41'];
                                                    $cbsr42=$_POST['cbsr42'];
                                                    $srenum3=$_POST['srenum3'];
                                         
                                                     $cbsr51=$_POST['cbsr51'];
                                                    $cbsr52=$_POST['cbsr52'];
                                                    $srenum4=$_POST['srenum4'];
                                     
                                                  
                                                   $cbsr61=$_POST['cbsr61'];
                                                    $cbsr62=$_POST['cbsr62'];
                                                    $srenum5=$_POST['srenum5'];
                                         
                                                    $cbsr71=$_POST['cbsr71'];
                                                    $cbsr72=$_POST['cbsr72'];
                                                    $srenum6=$_POST['srenum6'];
                                            $day4='Четверг';
                                             
                                                    $cbcht11=$_POST['cbcht11'];
                                                    $cbcht12=$_POST['cbcht12'];
                                                    $chetnum=$_POST['chetnum'];
                                     
                                                   
                                                    $cbcht21=$_POST['cbcht21'];
                                                    $cbcht22=$_POST['cbcht22'];
                                                    $chetnum1=$_POST['chetnum1'];
                                      
                                                    $cbcht31=$_POST['cbcht31'];
                                                    $cbcht32=$_POST['cbcht32'];
                                                    $chetnum2=$_POST['chetnum2'];

                                                     $cbcht41=$_POST['cbcht41'];
                                                    $cbcht42=$_POST['cbcht42'];
                                                    $chetnum3=$_POST['chetnum3'];

                                                    $cbcht51=$_POST['cbcht51'];
                                                    $cbcht52=$_POST['cbcht52'];
                                                    $chetnum4=$_POST['chetnum4'];
                                     
                                                    $cbcht61=$_POST['cbcht61'];
                                                    $cbcht62=$_POST['cbcht62'];
                                                    $chetnum5=$_POST['chetnum5'];
                                      
                                                 
                                                    $cbcht71=$_POST['cbcht71'];
                                                    $cbcht72=$_POST['cbcht72'];
                                                    $chetnum6=$_POST['chetnum6'];
                                     
                                                    $cbpyat11=$_POST['cbpyat11'];
                                                    $cbpyat12=$_POST['cbpyat12'];
                                                    $pyatnum=$_POST['pyatnum'];

                                                    $cbpyat21=$_POST['cbpyat21'];
                                                    $cbpyat22=$_POST['cbpyat22'];
                                                    $pyatnum1=$_POST['pyatnum1'];

                                                    $cbpyat31=$_POST['cbpyat31'];
                                                    $cbpyat32=$_POST['cbpyat32'];
                                                    $pyatnum2=$_POST['pyatnum2'];
                                            $day5='Пятница';
                                            
                                                 
                                                    $cbpyat41=$_POST['cbpyat41'];
                                                    $cbpyat42=$_POST['cbpyat42'];
                                                    $pyatnum3=$_POST['pyatnum3'];

                                                   
                                                    $cbpyat51=$_POST['cbpyat51'];
                                                    $cbpyat52=$_POST['cbpyat52'];
                                                    $pyatnum4=$_POST['pyatnum4'];
                                         
                                                 
                                                    $cbpyat61=$_POST['cbpyat61'];
                                                    $cbpyat62=$_POST['cbpyat62'];
                                                    $pyatnum5=$_POST['pyatnum5'];
                                       
                                                 
                                                    $cbpyat71=$_POST['cbpyat71'];
                                                    $cbpyat72=$_POST['cbpyat72'];
                                                    $pyatnum6=$_POST['pyatnum6'];
                                            $day6='Суббота';
                                         
                                                  
                                                    $cbsub11=$_POST['cbsub11'];
                                                    $cbsub12=$_POST['cbsub12'];
                                                    $subnum=$_POST['subnum'];
                                     
                                                 
                                                    $cbsub21=$_POST['cbsub21'];
                                                    $cbsub22=$_POST['cbsub22'];
                                                    $subnum1=$_POST['subnum1'];

                                                
                                                    $cbsub31=$_POST['cbsub31'];
                                                    $cbsub32=$_POST['cbsub32'];
                                                    $subnum2=$_POST['subnum2'];
                                     
                                                  
                                                    $cbsub41=$_POST['cbsub41'];
                                                    $cbsub42=$_POST['cbsub42'];
                                                    $subnum3=$_POST['subnum3'];
                                     
                                                  
                                                    $cbsub51=$_POST['cbsub51'];
                                                    $cbsub52=$_POST['cbsub52'];
                                                    $subnum4=$_POST['subnum4'];
                                       
                                                  
                                                    $cbsub61=$_POST['cbsub61'];
                                                    $cbsub62=$_POST['cbsub62'];
                                                    $subnum5=$_POST['subnum5'];

                                                  
                                                    $cbsub71=$_POST['cbsub71'];

                                                    $cbsub72='informatica';

                                                    $subnum6=$_POST['subnum6'];
                                                $query="    Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpn12'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpn11'),
                                                                                              '$day1','$time_of_start','$time_of_end','$ponnum','$time1'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpn22'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpn21'),
                                                                                              '$day1','$time_of_start','$time_of_end','$ponnum1','$time2'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpn32'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpn31'),
                                                                                              '$day1','$time_of_start','$time_of_end','$ponnum2','$time3'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpn42'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpn41'),
                                                                                              '$day1','$time_of_start','$time_of_end','$ponnum3','$time4'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpn52'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpn51'),
                                                                                              '$day1','$time_of_start','$time_of_end','$ponnum4','$time5'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpn62'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpn61'),
                                                                                              '$day1','$time_of_start','$time_of_end','$ponnum5','$time6'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpn72'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpn71'),
                                                                                              '$day1','$time_of_start','$time_of_end','$ponnum6','$time7'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbvt12'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbvt11'),
                                                                                              '$day2','$time_of_start','$time_of_end','$vtornum','$time1'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbvt22'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbvt21'),
                                                                                              '$day2','$time_of_start','$time_of_end','$vtornum1','$time2'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbvt32'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbvt31'),
                                                                                              '$day2','$time_of_start','$time_of_end','$vtornum2','$time3'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbvt42'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbvt41'),
                                                                                              '$day2','$time_of_start','$time_of_end','$vtornum3','$time4'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbvt52'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbvt51'),
                                                                                              '$day2','$time_of_start','$time_of_end','$vtornum4','$time5'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbvt62'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbvt61'),
                                                                                              '$day2','$time_of_start','$time_of_end','$vtornum5','$time6'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbvt72'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbvt71'),
                                                                                              '$day2','$time_of_start','$time_of_end','$vtornum6','$time7'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsr12'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsr11'),
                                                                                              '$day3','$time_of_start','$time_of_end','$srenum','$time1'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsr22'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsr21'),
                                                                                              '$day3','$time_of_start','$time_of_end','$srenum1','$time2'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsr32'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsr31'),
                                                                                              '$day3','$time_of_start','$time_of_end','$srenum2','$time3'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsr42'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsr41'),
                                                                                              '$day3','$time_of_start','$time_of_end','$srenum3','$time4'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsr52'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsr51'),
                                                                                              '$day3','$time_of_start','$time_of_end','$srenum4','$time5'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsr62'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsr61'),
                                                                                              '$day3','$time_of_start','$time_of_end','$srenum5','$time6'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsr72'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsr71'),
                                                                                              '$day3','$time_of_start','$time_of_end','$srenum6','$time7'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbcht12'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbcht11'),
                                                                                              '$day4','$time_of_start','$time_of_end','$chetnum','$time1'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbcht22'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbcht21'),
                                                                                              '$day4','$time_of_start','$time_of_end','$chetnum1','$time2'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbcht32'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbcht31'),
                                                                                              '$day4','$time_of_start','$time_of_end','$chetnum2','$time3'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbcht42'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbcht41'),
                                                                                              '$day4','$time_of_start','$time_of_end','$chetnum3','$time4'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbcht52'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbcht51'),
                                                                                              '$day4','$time_of_start','$time_of_end','$chetnum4','$time5'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbcht62'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbcht61'),
                                                                                              '$day4','$time_of_start','$time_of_end','$chetnum5','$time6'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbcht72'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbcht71'),
                                                                                              '$day4','$time_of_start','$time_of_end','$chetnum6','$time7'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpyat12'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpyat11'),
                                                                                              '$day5','$time_of_start','$time_of_end','$pyatnum','$time1'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpyat22'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpyat21'),
                                                                                              '$day5','$time_of_start','$time_of_end','$pyatnum1','$time2'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpyat32'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpyat31'),
                                                                                              '$day5','$time_of_start','$time_of_end','$pyatnum2','$time3'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpyat42'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpyat41'),
                                                                                              '$day5','$time_of_start','$time_of_end','$pyatnum3','$time4'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpyat52'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpyat51'),
                                                                                              '$day5','$time_of_start','$time_of_end','$pyatnum4','$time5'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpyat62'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpyat61'),
                                                                                              '$day5','$time_of_start','$time_of_end','$pyatnum5','$time6'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbpyat72'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbpyat71'),
                                                                                              '$day5','$time_of_start','$time_of_end','$pyatnum6','$time7'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsub12'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsub11'),
                                                                                              '$day6','$time_of_start','$time_of_end','$subnum','$time1'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsub22'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsub21'),
                                                                                              '$day6','$time_of_start','$time_of_end','$subnum1','$time2'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsub32'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsub31'),
                                                                                              '$day6','$time_of_start','$time_of_end','$subnum2','$time3'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsub42'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsub41'),
                                                                                              '$day6','$time_of_start','$time_of_end','$subnum3','$time4'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsub52'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsub51'),
                                                                                              '$day6','$time_of_start','$time_of_end','$subnum4','$time5'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsub62'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsub61'),
                                                                                              '$day6','$time_of_start','$time_of_end','$subnum5','$time6'
                                                                                           );
                                                            Insert into
                                                                                     lesson 
                                                                                           (
                                                                                                classid,subjectid,teacherid,day_of_week,time_of_start,time_of_end,room,time
                                                                                           )
                                                                                    values (
                                                                                             (select class.id from class  where class.number = '3a'),
                                                                                             (select subject.id from subject  where subject.article='$cbsub72'),
                                                                                             (select teacher.id from teacher where teacher.f='$cbsub71'),
                                                                                              '$day6','$time_of_start','$time_of_end','$subnum6','$time7'
                                                                                           );

                                                ";
                                               
                                            
                                                $result=DB::query(Database::SELECT,$query)->execute();
                                                 $this->redirect('admin/index');
                                                //Copy result into a associative array
                                                $resultArray = $result->fetch_all(MYSQLI_ASSOC);

                                                //Copy result into a numeric array
                                                $resultArray = $result->fetch_all(MYSQLI_NUM);

                                                //Copy result into both a associative and numeric array
                                                $resultArray = $result->fetch_all(MYSQLI_BOTH);

                    }                                             
     }  
} 
