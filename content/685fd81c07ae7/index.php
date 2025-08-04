
                 <?php
                   session_start();
                   require '../../main/php/db.php';
                   $userstmt = mysqli_stmt_init($connect);
                   $phone = '0975416548';
                   $imageTable = 'm_685fd81c07ae7';
                   $songTable = 'p_685fd81c07ae8';
                   $busTable = 'businesTable';
                 ?>
                <html>
                <head>
                  <title>Phlex Perez</title>
                  <meta charset='utf-8' />
                  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                  <meta name='theme-color' content='default' />
                  <meta name='description' content='Say hello to Phlex Perez, and view there products and services on there beecorp profile' />
                  <meta name='keywords' content='Phlex Perez, profile, Phlex Perez, Phlex Perez s profile, my profile, Phlex Perez, beecorp, beecorp profiles, beecorp profile, beecorp user, beecorp Phlex Perez, Phlex Perez beecorp, beecorp/Phlex Perez, check Phlex Perez' />
                  
                  <link rel='stylesheet' href='../../main/css/user.css' />
                  <link rel='stylesheet' href='' />
                  
                  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
                </head>
                  <?php include '../../main/xbin/include/user.php';?>
                </html>
                
                