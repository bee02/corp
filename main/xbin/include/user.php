																																													
   <body>
   <?php
    require '../../main/php/functions.php';
    $userstmt = mysqli_stmt_init($connect);
    mysqli_stmt_prepare($userstmt, "select * from users where phone = ?");
	mysqli_stmt_bind_param($userstmt, "s", $phone);
    mysqli_stmt_execute($userstmt);
	$user_R = mysqli_stmt_get_result($userstmt);
	$user_f = mysqli_fetch_assoc($user_R);
     
	$currentProfile = $user_f["current_profile"];
	$userid = $user_f["current_profile"];
	$username = $user_f["x"];
	$active = $user_f["active"];
	$imgTable = $user_f["images_table"];
	$songTable = $user_f["songs_table"];
	$gender = $user_f["gender"];
	
	// $songTable, $imgTable

   ?>
            <!-- head -->
            <div class="head">
		  <a href="../../index.php">
		   <img src="../../main/xbin/img/sys/logo/20240815_120950new.jpg" alt="logo" />
		  </a>
		  
		   <div class="navbtns">
		    <!-- <button id="opennav"><svg width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-dasharray="24" stroke-dashoffset="24" stroke-linecap="round" stroke-width="2"><path d="M5 5H19"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="24;0"/></path><path d="M5 12H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.2s" values="24;0"/></path><path d="M5 19H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.2s" values="24;0"/></path></g></svg></button>
		    <button id="closenav" style="display:none;"><svg width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-width="2"><path d="M5 5L19 5"><animate fill="freeze" attributeName="d" begin="0.2s" dur="0.4s" values="M5 5L19 5;M5 5L19 19"/></path><path d="M5 12H19"><animate fill="freeze" attributeName="d" dur="0.4s" values="M5 12H19;M12 12H12"/><set attributeName="opacity" begin="0.4s" to="0"/></path><path d="M5 19L19 19"><animate fill="freeze" attributeName="d" begin="0.2s" dur="0.4s" values="M5 19L19 19;M5 19L19 5"/></path></g></svg></button> -->
			<?php
				if (isset($_SESSION["phone"])) {
			?>
			<a href="../../public/index.php"><button>Home</button></a>
			<a href="../../public/profile.php"><button>Profile</button></a>
			<a href="../../public/market.php"><button>Market</button></a>		     
			<a href="../../public/playlist.php"><button>Playlist</button></a>
			<!--<a href="friends.php"><button><b style="font-weight:900;color:blue;">(<?php echo mysqli_num_rows(mysqli_query($connect, "select * from requests where to_number = '$phone' and isFriend = '0'"));?>)</b> Friends</button></a>
		   --><a href="https://chat.beecorp.site/"><button>Messages</button></a>
		   <?php
				} else {
		   ?>
			    <style>
					.head .navbtns{width:80px;border:01px solid grey;}
				</style>
				<a href="../../login/"><button>Login</button></a>
			<?php
				}
			?>
			</div>
		  </div>
		  <!--head-->

<style>
	@media (max-width:700px) {
		.head .navbtns{
			display:none;
		}
	}
