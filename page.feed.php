<?php 
/**
* 博友文章聚合
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
  <body>
        <div class="content index width mx-auto px3 my4">
            <header id="header">
                <a href="<?php $this->options->siteUrl();?>">
                     <div id="logo" style="background-image: url(<?php if($this->options->logoimg): ?><?php $this->options->logoimg();?><?php else : ?><?php $this->options->themeUrl('images/logo.png'); ?><?php endif; ?>);"></div>
                    <div id="title">
                        <h1 style="color:#2bbc8a;margin:1rem;font-size:36px;line-height:42px;"><?php $this->title() ?></h1>
                    </div>
                </a>
                <div id="nav">
                 <ul style ="padding-inline-start:0px;">
                    <li class="icon"><a href="#"><i class="fa fa-bars fa-2x"></i></a></li>
                    <li style ="padding:0px;margin:0px;"><b><a href="<?php $this->options->siteUrl();?>">首页</a></b></li>
                    <li style ="padding:0 0 0 5px;margin:0px;"><b><a href="<?php $this->options->siteUrl();?>music/" target="_blank" title="网易云音乐">音乐</a></b></li>
                    <?php $this->widget('Widget_Metas_Category_List')->to($categorys);while($categorys->next()):?>
                    <li style ="padding:0 0 0 5px;margin:0px;"><b><a href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a></b></li>
                    <?php endwhile;?>                    				
                    <?php $this->widget('Widget_Contents_Page_List')->parse('<li  style ="padding:0 0 0 5px;margin:0px;"><b><a href="{permalink}">{title}</a></b></li>'); ?>
                    <li class="tooltip" data-msg="随机访问一位“十年之约”博友！" style ="padding:0 0 0 5px;margin:0px;"><b><a href="https://foreverblog.cn/go.html" rel="nofollow" target="_blank">虫洞</a></b></li>
                    <li class="tooltip" data-msg="随机访问一位“开往”博友！" style ="padding:0 0 0 5px;margin:0px;"><b><a href="https://www.travellings.cn/go.html" rel="nofollow" target="_blank">开往</a></b></li>                       
                 </ul>
                </div>
            </header>
            <section id="wrapper" class="home">			
                <div id="Links-mian" class="main_element">
                <section class="Links-content">
	                <div class="Total" style="padding-left:10px;"><span class="fa fa-rss 3x"  style="padding-right:10px;"></span> 大佬文章聚合</div>				
                     <?php if ($this->cid == '980') { Typecho_Plugin::factory('Lopwon_Feed')->Lopwon();} ?>						                             
                </section>
				</div>							
<!--内容页下方ads -->	 	 
<?php if($this->options->postdownads): ?><?php $this->options->postdownads();?><?php endif; ?>  															
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">   
                    <div class="content" itemprop="articleBody">
                        <?php parseContent($this); ?>
                    </div>
                </article>							
                 <?php $this->need('comments.php'); ?>
            </section>
		</div>
 <?php $this->need('footer.php'); ?>