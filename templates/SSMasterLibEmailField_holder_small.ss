<div class="fieldholder-small">
    <!-- <% if $Title %><label class="fieldholder-small-label" <% if $ID %>for="$ID"<% end_if %>>$Title</label><% end_if %>  -->

	$Field
	
	<% if $RightTitle %><label class="right fieldholder-small-label" <% if $ID %>for="$ID"<% end_if %>>$RightTitle</label><% end_if %>
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
</div>
