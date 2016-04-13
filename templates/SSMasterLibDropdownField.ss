<select $AttributesHTML<% loop $Options %> <% if $Selected %>data-selected="$Value.XML"<% end_if %><% end_loop %>>
    <% loop $Options %>
        <option value="$Value.XML"<% if $Selected %> selected="selected"<% end_if %><% if $Disabled %> disabled="disabled"<% end_if %>>$Title.XML</option>
    <% end_loop %>
</select>
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
