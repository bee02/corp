
                 <?php
                   session_start();
                   require '../../main/php/db.php';
                   $userstmt = mysqli_stmt_init($connect);
                   $phone = '0973077465';
                   $imageTable = 'm_685fef81b2618';
                   $songTable = 'p_685fef81b261b';
                   $busTable = 'businesTable';
                 ?>
                <html>
                <head>
                  <title>Blogger</title>
                  <meta charset='utf-8' />
                  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                  <meta name='theme-color' content='default' />
                  <meta name='description' content='Say hello to Blogger, and view there products and services on there beecorp profile' />
                  <meta name='keywords' content='Blogger, profile, Blogger, Blogger s profile, my profile, Blogger, beecorp, beecorp profiles, beecorp profile, beecorp user, beecorp Blogger, Blogger beecorp, beecorp/Blogger, check Blogger' />
                  
                  <link rel='stylesheet' href='../../main/css/user.css' />
                  <link rel='stylesheet' href='' />
                  
                  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
                </head>
                  <?php include '../../main/xbin/include/user.php';?>
                </html>
                
                