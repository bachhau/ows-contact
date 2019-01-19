<div class="containe">
<h1>Cập Nhật Danh Bạ</h1>
<form action="<?php echo site_url('contact/save/') .$contact_item->id?>" method="post">
	<div class="input">
		<label>Tên</label>
		<input type="text" name="name" value="<?php echo $contact_item->name ;?>">
	</div>
	<div class="input">
		<label for="">số điện thoại 1</label>
		<input type="text" name="phone1" value="<?php echo $contact_item->phone1 ;?>">
	</div>
	<div class="input">
		<label>số điện thoại 2</label>
		<input type="text" name="phone2" value="<?php echo $contact_item->phone2 ;?>">
	</div>
	<div class="input">
		<label>email</label>
		<input type="text" name="email" value="<?php echo $contact_item->email ;?>">
	</div>
	<div class="input">
		<label>facebook</label>
		<input type="text" name="fb" value="<?php echo $contact_item->facebook ;?>">
	</div>
	<div class="input">
		<label>company</label>
		<input type="text" name="company" value="<?php echo $contact_item->company ;?>">
	</div>
	<input type="submit" value="Cập nhật" />
    <input type="button" onclick="remove(<?= $contact_item->id?>)" value="Xóa" />
    <button onclick="javascript: history.back()">Quay lại</button>
</form>
</div>
<script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous">
</script>
<script>
    function remove(id) {
        var isConfirm = confirm("Bạn có chắc muốn xóa không?");
        if (isConfirm) {
            $.get("<?php echo site_url('contact/delete/')?>"+id).then(function(data) {
                if (data == "success")
                    window.location ="<?php echo site_url('contact/index/')?>" ;
                else
                    alert('Có lỗi xảy ra.');
            })
        }
    }
</script>