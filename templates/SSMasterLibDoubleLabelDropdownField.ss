<% if $Label1 %>
    <label class="label-1" for="$ID">$Label1</label>
<% end_if %>
<% if $Label2 %>
    <label class="label-2 sublabel" for="$ID">$Label2</label>
<% end_if %>
<select $AttributesHTML
    <% loop $Options %>
        <% if $Selected %>data-selected="$Value.XML"<% end_if %>
    <% end_loop %>
        data-validate-errors-container="#errors-$ID">
    <% loop $Options %>
        <option value="$Value.XML"<% if $Selected %> selected="selected"<% end_if %><% if $Disabled %> disabled="disabled"<% end_if %>>$Title.XML</option>
    <% end_loop %>
</select>
<div id="errors-$ID"></div>
