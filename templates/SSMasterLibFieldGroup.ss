<fieldset class="<% if $extraClass %>$extraClass<% else %>fieldgroup<% end_if %><% if $Zebra %> fieldgroup-zebra<% end_if %>" <% if $ID %>id="$ID"<% end_if %>>
	<% loop $FieldList %>
		<div class="fieldgroup-field $FirstLast $EvenOdd">
			$SmallFieldHolder
		</div>
	<% end_loop %>
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
