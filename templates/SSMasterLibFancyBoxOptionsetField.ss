        <% if $Options.Count %>
            <div class="">
                <% loop $Options %>
                    <input id="$ID"
                           class="radio"
                           name="$Name"
                           type="radio"
                           value="$Value"
                           <% if $isChecked %>checked<% end_if %>
                           <% if $isDisabled %>disabled<% end_if %>
                           data-validate-errors-container="#{$ID}-errors-container">
                    <label class="radio-btn radio-btn--inline alt" for="$ID">
                        <span class="check"></span>
                        <strong>$Title</strong>
                        <% if $Top.Subtitle %><span class="sub">$Top.Subtitle</span><% end_if %>
                    </label>
                <% end_loop %>
            </div>
            <% if $Subparagraph %><p><em class='font-12-fixed'>$Subparagraph</em></p><% end_if %>
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
