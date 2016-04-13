<div id="$Name" class="field<% if $extraClass %> $extraClass<% end_if %>">
	<% if $Title %><label class="left" for="$ID">$Title</label><% end_if %>
	<div class="middleColumn">
		$Field
	</div>
	<% if $RightTitle %><label class="right" for="$ID">$RightTitle</label><% end_if %>
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
