<div id="$Name" class="$HolderClasses" $HolderAttributes>
    <input $AttributesHTML class="$inputClasses">
    <label for="$ID" class="$labelClasses checkbox icon-check2">$Title</label>
    <% if $HelpText %>
    <p class="help-block">$HelpText</p>
    <% end_if %>
    <% if $InlineHelpText %>
    <span class="help-inline">$InlineHelpText</span>
    <% end_if %>
</div>
