<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:23
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85762751596bfd9f712723-62388474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd25be5ae6c439365f4d34bbeb9db41e05d05d21a' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/blockuserinfo/nav.tpl',
      1 => 1498952572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85762751596bfd9f712723-62388474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'context' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfd9f78c333_81803832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfd9f78c333_81803832')) {function content_596bfd9f78c333_81803832($_smarty_tpl) {?>
<!-- Block user information module NAV  -->
	<div class="header_userinfo hidden-xs">
			<ul id="header_links" class=" vertical-link header_links_ul toogle_content">
				<?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>
				<li class="first"><a class="link-myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				</a></li>
				<li><a class="link-wishlist wishlist_block" href="<?php echo $_smarty_tpl->tpl_vars['context']->value->link->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a class="link-checkout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				</a></li>
				<li>
				<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
					<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

					</a>
				<?php } else { ?>
					<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

					</a>
				<?php }?>
				</li>
			</ul>
	</div>
	<div class="header_userinfo_mobile visible-xs">
		<div class="top-userinfo">
			<div class=" top-links current">
				<span><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			</div>
			<ul class=" vertical-link header_links_ul toogle_content">
				<?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>
				<li class="first"><a class="link-myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				</a></li>
				<li><a class="link-wishlist wishlist_block" href="<?php echo $_smarty_tpl->tpl_vars['context']->value->link->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a class="link-checkout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				</a></li>
				<li>
				<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
					<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

					</a>
				<?php } else { ?>
					<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

					</a>
				<?php }?>
				</li>
			</ul>
		</div>
	</div>
<!-- /Block usmodule NAV -->
<?php }} ?>
