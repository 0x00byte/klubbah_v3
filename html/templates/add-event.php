<h1>Create Event</h1>
<form action="create_event.php" method="post" class="ams-form" enctype="multipart/form-data">
	<fieldset>
		<p><b>Event Name:</b> <input type="text" name="event_name" size="20" maxlength="20" value="<?php if (isset($trimmed['event_name'])) echo $trimmed['event_name']; ?>" autofocus required></p>
		<p><b>Event Desc:</b> <input type="text" name="event_desc" size="100" value="<?php if (isset($trimmed['event_desc'])) echo $trimmed['event_desc']; ?>" /></p>
		<p><b>Event Date:</b> <input type="datetime" name="event_date" size="30" maxlength="60" value="<?php if (isset($trimmed['event_date'])) echo $trimmed['event_date']; ?>" required> </p>
		<p><b>Venue:</b> <input type="password" name="venue" size="20" maxlength="20" value="<?php if (isset($trimmed['venue'])) echo $trimmed['venue']; ?>" /></p>
		<p><b>Image:</b><input type="file" name="event_image" /></p>
	</fieldset>
	<div align="center"><input type="submit" name="submit" value="Register" /></div>
</form>