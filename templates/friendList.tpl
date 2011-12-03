<div id="friendList">
    <ul>
    {foreach from=$friends item=friend}
        <li><a href="profile.php?uid={$friend.id}"><img src="images/icons/user.png" border="0" /> {$friend.name}</a>
    {/foreach}
    </ul>
</div>