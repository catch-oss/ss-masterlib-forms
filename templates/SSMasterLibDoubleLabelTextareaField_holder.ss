<div id="$Name" class="<% if $AppendedText || $PrependedText %>input-group<% end_if %> $HolderClasses" $HolderAttributes>

    <label class="label-1" for="$ID">$Label1</label>
    <label class="label-2 sublabel" for="$ID">$Label2</label>

    <% if $PrependedText %>
        <span class="input-group-addon">$PrependedText</span>
    <% end_if %>

    $Field

    <% if $AppendedText %>
        <span class="input-group-addon">$AppendedText</span>
    <% end_if %>

    <% if HelpText %>
        <p class="help-block">$HelpText</p>
    <% end_if %>

    <% if InlineHelpText %>
        <span class="help-inline">$InlineHelpText</span>
    <% end_if %>
</div>
