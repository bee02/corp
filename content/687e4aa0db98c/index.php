
                 <?php
                   session_start();
                   require '../../main/php/db.php';
                   $userstmt = mysqli_stmt_init($connect);
                   $phone = '0770810484';
                   $imageTable = 'm_687e4aa0db98c';
                   $songTable = 'p_687e4aa0db98e';
                   $busTable = 'businesTable';
                 ?>
                <html>
                <head>
                  <title>SICK NEVER POLA</title>
                  <meta charset='utf-8' />
                  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                  <meta name='theme-color' content='default' />
                  <meta name='description' content='Say hello to SICK NEVER POLA, and view there products and services on there beecorp profile' />
                  <meta name='keywords' content='SICK NEVER POLA, profile, SICK NEVER POLA, SICK NEVER POLA s profile, my profile, SICK NEVER POLA, beecorp, beecorp profiles, beecorp profile, beecorp user, beecorp SICK NEVER POLA, SICK NEVER POLA beecorp, beecorp/SICK NEVER POLA, check SICK NEVER POLA' />
                  
                  <link rel='stylesheet' href='../../main/css/user.css' />
                  <link rel='stylesheet' href='' />
                  
                  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
                </head>
                  <?php include '../../main/xbin/include/user.php';?>
                </html>
                
                