</style>


            <?php
              //echo $songTable;
            ?>

            
            <!-- main -->
		  <div class="main">

			<!-- cover-photo -->
			<div class="cover-photo">
				<!-- <img src="../main/xbin/img/sys/logo/plan.jpg" alt="cover-photo" /> -->
			</div>
			<!-- cover-photo -->

			<!-- profile-box -->
			<div class="profile-box">

				<!-- profile-data -->
				 <div class="profile-data">
					<!-- data-one -->
					 <div class="data-one">

						<!-- data-info -->
						 <div class="data-info">
							
							<?php

                                    $picturesql = "select current_profile from users where phone = ?"; 
									$picturesqlq = mysqli_stmt_init($connect);
									if (!mysqli_stmt_prepare($picturesqlq, $picturesql)) {
										echo "sql error";
									} else {
										mysqli_stmt_bind_param($picturesqlq,"s",$phone);
										mysqli_stmt_execute($picturesqlq);
										$picturesqlq_result = mysqli_stmt_get_result($picturesqlq);
										$picturesqlF = mysqli_fetch_assoc($picturesqlq_result);
									}
									
										$pictureVar = $picturesqlF["current_profile"];    
										$customDesign = "<style>#mypic{ width:60;height:60;border-radius:30px; }</style>";
									
									if ($picturesqlF["current_profile"] == "") {
										echo "{$customDesign} <img src='../../main/xbin/img/sys/def.jpg' id='mypic' alt='defaultprofile'/>";
									} else {
										echo "{$customDesign} <img src='../../main/xbin/img/users/$pictureVar' id='mypic' alt='$pictureVar'/>";
									}

							?>

							<div id="username">
								<h2><?php echo $username; ?> <span style="font-size:10px;font-weight:bold;padding:5px;background:green;color:white;border-radius:10px;"><?php if ($active=="on"){echo "Active";}else{echo "Offline";};?></span></h2>
							</div>
							
							<div id="records">
							 <p>Business <b><?php echo _fetch_record_number_($connect, "businessTable", "phone", $phone); ?></b></p>
							 <p>Picture <b><?php echo _fetch_record_number_($connect, $imgTable, "phone", $phone); ?></b></p>
							 <p>Music <b><?php echo _fetch_record_number_($connect, $songTable, "phone", $phone); ?></b></p>
							</div>
							
						</div>
						<!-- data-info -->

						

					 </div>
					<!-- data-one -->
					

				 </div>
				<!-- profile-data -->



				<!-- profile-information -->
				 <div class="profile-information">

				 	<!-- personal-info-one -->
					 <div class="personal-info-one">
						<h3>About me</h3>
						<p>
							<span>Username</span><br>
							<strong><?php echo $username; ?></strong>
						</p>
						<p>
							<span>Gender</span><br>
							<strong><?php echo $gender; ?></strong>
						</p>
						<p>
							<span>Contact Number</span><br>
							<strong><?php echo $phone; ?></strong>
						</p>
						
							
						
						
					 </div>
				 	<!-- personal-info-one -->

					<!-- personal-info-two -->
					 <div class="personal-info-two">

					 	
						<!-- box -->
							<div class="box">
							<h3>Uploaded content</h3>

								<!--mypictures-->
								<style>
									.mypictures{
										width: 100%;
										max-width: 600px;
										border:0px solid red;
									}.mypictures h1{
										font-size:12px;
										display:none;
									}.mypictures .flex{
										width: 100%;
										max-width: 600px;
										border:0px solid green;
										display:flex;
										flex-wrap:wrap;

									}.mypictures .flex .box-p{
										width: 90px;
										border:0px solid grey;
										margin: 10px;
									}.mypictures .flex .box-p img{
										width:90px;
										height: 90px;
										border:0px solid grey;
										margin-bottom:5px;
									}.mypictures .flex .box-p form{
										width: 90px;
										display: flex;
										justify-content:space-between;
									}.mypictures .flex .box-p form button{
										height: 30px;
										background: #222;
										color: white;
										font-weight: bold;
										border: 0px solid grey;
										border-radius: 0px;
										font-size: 10px;
									}
								</style>
								<div class="mypictures">
									<h1>
									<span>Pictures</span>
									</h1>
									<!--flex-->
									<div class="flex">
									
									<?php
										$getimgTables = "select * from $imgTable where phone = ? order by id desc";
										mysqli_stmt_prepare($stmt, $getimgTables);
										mysqli_stmt_bind_param($stmt,"s",$phone);
										mysqli_stmt_execute($stmt);
										$getimgTableQ_R = mysqli_stmt_get_result($stmt);
										$getimgTableR = mysqli_num_rows($getimgTableQ_R);
										
										if ($getimgTableR > 0) {
										while ($getimgTableF = mysqli_fetch_assoc($getimgTableQ_R)) {
										$imgG = $getimgTableF["image"];
										$imgid = $getimgTableF["id"];
										$img_id = $getimgTableF["img_id"];
										$img_phone = $getimgTableF["phone"];
									?>
									<!--box-->
									<div class="box-p">
										<img src="../../main/xbin/img/users/<?php echo $imgG; ?>" />
									</div>
									<!--box-->
									<?php
												// if (isset($_POST["$imgid"])) {        
												// mysqli_stmt_prepare($stmt, "select image from $imgTable where id = ?");
												// mysqli_stmt_bind_param($stmt,"s",$imgid);
												// mysqli_stmt_execute($stmt);
												// $getimgidR = mysqli_stmt_get_result($stmt);
												// $getimgidF = mysqli_fetch_assoc($getimgidR);
												// $getimgObj = $getimgidF["image"];
													
												// 	if (mysqli_stmt_prepare($stmt, "update users set current_profile = ? where phone = ?")) {
												// 	mysqli_stmt_bind_param($stmt,"ss",$getimgObj,$phone);
												// 	mysqli_stmt_execute($stmt);
												// 	}
												// _http_res(0,"profile.php");
												// }
												
												
												// if (isset($_POST["removedp"])) {
													
												// 	if (mysqli_stmt_prepare($stmt, "update users set current_profile = '' where phone = ?")) {
												// 	mysqli_stmt_bind_param($stmt,"s",$phone);
												// 	mysqli_stmt_execute($stmt);	         
												// 	}
												// _http_res(0, "profile.php");
												// }
												
												
												
												if (isset($_POST["d$imgid"])) {
													mysqli_stmt_prepare($stmt, "select * from $imgTable where id = ?");
													mysqli_stmt_bind_param($stmt,"s",$imgid);
													mysqli_stmt_execute($stmt);
													$sqliq_R = mysqli_stmt_get_result($stmt);
													$sqliqF = mysqli_fetch_assoc($sqliq_R);
													$imgid = $sqliqF["img_id"];
													
													// make sure you monitor here
													if (mysqli_stmt_prepare($stmt, "update users set current_profile = '' where phone = ?")) {
													mysqli_stmt_bind_param($stmt,"s",$phone);
													mysqli_stmt_execute($stmt);
														
														if(mysqli_stmt_prepare($stmt,"INSERT INTO imagesdump (phone,img_id,image) SELECT phone,img_id,image FROM $imgTable WHERE phone = ? and img_id = ?")) {
														mysqli_stmt_bind_param($stmt,"ss",$phone,$imgid);
														mysqli_stmt_execute($stmt);
														
															if (mysqli_stmt_prepare($stmt,"delete from $imgTable where img_id = ?")) {
																mysqli_stmt_bind_param($stmt,"s",$img_id);
																mysqli_stmt_execute($stmt);
															} else {
																mysqli_query($connect,"delete from $imgTable where img_id = '$img_id'");
															}
														
														} else {
														mysqli_query($connect, "INSERT INTO imagesdump (phone,img_id,image) SELECT phone,img_id,image FROM $imgTable WHERE phone = '$phone' and img_id = '$imgid'");
														}
														
													}
													
													
													/* 
													+ NOTE +
														
														objects will be deleted in settings
														and not here in profile
													*/
													//unlink("../main/xbin/img/users/$imgG");
													_http_res(0,"profile.php");
													
												}
												
										}
										} else {
										echo "<i style='font-size:12px;color: silver;margin-left: 10px;'><!--All your profile pictures goes here.--></i>";
										}
									?>
									
									</div>
									<!--flex-->
									
								</div>
								<!--mypictures-->

							<?php
								$stmt_m = mysqli_stmt_init($connect);
								$stmt_sql = "select * from $songTable order by id desc";
								if (!mysqli_stmt_prepare($stmt_m, $stmt_sql)) {
									echo "sorry something went wrong";
								} else {
									mysqli_stmt_execute($stmt_m);
									$stmt_m_RES = mysqli_stmt_get_result($stmt_m);
									$stmt_m_ROWS = mysqli_num_rows($stmt_m_RES);
									if ($stmt_m_ROWS > 0) {
										while ($stmt_m_FETCH = mysqli_fetch_assoc($stmt_m_RES)) {
											$m_id = $stmt_m_FETCH["id"];
											$m_phone = $stmt_m_FETCH["phone"];
											$m_song_id = $stmt_m_FETCH["song_id"];
											$m_title = $stmt_m_FETCH["title"];
											$m_songs = $stmt_m_FETCH["songs"];
											$m_picture = $stmt_m_FETCH["picture"];
							?>
									<!-- m-box -->
									 <div class="m-box">
										<img src="../../main/xbin/img/users/<?php echo $m_picture; ?>" alt="music-cover"/>
										<b><?php echo $m_id;?></b>
										<span><?php echo $m_title;?></span>
										<a href="../../main/xbin/mp3/users/<?php echo $m_songs; ?>" download>download</a>
										<div class="ply-ps-btn">
											<button id="play<?php echo $m_id;?>"><svg  width="15" height="15" viewBox="0 0 512 512"><path fill="white" d="M133 440a35.37 35.37 0 0 1-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0 1 35.77.45l247.85 148.36a36 36 0 0 1 0 61l-247.89 148.4A35.5 35.5 0 0 1 133 440Z"/></svg></button>
											<button id="pause<?php echo $m_id;?>" style="display:none;"><svg  width="15" height="15" viewBox="0 0 24 24"><path fill="white" d="M2 6c0-1.886 0-2.828.586-3.414C3.172 2 4.114 2 6 2c1.886 0 2.828 0 3.414.586C10 3.172 10 4.114 10 6v12c0 1.886 0 2.828-.586 3.414C8.828 22 7.886 22 6 22c-1.886 0-2.828 0-3.414-.586C2 20.828 2 19.886 2 18V6Zm12 0c0-1.886 0-2.828.586-3.414C15.172 2 16.114 2 18 2c1.886 0 2.828 0 3.414.586C22 3.172 22 4.114 22 6v12c0 1.886 0 2.828-.586 3.414C20.828 22 19.886 22 18 22c-1.886 0-2.828 0-3.414-.586C14 20.828 14 19.886 14 18V6Z"/></svg></button>
										</div>
										<audio id="m<?php echo $m_id;?>" src="../../main/xbin/mp3/users/<?php echo $m_songs;?>"></audio>

										
										<script>
				
											let play<?php echo $m_id; ?> = document.getElementById("play<?php echo $m_id; ?>")
											let pause<?php echo $m_id; ?> = document.getElementById("pause<?php echo $m_id; ?>")
											let m<?php echo $m_id; ?> = document.getElementById("m<?php echo $m_id; ?>")
											
											play<?php echo $m_id; ?>.onclick = function(){
											m<?php echo $m_id; ?>.play()
											play<?php echo $m_id; ?>.style.display="none"
											pause<?php echo $m_id; ?>.style.display="block"
												
												pause<?php echo $m_id; ?>.onclick = function(){
												m<?php echo $m_id; ?>.pause()
												play<?php echo $m_id; ?>.style.display="block"
												pause<?php echo $m_id; ?>.style.display="none"
												}
												
											}
											
										</script>
										
										
									 </div>
									<!-- m-box -->
							<?php

											// if (isset($_POST["del$m_id"])) {
											// 	mysqli_stmt_prepare($stmt,"insert into musicdump (phone,song_id,title,songs,picture) select phone,song_id,title,songs,picture from $songTable where song_id = ?");
											// 	mysqli_stmt_bind_param($stmt,"s",$m_song_id);
											// 	mysqli_stmt_execute($stmt);
												
											// 	mysqli_stmt_prepare($stmt,"delete from $songTable where song_id = ?");
											// 	mysqli_stmt_bind_param($stmt,"s",$m_song_id);
											// 	mysqli_stmt_execute($stmt);
												
											// 	mysqli_stmt_prepare($stmt,"delete from musicTable where song_id = ?");
											// 	mysqli_stmt_bind_param($stmt,"s",$m_song_id);
											// 	mysqli_stmt_execute($stmt);
												
											// 	mysqli_stmt_prepare($stmt,"delete from public where song_id = ?");
											// 	mysqli_stmt_bind_param($stmt,"s",$m_song_id);
											// 	mysqli_stmt_execute($stmt);
												
											// 	// unlink("../main/xbin/mp3/users/$m_songs");
											// 	// unlink("../main/xbin/img/users/$m_picture");
											// 	_http_res(0,"profile.php");
 											// }

										}
									} else {
										echo "<i style='font-size:12px;color: silver;margin-left: 10px;'><!--All your music goes here--></i>";
									}
								}
							?>
							
						</div>
						<!-- box -->

						
					 </div>
					<!-- personal-info-two -->

				 </div>
				<!-- profile-information -->

			</div>
			<!-- profile-box -->

			
						 <br><br>


						 <br><br><br>
						<center>		   
							<!--mynav-->
							<div class="mynav">
				
								<!-- buttons -->
								<div class="buttons">
								  <?php
									if (isset($_SESSION["phone"])) {
								  ?>
									<a href="../../public/index.php"><button style="border-bottom:01px solid white;"><svg  width="22px" height="22px" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-width="2" d="M1 22V9.76a2 2 0 0 1 .851-1.636l9.575-6.72a1 1 0 0 1 1.149 0l9.574 6.72A2 2 0 0 1 23 9.76V22a1 1 0 0 1-1 1h-5.333a1 1 0 0 1-1-1v-5.674a1 1 0 0 0-1-1H9.333a1 1 0 0 0-1 1V22a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z"/></svg></button></a>
									<a href="../../public/profile.php"><button><svg  width="22px" height="22px" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-width="1.5"><path d="M11.607 2.342a.6.6 0 0 1 .787 0l1.948 1.692a.6.6 0 0 0 .445.145l2.572-.224a.6.6 0 0 1 .636.463l.582 2.514a.6.6 0 0 0 .275.38l2.212 1.33a.6.6 0 0 1 .243.748l-1.008 2.376a.6.6 0 0 0 0 .468l1.008 2.376a.6.6 0 0 1-.243.749l-2.212 1.33a.6.6 0 0 0-.275.379l-.582 2.514a.6.6 0 0 1-.636.463l-2.572-.224a.6.6 0 0 0-.445.144l-1.949 1.693a.6.6 0 0 1-.787 0l-1.948-1.693a.6.6 0 0 0-.445-.144l-2.572.224a.6.6 0 0 1-.636-.463l-.582-2.514a.6.6 0 0 0-.275-.38l-2.212-1.33a.6.6 0 0 1-.243-.748l1.008-2.376a.6.6 0 0 0 0-.468L2.693 9.39a.6.6 0 0 1 .243-.749l2.212-1.33a.6.6 0 0 0 .275-.379l.582-2.514a.6.6 0 0 1 .636-.463l2.572.224a.6.6 0 0 0 .445-.145z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 13l2 2l5-5"/></g></svg></button></a>
									<a href="../../public/market.php"><button><svg  width="22" height="22" viewBox="0 0 48 48"><g fill="black"><path d="M22.5 28a1.5 1.5 0 1 1 0-3a1.5 1.5 0 0 1 0 3"/><path fill-rule="evenodd" d="M9.429 20q.292 0 .571-.048V28H7.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h33a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H38v-8.048q.28.048.571.048C40.473 20 42 18.448 42 16.551v-2.39a2.7 2.7 0 0 0-.163-.93l-2.18-6.01A1.85 1.85 0 0 0 37.917 6H10.082a1.85 1.85 0 0 0-1.738 1.222l-2.18 6.009a2.7 2.7 0 0 0-.164.93v2.39C6 18.448 7.527 20 9.429 20m-1.385-6.087L10.189 8H37.81l2.145 5.913q.044.12.044.248v2.39A1.44 1.44 0 0 1 38.57 18c-.78 0-1.428-.64-1.428-1.449a1 1 0 0 0-2 0A1.44 1.44 0 0 1 33.713 18c-.78 0-1.428-.64-1.428-1.448a1 1 0 0 0-2 0c0 .808-.648 1.448-1.429 1.448s-1.428-.64-1.428-1.449a1 1 0 1 0-2 0A1.44 1.44 0 0 1 24 18a1.44 1.44 0 0 1-1.429-1.448a1 1 0 0 0-2 0c0 .808-.647 1.448-1.428 1.448s-1.429-.64-1.429-1.449a1 1 0 1 0-2 0c0 .808-.647 1.449-1.428 1.449s-1.429-.64-1.429-1.449a1 1 0 1 0-2 0c0 .808-.647 1.449-1.428 1.449C8.647 18 8 17.36 8 16.551v-2.39q0-.129.044-.248M36 19.122a3.4 3.4 0 0 1-2.286.878a3.4 3.4 0 0 1-2.428-1.014A3.4 3.4 0 0 1 28.857 20a3.4 3.4 0 0 1-2.428-1.014A3.4 3.4 0 0 1 24 20a3.4 3.4 0 0 1-2.429-1.014A3.4 3.4 0 0 1 19.143 20c-.951 0-1.81-.389-2.429-1.014A3.4 3.4 0 0 1 14.286 20c-.88 0-1.68-.333-2.286-.878V28h2.5a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v.5h1.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H36zM8 33a1 1 0 0 1 1-1h30a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1zm2 7v-6h28v6z" clip-rule="evenodd"/></g></svg></button></a>		     
									<a href="../../public/playlist.php"><button><svg  width="22px" height="22px" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M9.713 3.64c.581-.495.872-.743 1.176-.888a2.577 2.577 0 0 1 2.222 0c.304.145.595.393 1.176.888c.599.51 1.207.768 2.007.831c.761.061 1.142.092 1.46.204c.734.26 1.312.837 1.571 1.572c.112.317.143.698.204 1.46c.063.8.32 1.407.83 2.006c.496.581.744.872.889 1.176c.336.703.336 1.52 0 2.222c-.145.304-.393.595-.888 1.176a3.306 3.306 0 0 0-.831 2.007c-.061.761-.092 1.142-.204 1.46a2.577 2.577 0 0 1-1.572 1.571c-.317.112-.698.143-1.46.204c-.8.063-1.407.32-2.006.83c-.581.496-.872.744-1.176.889a2.577 2.577 0 0 1-2.222 0c-.304-.145-.595-.393-1.176-.888a3.306 3.306 0 0 0-2.007-.831c-.761-.061-1.142-.092-1.46-.204a2.577 2.577 0 0 1-1.571-1.572c-.112-.317-.143-.698-.204-1.46a3.305 3.305 0 0 0-.83-2.006c-.496-.581-.744-.872-.89-1.176a2.577 2.577 0 0 1 .001-2.222c.145-.304.393-.595.888-1.176c.52-.611.769-1.223.831-2.007c.061-.761.092-1.142.204-1.46a2.577 2.577 0 0 1 1.572-1.571c.317-.112.698-.143 1.46-.204a3.305 3.305 0 0 0 2.006-.83"/><path d="M12.5 14.5V8.6a.6.6 0 0 1 .6-.6h1.4m-2 6.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0"/></g></svg></button></a>
									<a href="../../public/messages.php"><button><svg  width="22px" height="22px" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="m3.585 11.965l-.716.148a1.863 1.863 0 0 1-1.792-3.036L2 8l-.923-1.077A1.863 1.863 0 0 1 2.87 3.887l.716.148l-.07-.303a1.822 1.822 0 0 1 2.64-2.014l8.293 4.466a2 2 0 0 1 1.052 1.76v.111a2 2 0 0 1-1.052 1.761l-8.293 4.466a1.822 1.822 0 0 1-2.64-2.014zm1.617-.334l-.225.974a.322.322 0 0 0 .466.356l1.625-.875l3.895-1.647zm5.761-6.07L7.068 3.914l-1.625-.875a.322.322 0 0 0-.466.356l.225.974zM3.14 8.976L3.976 8l-.837-.976l-.923-1.077a.363.363 0 0 1 .349-.591l11.162 2.309a.342.342 0 0 1 0 .67l-11.162 2.31a.363.363 0 0 1-.349-.592z" clip-rule="evenodd"/></svg></button></a>
								  <?php
									} else {
								  ?>
									<a href="../../public/">
										<button>
											<svg  width="22" height="22" viewBox="0 0 32 32"><path fill="gray" d="M16 10a6 6 0 0 0-6 6v8a6 6 0 0 0 12 0v-8a6 6 0 0 0-6-6m-4.25 7.87h8.5v4.25h-8.5zM16 28.25A4.27 4.27 0 0 1 11.75 24v-.13h8.5V24A4.27 4.27 0 0 1 16 28.25m4.25-12.13h-8.5V16a4.25 4.25 0 0 1 8.5 0zm10.41 3.09L24 13v9.1a4 4 0 0 0 8 0a3.83 3.83 0 0 0-1.34-2.89M28 24.35a2.25 2.25 0 0 1-2.25-2.25V17l3.72 3.47A2.05 2.05 0 0 1 30.2 22a2.25 2.25 0 0 1-2.2 2.35M0 22.1a4 4 0 0 0 8 0V13l-6.66 6.21A3.88 3.88 0 0 0 0 22.1m2.48-1.56L6.25 17v5.1a2.25 2.25 0 0 1-4.5 0a2.05 2.05 0 0 1 .73-1.56M15 5.5A3.5 3.5 0 1 0 11.5 9A3.5 3.5 0 0 0 15 5.5m-5.25 0a1.75 1.75 0 1 1 1.75 1.75A1.77 1.77 0 0 1 9.75 5.5M20.5 2A3.5 3.5 0 1 0 24 5.5A3.5 3.5 0 0 0 20.5 2m0 5.25a1.75 1.75 0 1 1 1.75-1.75a1.77 1.77 0 0 1-1.75 1.75"/></svg>
										</button>
									</a>
								  <?php
									} 
								  ?>
								</div>
								<!-- buttons -->
							
							</div>
							<!--mynav-->
						</center>

		  
		</div>
		<!-- main -->


    </body>																									