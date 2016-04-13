        <% if $Options.Count %>
            <div class="">
                <% loop $Options %>
                    <input id="$ID" class="radio" name="$Name" type="radio" value="$Value"<% if $isChecked %> checked<% end_if %><% if $isDisabled %> disabled<% end_if %>>
                    <label class="radio <% if $Top.Inline %>radio--inline<% end_if %>" for="$ID">
                        $Title
                    </label>
                <% end_loop %>
            </div>
        <% else %>
            <li>No options available</li>
        <% end_if %>
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
