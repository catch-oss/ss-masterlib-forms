<label class="label-1" for="$ID">$Label1</label>
<label class="label-2 sublabel" for="$ID">$Label2</label>
<select $AttributesHTML
        data-validate-errors-container="#errors-$ID">
    <% loop $Options %>
        <option value="$Value.XML"<% if $Selected %> selected="selected"<% end_if %><% if $Disabled %> disabled="disabled"<% end_if %>>$Title.XML</option>
    <% end_loop %>
</select>
<div id="errors-$ID"></div>
