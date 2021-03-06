<div class="instructions_add">
<h2>Adding a hashrate notification</h2>

<p>
	<img src="<?php echo htmlspecialchars(url_for('img/help/notifications_full.png')); ?>" class="help_inline">

	As of Openclerk 0.16, you can track changes to your hashrates by configuring <a href="<?php echo htmlspecialchars(url_for('wizard_notifications')); ?>">automated notifications</a>.
</p>

<ol class="steps">
	<li>Log into your <?php echo htmlspecialchars(get_site_config('site_name')); ?> account
		and <a href="<?php echo htmlspecialchars(url_for('wizard_accounts_pools')); ?>">add a mining pool account</a> that supports reporting hashrates.<br>
		<img src="<?php echo htmlspecialchars(url_for('img/help/notifications_hashrates1.png')); ?>"></li>

	<li>Visit your <a href="<?php echo htmlspecialchars(url_for('wizard_notifications')); ?>">notifications wizard</a>.<br>
		<img src="<?php echo htmlspecialchars(url_for('img/help/notifications0.png')); ?>"></li>

	<li>Create and configure a new notification of type "my total hashrate", and click <i>Create Notification</i>.<br>
		<img src="<?php echo htmlspecialchars(url_for('img/help/notifications_hashrates2.png')); ?>"></li>
</ol>
</div>

<p>
	These automated notifications can be sent out once per day (or once per hour if you are
	a <a href="<?php echo htmlspecialchars(url_for('premium')); ?>">premium user</a>), and
	are configured through your <a href="<?php echo htmlspecialchars(url_for('wizard_notifications')); ?>">notifications preferences</a>.
</p>

<div style="clear:both;"></div>