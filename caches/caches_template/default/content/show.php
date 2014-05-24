<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="frontLayer onDesktop">
<section class="row-fluid" id="mainContainer">
<div class="span10 content borBox pull-right">
	<div class="row-fluid phone_banner">
    	<div class="span8 hidden-phone" role="banner">
            <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script>
    	</div>
    	<div class="span4" style="height: 80px;" data-step="8" data-intro="登入36氪，发表评论，收藏文章">
  			<div class="visible-phone phone_logo">
    			<a href="<?php echo siteurl($siteid);?>/"><img alt="<?php echo $seo['title'];?>" src="<?php echo IMG_PATH;?>/logo.jpg" title="36氪"></a>
  			</div>
        	<ul class="user_nav" id="userbar">
        		<li class="first last"><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&siteid=<?php echo $siteid;?>" class="hidden-phone btn btn-danger pull-right" data-no-turbolink="true">登录</a></li>
        	</ul>
  			<div class="social-share-button pull-left hidden-phone">
				<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" class=" " data-no-turbolink="true">现在注册</a>，<br> 或使用社交帐户快速登入: 

				<a href="/account/auth/weibo" data-no-turbolink="true" class="social-share-button-weibo" rel="nofollow " title="新浪微博帐号登陆"></a>
				<a href="/account/auth/qq" data-no-turbolink="true" class="social-share-button-qq" rel="nofollow " title="QQ 帐号登陆"></a>
				<a href="/account/auth/renren" data-no-turbolink="true" class="social-share-button-renren" rel="nofollow " title="人人网帐号登陆"></a>
			</div>
    	</div>
	</div>
	<div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> 正文</div>
	<div id="Article">
        	<h4 class="sep10"><?php echo $title;?></h4>
<span><?php echo $inputtime;?>&nbsp;&nbsp;&nbsp;来源：<?php echo $copyfrom;?>&nbsp;&nbsp;&nbsp;评论：<a href="#comment_iframe" id="comment">0</a> 点击：</span><span id="hits"> <a href="javascript:;" onclick="add_favorite('<?php echo addslashes($title);?>');" class="t6">收藏</a></span>
			
			<div class="content">
			<?php if($allow_visitor==1) { ?>
				<?php echo $content;?>
				<!--内容关联投票-->
				<?php if($voteid) { ?><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=<?php echo $voteid;?>&type=2"></script><?php } ?>
                
			<?php } else { ?>
				<?php if($description) { ?><div class="summary" ><?php echo $description;?></div><?php } ?>
				<CENTER><a href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>"><font color="red">阅读此信息需要您支付 <B><I><?php echo $readpoint;?> <?php if($paytype) { ?>元<?php } else { ?>点<?php } ?></I></B>，点击这里支付</font></a></CENTER>
			<?php } ?>
			</div>
			<div id="pages" class="text-c"><?php echo $pages;?></div>
            <p style="margin-bottom:10px">
            <strong>相关热词搜索：</strong><?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&a=lists&tag=<?php echo urlencode($keyword);?>" class="blue"><?php echo $keyword;?></a> 	<?php $n++;}unset($n); ?>
            </p>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d3146c936b0bbb61d83c4d89437c20&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
              <?php if($data) { ?>
                <div class="related">
                    <h5 class="blue">延伸阅读：</h5>
                    <ul class="list blue lh24 f14">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>·<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a><span>(<?php echo date('Y-m-d',$r[inputtime]);?>)</span></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
              <?php } ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          <?php if($allow_comment && module_exists('comment')) { ?>
      		<iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
      	 <?php } ?>
</div>

<script type="text/javascript">
<!--
	function show_ajax(obj) {
		var keywords = $(obj).text();
		var offset = $(obj).offset();
		var jsonitem = '';
		$.getJSON("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_list&type=keyword&modelid=<?php echo $modelid;?>&id=<?php echo $id;?>&keywords="+encodeURIComponent(keywords),
				function(data){
				var j = 1;
				var string = "<div class='point key-float'><div style='position:relative'><div class='arro'></div>";
				string += "<a href='JavaScript:;' onclick='$(this).parent().parent().remove();' hidefocus='true' class='close'><span>关闭</span></a><div class='contents f12'>";
				if(data!=0) {
				  $.each(data, function(i,item){
					j = i+1;
					jsonitem += "<a href='"+item.url+"' target='_blank'>"+j+"、"+item.title+"</a><BR>";
					
				  });
					string += jsonitem;
				} else {
					string += '没有找到相关的信息！';
				}
					string += "</div><span class='o1'></span><span class='o2'></span><span class='o3'></span><span class='o4'></span></div></div>";		
					$(obj).after(string);
					$('.key-float').mouseover(
						function (){
							$(this).siblings().css({"z-index":0})
							$(this).css({"z-index":1001});
						}
					)
					$(obj).next().css({ "left": +offset.left-100, "top": +offset.top+$(obj).height()+12});
				});
	}

	function add_favorite(title) {
		$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$("#favorite").html('收藏成功');
			} else {
				alert('请登录');
			}
		});
	}

$(function(){
  $('#Article .content img').LoadImage(true, 660, 660,'<?php echo IMG_PATH;?>s_nopic.gif');    
})
//-->
</script>

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
  <?php include template("content","footer"); ?>
	</div>
	<!--left-->
	<div class="row-fluid">
<?php include template("member","menu"); ?>
	</div>
</section>
</div>