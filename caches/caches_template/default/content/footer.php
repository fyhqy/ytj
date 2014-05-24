<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="footer" class="row-fluid hidden-phone" style="color: #cdcdcd; margin-top: 30px; padding-top:10px; border-top: 5px solid #286BA7">
	<div class="span10 blogContent">
		©2013-2014 <?php echo $SEO['site_title'];?> | 
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |  
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>
	</div>
	<div class="span2 powered_by">
		<?php echo tjcode();?><?php echo runhook('glogal_footer')?>
	</div>
	<br><br>
</div>

<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>