<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="container">
	<h1>Danh Bạ</h1>
	<div id="body">
		<table border="1">
				<tr>
					<th>STT</th>
					<th>Tên</th>
					<th>Số Điện Thoại1</th>
					<th>Số Điện Thoại2</th>
					<th>email</th>
					<th>facebok</th>
					<th>company</th>
					<th></th>
				</tr>
			<?php foreach ($contacts as $idx => $item): ?>
				<tr class="">
					<td><?php echo  $idx+1 ?></td>
					<td><?php echo $item->name  ?></td>
					<td><?php echo $item->phone1 ?></td>
					<td><?php echo $item->phone2  ?></td>
					<td><?php echo $item->email  ?></td>
					<td><?php echo $item->facebook  ?></td>
					<td><?php echo $item->company  ?></td>
					<td><a href="<?php echo site_url('contact/edit/') .$item->id  ?>" title="">Chi Tiết</a></td>
				</tr>
		<?php endforeach ; ?>
		</table>
		<a href="<?php echo site_url('contact/add'); ?>">Thêm mới</a>
	</div>
</div>
</body>
</html>