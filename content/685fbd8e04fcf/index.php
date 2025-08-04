
                 <?php
                   session_start();
                   require '../../main/php/db.php';
                   $userstmt = mysqli_stmt_init($connect);
                   $phone = '0770790990';
                   $imageTable = 'm_685fbd8e04fcf';
                   $songTable = 'p_685fbd8e04fd2';
                   $busTable = 'businesTable';
                 ?>
                <html>
                <head>
                  <title>Jay tox</title>
                  <meta charset='utf-8' />
                  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                  <meta name='theme-color' content='default' />
                  <meta name='description' content='Say hello to Jay tox, and view there products and services on there beecorp profile' />
                  <meta name='keywords' content='Jay tox, profile, Jay tox, Jay tox s profile, my profile, Jay tox, beecorp, beecorp profiles, beecorp profile, beecorp user, beecorp Jay tox, Jay tox beecorp, beecorp/Jay tox, check Jay tox' />
                  
                  <link rel='stylesheet' href='../../main/css/user.css' />
                  <link rel='stylesheet' href='' />
                  
                  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
                </head>
                  <?php include '../../main/xbin/include/user.php';?>
                </html>
                
                