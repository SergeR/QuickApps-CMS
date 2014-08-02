<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 2.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->Html->meta('icon'); ?>
		<?php echo $this->Html->charset(); ?>
		<?php echo $this->fetch('meta'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $this->fetch('title'); ?></title>
		<?php echo $this->fetch('css'); ?>
		<?php echo $this->fetch('script'); ?>
		<?php echo $this->Html->css('bootstrap.min.css'); ?>
		<?php echo $this->Html->css('bootstrap-theme.min.css'); ?>
		<?php echo $this->Html->script('bootstrap.min.js'); ?>
		<style>
			body { padding-top: 100px; }
			.message article.comment { margin-left: 35px; }
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only"><?php echo __d('back_bootstrap', 'Toggle navigation'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">QuickApps CMS</a>
				</div>
				<div class="collapse navbar-collapse">
					<?php
						echo $this->Menu->render(
							\Cake\ORM\TableRegistry::get('Menu.MenuLinks')
								->find('threaded')
								->where(['menu_slug' => 'management'])
								->order(['lft' => 'ASC']),
							['class' => 'nav navbar-nav']
						);
					?>
				</div>
			</div>
		</nav>

		<div class="container">
			<?php echo $this->Breadcrumb->renderIfNotEmpty(); ?>
			<?php echo $this->alerts(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</body>
</html>