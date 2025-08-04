
                 <?php
                   session_start();
                   require '../../main/php/db.php';
                   $userstmt = mysqli_stmt_init($connect);
                   $phone = '0973794651';
                   $imageTable = 'm_688b3eb21aab2';
                   $songTable = 'p_688b3eb21aab4';
                   $busTable = 'businesTable';
                 ?>
                <html>
                <head>
                  <title>Simon</title>
                  <meta charset='utf-8' />
                  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                  <meta name='theme-color' content='default' />
                  <meta name='description' content='Say hello to Simon, and view there products and services on there beecorp profile' />
                  <meta name='keywords' content='Simon, profile, Simon, Simon s profile, my profile, Simon, beecorp, beecorp profiles, beecorp profile, beecorp user, beecorp Simon, Simon beecorp, beecorp/Simon, check Simon' />
                  
                  <link rel='stylesheet' href='../../main/css/user.css' />
                  <link rel='stylesheet' href='' />
                  
                  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
                </head>
                  <?php include '../../main/xbin/include/user.php';?>
                </html>
                
                