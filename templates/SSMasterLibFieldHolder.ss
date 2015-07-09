<div id="$Name" class="$HolderClasses" $HolderAttributes>
    <% if $Title %>
        <label for="$ID">$Title</label>
    <% end_if %>
    $Field
    <% if $HelpText %>
    <p class="help-block">$HelpText</p>
    <% end_if %>
    <% if $InlineHelpText %>
    <span class="help-inline">$InlineHelpText</span>
    <% end_if %>
</div>
