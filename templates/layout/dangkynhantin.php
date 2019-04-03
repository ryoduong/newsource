<script type="text/javascript" language="javascript">
	function nhantin(){
		if(isEmpty($('#ten_nhantin').val(), "<?=_nhapemailcuaban?>"))
			{
				$('#ten_nhantin').focus();
				return false;
			}
		if(isEmpty($('#dienthoai_nhantin').val(), "<?=_nhapemailcuaban?>"))
			{
				$('#dienthoai_nhantin').focus();
				return false;
			}

		if(isEmpty($('#email_nhantin').val(), "<?=_nhapemailcuaban?>"))
			{
				$('#email_nhantin').focus();
				return false;
			}
			if(isEmail($('#email_nhantin').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_nhantin').focus();
				return false;
			}
			if(isEmpty($('#noidung_nhantin').val(), "<?=_nhapemailcuaban?>"))
			{
				$('#noidung_nhantin').focus();
				return false;
			}
		document.frm_dknt.submit();
	}
</script>
<?php
	if(isset($_POST['email_nhantin']))
	{		
		$ten_nhantin = $_POST['ten_nhantin'];
		$dienthoai_nhantin = $_POST['dienthoai_nhantin'];
		$email_nhantin = $_POST['email_nhantin'];
		$noidung_nhantin = $_POST['noidung_nhantin'];		
		$d->reset();
		$sql_kt_mail="SELECT email FROM table_newsletter WHERE email='".$email_nhantin."'";
		$d->query($sql_kt_mail);
		$kt_mail=$d->result_array();
		if(count($kt_mail)>0)
			alert(_emaildadangky);
		else
		{
			$email_nhantin = trim(strip_tags($email_nhantin));
			$email_nhantin = mysql_real_escape_string($email_nhantin);			
			$sql = "INSERT INTO  table_newsletter (ten,dienthoai,email,noidung) VALUES ('$ten_nhantin','$dienthoai_nhantin','$email_nhantin','$noidung_nhantin')";	
			if($d->query($sql)== true)
				alert(_guiemailthanhcong);
			else
				alert(_guiemailthatbai);
		}		
	}
?>
<div id="dknt">
    <form name="frm_dknt" id="frm_dknt" method="post" action="" >
    	<input type="text" name="ten_nhantin" id="ten_nhantin" placeholder="Họ tên (*)" />
    	<input type="text" name="dienthoai_nhantin" id="dienthoai_nhantin" placeholder="Điện thoại (*)" />
        <input type="text" name="email_nhantin" id="email_nhantin" placeholder="Email (*)" />
        <div class="item_lienhe"><textarea name="noidung_nhantin" id="noidung_nhantin" rows="5" placeholder="<?=_noidung?> (*)"></textarea></div>
        <input type="button" name="submit_nhantin" id="submit_nhantin" onclick="nhantin()" value="Gửi" />
    </form>
</div>


