<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="urf-8" />
        <title><?=$title?></title>
        <meta name="title" content="<?=$title?>" />
        <meta property="og:title" content="<?=$title?>" />

        <meta name="description" content="<?=$desc?>" />
        <meta property="og:description" content="<?=$desc?>" />


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Rahul Juneja ( bazingarj )">

	<style>
		body{
			padding: 0;
			margin: 0;
			font-family: sans-serif;
		}
		a{text-decoration: none;}
		header{
			background-color: #87c4e1;
		}
		header h1{
			color: white;
			margin: 0;
			padding: 18px 10px;
			text-align: center;
			box-shadow: 0px 0px 10px #aaa;
		}
		footer{
			background-color: #87c4e1;
			box-shadow: 0px 0px 10px #aaa;
			color: #fff;
			padding: 14px 0px;
			position: relative;
			z-index: 1;
			width: 100%;
			bottom: 0;
			left: 0;
			height: 20px;
			margin-top: 50px;
		}
		footer span:first-child{position:absolute; left: 20px;}
		footer span:last-child{position:absolute; right: 20px;}
		button{
                        width: 250px;
                        height: 50px;
                        display: block;
                        margin: 0 auto;
                        background-color: #24bbb1;
                        color: white;
                        border-radius: 5px;
                        cursor: pointer;
                        margin-top: 40px;
                        border: 1px solid #027e7e;
                        font-size: 20px;
                }
                button:hover{box-shadow: 0px 0px 5px #aaa; background-color: white;color: #07c;}
		textarea{
		        width: 90%;
		        display: block;
		        margin: 0 auto;
		        background-color: #eee;
		        border: 1px solid #07c;
		        height: 400px;
		        border-radius: 10px;
		        padding: 10px 5px;
		}
		label{
		        margin-left: 5%
		}
		nav{
			background-color: #87c4e1;
			height: 34px;
			padding-top: 13px;
			margin-bottom: 50px;
		}
		nav a {margin-left: 27px;}
		body > h1{
			text-align: center;
		}
		.btn-pretty{
			float: right;
			width: 100px;
			height: 30px;
			font-size: 17px;
			margin-right: 5%;
			margin-top: -7px;
			margin-bottom: 3px;
		}
		.error,.success{
			background-color: #f38a8a;
			padding: 10px 5%;
		}
		.success{background-color: #8ff98f;}
        </style>
</head>
<body>
