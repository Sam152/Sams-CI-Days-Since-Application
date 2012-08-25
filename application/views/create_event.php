
<div id="create">

	<?=form_open('create'); ?>



		<?=form_input(
			array(
				'name' => 'event_time',
				'placeholder' => 'Date/Time String',
			)
		); ?>

		was the last time 

		<?=form_input(
			array(
				'name' => 'event_time',
				'placeholder' => 'Name of Event',
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