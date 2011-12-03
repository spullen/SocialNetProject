{include file="header.tpl" title="Search Results"}
<div class="results">
{if $users}
<table>
<tr><td width="100">Name</td><td width="100">Email</td></tr>
{foreach from=$users item=user}
    <tr><td><a href="profile.php?uid={$user->id}">{$user->name}</a></td>
        <td><a href="mailto:{$user->email}">{$user->email}</a></td></tr>
    </br>
{/foreach}
</table>
<br />
{$pages}
{else}
Nobody found! :(
{/if}
</div>
{include file="footer.tpl"}