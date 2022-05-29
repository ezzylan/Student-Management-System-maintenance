<?php

if(isset($_POST['get_theme_list'])){

$theme_list=$theme->get_theme_info();
//print_r($theme_list);
$login_user_theme=$login_user['theme'];

?>


<div class="theme_container">
	<?php foreach ($theme_list as $key => $value) { 
		$name=$value['name'];
		$theme_id=$value['id'];
		$bg_color=$value['bg_color'];
		$font_color=$value['font_color'];
		$style="background-color: $bg_color; color: $font_color";
		$active_class=($login_user_theme==$theme_id)?"theme_class_active":"hover_cls";

	?>
		<div class="theme_item">
			<div onclick="change_theme(<?php echo "$theme_id"; ?>)" style="<?php echo $style; ?>" class="theme_cls <?php echo $active_class; ?>">
				<?php if($login_user_theme==$theme_id){ ?>
					<span style="font-size: 30px" class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
				<br/>
				<?php } ?>

			</div>
			<div class="theme_name_text"><?php echo "$name"; ?></div>
		</div>
	<?php } ?>
		<a href="theme.php">
		<div class="theme_item">
			<div style="background: #e8e8e8;box-shadow: none;" class="theme_cls">
				...
			</div>
			<div class="theme_name_text">Edit Theme</div>
		</div>
		</a>
</div>

<style type="text/css">
	.theme_container{
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start;
		align-items: center;
		align-content: center;
		gap: 15px;
	}
	.theme_item{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		width: 100px;
	}
	.theme_name_text{
		max-width: 100px;
		text-overflow: ellipsis;
		white-space: nowrap;
		display: block;
		overflow:hidden;
		cursor: default;
		font-size: 12px;
	}

	.theme_cls{
		padding: 15px;
		height: 50px;
		width: 50px;
		margin-bottom: 15px;
		cursor: pointer;
		border-radius: 50%;
		border: 2px solid rgba(232, 232, 232, 0.5);
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.hover_cls:hover{
		font-size: 21px;
	}
	.theme_class_active{
		border: 2px solid #0a84ff;
	}
</style>

<?php

}
if(isset($_POST['change_theme'])){
	$theme_id=$_POST['change_theme'];
	$data['id']=$login_user['id'];
	$data['theme']=$theme_id;
	$db->sql_action("user","update",$data);
	$ut_info=$theme->get_theme($theme_id);
    $bg_color=$ut_info['bg_color'];
    $font_color=$ut_info['font_color'];
	?>
<style type="text/css">
		:root {
            --bg-color: <?php echo "$bg_color"; ?>;
            --font-color: <?php echo "$font_color"; ?>;
        } 

</style>
<?php

}


?>
