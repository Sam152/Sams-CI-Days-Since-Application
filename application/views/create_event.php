
<div id="create">


	<?=form_open('homepage'); ?>

		<div class="error"><?=form_error('event_name') ?></div>
		<div class="error"><?=form_error('event_time') ?></div>

		<?=form_input(
			array(
				'name' => 'event_time',
				'placeholder' => 'Date/Time String',
				'value' => set_value('event_time'),
			)
		); ?>

		was the last time 

		<?=form_input(
			array(
				'name' => 'event_name',
				'placeholder' => 'Name of Event',
				'value' => set_value('event_name'),
			)
		); ?>

		<?=form_input(
			array(
				'name' => 'submit',
				'type' => 'submit',
				'value' => 'submit',
				'placeholder' => 'Name of Event',
			)
		); ?>

	</form>

</div>