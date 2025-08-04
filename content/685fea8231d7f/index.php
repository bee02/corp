
                 <?php
                   session_start();
                   require '../../main/php/db.php';
                   $userstmt = mysqli_stmt_init($connect);
                   $phone = '0772093481';
                   $imageTable = 'm_685fea8231d7f';
                   $songTable = 'p_685fea8231d81';
                   $busTable = 'businesTable';
                 ?>
                <html>
                <head>
                  <title>Everson</title>
                  <meta charset='utf-8' />
                  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                  <meta name='theme-color' content='default' />
                  <meta name='description' content='Say hello to Everson, and view there products and services on there beecorp profile' />
                  <meta name='keywords' content='Everson, profile, Everson, Everson s profile, my profile, Everson, beecorp, beecorp profiles, beecorp profile, beecorp user, beecorp Everson, Everson beecorp, beecorp/Everson, check Everson' />
                  
                  <link rel='stylesheet' href='../../main/css/user.css' />
                  <link rel='stylesheet' href='' />
                  
                  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
                </head>
                  <?php include '../../main/xbin/include/user.php';?>
                </html>
                
                