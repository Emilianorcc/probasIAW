<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="prueba.css">
    <style type="text/css">
    	.header
    	{
            background-color: lightgrey;
            top: 0%; 
            width: 100%; 
            height: 10%;
            position: relative;
            vertical-align: middle;
    	}
		.footer
		{
    		width: 100%;
    		height: 10%;
    		background-color: green;
    		position: relative;
    		bottom: 0%;
    	}
		#titulo
		{
			float:left; 
			margin-left:1%
		}
		#login
		{
			float:right; 
			margin-right:1%
		}
    </style>
</head>
<body>
<div class="header">
	<p><span id="titulo">Son's of cthulhu</span> <span id="login">Login | Register</span></p>
</div>