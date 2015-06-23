        <% if $Options.Count %>
            <div class="">
                <% loop $Options %>
                    <input id="$ID" class="radio" name="$Name" type="radio" value="$Value"<% if $isChecked %> checked<% end_if %><% if $isDisabled %> disabled<% end_if %> >
                    <label class="radio-btn alt" for="$ID">
                        <span class="check"></span>
                        <strong>$Title</strong>
                        <% if $Top.Subtitle %><span class="sub">$Top.Subtitle</span><% end_if %>
                    </label>
                <% end_loop %>
            </div>
            <% if $Subparagraph %><p>$Subparagraph</p><% end_if %>
        <% else %>
            <li>No options available</li>
        <% end_if %>
