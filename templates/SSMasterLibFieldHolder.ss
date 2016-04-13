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
