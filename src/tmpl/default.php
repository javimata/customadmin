<?php
/**
 * @author Javi Mata http://www.javimata.com
 * @copyright Copyright (c) 2010 - 2018 Javi Mata
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

JHtml::_('bootstrap.tooltip');

$color_icon      = $params->get("color_icon","#565656");
$add_icon        = $params->get("add_icon",1);
$add_title       = $params->get("add_title",1);
$url_fontawesome = $params->get("url_fontawesome","https://use.fontawesome.com/releases/v5.3.1/css/all.css");

$document 	= JFactory::getDocument();
$document->addStyleSheet($url_fontawesome);
$document->addStyleSheet(JURI::base(true).'/modules/'.$mod_name.'/assets/css/style_customadmin.css?'.time());

if ( count($items) > 0 ):
?>
	<div id="icons-wrap" class="clearfix">
	<?php foreach ($items as $item): ?>

		<div class="icon-wrapper">
		
			<div class="icon">
				<a href="<?php echo $item->link; ?>" target="<?php echo $item->target; ?>" title="<?php echo $item->description; ?>" class="hasTooltip" data-original-title="<?php echo $item->description; ?>">
					<?php if ( $add_icon == 1 ): ?>
					<i class='<?php echo $item->icon; ?>'></i><br />
					<?php endif; ?>
					<?php if ( $add_title == 1 ): ?>
					<?php echo $item->title; ?>
					<?php endif; ?>
				</a>
			</div>

		</div>
	<?php endforeach; ?>
	</div>
	<div class="col-copy">
		<div class="col-copy-donate">
			<a href="https://www.paypal.me/javimata" target="_blank"><?php echo JHTML::_('tooltipText', 'MOD_CUSTOMADMIN_DONATE');?> <i class="fab fa-paypal"></i></a>
		</div>
		<div class="col-copy-by">
			<?php echo JHTML::_('tooltipText', 'MOD_CUSTOMADMIN_CREATE');?> <a href="https://www.javimata.com" target="_blank">Javi Mata</a> <i class="fas fa-external-link-alt"></i>
		</div>
	</div>
<?php
endif;