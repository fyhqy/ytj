<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
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
					<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" class=" " data-no-turbolink="true">现在注册</a>，<br>
					 或使用社交帐户快速登入: 
					<a href="/account/auth/weibo" data-no-turbolink="true" class="social-share-button-weibo" rel="nofollow " title="新浪微博帐号登陆"></a>
					<a href="/account/auth/qq" data-no-turbolink="true" class="social-share-button-qq" rel="nofollow " title="QQ 帐号登陆"></a>
					<a href="/account/auth/renren" data-no-turbolink="true" class="social-share-button-renren" rel="nofollow " title="人人网帐号登陆"></a>
				</div>
			</div>
		</div>
		<div class="nav_links row-fluid ">
			<div class="span8">
				<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&siteid=<?php echo $siteid;?>" class="visible-phone phone_login_link" data-no-turbolink="true">登录</a>
				<div class="subnav">
					<ul class="nav nav-pills" data-step="3" data-intro="点击查看分类">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?>
						</a></li>
                    <?php $n++;}unset($n); ?>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php echo runhook('glogal_menu')?>
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">更多<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/explore">主题分类</a></li>
							<li><a href="/krweekly">氪周刊</a></li>
							<li><a href="/krmonthly">氪月报</a></li>
							<li><a href="/tag/36氪开放日">36氪开放日</a></li>
							<li><a href="/weixin">微信导航•创业版</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="span4">
				<form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
					<input type="hidden" name="m" value="search"/>
					<input type="hidden" name="c" value="index"/>
					<input type="hidden" name="a" value="init"/>
					<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
					<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
					<div class="row-fluid hidden-phone">
						<div class="input-append ">
							<button class="btn btn-primary span2 pull-right" style="width:18%"><i class="icon-search"></i></button>
							<input type="text" name="q" id="avnpc-form-searchform-q" class="search-query span10 validate[required]" placeholder="搜索" value="">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="pull-right sep10 span4">
			<div class="cnt sep5">
				<a rel="twipsy" target="_blank" href="/contact-us/?utm_source=index_sidebar" class="pull-right" data-original-title="信息反馈通道">【联系我们】</a><wb:follow-button uid="1750070171" type="red_2" width="136" height="24">
				<div class="WB_widget WB_follow_ex" style="width: 136px; height: 24px; overflow: hidden;">
					<div class="follow_btn_line" node-type="inner">
						<a class="follow_btn status_followed" node-type="followBtn" target="_blank" title="已关注" href="http://weibo.com/u/1750070171"><cite class="follow_btn_inner"><u class="WB_ico_logo"></u><cite class="follow_text">新动态</cite></cite></a><cite class="follow_data"><a title="52.4万 粉丝" target="_blank" href="http://weibo.com/wow36kr" class="data_link">52.4万</a><cite class="data_arrow"></cite></cite>
					</div>
				</div>
				</wb:follow-button>
			</div>
		</div>
		<h2 class="sep5">编辑推荐</h2>
		<div class="row-fluid">
			<div class="span8">
				<div class="row-fluid feature_topics">
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79d92623a8337007f1f3bcdd35d5f304&action=position&posid=2&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?>
    	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div class="view_208220 span4 feature_img">
						<a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],210,130);?>" alt="<?php echo $r['title'];?>" width="210"></a>
						<div class="sep5">
							<h4><a href="<?php echo $r['url'];?>" rel="twipsy" data-original-title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
						</div>
					</div>
		  <?php $n++;}unset($n); ?>
  		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="row-fluid k815_posts">
					<div class="span6">
						<ul>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51cbea41279bacdf147ad29d64946551&action=position&posid=2&order=listorder+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'8',));}?>
    	  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    	  <?php if($n <4) { ?> <li> › <a href="<?php echo $r['url'];?>" data-no-turbolink="true" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></li>
        <?php } ?>
         <?php $n++;}unset($n); ?>
  		 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
					<div class="span6">
						<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51cbea41279bacdf147ad29d64946551&action=position&posid=2&order=listorder+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'8',));}?>
    	  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    	  <?php if($n >4) { ?>
							<li> › <a href="<?php echo $r['url'];?>" data-no-turbolink="true" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></li>
        <?php } ?>
         <?php $n++;}unset($n); ?>
  		 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
				</div>
				<h2 class="sep10">最新文章</h2>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span8 krContent">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=62391225245206b3a153c62926c58fb0&action=indexlists&where=catid+%21%3D0+AND+status+%21%3D1&order=inputtime+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'indexlists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('where'=>'catid !=0 AND status !=1','order'=>'inputtime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'indexlists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->indexlists(array('where'=>'catid !=0 AND status !=1','order'=>'inputtime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'indexlists',));}?>
    	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="row-fluid blogPost us-startups">
					<div class="left_info pull-left hidden-phone span4">
						<div class="feature_img row-fluid">
							<a href="<?php echo $r['url'];?>"><img alt="A3f46cf9c142225ecfd42d01df447b89" height="200" src="<?php echo thumb($r[thumb],210,130);?>" width="320"></a>
						</div>
					</div>
					<div class="right_info span8 pull-right magb30 sep-5">
						<div class="summary">
							<h4><a href="<?php echo $r['url'];?>" data-no-turbolink="true" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
							<div class="post_meta sep5 muted">
								<a href="/kimi447123410" class="uname user_kimi447123410" data-name="<?php echo $r['username'];?>" target="_blank"><?php echo $r['username'];?></a> • <a href="<?php echo $r['catnameurl'];?>" target="_blank"><?php echo $r['catname'];?></a> • <abbr class="timeago" title="<?php echo date('Y-m-d H:i:s',$r[inputtime]);?>"><?php echo date('y-m-d H:i:s',$r[inputtime]);?></abbr> • <?php echo get_comments(id_encode("content_$r[catid]",$r[id],$siteid));?>条评论
							</div>
							<div class="excerpt sep-5">
								<p>
									<?php echo $r['description'];?>
								</p>
								<div class="post_meta sep-10 muted">
									<a class="pull-right sep-5"></a><a title="点击阅读全文 ( 619 字)" class="pull-right" href="<?php echo $r['url'];?>">继续阅读 <i class="icon-double-angle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php echo $pages;?>
				<div class="row-fluid">
					<div class="span12">
						<div class="pagination" style="display: none;">
							<ul>
								<li class="prev previous_page disabled"><a href="#">← 上一页</a></li>
								<li class="active"><a rel="start" href="/?page=1">1</a></li>
								<li><a rel="next" href="/?page=2">2</a></li>
								<li><a href="/?page=3">3</a></li>
								<li><a href="/?page=4">4</a></li>
								<li><a href="/?page=5">5</a></li>
								<li class="disabled"><a href="#"><span class="gap">…</span></a></li>
								<li><a href="/?page=99">99</a></li>
								<li><a href="/?page=100">100</a></li>
								<li class="next next_page "><a rel="next" href="/?page=2">下一页 →</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="span4 krSide sep10">
				<div class="sep10">
				</div>
				<div class="wxlist clearfix">
					<h6 class="sidebar_title btn-block">赞助商链接</h6>
					<ul>
						<li>
						<div class="pull-right">
							<a target="_blank" ref="nofollow" onclick="javascript:_gaq.push(['_trackPageview', '/click/sponsored-posts_p1/']);" href="http://cnrdn.com/rCaC"><img alt="三星" class="img-rounded" height="60" src="http://a.36krcnd.com/photo/5bc538f431735e72c8ac102c91137ac7.jpg" width="60"></a>
						</div>
						<div>
							<a target="_blank" href="http://cnrdn.com/rCaC" title="点击查看全文">平板电脑功能与技术上的革新</a>
							<div class="muted">
								三星
							</div>
						</div>
						</li>
						<li>
						<div class="pull-right">
							<a target="_blank" ref="nofollow" onclick="javascript:_gaq.push(['_trackPageview', '/click/sponsored-posts_p2/']);" href="http://www.mingdao.com/"><img alt="明道" class="img-rounded" height="60" src="http://a.36krcnd.com/photo/0286c140634bcca2af0a6378e94a454e.jpg" width="60"></a>
						</div>
						<div>
							<a target="_blank" href="http://cnrdn.com/ZEd6" title="中小型创业公司有必要上企业社会化协作软件吗？">中小型创业公司有必要上企业社会化协作软件吗？</a>
							<div class="muted">
								明道
							</div>
						</div>
						</li>
						<li>
						<div class="pull-right">
							<a target="_blank" ref="nofollow" onclick="javascript:_gaq.push(['_trackPageview', '/click/sponsored-posts_p3/']);" href="http://www.umeng.com/"><img alt="友盟" class="img-rounded" height="60" src="http://a.36krcnd.com/photo/9908e5e35a419807d99d952de1c7a254.jpg" width="60"></a>
						</div>
						<div>
							<a target="_blank" href="http://cnrdn.com/rEd6" title="统计分析，能为移动开发者带来哪些好处？">统计分析，能为移动开发者带来哪些好处？</a>
							<div class="muted">
								友盟
							</div>
						</div>
						</li>
					</ul>
				</div>
				<div class="cnt magb10">
					<!-- ad 280 -->
					<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=3"></script>
				</div>
				<div class="recent_nodes nodes clearfix tags">
					<h6 class="sidebar_title btn-block">热门便签</h6>
					<ul class="unstyled">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f7ab544393d4fcf95c87038655fa9a34&action=gettags&posid=2&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'gettags')) {$data = $content_tag->gettags(array('posid'=>'2','order'=>'listorder DESC','limit'=>'20',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&a=lists&tag=<?php echo urlencode($r['keyword']);?>" title="<?php echo $r['keyword'];?>"><?php echo $r['keyword'];?></a></li>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</div>
				<div class="high_likes_replys">
					<h6 class="btn-block sidebar_title">优质评论</h6>
					<ul class="aside-menu">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=9eeaba0a57bcf88c1b4779f4dc232d7a&action=bang&siteid=%24siteid&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('siteid'=>$siteid,)).'9eeaba0a57bcf88c1b4779f4dc232d7a');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('siteid'=>$siteid,'limit'=>'20',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li class="active">
						<img alt="<?php if($r[userid]) { ?><?php echo get_nickname($r[userid]);?><?php } else { ?><?php echo $r['username'];?><?php } ?> " class="uface img-rounded" src="<?php echo get_memberavatar($r[userid]);?>" style="width:48px;height:48px;">
						<span class="commentor"><a href="javascript:void(0);" class="uname user_1942995105" data-name="<?php if($r[userid]) { ?><?php echo get_nickname($r[userid]);?><?php } else { ?><?php echo $r['username'];?><?php } ?> " target="_blank"><?php echo $r['username'];?></a></span>
						<a rel="twipsy" target="_blank" href="javascript:void(0);" class="right cmt" data-original-title="评论于：<?php echo str_cut($r[title], 40);?>"><?php echo $r['content'];?> </a>
						</li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</div>
				<div class="cnt sep20">
					<!--ad 280 2 -->
					<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=4"></script>
				</div>
				<h6 class="sidebar_title sep10">友情链接</h6>
				<ul class="unstyled lins">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=80574ec69aa2a6c10ed30f7c49e0eda7&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
				<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
				<li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" /></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
				<h6 class="sidebar_title sep10 clear">合作伙伴<small>（合作联系 tips+srv#36kr.com）</small></h6>
				<div class="pull-right powered_by">
					<a ref="nofollow" class="pull-right" href="https://www.dnspod.cn/Event/Year2013?from=36Kr" title="DNSPod-免费智能DNS解析服务商" target="_blank"><img width="102" height="32" alt="DNSPod-免费智能DNS解析服务商" src="http://a.36krcnd.com/photo/40e8bc121ff06a1a6b71918a38f9e2f0.png" style="width: 102; height: 32px;" title="DNSPod-免费智能DNS解析服务商"></a><a ref="nofollow" class="pull-right" target="_blank" title="腾讯云" href="http://yun.qq.com/"><img width="102" height="32" title="腾讯云" style="width: 102; height: 32px;" src="http://a.36krcnd.com/photo/63c936620249797e96a4ff00beab1b46.png" alt="腾讯云"></a><a ref="nofollow" class="pull-right sep10" target="_blank" title="青云" href="http://www.qingcloud.com/"><img width="102" height="32" title="青云" style="width: 100; height: 30px;" src="http://a.36krcnd.com/photo/1d5b021c0372def9158bcdb3eda3572e.gif" alt="青云"></a><a ref="nofollow" class="pull-right powered_by_grancloud sep10" target="_blank" title="盛大云计算" href="http://www.grandcloud.cn/"><img width="102" height="32" title="盛大云计算" style="width: 102; height: 32px;" src="http://a.36krcnd.com/photo/4438fe10f75466abe2929aeaf5ee6d77.gif" alt="盛大云计算"></a>
					<a ref="nofollow" class="pull-right sep15" href="https://www.upyun.com/?md=36kr" title="图片存储由又拍云提供" target="_blank"><img width="160" height="35" alt="图片存储由又拍云提供" src="http://a.36krcnd.com/photo/15da33fd5db0a461cc4ca122fd5f89e1.jpg" style="width: 160; height: 35px;" title="图片存储由又拍云提供"></a>
				</div>
			</div>
		</div>
  <?php include template("content","footer"); ?>
	</div>
	<!--left-->
	<div class="row-fluid">
<?php include template("member","menu"); ?>
	</div>
	</section>
</div>