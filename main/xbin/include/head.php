<!--head-->
		  <style>
		  .head{
		   width:100%;
		   max-width:1200px;
		   margin:0 auto;
		   /* background:#36474F; */
		   background:white;
		   justify-content:space-between;
		   padding-top:0px;
		   padding-bottom:5px;
		   border:0px solid chocolate;
		   /* position:fixed;
		   top:0px;
		   left:0;
		   right:0; */
		   border-bottom:2px solid #eeeeee;
		   display:flex;
		   border-radius:0px 0px 0px 0px;
		  }.head img{width:130px;border:0px solid green;}
		   .head .navbtns{width:450px;border:0px solid red;margin-top:8px;margin-right:10px;display:flex;justify-content:space-around;display:block;}
		   .head .navbtns button{background:none;color:royalblue;width:80px;height:35px;border:0px solid grey;font-weight:bold;}
		   .head .navbtns button:active{background:#eee;color:black;}
		   .head .navbtns a{color:default;text-decoration:none;}
		  </style>
		  <div class="head">
		  <a href="index.php">
		   <img src="../main/xbin/img/sys/logo/20240815_120950new.jpg" alt="logo" />
		  </a>
		  
		   <div class="navbtns">
		    <!-- <button id="opennav"><svg width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-dasharray="24" stroke-dashoffset="24" stroke-linecap="round" stroke-width="2"><path d="M5 5H19"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="24;0"/></path><path d="M5 12H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.2s" values="24;0"/></path><path d="M5 19H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.2s" values="24;0"/></path></g></svg></button>
		    <button id="closenav" style="display:none;"><svg width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-width="2"><path d="M5 5L19 5"><animate fill="freeze" attributeName="d" begin="0.2s" dur="0.4s" values="M5 5L19 5;M5 5L19 19"/></path><path d="M5 12H19"><animate fill="freeze" attributeName="d" dur="0.4s" values="M5 12H19;M12 12H12"/><set attributeName="opacity" begin="0.4s" to="0"/></path><path d="M5 19L19 19"><animate fill="freeze" attributeName="d" begin="0.2s" dur="0.4s" values="M5 19L19 19;M5 19L19 5"/></path></g></svg></button> -->
			<?php
				if (isset($_SESSION["phone"])) {
			?>
			<a href="index.php"><button>Home</button></a>
			<a href="profile.php"><button>Profile</button></a>
			<a href="market.php"><button>Market</button></a>		     
			<a href="playlist.php"><button>Playlist</button></a>
			<a href="https://chat.beecorp.site/"><button>Messages</button></a>
		   <?php
				} else {
		   ?>
			    <style>
					.head .navbtns{width:80px;border:01px solid grey;}
				</style>
				<a href="../login/"><button>Login</button></a>
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