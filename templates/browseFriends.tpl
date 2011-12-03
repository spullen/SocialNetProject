<h2>Browse Friends</h2>
<div id="indicator" style="display: none;"><img src="images/ajax-indicator.gif" border="0" /></div>
<div id="browseFriendList">
    {include file="friendList.tpl"}
</div>
<div class="spacer"></div>
<div class="pagination_links">
{foreach from=$pageNumbers item=pageNumber}
    <a href="javascript: void(0);" onclick="updateFriendList('browseFriendList', 'browseFriends.php', {$uid}, {$pageNumber}); return false;" id="browseFriendList_{$pageNumber}" {if $pageNumber == 1}class="current"{/if}>{$pageNumber}</a> &nbsp;
{/foreach}
<div id="currentPage" style="display: none; margin: 0; padding: 0;" class="1"></div>
</div>