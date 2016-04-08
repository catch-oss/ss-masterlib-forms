<div id="$Name" class="<% if $AppendedText || $PrependedText %>input-group<% end_if %> $HolderClasses" $HolderAttributes>
    <% if $Label1%>
        <label class="label-1" for="$ID">$Label1</label>
    <% end_if %>

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

<!-- <div id="$HolderID" class="field<% if $extraClass %> $extraClass<% end_if %>">
	<% if $Title %><label class="left" for="$ID">$Title</label><% end_if %>
	<div class="middleColumn">
		$Field
	</div>
	<% if $RightTitle %><label class="right" for="$ID">$RightTitle</label><% end_if %>
	<% if $Message %><span class="message $MessageType">$Message</span><% end_if %>
	<% if $Description %><span class="description">$Description</span><% end_if %>
</div> -->
