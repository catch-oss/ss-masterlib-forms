<label for="$ID">$Label2</label>
<label class="sublabel" for="$ID">$Label1</label>
<select $AttributesHTML>
<% loop $Options %>
	<option value="$Value.XML"<% if $Selected %> selected="selected"<% end_if %><% if $Disabled %> disabled="disabled"<% end_if %>>$Title.XML</option>
<% end_loop %>
</select>
