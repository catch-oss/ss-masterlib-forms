
        <% if $Options.Count %>
            <% loop $Options %>
                <div class="<% if $Top.Inline %>inline<% end_if %>">
                  <input id="$ID" class="radio" name="$Name" type="radio" value="$Value"<% if $isChecked %> checked<% end_if %><% if $isDisabled %> disabled<% end_if %>>
                  <label class="radio" for="$ID">
                      $Title
                  </label>
                </div>
            <% end_loop %>
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
