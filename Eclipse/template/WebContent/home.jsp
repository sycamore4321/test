<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Style-Type" content="text/css"/>
	<meta http-equiv="Content-Script=Type" content="text/css" />
	<meta http-equiv="imagetoolbar" content="no"/>
	<meta name="description" content="" />
	<meta name="keywords" content=""/>
	<title>Home画面</title>

	<style type="text/css">

		body{
		margin:0;
		padding:0;
		line-height:1.6;
		letter-spacing:1px;
		font-family:Verdana, Helvetica, sans-serif;
		font-size:12px;
		color:#333;
		background-color:#fff;
		}




	</style>
</head>
<body>

	<div id="header">
		<div id="pr"></div>
	</div>

	<div id="main">
		<div id="top">
			<p>Home</p>
		</div>
	</div>

	<div>
		<s:form action="HomeAction">
			<s:submit value="商品購入"/>
		</s:form>
	</div>

	<div id="footer">
		<div id="pr"></div>
	</div>


</body>
</html>