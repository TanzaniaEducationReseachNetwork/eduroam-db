<div class="help">
	<?php load_partial("menu"); ?>
	<?php load_partial("mon_creds_submenu"); ?>
</div>
<div id="moncreds">
	<form action="" method="post" onsubmit="this.addmoncred.disabled=true;">
		<input type="hidden" name="action" value="addmoncred" />
		<label for="username">Username:</label>
			<input type="text" name="username" />
		<label for="password">Password:</label>
			<input type="text" name="password" />
		<label for="mon_realmid">Monitored Realm:</label>
		    <select name="mon_realmid" >
                        <?php
			    foreach($rids as $i => $tid) {
                                echo "<option value=\"$i\" >$tid</option>";
                            }
                        ?>
                    </select>
		<p>
			<input type="submit" name="addmoncred" value="Add">
		</p>
    </form>
</div>