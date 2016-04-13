<fieldset <% if $Name %>id="$Name"<% end_if %> class="field <% if $extraClass %>$extraClass<% end_if %>">
	<% if $Title %><label class="left">$Title</label><% end_if %>
	<% if $Zebra %>
	<div class="middleColumn fieldgroup fieldgroup-$Zebra">
		<% loop $FieldList %>
			<div class="fieldgroup-field $FirstLast $EvenOdd">
				$SmallFieldHolder
			</div>
		<% end_loop %>
	</div>
	<% else %>
		<% loop $FieldList %>
			$SmallFieldHolder
		<% end_loop %>
	<% end_if %>
	<% if $RightTitle %><label class="right">$RightTitle</label><% end_if %>
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
</fieldset>
