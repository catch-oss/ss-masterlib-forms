<p class="sub">
	$PrependedText
</p>
<input type="hidden" name="MAX_FILE_SIZE" value="$MaxFileSize" />
<input $AttributesHTML />
<% if $Description %>
	<span class="description help-text">$Description</span>
<% end_if %>
<div id="$ID-errors-container">
	<% if $Message %>
		<ul class="error-list filled">
			<li class="">$Message</li>
		</ul>
	<% end_if %>
</div>
