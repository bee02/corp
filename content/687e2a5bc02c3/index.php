
                 <?php
                   session_start();
                   require '../../main/php/db.php';
                   $userstmt = mysqli_stmt_init($connect);
                   $phone = '0763891955';
                   $imageTable = 'm_687e2a5bc02c3';
                   $songTable = 'p_687e2a5bc02c4';
                   $busTable = 'businesTable';
                 ?>
                <html>
                <head>
                  <title>kesh bob</title>
                  <meta charset='utf-8' />
                  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                  <meta name='theme-color' content='default' />
                  <meta name='description' content='Say hello to kesh bob, and view there products and services on there beecorp profile' />
                  <meta name='keywords' content='kesh bob, profile, kesh bob, kesh bob s profile, my profile, kesh bob, beecorp, beecorp profiles, beecorp profile, beecorp user, beecorp kesh bob, kesh bob beecorp, beecorp/kesh bob, check kesh bob' />
                  
                  <link rel='stylesheet' href='../../main/css/user.css' />
                  <link rel='stylesheet' href='' />
                  
                  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
                </head>
                  <?php include '../../main/xbin/include/user.php';?>
                </html>
                
                