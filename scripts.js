$(function(){
            
              $('#kindofgreeting').change(function(){
                if($(this).val()==1){
                     $('.ann').hide();
                }else if($(this).val()==2){
                                
                                $('.bday').hide();
                } 
              
               

              })            
        })

$(function(){
            
               $('#typeofcard').change(function(){
               
               if($(this).val()==1){


                  $('.bday:not(.crazy)').hide();          
                  $('.ann:not(.crazy)').hide();
  

               }
                
              

                else if($(this).val()==2){


                  $('.bday:not(.dark)').hide();          
                  $('.ann:not(.dark)').hide();
  

               }

                else if($(this).val()==3){


                  $('.bday:not(.campy)').hide();          
                  $('.ann:not(.campy)').hide();
  

               }

                
                else if($(this).val()==4){
                                
                     $('.bday:not(.hnm)').hide();          
                     $('.ann:not(.hnm)').hide(); 

                }               
               



                else if($(this).val()==5){


                  $('.bday:not(.beautiful)').hide();          
                  $('.ann:not(.beautiful)').hide();
  

               }

                else if($(this).val()==6){


                  $('.bday:not(.theme)').hide();          
                  $('.ann:not(.theme)').hide();
  

               }
                
                else if($(this).val()==7){


                  $('.bday:not(.cute)').hide();          
                  $('.ann:not(.cute)').hide();
  

               }


               else if($(this).val()==8){


                  $('.bday:not(.wishful)').hide();          
                  $('.ann:not(.wishful)').hide();
  

               }
                 

              else if($(this).val()==9){


                  $('.bday:not(.romantic)').hide();          
                  $('.ann:not(.romantic)').hide();
  

               }





              })            
        })
