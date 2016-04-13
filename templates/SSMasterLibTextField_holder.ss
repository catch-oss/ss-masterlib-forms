<div id="$Name" class="<% if $AppendedText || $PrependedText %>input-group<% end_if %> $HolderClasses" $HolderAttributes>
    <!-- <label for="$ID">$Title</label> -->
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
</div>
