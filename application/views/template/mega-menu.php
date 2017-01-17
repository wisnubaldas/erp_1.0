<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style>


		
		.wrapper2{
			width: 120px;
			
			background:red;
		}

		.menu{
			list-style: none;
		}
		.menu:after{
			content:"";
			clear: both;
			display: block;
		}
		.menu>li{
			position: relative;
			float: left;
		}
		.menu>li.has-mega-menu{
			position: static;
		}
		.menu>li>a{
			color: white;
			text-decoration: none;
			padding: 5px 2px;
			display: block;
			font-weight: 100;
		}
		.menu>li:hover>a{
			background-color: #90AB2A;
		}
		.menu>li:hover .mega-menu{
			display: block;
		}
		.mega-menu{
			position: absolute;
			background: #fff;
			padding: 10px 10px;
			box-shadow: 0 0 10px rgba(0,0,0,.3);
			background:#FFF;
			z-index:999;
			display:none;
/*			background-image: url(mega-bg.png);
			background-position: 100% 100%;*/
			background-repeat: no-repeat;
		}
		.mega-menu:after{
			content:"";
			display:block;
			clear: both;
		}
		.mega-menu.fullwidth{
			left:0;
			right:0;
		}
		.mega-menu ul{
			list-style: none;
			margin: 10px 0 30px;
		}
		.column{
			margin:0 -15px;
		}
		.column:after{
			content:" ";
			display:block;
			clear: both;
		}
		.col{
			width: 33.33333%;
			float: left;
			padding: 0 15px;
		}

		.content{
			background:white;
			border:1px solid #eaeaea;
			padding:50px;
			margin-top:100px;
			color:#555;
		}
		.content h1{margin-bottom:30px;}
		.content p{margin-bottom: 10px;}
		.content iframe{width:100%;}
		.content a{color:#bad455;}
	</style>

<div class="wrapper2">
			<nav class="main-navigation">
				<ul class="menu">
					
					<li class="has-mega-menu"><a href="#">Mega</a>
						<div class="mega-menu">
							<div class="column">
								<div class="col">
									<h3>Web Development</h3>
									<ul>
										<li>HTML & CSS</li>
										<li>Javascript</li>
										<li>PHP</li>
										<li>Wordpress</li>
									</ul>
									<h3>Web Development</h3>
									<ul>
										<li>HTML & CSS</li>
										<li>Javascript</li>
										<li>PHP</li>
										<li>Wordpress</li>
									</ul>
								</div>
								<div class="col">
									<h3>Web Design</h3>
									<ul>
										<li>Photoshop</li>
										<li>Sketch</li>
										<li>Macaw</li>
										<li>Gimp</li>
									</ul>
								</div>
								<div class="col">
									<h3>Browser</h3>
									<ul>
										<li>Chrome</li>
										<li>Firefox</li>
										<li>Internet Explorer</li>
										<li>Opera</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</nav>
		</div>
        
