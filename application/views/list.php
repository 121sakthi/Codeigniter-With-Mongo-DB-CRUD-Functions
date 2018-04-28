<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Codeigniter With Mongo DB CRUD Functions</title>
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	#body {
		margin: 0 15px 0 15px;
	}
	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div id="container">
	<h1>Data List <a href="<?php echo site_url().'/welcome/add';?>">Add New</a></h1>
	<div id="body">
		<table border="1" width="25%">
			<tr>
				<th height="50">Name</th>
				<th>City</th>
				<th>Action</th>
			</tr>
			<?php
			foreach ($list as $key => $value) {
			?>
			<tr>
				<td align="center"><?php echo $value['name'];?></td>
				<td align="center"><?php echo $value['city'];?></td>
				<td align="center">
					<a href="<?php echo site_url().'/welcome/edit/'.$value['_id'];?>">Edit</a>
					<br/>
					<a href="<?php echo site_url().'/welcome/delete/'.$value['_id'];?>" onclick="return confirms()">Delete</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>
</body>
<script type="text/javascript">
	function confirms() {		
		var r = confirm('Do you want to delete this??');
		if (r == true) {
    		return true;
		} else {
    		return false;
		}
	}
</script>
</html>