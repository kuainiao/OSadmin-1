<?php /* Smarty version Smarty-3.1.15, created on 2016-12-28 09:19:32
         compiled from "C:\wamp\www\osadmin\include\template\navibar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204615863132478e4f0-92263431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5502994cca6c566a5a9da95a284f8b3b8a40921b' => 
    array (
      0 => 'C:\\wamp\\www\\osadmin\\include\\template\\navibar.tpl',
      1 => 1458323676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204615863132478e4f0-92263431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarStatus' => 0,
    'user_info' => 0,
    'osa_templates' => 0,
    'key' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_586313247bccd0_15395254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586313247bccd0_15395254')) {function content_586313247bccd0_15395254($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sidebarStatus']->value=='yes') {?> 
  <body id="body" class="body">
  <?php } else { ?>
  <body id="body" class="body-fullscreen">
  <?php }?>
  <!--<![endif]-->
<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
					<?php if ($_smarty_tpl->tpl_vars['sidebarStatus']->value=='yes') {?>
						<li class="doSidebarClz"><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">
						关闭侧栏<i class="icon-step-backward"></i>
						</a></li>
					<?php } else { ?>
						<li class="doSidebarClz"><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">
						打开侧栏<i class="icon-step-forward"></i>
						</a></li>
					<?php }?>
					 
					<?php if ($_smarty_tpl->tpl_vars['user_info']->value['setting']) {?>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>设置<i class="icon-caret-down"></i>
						</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @constant('ADMIN_URL');?>
/panel/setting.php">系统设置</a></li>
                        </ul>
                    </li>
					<?php }?>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							
                            选择模板
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
							<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['osa_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li><a href="<?php echo @constant('ADMIN_URL');?>
/panel/set.php?t=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
							<?php } ?>
                        </ul>
                    </li>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_name'];?>

                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo @constant('ADMIN_URL');?>
/panel/profile.php">我的账号</a></li>
                            <li><a tabindex="-1" href="<?php echo @constant('ADMIN_URL');?>
/panel/logout.php">登出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="<?php echo @constant('ADMIN_URL');?>
/panel/index.php"><span class="first"></span> <span class="second"><?php echo @constant('COMPANY_NAME');?>
</span></a>
        </div>
</div><?php }} ?>
