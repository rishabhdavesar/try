
<?php
if(isset($_POST['submit']))
{
  $email =$_POST['email'];
  $file = fopen("okk.txt","a+") or die("file not open");

  $s= $email;
  fputs($file,$s." ") or die("data not written");
  fclose($file);
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('a.html', false);

  /*http html response from server  
  generating html from php*/

}


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 
<form action="#" method="post">

                                 <p>
                                    <label for="Email">Email Address</label>
                                    <input type="email" name="email" id="Email" placeholder="Email">
                                 </p>
                             
                            
                    

                              
                                 <p>
                                    <input type="submit" id="submit"  name="submit" value="SUBMIT">
                                 </p>
                              
                        
                        </form>
                     
</body>
</html>