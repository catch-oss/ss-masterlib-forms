<div id="$Name" class="$HolderClasses" $HolderAttributes>
    <input $AttributesHTML class="$inputClasses">
    <% if $Title %>
        <label for="$ID" class="$labelClasses checkbox icon-tick">$Title</label>
    <% end_if %>
    <% if $HelpText %>
    <p class="help-block">$HelpText</p>
    <% end_if %>
    <% if $InlineHelpText %>
    <span class="help-inline">$InlineHelpText</span>
    <% end_if %>
</div>
